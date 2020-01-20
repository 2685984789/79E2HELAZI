<?php

require_once 'config/ini.conf.php';
require_once 'include/fonction.inc.php';
require_once 'config/bdd.conf.php';
require_once 'config/connexion.conf.php';
require_once('libs/Smarty.class.php');

/* @var $bdd PDO */


//Recherche
if (!empty($_GET['recherche'])) {
    $page_courante = !empty($_GET['p']) ? $_GET['p'] : 1;

    $recherche = $_GET['recherche'];

    $sth = $bdd->prepare("SELECT id, "
            . "titre, "
            . "texte, "
            . "DATE_FORMAT(date, 'Fait le : %d/%m/%Y') AS date_fr, "
            . "publier "
            . "FROM Article "
            . "WHERE publier = :publier "
            . "AND (titre LIKE :recherche OR texte LIKE :recherche)");
    $sth->bindValue(":publier", '1', PDO::PARAM_BOOL);
    $sth->bindValue(':recherche', '%' . $recherche . '%', PDO::PARAM_STR);
    $sth->execute();

    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
}

//Sans recherche
else {

//Supp pagination si recherche
    $recherche = !empty($_GET['recherche']) ? $_GET['recherche'] : 1;

//Pagination
    $page_courante = !empty($_GET['p']) ? $_GET['p'] : 1;

    $nb_total_art = countArt($bdd);

    $index_depart = return_index($page_courante, _nb_article_par_page_);


    $nb_total_page = ceil($nb_total_art / _nb_article_par_page_);


//Requete Affichage article index
    $sth = $bdd->prepare("SELECT id, "
            . "titre, "
            . "texte, "
            . "DATE_FORMAT(date, 'Fait le : %d/%m/%Y') AS date_fr, "
            . "publier "
            . "FROM Article "
            . "WHERE publier = :publier "
            . "LIMIT :index_depart, :nb_article_par_page");
    $sth->bindValue(":publier", 1, PDO::PARAM_BOOL);
    $sth->bindValue(":index_depart", $index_depart, PDO::PARAM_INT);
    $sth->bindValue(":nb_article_par_page", _nb_article_par_page_, PDO::PARAM_INT);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
}


//Limiter nb de mots index
foreach ($result as $key) {
    $compteurmots = strlen($key['texte']);
}



//Pagination
$nb_total_art = countArt($bdd);
$nb_total_page = ceil($nb_total_art / _nb_article_par_page_);

$page_suiv = $page_courante + 1;
$page_prec = $page_courante - 1;


//Smarty
$smarty = new Smarty();

$smarty->setTemplateDir('template/');
$smarty->setCompileDir('templates_c/');



$smarty->assign('result', $result);
$smarty->assign('nb_total_page', $nb_total_page);
$smarty->assign('page_courante', $page_courante);
$smarty->assign('page_suiv', $page_suiv);
$smarty->assign('page_prec', $page_prec);
$smarty->assign('recherche', $recherche);


//Si recherche retourne rien évite erreur
if (!empty($compteurmots)) {
    $smarty->assign('compteurmots', $compteurmots);
}




include_once 'include/header.inc.php';

$smarty->display('index.tpl'); //afficher la page

unset($_SESSION['notification']);


