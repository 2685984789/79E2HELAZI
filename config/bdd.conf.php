<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8','AzStoinou','AzStoinou59');
    $bdd->exec("set names utf8");
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}