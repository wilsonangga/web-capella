<?php
/* Smarty version 3.1.33, created on 2020-11-30 10:30:28
  from 'D:\xampp1\htdocs\NewWeb\smarty version\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fc46754646c81_41618552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1a66daaee1945fbb3ad2a75a7c4f8d6a8aae84a' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\NewWeb\\smarty version\\templates\\product.tpl',
      1 => 1606706863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc46754646c81_41618552 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp1\\htdocs\\NewWeb\\smartyversion\\Smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<title><?php echo $_smarty_tpl->tpl_vars['name']->value[0]['nama'];?>
</title>
<style>
    span.carousel-control-next-icon{
        background-image: url("<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/icon-next.png") !important;
        opacity: none !important;
        width: 40px;
        height: 40px;
    }
    span.carousel-control-prev-icon{
        background-image: url("<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/icon-prev.png") !important;
        opacity: 10 !important;
        width: 40px;
        height: 40px;
    }
</style>

<input type="hidden" value="product" id="page">
<?php if ($_smarty_tpl->tpl_vars['btop']->value) {?>
    <div class="bannerProduct">
        <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/product/<?php echo $_smarty_tpl->tpl_vars['name']->value[0]['nama'];?>
/banner/<?php echo $_smarty_tpl->tpl_vars['btop']->value[0]['banner'];?>
" alt="" class="w-100">
        <ul class="menuProduct">
            <li>
                <a href="#" data-target="#testdrive" id="getTestdrive" data-id="<?php echo $_smarty_tpl->tpl_vars['tdrive']->value[0]['nama'];?>
" onclick="emptyErrMod()">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/test-drive-icon2.png" alt="" class="w-100 h-auto cursor-pointer" onmouseover="hover(this,'<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/test-drive-icon.png')" onmouseout="unhover(this,'<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/test-drive-icon2.png')">
                </a>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
?ng=price-list/<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
/<?php echo smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['name']->value[0]['nama'], 'UTF-8'),' ','+');?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/daftar-harga-icon.jpg" alt="" class="w-100 h-auto cursor-pointer" onmouseover="hover(this,'<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/daftar-harga-icon2.jpg')" onmouseout="unhover(this,'<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/daftar-harga-icon.jpg')">
                </a>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
?ng=promo-all">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/promo-icon2.jpg" alt="" class="w-100 h-auto cursor-pointer" onmouseover="hover(this,'<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/promo-icon.jpg')" onmouseout="unhover(this,'<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/promo-icon2.jpg')">
                </a>
            </li>
        </ul>
    </div>
<?php }?>

 
<div class="scrollMenu">
    <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/product/<?php echo $_smarty_tpl->tpl_vars['name']->value[0]['nama'];?>
/banner/<?php echo $_smarty_tpl->tpl_vars['bmnu']->value[0]['banner'];?>
" alt="" class="">
    <?php if ($_smarty_tpl->tpl_vars['bint']->value) {?>
        <a href="#" id="interiorMenu">Interior</a>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['bext']->value) {?>
        <a href="#" id="exteriorMenu">Exterior</a>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['t_360']->value) {?>
        <a href="#" id="360Menu">360</a>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['bcol']->value) {?>
        <a href="#" id="colourMenu">Colour</a>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['bprf']->value) {?>
        <a href="#" id="performanceMenu">Performance</a>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['bsft']->value) {?>
        <a href="#" id="safetyMenu">Safety</a>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['bvar']->value) {?>
        <a href="#" id="variantMenu">Variant</a>
    <?php }?>
    <a href="#" id="specMenu">Specification</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
brosur/<?php echo $_smarty_tpl->tpl_vars['name']->value[0]['brosur'];?>
" download>Download Brosur</a>  
</div>



<?php if ($_smarty_tpl->tpl_vars['bint']->value) {?>
    <div class="img-hidden wow fadeIn" id="interiorSect" style="background:url('<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/product/<?php echo $_smarty_tpl->tpl_vars['name']->value[0]['nama'];?>
/banner/<?php echo $_smarty_tpl->tpl_vars['bint']->value[0]['banner'];?>
') no-repeat right top / cover;position:relative">
        <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/product/<?php echo $_smarty_tpl->tpl_vars['name']->value[0]['nama'];?>
/banner/<?php echo $_smarty_tpl->tpl_vars['bint']->value[0]['banner'];?>
" alt="" class="w-100">
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['t_int']->value) {?>
    <div class="slick-two">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['t_int']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
            <div class="tool">
                <div class="tool_img">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/product/<?php echo $_smarty_tpl->tpl_vars['name']->value[0]['nama'];?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['gambar'];?>
" alt="" class="w-100">
                </div>
                <div class="px-3">
                    <div><?php echo $_smarty_tpl->tpl_vars['rows']->value['judul'];?>
</div>
                    <div><?php echo $_smarty_tpl->tpl_vars['rows']->value['dsc'];?>
</div>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['bext']->value) {?>
    <div class="img-hidden wow fadeIn" id="exteriorSect" style="background:url('<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/product/<?php echo $_smarty_tpl->tpl_vars['name']->value[0]['nama'];?>
/banner/<?php echo $_smarty_tpl->tpl_vars['bext']->value[0]['banner'];?>
') no-repeat right top / cover;position:relative;">
        <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/product/<?php echo $_smarty_tpl->tpl_vars['name']->value[0]['nama'];?>
/banner/<?php echo $_smarty_tpl->tpl_vars['bext']->value[0]['banner'];?>
" alt="" class="w-100">    
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['t_ext']->value) {?>
    <div class="slick-two">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['t_ext']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
            <div class="tool">
                <div class="tool_img">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/product/<?php echo $_smarty_tpl->tpl_vars['name']->value[0]['nama'];?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['gambar'];?>
" alt="" class="w-100">
                </div>
                <div class="px-3">
                    <div><?php echo $_smarty_tpl->tpl_vars['rows']->value['judul'];?>
</div>
                    <div><?php echo $_smarty_tpl->tpl_vars['rows']->value['dsc'];?>
</div>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }?>

<!--terios-->
<!--https://next360.lacora.eu/prod/xf5UOj2qI/xNeTlDRH/va/iframe.html-->
<!--sirion-->
<!--https://next360.lacora.eu/prod/xf5UOj2qI/m2NzXsA6/va/iframe.html-->
<!--ayla-->
<!--https://next360.lacora.eu/prod/xf5UOj2qI/MTXK37LZ/va/iframe.html-->
<!--granmaxmb-->
<!--https://next360.lacora.eu/prod/xf5UOj2qI/NXFLFiQc/va/iframe.html-->
<!--granmaxpu-->
<!--https://next360.lacora.eu/prod/xf5UOj2qI/7bXweNRT/va/iframe.html-->
<!--luxio-->
<!--https://next360.lacora.eu/prod/xf5UOj2qI/xGqyEXFz/va/iframe.html-->
<!--xenia-->
<!--https://next360.lacora.eu/prod/xf5UOj2qI/fMzEi2Sn/va/iframe.html-->
<?php if ($_smarty_tpl->tpl_vars['t_360']->value) {?>
<div class="container my-5" id="360Sect">
    <h3 class="text-center text-primary mb-2">360 EXTERIOR</h3>
    <div class="d-flex justify-content-center">
        <iframe src ="<?php echo $_smarty_tpl->tpl_vars['t_360']->value[0]['dsc'];?>
" frameBorder = "0" allowFullScreen class="border setIframe"></iframe>
    </div>
</div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['bcol']->value) {?>
    <div class="img-hidden" id="colourSect" style="background:url('<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/product/<?php echo $_smarty_tpl->tpl_vars['name']->value[0]['nama'];?>
/banner/<?php echo $_smarty_tpl->tpl_vars['bcol']->value[0]['banner'];?>
') no-repeat center / cover;position:relative;">
        <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/product/<?php echo $_smarty_tpl->tpl_vars['name']->value[0]['nama'];?>
/banner/<?php echo $_smarty_tpl->tpl_vars['bcol']->value[0]['banner'];?>
" alt="" class="w-100" style="position: absolute">  
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                        
            <div class="carousel-inner">
                <div class="container">
                    <?php $_smarty_tpl->_assignInScope('i', 0);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['t_col']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-6" style="margin-top: 10%;">
                                        <h1><span class="text-light bg-warning">Daihatsu <?php echo $_smarty_tpl->tpl_vars['name']->value[0]['nama'];?>
</span></h1>
                                        <div class="text-light font-5 mt-3"><span class="bg-success">Hadir dalam berbagai macam pilihan warna yang disesuaikan dengan kebutuhan seru Mu</span></div>
                                    </div>    
                                    <div class="col-md-6">
                                        <img class="w-100" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/product/<?php echo $_smarty_tpl->tpl_vars['name']->value[0]['nama'];?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['gambar'];?>
" alt="color-slide"> 
                                        <h3 class="mb-5 text-center text-light"><?php echo $_smarty_tpl->tpl_vars['rows']->value['judul'];?>
</h3>
                                    </div>  
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-6" style="margin-top: 10%;">
                                        <h1><span class="text-light bg-warning">Daihatsu <?php echo $_smarty_tpl->tpl_vars['name']->value[0]['nama'];?>
</span></h1>
                                        <div class="text-light font-5 mt-3"><span class="bg-success">Hadir dalam berbagai macam pilihan warna yang disesuaikan dengan kebutuhan seru Mu</span></div>
                                    </div> 
                                    <div class="col-md-6">
                                        <img class="w-100" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/product/<?php echo $_smarty_tpl->tpl_vars['name']->value[0]['nama'];?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['gambar'];?>
" alt="color-slide">
                                        <h3 class="mb-5 text-center text-light"><?php echo $_smarty_tpl->tpl_vars['rows']->value['judul'];?>
</h3>
                                    </div>     
                                </div>
                            </div>
                        <?php }?>
                        <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
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
        </div>
    </div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['bprf']->value) {?>
    <div class="img-hidden wow fadeIn" id="performanceSect" style="background:url('<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/product/<?php echo $_smarty_tpl->tpl_vars['name']->value[0]['nama'];?>
/banner/<?php echo $_smarty_tpl->tpl_vars['bprf']->value[0]['banner'];?>
') no-repeat right top / cover;position:relative;">
        <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/product/<?php echo $_smarty_tpl->tpl_vars['name']->value[0]['nama'];?>
/banner/<?php echo $_smarty_tpl->tpl_vars['bprf']->value[0]['banner'];?>
" alt="" class="w-100">    
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['bsft']->value) {?>
    <div class="wow fadeIn" style="background:url('<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/product/<?php echo $_smarty_tpl->tpl_vars['name']->value[0]['nama'];?>
/banner/<?php echo $_smarty_tpl->tpl_vars['bsft']->value[0]['banner'];?>
') no-repeat right top / cover;position:relative" id="safetySect">
        <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/product/<?php echo $_smarty_tpl->tpl_vars['name']->value[0]['nama'];?>
/banner/<?php echo $_smarty_tpl->tpl_vars['bsft']->value[0]['banner'];?>
" alt="" class="w-100">
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['t_sft']->value) {?>
    <div class="slick-two">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['t_sft']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
            <div class="tool">
                <div class="tool_img">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/product/<?php echo $_smarty_tpl->tpl_vars['name']->value[0]['nama'];?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['gambar'];?>
" alt="" class="w-100">
                </div>
                <div class="px-3">
                    <div><?php echo $_smarty_tpl->tpl_vars['rows']->value['judul'];?>
</div>
                    <div><?php echo $_smarty_tpl->tpl_vars['rows']->value['dsc'];?>
</div>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['bvar']->value) {?>
    <div id="variantSect">
        <!--<div class="slick-one">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bvar']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                <img class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/product/<?php echo $_smarty_tpl->tpl_vars['name']->value[0]['nama'];?>
/banner/<?php echo $_smarty_tpl->tpl_vars['rows']->value['banner'];?>
" alt="variant-slide">
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>-->
        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <?php $_smarty_tpl->_assignInScope('j', 0);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bvar']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['j']->value == 0) {?>
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/product/<?php echo $_smarty_tpl->tpl_vars['name']->value[0]['nama'];?>
/banner/<?php echo $_smarty_tpl->tpl_vars['rows']->value['banner'];?>
" alt="variant-slide">
                        </div>
                    <?php } else { ?>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/product/<?php echo $_smarty_tpl->tpl_vars['name']->value[0]['nama'];?>
/banner/<?php echo $_smarty_tpl->tpl_vars['rows']->value['banner'];?>
" alt="variant-slide">
                        </div>
                    <?php }?>
                <?php $_smarty_tpl->_assignInScope('j', $_smarty_tpl->tpl_vars['j']->value+1);?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only text-warning">Next</span>
            </a>
        </div>   
    </div>
<?php }?>

<div class="container my-5" id="specSect">
    <div class="row">
        <div class="col-md-12 mb-5">
            <h1 class="text-center wow fadeIn">Spesifikasi Teknis</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="accordion" class="wow bounceIn accordionSpec">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link w-100 text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Dimensi <span class="float-right">+</span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body specbody">
                            <?php echo $_smarty_tpl->tpl_vars['s_dms']->value[0]['dsc'];?>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed w-100 text-left" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Mesin <span class="float-right">+</span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body specbody">
                            <?php echo $_smarty_tpl->tpl_vars['s_msn']->value[0]['dsc'];?>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed w-100 text-left" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Transmisi <span class="float-right">+</span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                           <?php echo $_smarty_tpl->tpl_vars['s_trm']->value[0]['dsc'];?>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed w-100 text-left" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Sistem Kemudi <span class="float-right">+</span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            <?php echo $_smarty_tpl->tpl_vars['s_skm']->value[0]['dsc'];?>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed w-100 text-left" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Sistem Pengereman <span class="float-right">+</span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body">
                            <?php echo $_smarty_tpl->tpl_vars['s_spm']->value[0]['dsc'];?>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed w-100 text-left" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Suspensi <span class="float-right">+</span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                        <div class="card-body">
                            <?php echo $_smarty_tpl->tpl_vars['s_sps']->value[0]['dsc'];?>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSeven">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed w-100 text-left" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Ban <span class="float-right">+</span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                        <div class="card-body">
                            <?php echo $_smarty_tpl->tpl_vars['s_ban']->value[0]['dsc'];?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript" src="slick/slick/slick.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    /*window.onresize = function(event) {
        var cekp = checkPosition();
        alert(cekp);
        setTimeout(function() {
            $('.your-class').slick({
                arrows:true,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay:true
            });
        }, 1000);
    };*/
    
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
