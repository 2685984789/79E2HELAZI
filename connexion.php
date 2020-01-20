<?php

require_once 'config/ini.conf.php';
require_once 'include/fonction.inc.php';
require_once 'config/bdd.conf.php';
require_once 'config/connexion.conf.php';
require_once('libs/Smarty.class.php');


/* @var $bdd PDO */

/*      Connexion   */
if (!empty($_POST['submit'])) {

    $email = $_POST['email'];

    //hash MDP
    $pass = sha1($_POST['pass']);
    
    //requete sql connexion 
    $sth = $bdd->prepare("SELECT * "
            . "FROM utilisateur "
            . "WHERE email = :email AND mdp = :pass ");

    $sth->bindValue(':email', $email, PDO::PARAM_STR);
    $sth->bindValue(':pass', $pass, PDO::PARAM_STR);

    $sth->execute();


    /*       Si identifiants OK change SID et crée cookie    */
    if ($sth->rowCount() > 0) {
        $donnes = $sth->fetch(PDO::FETCH_ASSOC);
        $sid = $donnes['email'] . time();
        $sid_hash = md5($sid);

        setcookie('sid', $sid_hash, time() + 3600);
        $sth_update = $bdd->prepare("UPDATE utilisateur "
                . "SET sid = :sid "
                . "WHERE id = :id");

        $sth_update->bindValue(':sid', $sid_hash, PDO::PARAM_STR);
        $sth_update->bindValue(':id', $donnes['id'], PDO::PARAM_INT);


        $result_connexion = $sth_update->execute();

        //Notif
        if ($result_connexion == TRUE) {
            $_SESSION['notification']['result'] = 'success';
            $_SESSION['notification']['message'] = '<b> Felicitation vous êtes connectés </b>';
        }
        header("Location: index.php");
        exit();
    } else {
        //Notif
        $_SESSION['notification']['result'] = 'danger';
        $_SESSION['notification']['message'] = '<b>Compte incorrecte</b>';
        header("Location: connexion.php");
        exit();
    }
}

//Smarty
$smarty = new Smarty();

$smarty->setTemplateDir('template/');
$smarty->setCompileDir('templates_c/');

include_once 'include/header.inc.php';

$smarty->display('connection.tpl'); //afficher la page
?>

