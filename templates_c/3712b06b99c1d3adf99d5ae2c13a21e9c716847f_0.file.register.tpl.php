<?php
/* Smarty version 3.1.33, created on 2020-11-23 15:42:09
  from 'D:\xampp1\htdocs\NewWeb\smarty version\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fbb75e1047d45_68963384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3712b06b99c1d3adf99d5ae2c13a21e9c716847f' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\NewWeb\\smarty version\\templates\\register.tpl',
      1 => 1606120772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbb75e1047d45_68963384 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PT. Capella Medan - Admin Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png"/>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">
                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/logo/logo_capela_medan.png" alt="" class="w-100">
            </div>
            <div class="card-body">
                <form method="post" action="register.php" target="frame_action">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                            <label for="inputEmail">Email address</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required="required">
                            <label for="inputPassword">Password</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" name="inputPassword2" id="inputPassword2" class="form-control" placeholder="Confirm Password" required="required">
                            <label for="inputPassword2">Confirm Password</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" name="inputToken" id="inputToken" class="form-control" placeholder="Token" required="required">
                            <label for="inputToken">Token</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="register">Register</button>
                </form>
          </div>
        </div>
    </div>
    <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
        <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
            <iframe name="frame_action" id="frame_action" src="kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;background:white;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
        <?php } else { ?>
            <iframe name="frame_action" id="frame_action" src="kosong.php" width="100%" height="10" style="overflow:hidden;" visibility="hidden" scrolling="no" frameborder="0"></iframe>
        <?php }?>
  <!-- Bootstrap core JavaScript-->
  <?php echo '<script'; ?>
 src="vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

  <!-- Core plugin JavaScript-->
  <?php echo '<script'; ?>
 src="vendor/jquery-easing/jquery.easing.min.js"><?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
