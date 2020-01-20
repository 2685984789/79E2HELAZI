<?php

require_once 'config/ini.conf.php';
require_once 'include/fonction.inc.php';
require_once 'config/bdd.conf.php';
require_once 'config/connexion.conf.php';
include_once 'include/header.inc.php';
require_once('libs/Smarty.class.php');


/* @var $bdd PDO */

//Tableau vide
$tableau = array("id" => "", "titre" => "", "texte" => "", "date" => "", "publier" => "");



if (!empty($_COOKIE["sid"])) {//Ajouter article que si utilisateur connecté
//Modification
    if (!empty($_GET['action']) and $_GET['action'] == "modifier") {
        $modifierid = $_GET['id'];
        $sth = $bdd->prepare("SELECT id, "
                . "titre, "
                . "texte, "
                . "date, "
                . "publier "
                . "FROM Article "
                . "WHERE id = :id ");
        $sth->bindValue(":id", $modifierid, PDO::PARAM_BOOL);
        $sth->execute();

        $tableau = $sth->fetch(PDO::FETCH_ASSOC);
    }

//Update la DB si mof article
    if (!empty($_POST['submit']) and $_POST['submit'] == "modifier") {
        $publier = isset($_POST['publier']) ? 1 : 0;
        $id = $_POST['id'];
        $sth = $bdd->prepare("UPDATE Article "
                . "SET titre = :titre, texte = :texte, publier = :publier "
                . "WHERE id = :id ");

        $sth->bindValue(':titre', $_POST['titre'], PDO::PARAM_STR);
        $sth->bindValue(':texte', $_POST['texte'], PDO::PARAM_STR);
        $sth->bindValue(':publier', $publier, PDO::PARAM_BOOL);
        $sth->bindValue(':id', $id, PDO::PARAM_BOOL);
        $sth->execute();

        if ($_FILES['img']['error'] == 0) {
            move_uploaded_file($_FILES['img']['tmp_name'], 'img/' . $_POST['id'] . '.jpg');
        }
        $message = 'Votre article a bien été modifié'; //message page index
        $result = 'info';

        notif($message, $result);
        header("Location: affart.php?id=$id&action=consultation");
    }




//Ajouter article
    if (!empty($_POST['submit']) and $_POST['submit'] == "ajouter") {

        $titre = $_POST['titre'];
        $texte = $_POST['texte'];

        $publier = isset($_POST['publier']) ? 1 : 0; //meme chose que if else ?=if :=else condition ternere 
        $date = date('Y-m-d');

//Requete SQL
        $sth = $bdd->prepare("INSERT INTO Article "
                . "(titre , texte , publier , date) "
                . "VALUES (:titre, :texte, :publier ,:date )");

        $sth->bindValue(':titre', $titre, PDO::PARAM_STR);
        $sth->bindValue(':texte', $texte, PDO::PARAM_STR);
        $sth->bindValue(':publier', $publier, PDO::PARAM_BOOL);
        $sth->bindValue(':date', $date, PDO::PARAM_STR);

        $sth->execute();

        $id_article = $bdd->lastInsertId();

        if ($_FILES['img']['error'] == 0) {
            move_uploaded_file($_FILES['img']['tmp_name'], 'img/' . $id_article . '.jpg');
        }

        /* Notif */
        $message = '<b>Félicitation</b> vote article est ajouté !';
        $result = 'success';

        notif($message, $result);

        header("Location: index.php"); //redirection
        exit();
    }
} else {
    //Si non connecter retourne notif
    $message = 'Veuillez vous connecter';
    $result = 'danger';

    notif($message, $result);
    header("Location: index.php");
}


//Titre dynamique 
if (!empty($_GET['action']) and $_GET['action'] == "modifier") {
    $titreM = "Modifier";
} else {
    $titreM = "Ajouter";
}

//Bouton modifier ou ajouter
$action = $_GET['action'];


//Smarty
$smarty = new Smarty();

$smarty->setTemplateDir('template/');
$smarty->setCompileDir('templates_c/');



$smarty->assign('result', $result);
$smarty->assign('titreM', $titreM);
$smarty->assign('tableau', $tableau);
$smarty->assign('action', $action);


include_once 'include/header.inc.php';

$smarty->display('article.tpl'); //afficher la page
?>

