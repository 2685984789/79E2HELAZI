<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-20 21:29:07
  from '/var/www/html/phpiut/template/header.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e260d937a62b5_59773910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1fcf358cb5232ab5b025941c1de2e0666b72c50' => 
    array (
      0 => '/var/www/html/phpiut/template/header.inc.tpl',
      1 => 1579552146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e260d937a62b5_59773910 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Mon blog</title>
        <!-- Javascript -->
        <?php echo '<script'; ?>
 type="text/javascript" src="include/chainevide.js"><?php echo '</script'; ?>
>
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
            <div class="container">
                <a class="navbar-brand" href="/PhpProject1V2">Blog</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="article.php?action=ajouter">Ajouter article</a>
                        </li>




                    </ul>
                </div>

            </div>
        </nav><?php }
}
