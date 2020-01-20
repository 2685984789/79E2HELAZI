<?php
if (!empty($_COOKIE["sid"])) {
    $sth = $bdd->prepare("SELECT * "
            . "FROM utilisateur "
            . "WHERE sid = :sid ");

    $sth->bindValue(':sid', $_COOKIE["sid"], PDO::PARAM_INT);
    $sth->execute();
    $result = $sth->fetch(PDO::FETCH_ASSOC);

    /* affichage utilisateur */ 
    $util = $result['nom'] . " " . $result['prenom'];
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Mon blog</title>
        <!-- Javascript -->
        <script type="text/javascript" src="include/chainevide.js"></script>
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


                        <!-- Afficher inscription si utilisateur non connecté-->
                        <?php
                        if (!empty($_COOKIE["sid"])) {} else {?>                          
                            <li class="nav-item">
                                <a class="nav-link" href="inscription.php">Inscription</a>
                            </li>
                        <?php } ?>


                        <!-- Afficher connection ou utilisateur connecté-->
                        <?php if (!empty($_COOKIE["sid"])) { ?>
                            <li class = "nav-item">
                                <a class = "nav-link">Connecté en tant que : <font color="red"><?php echo $util; ?></font> </a>
                            </li>
                        <?php } else { ?>
                            <li class = "nav-item">
                                <a class = "nav-link" href = "connexion.php">Connexion</a>
                            </li>
                        <?php } ?>

                        <!-- Afficher déco si utilisateur connecté -->
                        <?php if (!empty($_COOKIE["sid"])) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="deconnexion.php">Déconnexion</a>
                            </li>
                        <?php } ?>


                    </ul>
                </div>

            </div>
        </nav>
