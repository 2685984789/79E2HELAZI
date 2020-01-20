<?php
require_once 'config/ini.conf.php';
require_once 'include/fonction.inc.php';
require_once 'config/bdd.conf.php';
require_once 'config/connexion.conf.php';
require_once('libs/Smarty.class.php');


/* @var $bdd PDO */

if (!empty($_POST['submit'])) {


    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pass = sha1($_POST['pass']);
    $email = $_POST['email'];

    $sth = $bdd->prepare("INSERT INTO utilisateur "
            . "(nom, prenom, mdp, email) "
            . "VALUES (:nom, :prenom, :pass ,:email )");

    $sth->bindValue(':nom', $nom, PDO::PARAM_STR);
    $sth->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $sth->bindValue(':pass', $pass, PDO::PARAM_BOOL);
    $sth->bindValue(':email', $email, PDO::PARAM_STR);

    $sth->execute();

    $id_connexion = $bdd->lastInsertId();

//Notif
    $message = 'Votre compte a été crée'; //message page index
    $result = 'success';

    notif($message, $result);
    header("Location: index.php");
    exit();
}


//Smarty
$smarty = new Smarty();

$smarty->setTemplateDir('template/');
$smarty->setCompileDir('templates_c/');


include_once 'include/header.inc.php';

$smarty->display('inscription.tpl'); //afficher la page


?>