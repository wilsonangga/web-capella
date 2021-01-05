<?php
/* Smarty version 3.1.33, created on 2020-12-01 11:34:03
  from 'D:\xampp1\htdocs\NewWeb\smarty version\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fc5c7bb6df320_88432181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9a00e655446b7caaf3e5da5482ebc02f0a1640a' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\NewWeb\\smarty version\\templates\\header.tpl',
      1 => 1606797239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc5c7bb6df320_88432181 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="PT. Capella Medan Daihatsu membantu anda mendapatkan mobil impian dengan memberikan penawaran terbaik dan simulasi kredit yang terbaik. Tersedia beragam mobil seperti New Ayla, Sigra, All New Sirion, Grand New Xenia, All New Terios, Granmax MB, New Luxio dan Granmax Pick Up">
    <meta name="keywords" content="PT Capella Medan, daihatsu sumut, beli mobil medan">
    <?php if ($_smarty_tpl->tpl_vars['destin']->value == "news") {?>
        <meta property="og:url" content="http://www.capelladaihatsu.co.id/?ng=news/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['detail']->value[0]['judul'];?>
" />
        
        <meta property="og:description" content='{$detail[0].isi}' />
        
        <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/news/<?php echo $_smarty_tpl->tpl_vars['detail']->value[0]['gambar'];?>
" />
        <meta property="og:image:width" content="874" />
        <meta property="og:image:height" content="630" />
        <meta property="fb:app_id" content="2469056813411686">
    <?php }?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png"/>
    
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
css/font-awesome.min.css">
    <link rel="stylesheet" href="slick/slick/slick.css">
    <link rel="stylesheet" href="slick/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
css/animate.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
css/style.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
select2/select2.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
select2/select2-bootstrap.css">
   
    <!-- Global site tag (gtag.js) - Google Analytics -->
    
<!-- 
    <?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=UA-131250739-1"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-131250739-1');
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-131250739-1', 'auto');
	ga('send', 'pageview');<?php echo '</script'; ?>
>
 -->
    <!-- Facebook Pixel Code -->
    <!-- <?php echo '<script'; ?>
>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '289512665473930');
        fbq('track', 'PageView');
    <?php echo '</script'; ?>
>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=289512665473930&ev=PageView&noscript=1"
    /></noscript> -->
    <!-- End Facebook Pixel Code -->
    
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
jquery-marquee/jquery.marquee.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
js/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
js/kit-fontawesome.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
jquery-cookie-master/src/jquery.cookie.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
select2/select2.min.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div id="loader" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/loader.gif)"></div>
    <div class="navigation">
        <nav class="navbar navbar-expand-md navbar-light">
            <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/logo/logo_dirumahaja.png" alt="" class="logo-capella" onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
';" style="cursor: pointer;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="font-size: 15px;"><i class="navbar-toggler-icon"></i></button>
            <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
?ng=home" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" id="menuPromo">Promo</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" id="menuProduk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" id="berita">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" id="ttgKami">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" id="menuLokasi">Lokasi Dealer</a>
                    </li>    
                    <li class="nav-item">
                        <a href="http://www.capelladaihatsu.co.id/cm/job/lamar.html" target="_blank" class="nav-link">Karir</a>
                    </li>
                </ul>
                <div style="position: absolute;right: 0;width: 10px;height: 10px;bottom: 0;"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
?ng=masukadmin">&nbsp;</a></div>
            </div>
            <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/daihatsu-logo.png" alt="" class="logo-daihatsu">
        </nav>
        <ul class="marquee">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marquee']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                <li><?php echo $_smarty_tpl->tpl_vars['rows']->value['isi'];?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
    
    <!---->
    <div class="modal fade" id="testdrive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h3 class="text-light">Form Test Drive</h3>
                        <p class="m-0 text-light">Silahkan isi data diri Sahabat untuk Test Drive.</p>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <form name="tdrive" action="tdrive_action.php" target="frame_action1" method="post">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="nama_td" class="bold">Nama Lengkap</label>    
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="nama_td" class="form-control form-control-sm w-100" id="nama_td" placeholder="Nama Lengkap" autofocus required>
                                    <div class="err nama_td"></div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="no_hp" class="bold">Nomor Handphone</label>    
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="no_hp" class="form-control form-control-sm w-100" id="no_hp" placeholder="No. Handphone" required>
                                    <div class="err no_hp"></div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="email_td" class="bold">Email</label>    
                                </div>
                                <div class="col-md-8">
                                    <input type="email" name="email_td" class="form-control form-control-sm w-100" id="email_td" placeholder="Email" required>
                                    <div class="err email_td"></div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="kota_td" class="bold">Kota</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="kota_td" id="kota_td" class="form-control form-control-sm w-100 select2-offscreen" tabindex="-1" title="Kota">
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
                                    <div class="err kota_td"></div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="cabang_td" class="bold">Cabang Terdekat</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="cabang_td" id="cabang_td" class="form-control form-control-sm w-100">
                                        <option value="">-- Pilih Cabang --</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dealer']->value, 'rows');
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
                                    <div class="err cabang_td"></div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="tgl_td" class="bold">Tanggal Test Drive</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="date" name="tgl_td" min="<?php echo $_smarty_tpl->tpl_vars['mintgl']->value;?>
" class="form-control form-control-sm w-100" id="tgl_td" onkeydown="return false" onkeydown="return false" required>
                                    <div class="err tgl_td"></div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="wkt_td" class="bold">Waktu Test Drive</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="wkt_td" id="wkt_td" class="form-control form-control-sm-w-100" required>
                                        <option value="">- Pilih waktu -</option>
                                        <option value="Periode 1">08.00 - 09.00</option>
                                        <option value="Periode 2">09.00 - 10.00</option>
                                        <option value="Periode 3">10.00 - 11.00</option>
                                        <option value="Periode 4" >11.00 - 12.00</option>
                                        <option value="Periode 5">14.00 - 15.00</option>
                                        <option value="Periode 6">15.00 - 16.00</option>
                                    </select>
                                    <div class="err wkt_td"></div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="mobil_td" class="bold">Pilih Mobil</label>    
                                </div>
                                <div class="col-md-8">
                                    <select name="mobil_td" class="form-control form-control-sm w-100" id="mobil_td" required disabled>
                                        <option value="">-- Pilih Mobil --</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['nama'];?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['nama'];?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="err mobil_td"></div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12" id="captcha_refresh_tdrive"><?php echo $_smarty_tpl->tpl_vars['captcha']->value;?>
</div>
                                <div class="err captcha_code_tdrive"></div>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary" onclick="loader_td();">Kirim</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </form>

            <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                    <iframe name="frame_action1" id="frame_action1" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                <?php } else { ?>
                    <iframe name="frame_action1" id="frame_action1" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;" visibility="hidden" scrolling="no" frameborder="0"></iframe>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="modal fade" id="tdriveRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h3 class="text-light">Kode Booking Test Drive</h3>
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
                                <p class="mt-2" id="isi_tdriveRes"></p>
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


    <!---->
    <div class="modal fade" id="nletter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h3 class="text-light">Form Newsletter</h3>
                        <p class="m-0 text-light">Silahkan isi data diri Sahabat untuk berlangganan.</p>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <form name="tdrive" action="nletter_action.php" target="frame_action6" method="post">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="nama_nl" class="bold">Nama Lengkap</label>    
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="nama_nl" class="form-control form-control-sm w-100" id="nama_nl" placeholder="Nama Lengkap" autofocus required>
                                    <div class="err nama_nl"></div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="no_hp_nl" class="bold">Nomor Handphone</label>    
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="no_hp_nl" class="form-control form-control-sm w-100" id="no_hp_nl" placeholder="No. Handphone" required>
                                    <div class="err no_hp_nl"></div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="email_nl" class="bold">Email</label>    
                                </div>
                                <div class="col-md-8">
                                    <input type="email" name="email_nl" class="form-control form-control-sm w-100" id="email_nl" placeholder="Email" required>
                                    <div class="err email_nl"></div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="kota_nl" class="bold">Kota</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="kota_nl" id="kota_nl" class="form-control form-control-sm w-100">
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
                                    <div class="err kota_nl"></div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12" id="captcha_refresh_nletter"><?php echo $_smarty_tpl->tpl_vars['captcha4']->value;?>
</div>
                                <div class="err captcha_code_nletter"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary" onclick="loader_nl();">Kirim</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </form>

            <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                    <iframe name="frame_action6" id="frame_action6" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                <?php } else { ?>
                    <iframe name="frame_action6" id="frame_action6" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;" visibility="hidden" scrolling="no" frameborder="0"></iframe>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="modal fade" id="nletterRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h3 class="text-light">Form Newsletter</h3>
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
                                <p class="mt-2">Terimakasih telah berlangganan newsletter kami.</p>
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
        <div class="modal fade" id="penawaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <div class="modal-title">
                    <h5 class="text-light">Dapatkan Penawaran Terbaik</h5>
                    <p class="m-0 text-light">Silahkan isi data diri Sahabat dan Dapatkan Penawaran Terbaik dari kami.</p>
                </div>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="penawaran_action.php" target="frame_action3" method="post">
                <div class="modal-body">
                    <div class="container">
                        <div class="row mb-2">
                            <div class="col-md-4">
                                <label for="namaPW" class="bold">Nama Lengkap</label>    
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="namaPW" class="form-control form-control-sm w-100" id="namaPW" placeholder="Nama Lengkap" autofocus required>
                                <div class="err namaPW"></div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-4">
                                <label for="no_hpPW" class="bold">Nomor Handphone</label>    
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="no_hpPW" class="form-control form-control-sm w-100" id="no_hpPW" placeholder="No. Handphone" required>
                                <div class="err no_hpPW"></div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-4">
                                <label for="emailPW" class="bold">Email</label>    
                            </div>
                            <div class="col-md-8">
                                <input type="email" name="emailPW" class="form-control form-control-sm w-100" id="emailPW" placeholder="Email" required>
                                <div class="emailPW"></div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-4">
                                <label for="jkPW" class="bold">Jenis Kelamin</label>    
                            </div>
                            <div class="col-md-8">
                                <select name="jkPW" class="form-control form-control-sm w-100" id="jkPW">
                                    <option value="" disabled selected>-- Pilih Jenis Kelamin --</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <div class="err jkPW"></div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-4">
                                <label for="kotaPW" class="bold">Kota</label>
                            </div>
                            <div class="col-md-8">
                                <select name="kotaPW" id="kotaPW" class="form-control form-control-sm w-100">
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
                                <div class="err kotaPW"></div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-4">
                                <label for="cabangPW" class="bold">Cabang Terdekat</label>
                            </div>
                            <div class="col-md-8">
                                <select name="cabangPW" id="cabangPW" class="form-control form-control-sm w-100">
                                    <option value="" disabled selected>-- Pilih Cabang --</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dealer_pw']->value, 'rows');
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
                                <div class="err cabangPW"></div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-4">
                                <label for="mobilPW" class="bold">Pilih Mobil</label>    
                            </div>
                            <div class="col-md-8">
                                <select name="mobilPW" class="form-control form-control-sm w-100" id="mobilPW">
                                    <option value="" disabled selected>-- Pilih Jenis Mobil --</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_pw']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['nama'];?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['nama'];?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                                </select>
                                <div class="err mobilPW"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" id="captcha_refresh_pw">
                                <?php echo $_smarty_tpl->tpl_vars['captcha3']->value;?>

                                <div class="err captcha_code_pw"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" onclick="loaderPW()">Kirim</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
                <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                        <iframe name="frame_action3" id="frame_action3" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                    <?php } else { ?>
                        <iframe name="frame_action3" id="frame_action3" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;" visibility="hidden" scrolling="no" frameborder="0"></iframe>
                    <?php }?>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="pwRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <div class="modal-title">
                    <h3 class="text-light">Penawaran</h3>
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
                            <p>Terimakasih telah menghubungi kami. Anda akan segera dihubungi oleh marketing kami untuk mendapatkan penawaran terbaik.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="submit" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div><?php }
}
