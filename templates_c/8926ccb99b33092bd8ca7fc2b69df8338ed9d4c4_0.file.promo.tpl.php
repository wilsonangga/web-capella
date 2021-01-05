<?php
/* Smarty version 3.1.33, created on 2020-11-24 11:40:39
  from 'D:\xampp1\htdocs\NewWeb\smarty version\templates\promo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fbc8ec730f7c5_38725740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8926ccb99b33092bd8ca7fc2b69df8338ed9d4c4' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\NewWeb\\smarty version\\templates\\promo.tpl',
      1 => 1606192838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fbc8ec730f7c5_38725740 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if (!empty($_smarty_tpl->tpl_vars['promo']->value[0]['judul'])) {?>
<title><?php echo $_smarty_tpl->tpl_vars['promo']->value[0]['judul'];?>
 | PT. Capella Medan</title>
<div class="container mb-5">
    <p class="text-center wow lightSpeedIn" style="font-weight:bold;font-size:25px;margin-top:10px;margin-bottom:10px;color:#1100fe;">
        <?php echo $_smarty_tpl->tpl_vars['promo']->value[0]['judul'];?>

    </p>
    <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/promo/<?php echo $_smarty_tpl->tpl_vars['promo']->value[0]['gambar'];?>
" alt="" class="w-75 d-block mx-auto wow zoomIn">
<!--
    <div style="font-size:20px;" class="my-2 wow zoomInUp">
        <i class="far fa-calendar-check mr-2"></i>
        <span><?php echo $_smarty_tpl->tpl_vars['promo']->value[0]['tanggal'];?>
</span>
    </div>
-->
   <p class="mt-2"><?php echo $_smarty_tpl->tpl_vars['promo']->value[0]['isi'];?>
</p>
<!--
    <p style="font-family:arial;text-align:justify;font-size:15px;" class="wow fadeInUp">
        
    </p>
-->
    <p class="text-danger mt-2">Berlaku s.d. <?php echo tgl_indo($_smarty_tpl->tpl_vars['promo']->value[0]['expired']);?>
</p>
    <!--<a href="?ng=home">Kembali ke halaman utama</a>-->
    <!--    <div class="row">
        <div class="col-md-12">
            <div class="headerPromo wow zoomIn">
                <div class="bg-dark text-light rounded mb-0">Promo</div>    
            </div>
        </div>
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promo_all']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
        <div class="mb-5">
            <div class="card mb-3">
                <div class="row no-gutters" id="promoList">
                    <div class="col-md-4" style="max-height: 185px;overflow: hidden;">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['rows']->value['gambar'];?>
" class="card-img" alt="<?php echo $_smarty_tpl->tpl_vars['rows']->value['gambar'];?>
">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['rows']->value['judul'];?>
</h5>
                            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['rows']->value['isi'];?>
</p>
                            <p class="card-text"><small class="text-muted">Berlaku s.d. 23 Desember 2019</small></p>
                            <a href="?ng=promo/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
">
                                <button class="btn btn-primary btn-sm">Selengkapnya&raquo;</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>-->
</div>
<?php } else { ?>
    <title>Page Not Found</title>
    <h3><center>Maaf,Halaman Tidak Ditemukan !</center></h3>
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
