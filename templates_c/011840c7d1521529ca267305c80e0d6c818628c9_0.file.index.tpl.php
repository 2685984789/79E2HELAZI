<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-27 21:00:58
  from '/var/www/html/PhpProject1/template/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e0662fa258987_85807841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '011840c7d1521529ca267305c80e0d6c818628c9' => 
    array (
      0 => '/var/www/html/PhpProject1/template/index.tpl',
      1 => 1577476771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0662fa258987_85807841 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">A Bootstrap 4 Starter Template</h1>
            <p class="lead">Complete with pre-defined file paths and responsive navigation!</p>
        </div>
    </div>

    <form class="form-inline my-2 my-lg-0" method="GET" action="index.php">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="recherche">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form><br>

    <!--NB Page a afficher
    <form method="POST" action="index.php"
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
    </form>
    NB Page a afficher-->

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
                        <a href="#" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['value']->value['date_fr'];?>
</a> 
                        <a href="article.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
&action=modifier" class="btn btn-primary">Modifier</a> 
                    </div>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

    <br>
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
