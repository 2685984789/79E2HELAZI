<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-17 14:41:17
  from '/var/www/html/PhpProject1V2/template/affart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e21b97d40a9d2_18456129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '241c013282e62799bdd2a23f1ba83be7be59ecd5' => 
    array (
      0 => '/var/www/html/PhpProject1V2/template/affart.tpl',
      1 => 1579268476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e21b97d40a9d2_18456129 (Smarty_Internal_Template $_smarty_tpl) {
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
    <form action='affart.php' method="POST">
        <div class="form-group">
            <textarea class="form-control" id="texte" rows="3" name="texte">Texte</textarea>
        </div>
                <div class="form-group">
            <textarea class="form-control" id="texte" rows="3" name="pseudo">Pseudo</textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit" value="ajart">Ajouter article</button>
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
