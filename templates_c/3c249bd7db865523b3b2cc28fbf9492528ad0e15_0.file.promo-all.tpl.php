<?php
/* Smarty version 3.1.33, created on 2020-12-03 10:17:44
  from 'D:\xampp1\htdocs\NewWeb\smarty version\templates\promo-all.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fc858d8077a88_21186544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c249bd7db865523b3b2cc28fbf9492528ad0e15' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\NewWeb\\smarty version\\templates\\promo-all.tpl',
      1 => 1605750332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc858d8077a88_21186544 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp1\\htdocs\\NewWeb\\smartyversion\\Smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<title>Promo | PT. Capella Medan</title>
<input type="hidden" value='<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
' id="_url" name="url">
<div class="img-hidden wow fadeIn" style="background:url('images/banner-promo.jpg') no-repeat right top / cover;position:relative;">
    <img src="images/banner-promo.jpg" alt="" class="w-100" style="visibility:hidden;">    
</div>
<div class="container">
    <?php if ($_smarty_tpl->tpl_vars['promo']->value) {?>
                <div class="form-group wow zoomIn">
            <select name="" class="form-control" id="wilayah_promo">
                <option value="All">-- Semua --</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cabang']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['kdcab'];?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['cabang'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <div id="promo-all" class="mb-5">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promo']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                <div class="wow rollIn">
                    <div class="card mb-3">
                        <div class="row no-gutters" id="promoList">
                            <div class="col-md-4" style="max-height: 185px;overflow: hidden;">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/promo/<?php echo $_smarty_tpl->tpl_vars['rows']->value['gambar'];?>
" class="card-img" alt="<?php echo $_smarty_tpl->tpl_vars['rows']->value['gambar'];?>
">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['rows']->value['judul'];?>
</h5>
                                    <p class="card-text"><small class="text-muted">Berlaku s.d. <?php echo tgl_indo($_smarty_tpl->tpl_vars['rows']->value['expired']);?>
</small></p>
                                    <a href="?ng=promo/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
/<?php echo smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['rows']->value['judul'], 'UTF-8'),' ','+');?>
">
                                        <button class="btn btn-primary btn-sm">Selengkapnya</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php } else { ?>
        <div class="row">
            <div class="col-md-12 mb-5 text-center font-5 font-weight-bold">Tidak ada promo untuk saat ini.</div>
        </div>
    <?php }?>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
js/promo-all.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
