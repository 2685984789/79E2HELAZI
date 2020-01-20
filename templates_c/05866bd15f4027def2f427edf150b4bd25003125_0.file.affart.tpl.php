<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-18 10:52:18
  from '/var/www/html/template/affart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e22d5526f8963_46945336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05866bd15f4027def2f427edf150b4bd25003125' => 
    array (
      0 => '/var/www/html/template/affart.tpl',
      1 => 1579290127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e22d5526f8963_46945336 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5"><?php echo $_smarty_tpl->tpl_vars['tableau']->value['titre'];?>
</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-5">
            <img src="img/<?php echo $_smarty_tpl->tpl_vars['tableau']->value['id'];?>
.jpg" alt="..." class="img-thumbnail">
        </div>
    </div>  

    </br>
    <div class="row">
        <div class="col-12 text-center">
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['tableau']->value['texte'];?>
</p>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12 text-center">
            <a href="article.php?id=<?php echo $_smarty_tpl->tpl_vars['tableau']->value['id'];?>
&action=modifier" class="btn btn-primary">Modifier</a>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Commentaire</h1>
        </div>
    </div> 
<hr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commen']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
        <a><?php echo $_smarty_tpl->tpl_vars['value']->value['pseudo'];?>
 Le <?php echo $_smarty_tpl->tpl_vars['value']->value['date'];?>
 à <?php echo $_smarty_tpl->tpl_vars['value']->value['temp'];?>
</a>
        <hr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Ajout Commentaire</h1>
        </div>
    </div> 

    <form action='affart.php' method="POST">
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tableau']->value['id'];?>
" name="id_article">
        <div class="col-lg-5">
            <div class="form-group">
                <input class="form-control" id="pseudo" rows="3" name="pseudo" placeholder="Entrer votre pseudo">
            </div>
        </div>

        <div class="col-lg-5">
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" required>
        </div></br>

        <div class="col-lg-9">
            <div class="form-group">
                <textarea class="form-control" id="texte" rows="3" name="texte" placeholder="Entrer votre commentaire"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit" value="commentaire">Ajouter article</button>
        </div>
    </form>

</div>    

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
