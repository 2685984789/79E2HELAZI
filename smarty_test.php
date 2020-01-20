
<?php
require_once 'config/ini.conf.php';
require_once('libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('template/');
$smarty->setCompileDir('templates_c/');
//$smarty->setConfigDir('/web/www.example.com/guestbook/configs/');
//$smarty->setCacheDir('/web/www.example.com/guestbook/cache/');

$prenom='Antoine';

$smarty->assign('prenom',$prenom);//pas de $ 

//** un-comment the following line to show the debug console
//$smarty->debugging = true;

$smarty->display('smarty_test.tpl');

?>