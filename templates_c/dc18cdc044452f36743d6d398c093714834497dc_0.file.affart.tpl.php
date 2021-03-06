<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-09 01:21:32
  from '/var/www/html/phpiut/template/affart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3f508c44e445_61288752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc18cdc044452f36743d6d398c093714834497dc' => 
    array (
      0 => '/var/www/html/phpiut/template/affart.tpl',
      1 => 1581207553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3f508c44e445_61288752 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5"><?php echo $_smarty_tpl->tpl_vars['commen']->value[0]['titre'];?>
</h1>
        </div>
    </div>

    <!--            Notification        -->
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

    <!--            Article        -->
    <div class="container-fluid">
        <div class="text-center">
            <img src="img/<?php echo $_smarty_tpl->tpl_vars['commen']->value[0]['id'];?>
.jpg" alt="" class="img-thumbnail"></div>
    </div>
    </br>

    <div class="row">
        <div class="col-12 text-center">
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['commen']->value[0]['texte'];?>
</p>
        </div>
    </div>  </br>

    
    <div class="row">
        <div class="col-lg-12 text-center">
<!--            Modifier article        -->
            <a href="article.php?id=<?php echo $_smarty_tpl->tpl_vars['commen']->value[0]['id'];?>
&action=modifier" class="btn btn-primary">Modifier article</a>         
            <form action='affart.php' method="POST"></br>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['commen']->value[0]['id'];?>
" name="id_article">   
<!--            Supprimer article        -->                                                        <!-- afficher confirmation-->
                <button type="submit" class="btn btn-danger" name="submit" onclick="return confirm('Voulez-vous vraiment suprimer cette article ?')" value="supprimer">Supprimer article</button>    
            </form>
        </div>
    </div>
    </br>

    <!--            Commentaires        -->
    
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
        <a><font color="#ff0000"><?php echo $_smarty_tpl->tpl_vars['value']->value['pseudo'];?>
</font> <font size="2"><?php echo $_smarty_tpl->tpl_vars['value']->value['date'];?>
  <?php echo $_smarty_tpl->tpl_vars['value']->value['temp'];?>
</font></a></br>
        <a><?php echo $_smarty_tpl->tpl_vars['value']->value['texte_comm'];?>
</a>
        <hr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <!--            Ajout Commentaire        -->
    
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Ajout Commentaire</h1>
        </div>
    </div> </br>

    <form action='affart.php' method="POST" name="comment">
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['commen']->value[0]['id'];?>
" name="id_article">
        <div class="col-lg-5">
            <div class="form-group">
                <input class="form-control" id="pseudo" rows="3" name="pseudo" placeholder="Entrer votre pseudo"></br>
                
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
            </div>
        </div></br>

        <div class="col-lg-9">
            <div class="form-group">
                <textarea class="form-control" id="texte" rows="3" name="texte" placeholder="Entrer votre commentaire"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit" onclick="return champvide()" value="commentaire">Ajouter commentaire</button>
        </div>
    </form></br>
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
