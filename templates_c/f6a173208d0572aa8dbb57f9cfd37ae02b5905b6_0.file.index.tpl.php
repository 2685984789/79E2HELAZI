<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-18 10:55:58
  from '/var/www/html/vpsPHP/template/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e22d62e959fa4_39570814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6a173208d0572aa8dbb57f9cfd37ae02b5905b6' => 
    array (
      0 => '/var/www/html/vpsPHP/template/index.tpl',
      1 => 1579283905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e22d62e959fa4_39570814 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Accueil blog</h1>
        </div>
    </div>

    <form class="form-inline my-2 my-lg-0" method="GET" action="index.php">
        <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search" name="recherche">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
    </form><br>

<!--NB d'article a afficher 
    <form method="POST" action="index.php">
          <div class="row">
            <label for="exampleFormControlSelect1">Nombre d'articles à afficher</label>
            <div class="col-1">
                <div class="form-group">
                    <select class="form-control" id="nbarticle" name="nbarticle">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <button type="submit" class="btn btn-primary" name="submit" value="ajouter">Valider</button>
                </div>
            </div>
    </form>-->


    <?php if (isset($_SESSION['notification'])) {?><!--Superglobal $_session-->

        <div class="row">
            <div class="col-12">
                <div class="alert alert-<?php echo $_SESSION['notification']['result'];?>
" role="alert">
                    <?php echo $_SESSION['notification']['message'];?>


                </div>
            </div>
        </div>
    <?php }?>
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
            <div class="col-6">
                <div class="card" style="width: 100%;">
                    <img src="img/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
.jpg" class="card-img-top" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['titre'];?>
">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['value']->value['titre'];?>
</h5>
                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['value']->value['texte'];?>
</p>
                        <a href="affart.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
&action=consultation" class="btn btn-primary">Voir article</a>
                        <a href="article.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
&action=modifier" class="btn btn-primary">Modifier</a>
                        <a><?php echo $_smarty_tpl->tpl_vars['value']->value['date_fr'];?>
</a> 
                    </div>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

    <br>
    <?php if ($_smarty_tpl->tpl_vars['recherche']->value == 1) {?>
    <nav>
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="?p=<?php echo $_smarty_tpl->tpl_vars['page_prec']->value;?>
" tabindex="-1" >Précedent</a>
            </li>

            <?php
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['index']->step = 1;$_smarty_tpl->tpl_vars['index']->total = (int) ceil(($_smarty_tpl->tpl_vars['index']->step > 0 ? $_smarty_tpl->tpl_vars['nb_total_page']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nb_total_page']->value)+1)/abs($_smarty_tpl->tpl_vars['index']->step));
if ($_smarty_tpl->tpl_vars['index']->total > 0) {
for ($_smarty_tpl->tpl_vars['index']->value = 1, $_smarty_tpl->tpl_vars['index']->iteration = 1;$_smarty_tpl->tpl_vars['index']->iteration <= $_smarty_tpl->tpl_vars['index']->total;$_smarty_tpl->tpl_vars['index']->value += $_smarty_tpl->tpl_vars['index']->step, $_smarty_tpl->tpl_vars['index']->iteration++) {
$_smarty_tpl->tpl_vars['index']->first = $_smarty_tpl->tpl_vars['index']->iteration === 1;$_smarty_tpl->tpl_vars['index']->last = $_smarty_tpl->tpl_vars['index']->iteration === $_smarty_tpl->tpl_vars['index']->total;?>
                <li class="page-item <?php if ($_smarty_tpl->tpl_vars['page_courante']->value == $_smarty_tpl->tpl_vars['index']->value) {?>active<?php }?>"><a class="page-link" href="?p=<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</a></li>
                <?php }
}
?>

            <a class="page-link" href="?p=<?php echo $_smarty_tpl->tpl_vars['page_suiv']->value;?>
">Suivant </a>
            </li>
        </ul>
    </nav>
    <?php }?>
    
        


    <!-- Bootstrap core JavaScript -->
    <?php echo '<script'; ?>
 src="vendor/jquery/jquery.slim.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

</body>

</html>



<?php }
}
