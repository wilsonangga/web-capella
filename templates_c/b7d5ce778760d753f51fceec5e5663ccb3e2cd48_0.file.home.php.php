<?php
/* Smarty version 3.1.33, created on 2019-10-01 10:29:41
  from 'D:\xampp1\htdocs\NewWeb\smarty version\home.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d930e75dd50b0_47725476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7d5ce778760d753f51fceec5e5663ccb3e2cd48' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\NewWeb\\smarty version\\home.php',
      1 => 1569918016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d930e75dd50b0_47725476 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
    ';?>require 'Smarty/libs/Smarty.class.php';
    $smarty = new Smarty;
    $data = query("SELECT * FROM product");
    $smarty -> assign("data",$data);
    $smarty -> display("home.tpl");
<?php echo '?>';
}
}
