<?php
/* Smarty version 3.1.33, created on 2021-01-05 11:04:02
  from 'D:\xampp1\htdocs\Web Capella\smarty version\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ff3e532296881_44519537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a5ed10c5a73a2e2a0a547bfa002e99554787674' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\Web Capella\\smarty version\\templates\\footer.tpl',
      1 => 1606704662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff3e532296881_44519537 (Smarty_Internal_Template $_smarty_tpl) {
?>    </div>    
    <button onclick="topFunction()" id="myBtn" title="Go to top"></button>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow slideInUp">
                    <div class="judul">Newsletter</div>
                    <div class="isi">Dapatkan update terbaru mengenai informasi produk dan promosi langsung di email anda.</div>
                    <button class="btn btn-primary btn-sm my-2" data-target="#nletter" data-toggle="modal" onclick="emptyErrMod()">Berlangganan</button>                             
                </div>
                                <div class="col-md-6">
                    <div class="font-weight-bold wow slideInUp">IKUTI KAMI DI</div>
                    <a href="https://www.facebook.com/PTCapella-Medan-752944848419405" target="_blank" class="text-decoration-none">
                        <img src="images/logo-facebook.png" alt="" width="30" class="mt-1 mr-2 wow fadeIn"  data-wow-delay="0.3s"onmouseover="hover(this,'images/logo-facebook2.png')" onmouseout="unhover(this,'images/logo-facebook.png')">
                    </a>
                    <a href="https://www.instagram.com/capelladaihatsu_official" target="_blank">
                        <img src="images/logo-instagram.png" alt="" width="30" class="mt-1 wow fadeIn" data-wow-delay="0.3s" onmouseover="hover(this,'images/logo-instagram2.png')" onmouseout="unhover(this,'images/logo-instagram.png')">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center p-3 wow fadeIn">&copy; 2019 PT Capella Medan. All rights reserved</div>
            </div>
        </div>
    </div>
    
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
js/wow.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
slick/slick/slick.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
js/test-drive.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
js/custom.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
