<?php
require_once 'config/ini.conf.php';
require_once 'include/fonction.inc.php';
require_once 'config/bdd.conf.php';
require_once 'config/connexion.conf.php';
require_once('libs/Smarty.class.php');


//Afficher article 
$voirid = $_GET['id'];
$sth = $bdd->prepare("SELECT id, "
        . "titre, "
        . "texte, "
        . "DATE_FORMAT(date, 'Fait le : %d/%m/%Y') AS date_fr, "
        . "publier "
        . "FROM Article "
        . "WHERE id = :id ");
$sth->bindValue(":id", $voirid, PDO::PARAM_BOOL);
$sth->execute();

$tableau = $sth->fetch(PDO::FETCH_ASSOC);



//Afficher commentaire
$sth2 = $bdd->prepare("SELECT texte, "
        . "pseudo, "
        . "email, "
        . "temp, "
        . "DATE_FORMAT(date, ' Le %d/%m/%Y') as date "
        . "FROM commentaire "
        . "WHERE id_art = :id ");
$sth2->bindValue(":id", $voirid, PDO::PARAM_BOOL);
$sth2->execute();

$commen = $sth2->fetchAll(PDO::FETCH_ASSOC);


//Supprimer article

if (!empty($_POST['submit']) and $_POST['submit'] == "supprimer") {
    if (!empty($_COOKIE["sid"])) {//Pas le droit de supp si non connecter
        $voirid = $_POST['id_article'];
        $sth = $bdd->prepare("DELETE  "
                . "FROM Article "
                . "WHERE id = :id ");
        $sth->bindValue(":id", $voirid, PDO::PARAM_BOOL);
        $sth->execute();

        //notif
        $message = '<b>Félicitation</b> vote article est suprimé !';
        $result = 'success';

        notif($message, $result);

        header("Location: index.php"); //redirection vers article
        exit();
    } else {//notif si non connecter
        
        $id_article = $_POST['id_article'];
  
        $message = 'Veuillez vous connecter';
        $result = 'danger';

        notif($message, $result);

        header("Location: affart.php?id=$id_article&action=consultation"); 
        exit();
    }
}


//Ajouter commentaire
if (!empty($_POST['submit']) and $_POST['submit'] == "commentaire") {

    $texte = ($_POST['texte']);
    $pseudo = ($_POST['pseudo']);
    $id_article = $_POST['id_article'];
    $email = ($_POST['email']);
    $date = date('Y-m-d');
    $temp = date("H:i");

    $sth = $bdd->prepare("INSERT INTO commentaire "
            . "(texte , pseudo, id_art, email, date ,temp) "
            . "VALUES (:texte, :pseudo, :id_art , :email, :date ,:temp)");

    $sth->bindValue(':texte', $texte, PDO::PARAM_STR);
    $sth->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
    $sth->bindValue(':id_art', $id_article, PDO::PARAM_STR);
    $sth->bindValue(':email', $email, PDO::PARAM_STR);
    $sth->bindValue(':date', $date, PDO::PARAM_STR);
    $sth->bindValue(':temp', $temp, PDO::PARAM_STR);


    $sth->execute();

    //notif
    $message = '<b>Félicitation</b> vote commentaire est ajouté !';
    $result = 'success';

    notif($message, $result);

    header("Location: affart.php?id=$id_article&action=consultation"); //redirection vers article
    exit();
}


//Smarty
$smarty = new Smarty();

$smarty->setTemplateDir('template/');
$smarty->setCompileDir('templates_c/');


$smarty->assign('tableau', $tableau);
$smarty->assign('commen', $commen);



include_once 'include/header.inc.php';

$smarty->display('affart.tpl'); //afficher la page

unset($_SESSION['notification']);
?>

