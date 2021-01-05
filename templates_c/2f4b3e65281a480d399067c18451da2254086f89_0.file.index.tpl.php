<?php
/* Smarty version 3.1.33, created on 2019-10-01 10:29:41
  from 'D:\xampp1\htdocs\NewWeb\smarty version\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d930e75d0cb22_68436443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f4b3e65281a480d399067c18451da2254086f89' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\NewWeb\\smarty version\\templates\\index.tpl',
      1 => 1569918577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home.php' => 1,
    'file:home.tpl' => 1,
  ),
),false)) {
function content_5d930e75d0cb22_68436443 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>PT. Capella Medan Daihatsu</title>
    <link rel="shortcut icon" href="images/capella.png"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="slick/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="slick/slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/btn-top.css">
    <link rel="stylesheet" href="css/style.css">
    <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/kit-fontawesome-a076d05399.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="slick/slick/slick.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/wow.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/btn-top.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>
    <header>
        <img src="images/logo_capela_medan.png" alt="" class="logo-capella">
        <img src="images/daihatsu-logo.png" alt="" class="logo-daihatsu">
    </header> 

        
    
    <div class="navigation">
        <nav class="navbar navbar-expand-md navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><i class="fa fa-reorder"></i></button>
            <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index2.php?page=home" class="nav-link">Beranda</a>
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
                        <a href="index.php?page=contact" class="nav-link">Karir</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    
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
                <form action="action.php" method="post">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row mb-1">
                                <div class="col-md-4">
                                    <label for="nama" class="bold">Nama Lengkap</label>    
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="nama" class="form-control w-100 h-90" id="nama" placeholder="Nama Lengkap" autofocus required>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-md-4">
                                    <label for="no_hp" class="bold">Nomor Handphone</label>    
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="no_hp" class="form-control w-100 h-90" id="no_hp" placeholder="No. Handphone" required>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-md-4">
                                    <label for="email" class="bold">Email</label>    
                                </div>
                                <div class="col-md-8">
                                    <input type="email" name="email" class="form-control w-100 h-90" id="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-md-4">
                                    <label for="kota" class="bold">Kota</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="kota" id="kota" class="form-control w-100 h-90 p-1">
                                        <option value="">-- Pilih Kota --</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-md-4">
                                    <label for="cabang" class="bold">Cabang Terdekat</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="cabang" id="cabang" class="form-control w-100 h-90 p-1">
                                        <option value="">-- Pilih Cabang --</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-md-4">
                                    <label for="tglTstDrv" class="bold">Tanggal Test Drive</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="date" name="tglTstDrv" class="form-control w-100 h-90" id="tglTstDrv" required>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-md-4">
                                    <label for="wktTstDrv" class="bold">Waktu Test Drive</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="time" name="wktTstDrv" class="form-control w-100 h-90" id="wktTstDrv" required>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-md-4">
                                    <label for="mobil" class="bold">Pilih Mobil</label>    
                                </div>
                                <div class="col-md-8">
                                    <select name="mobil" class="form-control w-100 h-90 p-1" id="mobil">
                                        <option value="">-- Pilih Jenis Mobil --</option>
                                        <option value="Ayla">New Ayla</option>
                                        <option value="Sigra">Sigra</option>
                                        <option value="Xenia">Grand New Xenia</option>
                                        <option value="Terios">All New Terios</option>
                                        <option value="GranmaxMB">Granmax MB</option>
                                        <option value="Luxio">New Luxio</option>
                                        <option value="GranmaxPU">Granmax PU</option>
                                        <option value="GranmaxBox">Granmax Box</option>
                                        <option value="GranmaxBV">Granmax BV</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div>
        <?php $_smarty_tpl->_assignInScope('page', $_GET['page']);?>
        <?php if ($_smarty_tpl->tpl_vars['page']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value == 'home') {?>
                <?php $_smarty_tpl->_subTemplateRender("file:home.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("file:home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
        <input type="hidden" value="" id="local">
    </div>    
    <button onclick="topFunction()" id="myBtn" title="Go to top"></button>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow slideInUp">
                    <div class="judul">Newsletter</div>
                    <div class="isi">Dapatkan update terbaru mengenai informasi produk dan promosi langsung di email anda.</div>
                    <form action="" method="post" class="form-inline mt-2 newsletter">
                        <div class="form-group">
                            <input type="email" name="newsletter" class="mr-2">
                            <button class="btn btn-primary">Kirim</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="font-weight-bold wow slideInUp">IKUTI KAMI DI</div>
                    <a href="https://www.facebook.com/PTCapella-Medan-752944848419405" target="_blank" class="text-decoration-none">
                        <img src="images/logo-facebook.png" alt="" width="30" class="mr-2 wow fadeIn"  data-wow-delay="0.3s"onmouseover="hover(this,'images/logo-facebook2.png')" onmouseout="unhover(this,'images/logo-facebook.png')">
                    </a>
                    <a href="https://www.instagram.com/capelladaihatsu_official/?hl=cs" target="_blank">
                        <img src="images/logo-instagram.png" alt="" width="30" class="wow fadeIn" data-wow-delay="0.3s" onmouseover="hover(this,'images/logo-instagram2.png')" onmouseout="unhover(this,'images/logo-instagram.png')">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center p-3 wow fadeIn">&copy; 2019 PT Capella Medan. All rights reserved</div>
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
>
        function hover(element,source) {
            element.setAttribute('src',source);
        }
        function unhover(element,source) {
            element.setAttribute('src', source);
        }
        $('.modal').on('hidden.bs.modal', function(){
            $(this).find('form')[0].reset();
        });
        new WOW().init();
        
        
        $("#menuProduk").click(function(){
            var x = $("#local").val();
            if(x == "home"){
                $('html, body').animate({
                    scrollTop: $(".headerProduk").offset().top-55
                });    
            }
            else{
                localStorage.setItem("animation", "headerProduk")
                window.location.href = "index.php?page=home";  
            }
        });
        $("#berita").click(function(){
            var x = $("#local").val();
            if(x == "home"){
                $('html, body').animate({
                    scrollTop: $(".berita").offset().top-55
                });   
            }
            else{
                localStorage.setItem("animation", "berita")
                window.location.href = "index.php?page=home";  
            }
        });
        $("#ttgKami").click(function(){
            var x = $("#local").val();
            if(x == "home"){
                $('html, body').animate({
                    scrollTop: $(".about").offset().top-55
                });   
            }
            else{
                localStorage.setItem("animation", "about")
                window.location.href = "index.php?page=home";  
            }
        });
        $("#menuLokasi").click(function(){
            var x = $("#local").val();
            if(x == "home"){
                $('html, body').animate({
                    scrollTop: $(".headerLokasi").offset().top-55
                });  
            }
            else{
                localStorage.setItem("animation", "headerLokasi")
                window.location.href = "index.php?page=home";  
            }
        });
        
        
        if (localStorage.animation && localStorage.getItem("animation")=="headerProduk") {
            $('html, body').animate({
                scrollTop: $(".headerProduk").offset().top-55
            });
            localStorage.removeItem("animation");
        }
        else if (localStorage.animation && localStorage.getItem("animation")=="berita") {
            $('html, body').animate({
                scrollTop: $(".berita").offset().top-55
            });
            localStorage.removeItem("animation");
        }
        else if (localStorage.animation && localStorage.getItem("animation")=="about") {
            $('html, body').animate({
                scrollTop: $(".about").offset().top-55
            });
            localStorage.removeItem("animation");
        }
        else if (localStorage.animation && localStorage.getItem("animation")=="headerLokasi") {
            $('html, body').animate({
                scrollTop: $(".headerLokasi").offset().top-55
            });
            localStorage.removeItem("animation");
        }
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
