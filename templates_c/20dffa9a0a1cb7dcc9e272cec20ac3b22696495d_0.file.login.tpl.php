<?php
/* Smarty version 3.1.33, created on 2020-06-30 15:35:03
  from 'D:\xampp1\htdocs\NewWeb\smarty version\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efaf937e606b2_65149240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20dffa9a0a1cb7dcc9e272cec20ac3b22696495d' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\NewWeb\\smarty version\\templates\\login.tpl',
      1 => 1587528870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efaf937e606b2_65149240 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login | PT. Capella Medan</title>
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png"/>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">
                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/logo/logo_capela_medan.png" alt="" class="w-100">
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                            <label for="inputEmail">Email address</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                            <label for="inputPassword">Password</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" value="remember-me">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
                </form>
            <!--<div class="text-center">
                <a class="d-block small mt-3" href="register.html">Register an Account</a>
                <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
            </div>-->
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

</html><?php }
}
