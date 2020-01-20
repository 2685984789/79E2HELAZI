<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-17 18:35:44
  from '/var/www/html/PHPV5/template/article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e21f070a52039_74289696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd237221a94d1a0793be7541546df07c3ee0fd5fa' => 
    array (
      0 => '/var/www/html/PHPV5/template/article.tpl',
      1 => 1579278480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e21f070a52039_74289696 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5"><?php echo $_smarty_tpl->tpl_vars['titreM']->value;?>
 un article</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="article.php" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tableau']->value['id'];?>
" name="id">
                    <div class="form-group">
                        <label for="titre">Titre</label>
                        <input type="text" class="form-control" id="titre" placeholder="Entrer un titre" name="titre" value="<?php echo $_smarty_tpl->tpl_vars['tableau']->value['titre'];?>
">
                    </div>
                    <div class="form-group">
                        <label for="text">Texte de l'article</label>
                        <textarea class="form-control" id="texte" rows="3" name="texte"><?php echo $_smarty_tpl->tpl_vars['tableau']->value['texte'];?>
</textarea>
                    </div>
                    <div class="form-group">
                        <label for="img">Image</label>
                        <input type="file" class="form-control-file" id="img" name="img">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="publier" name="publier" <?php if ($_smarty_tpl->tpl_vars['tableau']->value['publier'] == 1) {?> checked <?php }?>>
                        <label class="form-check-label" for="publier" >Publier article ?</label>
                    </div>

<?php if (!empty($_smarty_tpl->tpl_vars['action']->value)&$_smarty_tpl->tpl_vars['action']->value == 'modifier') {?> 
                        <button type="submit" class="btn btn-primary" name="submit" value="modifier">Modifier</button>
                    <?php } else { ?>
                        <button type="submit" class="btn btn-primary" name="submit" value="ajouter">Ajouter</button>
                     <?php }?>

                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <?php echo '<script'; ?>
 src="vendor/jquery/jquery.slim.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
