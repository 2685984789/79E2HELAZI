<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-20 21:45:30
  from '/var/www/html/phpiut/template/connection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e26116aaa9813_17694123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4869ac44d1a4a4ec2e4975366f42f6e16cf055ae' => 
    array (
      0 => '/var/www/html/phpiut/template/connection.tpl',
      1 => 1579553038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e26116aaa9813_17694123 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Connexion</h1>
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
    
    <!--            Formulaire connexion        -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="connexion.php" enctype="multipart/form-data">
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
