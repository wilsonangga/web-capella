<?php
/* Smarty version 3.1.33, created on 2020-12-01 14:56:46
  from 'D:\xampp1\htdocs\NewWeb\smarty version\templates\simulasi-kredit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fc5f73e940b46_81364729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d3cea063172fbfd75c36c13a168d13040f0f570' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\NewWeb\\smarty version\\templates\\simulasi-kredit.tpl',
      1 => 1606809273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc5f73e940b46_81364729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="img-hidden wow fadeIn" style="background:url('images/banner-simulasi-kredit.png') no-repeat right top / cover;position:relative;">
    <img src="images/banner-simulasi-kredit.png" alt="" class="w-100" style="visibility:hidden;">    
</div>
<div class="container my-5">
    <div class="row">
        <div class="col-md-12 header_sk">
            <p class="wow fadeInUp text-center text-danger">
                Simulasi Kredit Mobil Daihatsu
            </p>
            <p class="wow fadeInUp text-center">Pilih dan temukan harga mobil Daihatsu impianmu</p>
        </div>
    </div>
    
    <div id="mobil_sk" class="text-center"><img src=""></div>

    <form action="">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="wilayah_sk">Wilayah</label>
                    <select name="wilayah_sk" id="wilayah_sk" class="form-control">
                        <option value="">- Pilih wilayah -</option>
                        <option value="bda">ACEH</option>
                        <option value="smt">SUMUT</option>
                        <option value="sbr">SUMBAR</option>
                        <option value="dri">DURI</option>
                        <option value="pbr">PBR</option>
                    </select>
                    <div class="err wilayah_sk"></div>
                </div>
                <div class="form-group">
                    <label for="tipe_sk">Tipe</label>
                    <select name="tipe_sk" id="tipe_sk" class="form-control">
                        <option value="">- Pilih tipe -</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['nama'];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <div class="err tipe_sk"></div>
                </div>
                <div class="form-group">
                    <label for="variant_sk">Variant</label>
                    <select name="variant_sk" id="variant_sk" class="form-control" disabled>
                        <option value="">- Pilih variant -</option>
                    </select>
                    <div class="err variant_sk"></div>
                </div>
                <div class="form-group">
                    <label for="dp_sk">Down Payment (DP)</label>
                    <select name="dp_sk" id="dp_sk" class="form-control">
                        <option value="">- Pilih DP -</option>
                        <option value="0.15">15%</option>
                        <option value="0.2">20%</option>
                        <option value="0.25">25%</option>
                    </select>
                    <div class="err dp_sk"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tenor_sk">Tenor</label>
                    <select name="tenor_sk" id="tenor_sk" class="form-control">
                        <option value="">- Pilih Tenor -</option>
                        <option value="12">1 tahun</option>
                        <option value="24">2 tahun</option>
                        <option value="36">3 tahun</option>
                        <option value="48">4 tahun</option>
                        <option value="60">5 tahun</option>
                    </select>
                    <div class="err tenor_sk"></div>
                </div>
                <div class="form-group">
                    <label for="harga_sk">Harga</label>
                    <input type="text" name="harga_sk" id="harga_sk" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label for="hasil">Total Bayar Pertama</label>
                    <input type="text" name="hasil" id="hasil" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label for="angsuran">Angsuran</label>
                    <input type="text" name="angsuran" id="angsuran" class="form-control" disabled>
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="form-control bg-primary text-light font-weight-bold w-25 mr-2" id="submit_sk">Hitung</button>
                    <button type="reset" class="form-control bg-danger text-light font-weight-bold w-25" id="reset_sk">Reset</button>
                </div>
            </div>
        </div>
    </form>
        <ul class="m-0 px-2">
            <li>
                <div class="font-weight-bold">Simulasi di atas hanya sebagai perkiraan saja dan tidak mengikat.</div>
            </li>
            <li>
                <div class="font-weight-bold">Untuk tipe Granmax MB, Luxio dan Sirion adalah hitungan ADDM.</div>
            </li>
            <li>
                <div class="font-weight-bold">Selain tipe mobil yang dituliskan di atas, hitungannya adalah ADDB.</div>
            </li>
        </ul>
            
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
js/simulasi-kredit.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
