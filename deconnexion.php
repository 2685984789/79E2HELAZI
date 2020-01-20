<?php
require_once 'config/ini.conf.php';
require_once 'include/fonction.inc.php';


setcookie('sid','',-1);


$message = 'Vous êtes déconecté'; //message page index
$result = 'danger';

notif($message, $result);

header("Location: index.php");
exit();
