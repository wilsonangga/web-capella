<?php
/* Smarty version 3.1.33, created on 2021-01-05 11:04:00
  from 'D:\xampp1\htdocs\Web Capella\smarty version\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ff3e5302a85c4_97007349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f51671bbd8f1f91e9ef587f0551201642ed20c5a' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\Web Capella\\smarty version\\templates\\home.tpl',
      1 => 1606983225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ff3e5302a85c4_97007349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp1\\htdocs\\WebCapella\\smartyversion\\Smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'D:\\xampp1\\htdocs\\WebCapella\\smartyversion\\Smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<title>PT. Capella Medan Daihatsu</title>
    <input type="hidden" value="home" id="local">   
    <input type="hidden" value='<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
' id="_url">
    <?php if ($_smarty_tpl->tpl_vars['promo_box']->value) {?>
                <div class="modal fade" id="kotak_promo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['promo_box']->value[0]['judul'];?>
</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/promo/<?php echo $_smarty_tpl->tpl_vars['promo_box']->value[0]['gambar'];?>
" alt="" class="card-img-top ">
                    </div>

                    <div class="modal-footer">
                        <a href="?ng=promo/<?php echo $_smarty_tpl->tpl_vars['promo_box']->value[0]['id'];?>
/<?php echo smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['promo_box']->value[0]['judul'], 'UTF-8'),' ','+');?>
"><button type="button" class="btn btn-primary">Lebih Lanjut</button></a>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>    
    <?php }?>
    
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators" style="z-index:1">
            <?php $_smarty_tpl->_assignInScope('i', 0);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slideshow']->value, 'number');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['number']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="active"></li>
                <?php } else { ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"></li>
                <?php }?>
                <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
        <div class="carousel-inner">
            <?php $_smarty_tpl->_assignInScope('j', 0);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slideshow']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['j']->value == 0) {?>
                    <div class="carousel-item active">
                        <img class="d-block w-100 " src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/slideshow/<?php echo $_smarty_tpl->tpl_vars['row']->value['gambar'];?>
">
                    </div>
                <?php } else { ?>
                    <div class="carousel-item">
                        <img class="d-block w-100 " src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/slideshow/<?php echo $_smarty_tpl->tpl_vars['row']->value['gambar'];?>
">
                    </div>
                <?php }?>
                <?php $_smarty_tpl->_assignInScope('j', $_smarty_tpl->tpl_vars['j']->value+1);?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>    
    
    <div class="container mt-3 mb-2">
                <div class="modal fade" id="contactus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <div class="modal-title">
                            <h3 class="text-light">Contact Us</h3>
                            <p class="m-0 text-light text-justify">
                                Silahkan isi form dibawah, sebagai tanggapan, masukan dan kritik anda kepada kami.
                            </p>
                        </div>
                        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="contact_action.php" method="post" target="frame_action2">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="namaCU" class="bold">Nama</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="namaCU" class="form-control form-control-sm w-100" id="namaCU" placeholder="Nama Lengkap" required autofocus>
                                        <div class="err namaCU"></div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="jkCU" class="bold">Jenis Kelamin</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <select name="jkCU" class="form-control form-control-sm w-100" id="jkCU" required>
                                            <option value="" disabled selected>-- Pilih Jenis Kelamin --</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <div class="err jkCU"></div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="kotaCU" class="bold">Kota</label>   
                                    </div>
                                    <div class="col-md-8">
                                        <select name="kotaCU" class="form-control form-control-sm w-100" id="kotaCU" required>
                                            <option value="">-- Pilih Kota --</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['city']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['name'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                                        </select>
                                        <div class="err kotaCU"></div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="emailCU" class="bold">Email</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="email" name="emailCU" class="form-control form-control-sm w-100" id="emailCU" placeholder="Email" required>
                                        <div class="err emailCU"></div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="no_hpCU" class="bold">Nomor Handphone</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="no_hpCU" class="form-control form-control-sm w-100" id="no_hpCU" placeholder="Nomor Handphone" required>
                                        <div class="err no_hpCU"></div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="pesanCU" class="bold">Pesan</label>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea name="pesanCU" id="pesanCU" class="w-100 form-control form-control-sm" rows="5" placeholder="Pesan....."></textarea>
                                        <div class="err pesanCU"></div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12" id="captcha_refresh_cus">
                                        <?php echo $_smarty_tpl->tpl_vars['captcha2']->value;?>

                                        <div class="err captcha_code_cus"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" onclick="loaderCU()">Kirim</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                    </form>
                    <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                            <iframe name="frame_action2" id="frame_action2" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                        <?php } else { ?>
                            <iframe name="frame_action2" id="frame_action2" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;" visibility="hidden" scrolling="no" frameborder="0"></iframe>
                        <?php }?>
                </div>
            </div>
        </div>
        <div class="modal fade" id="cusRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <div class="modal-title">
                            <h3 class="text-light">Contact Us</h3>
                        </div>
                        <button type="button" class="close text-light" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto w-15">
                                    <p>Terimakasih telah menghubungi kami. Setiap masukan dan kritik dari Sahabat akan membantu kami dalam meningkatkan perlayanan kami. Kepuasan Sahabat adalah prioritas kami.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
        
                <div id="promo_list">
            <div class="row wow rollIn">
                <div class="col-md-12">
                    <div class="headerPromo wow zoomIn">
                        <div class="bg-dark text-light rounded mb-0">Promo</div>    
                    </div>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['promo']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promo']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                    <div class="wow rollIn mb-3">
                        <div class="card">
                            <div class="row no-gutters" class="promoList">
                                <div class="col-md-4" style="max-height: 185px;overflow: hidden;">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/promo/<?php echo $_smarty_tpl->tpl_vars['rows']->value['gambar'];?>
" class="card-img " alt="<?php echo $_smarty_tpl->tpl_vars['rows']->value['gambar'];?>
">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['rows']->value['judul'];?>
</h5>
                                        <p class="card-text"><small class="text-muted">Berlaku s.d. <!--tgl_indo(<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rows']->value['expired'],"%e %B %Y");?>
)--> <?php echo tgl_indo($_smarty_tpl->tpl_vars['rows']->value['expired']);?>
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
                <div class="row mb-5 mt-1">
                    <div class="col-md-12 text-right wow fadeInLeft">
                        <a href="?ng=promo-all">Promo Lainnya &raquo;</a>
                    </div>
                </div>
            <?php } else { ?>
                <div class="row">
                    <div class="col-md-12 mb-5 text-center font-5 font-weight-bold">Tidak ada promo untuk saat ini.</div>
                </div>
            <?php }?>
        </div>
        
                <div id="product_list">
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="headerProduk wow zoomIn">
                        <div class="bg-dark text-light rounded mb-0">Produk</div>    
                    </div>
                </div>
            </div>
            <div class="row mb-3" id="product_sect">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                    <div class="col-lg-3 col-md-4 productList wow fadeInLeft">
                        <div class="card">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/product/<?php echo $_smarty_tpl->tpl_vars['row']->value['nama'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['gambar'];?>
" alt="" class="card-img-top ">
                            <div class="card-body text-center pt-0 pl-2 pr-2 pb-0">
                                <div class="card-title border-bottom border-secondary border-2 mb-0">
                                    <div class="bold text-uppercase" style="font-size:20px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['nama'];?>
</div>
                                </div>
                                <div class="card-text">OTR Sumatera Utara mulai dari :</div>
                                <div class="card-text text-danger font-5 bold">Rp <?php echo number_format($_smarty_tpl->tpl_vars['row']->value['harga'],0,'',".");?>
</div>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
?ng=price-list/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/<?php echo smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['row']->value['nama'], 'UTF-8'),' ','+');?>
" style="margin: 0;">Lihat detail harga</a>
                                <div class="card-text bold text-uppercase text-secondary"><?php echo $_smarty_tpl->tpl_vars['row']->value['seaters'];?>
 Seaters</div>
                                <ul class="text-left">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['color']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                                        <?php if ($_smarty_tpl->tpl_vars['row']->value['id'] == $_smarty_tpl->tpl_vars['rows']->value['product_id']) {?>
                                            <li>
                                                <div style="background-color: <?php echo $_smarty_tpl->tpl_vars['rows']->value['color'];?>
;" title="Warna <?php echo $_smarty_tpl->tpl_vars['row']->value['nama'];?>
" data-toggle="popover" data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['rows']->value['n_color'];?>
" data-html="true" data-trigger="hover">&nbsp;</div>       
                                            </li>
                                        <?php }?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                                <div class="card-text p-2 mb-5">
    <!--                                <a href="index.php?page=product&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">-->
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
?ng=product/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/<?php echo smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['row']->value['nama'], 'UTF-8'),' ','+');?>
">
                                        <button class="btn btn-primary btn-md rounded-5 float-left bold p-0">
                                            <div class="my-0 mx-auto w-65">Lihat Produk</div>
                                        </button>
                                    </a>
                                    <button type="submit" class="btn btn-success btn-md rounded-5 float-left bold p-0 dialog" data-target="#penawaran" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['nama'];?>
" id="getPenawaran" onclick="emptyErrMod();">
                                        <div class="my-0 mx-auto w-65">Dapatkan Penawaran</div>
                                    </button>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
brosur/<?php echo $_smarty_tpl->tpl_vars['row']->value['brosur'];?>
" download>
                                        <button class="btn btn-danger btn-md rounded-5 float-left bold p-0">
                                            <div class="my-0 mx-auto w-65">Download Brosur</div>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> 
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid p-0 wow fadeIn">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-md-6 p-0">
                    <div class="d-flex">
                        <div class="w-50">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/bookingservice.jpg" alt="booking_service" class="w-100" id="booking_service" onmouseover="hover(this,'<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/bookingservice2.jpg')" onmouseout="unhover(this,'<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/bookingservice.jpg')">
                        </div>
                        <div class="w-50">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/testdrive.jpg" alt="test_drive" class="w-100" id="test_drive" onmouseover="hover(this,'<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/testdrive2.jpg')" onmouseout="unhover(this,'<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/testdrive.jpg')">
                        </div>    
                    </div>
                    <div class="d-flex">
                        <div class="w-50">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/contactus.jpg" alt="contact_us" class="w-100" id="contact_us" onmouseover="hover(this,'<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/contactus2.jpg')" onmouseout="unhover(this,'<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/contactus.jpg')">
                        </div>   
                        <div class="w-50">
                            <img src="images/simulasikredit.jpg" alt="simulasi_kredit" class="w-100" id="s_kredit" onmouseover="hover(this,'<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/simulasikredit2.jpg')" onmouseout="unhover(this,'<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/simulasikredit.jpg')">
                        </div>    
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <div class="d-flex h-100">
                        <div class="w-100 content" style="background-color:#274293;">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="container mb-5">
                <div id="news_list">
            <div class="row mb-2 wow slideInUp">
                <div class="col-md-12">
                    <h5 class="berita">BERITA</h5>
                </div>
            </div>
            <div class="row wow fadeIn" id="news_sect">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                <div class="col-md-4 newsList">
                    <div class="card">
                        <div class="newsImg">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/news/<?php echo $_smarty_tpl->tpl_vars['rows']->value['gambar'];?>
" alt="" class="card-img-top ">
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <i class="far fa-calendar-check"></i>
                                <span><?php echo $_smarty_tpl->tpl_vars['rows']->value['tanggal'];?>
</span>
                            </div>
                            <div class="card-title text-uppercase font-weight-bold judul">
                                <?php echo $_smarty_tpl->tpl_vars['rows']->value['judul'];?>

                            </div>
                            <div class="card-text text-secondary isi">
                                <?php echo $_smarty_tpl->tpl_vars['rows']->value['isi'];?>

                            </div>
                            <div class="card-text pt-2 text-right">
                                <a href="?ng=news/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
/<?php echo smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['rows']->value['judul'], 'UTF-8'),' ','+');?>
">
                                    <button class="btn btn-success btn-sm">Selengkapnya &raquo;</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="row mb-3 mt-1">
                <div class="col-md-12 text-right wow fadeInLeft">
                    <a href="?ng=news-all">Berita Lainnya &raquo;</a>
                </div>
            </div>
        </div>

                <div id="aboutus_list">
            <div class="row mb-5">
                <div class="col-md-12">
                    <h5 class="about wow bounceInDown">TENTANG KAMI</h5>
                    <ul class="nav nav-tabs wow bounceInUp" role="tablist">
                        <?php $_smarty_tpl->_assignInScope('k', 1);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['about']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['k']->value == 1) {?>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#menu<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['judul'];?>
</a>
                                </li>
                            <?php } else { ?>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#menu<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['judul'];?>
</a>
                                </li>
                            <?php }?>
                            <?php $_smarty_tpl->_assignInScope('k', $_smarty_tpl->tpl_vars['k']->value+1);?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
            
                    <!-- Tab panes -->
                    <div class="tab-content wow bounceInUp">
                        <?php $_smarty_tpl->_assignInScope('l', 1);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['about']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['l']->value == 1) {?>
                                <div id="menu<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
" class="container tab-pane active about_us"><br>
                                    <h5><?php echo $_smarty_tpl->tpl_vars['rows']->value['subjudul'];?>
</h5>
                                    <?php echo $_smarty_tpl->tpl_vars['rows']->value['isi'];?>

                                </div>
                            <?php } else { ?>
                                <div id="menu<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
" class="container tab-pane about_us"><br>
                                    <h5><?php echo $_smarty_tpl->tpl_vars['rows']->value['subjudul'];?>
</h5>
                                    <?php echo $_smarty_tpl->tpl_vars['rows']->value['isi'];?>

                                </div>
                            <?php }?>
                            <?php $_smarty_tpl->_assignInScope('l', $_smarty_tpl->tpl_vars['l']->value+1);?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div> 
        </div>

                <div id="dealer_list">
            <div class="row">
                <div class="col-md-12">
                    <div class="headerLokasi wow fadeInLeft">
                        <div class="bg-dark text-light rounded mb-0">Lokasi Dealer</div>    
                    </div>
                </div>
            </div>
           
                        <div class="modal fade" id="maps_dealer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <div class="modal-title">
                                <h5 class="text-light">Lokasi Dealer</h5>
                            </div>
                            <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <iframe src="" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" id="maps"></iframe>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        
                        <div class="modal fade" id="info_dealer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-primary pb-2">
                            <div class="modal-title">
                                <h5 class="text-light">Informasi Dealer</h5>
                            </div>
                            <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="info_content">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="sectionLokasi">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dealer']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                    <div class="col-lg-4 col-md-6 overflow-hidden">
                        <table class="dealer wow">
                            <thead>
                                <tr>
                                    <td class="text-uppercase" colspan="2"><?php echo $_smarty_tpl->tpl_vars['rows']->value['cabang'];?>
</td>
                                </tr>
                                <tr>
                                    <th colspan="2">PT. CAPELLA MEDAN</th>
                                </tr>    
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        <?php echo $_smarty_tpl->tpl_vars['rows']->value['alamat'];?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>Showroom</td>
                                    <td>: <?php echo $_smarty_tpl->tpl_vars['rows']->value['no_showroom'];?>
</td>
                                </tr>
                                <tr>
                                    <td>Service</td>
                                    <td>: <?php echo $_smarty_tpl->tpl_vars['rows']->value['no_service'];?>
</td>
                                </tr>
                                <tr>
                                    <td>Layanan</td>
                                    <td>: <?php echo $_smarty_tpl->tpl_vars['rows']->value['layanan'];?>
</td>
                                </tr>    
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2">
                                        <button class="btn btn-sm btn-primary mt-2 mb-2" data-target="#dealer" data-id="<?php echo $_smarty_tpl->tpl_vars['rows']->value['maps'];?>
" id="getDealer">Google Map</button>
                                        <button class="btn btn-sm btn-danger mt-2 mb-2" id="getInfo" data-id='<?php echo $_smarty_tpl->tpl_vars['rows']->value['info'];?>
'>Informasi</button>
                                    </td>
                                </tr>                    
                            </tfoot>
                        </table>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
       </div>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
js/jumbotron_ajax.js"><?php echo '</script'; ?>
>        
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
