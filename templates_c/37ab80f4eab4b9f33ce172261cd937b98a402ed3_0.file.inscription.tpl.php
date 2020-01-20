<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-20 21:34:35
  from '/var/www/html/phpiut/template/inscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e260edb3fdb83_32768078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37ab80f4eab4b9f33ce172261cd937b98a402ed3' => 
    array (
      0 => '/var/www/html/phpiut/template/inscription.tpl',
      1 => 1579552390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e260edb3fdb83_32768078 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Inscription</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="inscription.php" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Nom</label>
                            <input type="text" class="form-control" placeholder="Nom" name="nom" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Prénom</label>
                            <input type="text" class="form-control" placeholder="Prénom" name="prenom" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Mot de passe" name="pass" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit" value="bouton">Valider</button>
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
