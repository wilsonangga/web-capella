<?php
/* Smarty version 3.1.33, created on 2020-12-01 14:58:57
  from 'D:\xampp1\htdocs\NewWeb\smarty version\templates\price-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fc5f7c1e97b51_19732564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '901ca91ee08ad070d0e4a91bcbefdb28d1fb7147' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\NewWeb\\smarty version\\templates\\price-list.tpl',
      1 => 1606809536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc5f7c1e97b51_19732564 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<title>Harga Daihatsu <?php echo $_smarty_tpl->tpl_vars['product']->value[0]['nama'];?>
</title>
<div class="img-hidden wow fadeIn" style="background:url('images/banner-price-list-new.jpg') no-repeat right top / cover;position:relative;">
    <img src="images/banner-price-list-new.jpg" alt="" class="w-100">    
</div>
<div class="container my-3">
    <div class="row">
            <div class="col-md-12 header_pricelist">
                <p class="wow fadeInUp text-center text-danger">Miliki mobil Daihatsu dengan harga terbaik</p>
                <p class="wow fadeInUp text-center">Pilih dan temukan harga mobil Daihatsu impianmu</p>
            </div>
    </div>
    <div class="row my-3">
        <div class="col-md-6">
            <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/product/<?php echo $_smarty_tpl->tpl_vars['product']->value[0]['nama'];?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value[0]['gambar'];?>
" alt="" class="w-100 wow zoomIn">
        </div>
        <div class="col-md-6 wow zoomInRight pricelistDesc">
            <p>Daihatsu <?php echo $_smarty_tpl->tpl_vars['product']->value[0]['nama'];?>
</p>
            <p>Harga Mulai</p>
            <p>Rp <?php echo number_format($_smarty_tpl->tpl_vars['product']->value[0]['harga'],0,'',".");?>
</p>
        </div>
    </div>
    <button type="submit" class="btn btn-success btn-md rounded-5 w-100 dialog" data-target="#penawaran" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value[0]['nama'];?>
" id="getPenawaran" onclick="emptyErrMod();">
        <div class="my-0 mx-auto w-100 bold">Dapatkan Penawaran</div>
    </button>
    <div class="row">
        <div class="col-md-12">
            <p class="wow bounceIn font-5 text-center mt-3 bold">Detail Harga Daihatsu <?php echo $_smarty_tpl->tpl_vars['product']->value[0]['nama'];?>
</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 w-100" style="overflow:auto;">
            <table class="table table-bordered table-hover w-100 wow bounceInUp pricelist">
                <thead class="bg-primary text-light">
                    <tr class="text-center">
                        <th>MODEL</th>
                        <th>VARIANT</th>
                        <th colspan="5">HARGA</th>
                    </tr>
                    <tr class="bg-secondary">
                        <td class="text-uppercase" colspan="2">DAIHATSU     <?php echo $_smarty_tpl->tpl_vars['product']->value[0]['nama'];?>
</td>
                        <th>ACEH</th>
                        <th>SUMUT</th>
                        <th>SUMBAR</th>
                        <th>DURI</th>
                        <th>PEKANBARU</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                        <tr>
                            <td class="text-uppercase"><?php echo $_smarty_tpl->tpl_vars['product']->value[0]['nama'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['rows']->value['tipe'];?>
</td>
                            <td>Rp <?php echo number_format($_smarty_tpl->tpl_vars['rows']->value['bda'],0,'',".");?>
</td>
                            <td>Rp <?php echo number_format($_smarty_tpl->tpl_vars['rows']->value['smt'],0,'',".");?>
</td>
                            <td>Rp <?php echo number_format($_smarty_tpl->tpl_vars['rows']->value['sbr'],0,'',".");?>
</td>
                            <td>Rp <?php echo number_format($_smarty_tpl->tpl_vars['rows']->value['dri'],0,'',".");?>
</td>
                            <td>Rp <?php echo number_format($_smarty_tpl->tpl_vars['rows']->value['pbr'],0,'',".");?>
</td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
            <ul>
                <li class="font-weight-bold">Harga sewaktu-waktu dapat berubah tanpa pemberitahuan terlebih dahulu</li>
            </ul>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
