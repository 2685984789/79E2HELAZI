<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-18 17:51:47
  from '/var/www/html/phpiut/template/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e2337a3032ae2_59674063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6aca86c94a729086d12ef806737cbd37d952387' => 
    array (
      0 => '/var/www/html/phpiut/template/header.tpl',
      1 => 1579366272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2337a3032ae2_59674063 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Bare - Start Bootstrap Template</title>

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
                            <a class="nav-link" href="article.php?action=ajouter">Article</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inscription.php">Inscription</a>
                        </li>

                        <!-- Afficher connection ou utilisateur connecté-->
                        <?php echo '<?php ';?>
if (!empty($_COOKIE["sid"])) { <?php echo '?>';?>

                            <li class = "nav-item">
                                <a class = "nav-link">Connecté en tant que : <font color="red"><?php echo '<?php ';?>
echo $util; <?php echo '?>';?>
</font> </a>
                            </li>
                        <?php echo '<?php ';?>
} else { <?php echo '?>';?>

                            <li class = "nav-item">
                                <a class = "nav-link" href = "connexion.php">Connexion</a>
                            </li>
                        <?php echo '<?php ';?>
} <?php echo '?>';?>


                        <!-- Afficher déco si utilisateur connecté -->
                        <?php echo '<?php ';?>
if (!empty($_COOKIE["sid"])) { <?php echo '?>';?>

                            <li class="nav-item">
                                <a class="nav-link" href="deconnexion.php">Déconnexion</a>
                            </li>
                        <?php echo '<?php ';?>
} <?php echo '?>';?>



                    </ul>
                </div>

            </div>
        </nav><?php }
}
