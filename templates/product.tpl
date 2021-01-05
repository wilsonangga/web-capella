{include file="header.tpl"}
<title>{$name[0].nama}</title>
<style>
    span.carousel-control-next-icon{
        background-image: url("{$_url}images/icon-next.png") !important;
        opacity: none !important;
        width: 40px;
        height: 40px;
    }
    span.carousel-control-prev-icon{
        background-image: url("{$_url}images/icon-prev.png") !important;
        opacity: 10 !important;
        width: 40px;
        height: 40px;
    }
</style>

<input type="hidden" value="product" id="page">
{if $btop}
    <div class="bannerProduct">
        <img src="{$_url}images/product/{$name[0].nama}/banner/{$btop[0].banner}" alt="" class="w-100">
        <ul class="menuProduct">
            <li>
                <a href="#" data-target="#testdrive" id="getTestdrive" data-id="{$tdrive[0].nama}" onclick="emptyErrMod()">
                    <img src="{$_url}images/test-drive-icon2.png" alt="" class="w-100 h-auto cursor-pointer" onmouseover="hover(this,'{$_url}images/test-drive-icon.png')" onmouseout="unhover(this,'{$_url}images/test-drive-icon2.png')">
                </a>
            </li>
            <li>
                <a href="{$_url}?ng=price-list/{$pid}/{$name[0].nama|lower|replace:' ':'+'}">
                    <img src="{$_url}images/daftar-harga-icon.jpg" alt="" class="w-100 h-auto cursor-pointer" onmouseover="hover(this,'{$_url}images/daftar-harga-icon2.jpg')" onmouseout="unhover(this,'{$_url}images/daftar-harga-icon.jpg')">
                </a>
            </li>
            <li>
                <a href="{$_url}?ng=promo-all">
                    <img src="{$_url}images/promo-icon2.jpg" alt="" class="w-100 h-auto cursor-pointer" onmouseover="hover(this,'{$_url}images/promo-icon.jpg')" onmouseout="unhover(this,'{$_url}images/promo-icon2.jpg')">
                </a>
            </li>
        </ul>
    </div>
{/if}

{*MENU SECTION*} 
<div class="scrollMenu">
    <img src="{$_url}images/product/{$name[0].nama}/banner/{$bmnu[0].banner}" alt="" class="">
    {if $bint}
        <a href="#" id="interiorMenu">Interior</a>
    {/if}
    {if $bext}
        <a href="#" id="exteriorMenu">Exterior</a>
    {/if}
    {if $t_360}
        <a href="#" id="360Menu">360</a>
    {/if}
    {if $bcol}
        <a href="#" id="colourMenu">Colour</a>
    {/if}
    {if $bprf}
        <a href="#" id="performanceMenu">Performance</a>
    {/if}
    {if $bsft}
        <a href="#" id="safetyMenu">Safety</a>
    {/if}
    {if $bvar}
        <a href="#" id="variantMenu">Variant</a>
    {/if}
    <a href="#" id="specMenu">Specification</a>
    <a href="{$_url}brosur/{$name[0].brosur}" download>Download Brosur</a>  
</div>



{*INTERIOR SECTION*}
{if $bint}
    <div class="img-hidden wow fadeIn" id="interiorSect" style="background:url('{$_url}images/product/{$name[0].nama}/banner/{$bint[0].banner}') no-repeat right top / cover;position:relative">
        <img src="{$_url}images/product/{$name[0].nama}/banner/{$bint[0].banner}" alt="" class="w-100">
    </div>
{/if}
{if $t_int}
    <div class="slick-two">
        {foreach $t_int as $rows}
            <div class="tool">
                <div class="tool_img">
                    <img src="{$_url}images/product/{$name[0].nama}/{$rows.gambar}" alt="" class="w-100">
                </div>
                <div class="px-3">
                    <div>{$rows.judul}</div>
                    <div>{$rows.dsc}</div>
                </div>
            </div>
        {/foreach}
    </div>
{/if}

{*EXTERIOR SECTION*}
{if $bext}
    <div class="img-hidden wow fadeIn" id="exteriorSect" style="background:url('{$_url}images/product/{$name[0].nama}/banner/{$bext[0].banner}') no-repeat right top / cover;position:relative;">
        <img src="{$_url}images/product/{$name[0].nama}/banner/{$bext[0].banner}" alt="" class="w-100">    
    </div>
{/if}
{if $t_ext}
    <div class="slick-two">
        {foreach $t_ext as $rows}
            <div class="tool">
                <div class="tool_img">
                    <img src="{$_url}images/product/{$name[0].nama}/{$rows.gambar}" alt="" class="w-100">
                </div>
                <div class="px-3">
                    <div>{$rows.judul}</div>
                    <div>{$rows.dsc}</div>
                </div>
            </div>
        {/foreach}
    </div>
{/if}

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
{if $t_360}
{*360 SECTION*}
<div class="container my-5" id="360Sect">
    <h3 class="text-center text-primary mb-2">360 EXTERIOR</h3>
    <div class="d-flex justify-content-center">
        <iframe src ="{$t_360[0].dsc}" frameBorder = "0" allowFullScreen class="border setIframe"></iframe>
    </div>
</div>
{/if}


{*COLOUR SECTION*}
{if $bcol}
    <div class="img-hidden" id="colourSect" style="background:url('{$_url}images/product/{$name[0].nama}/banner/{$bcol[0].banner}') no-repeat center / cover;position:relative;">
        <img src="{$_url}images/product/{$name[0].nama}/banner/{$bcol[0].banner}" alt="" class="w-100" style="position: absolute">  
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            {*<ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>*}
            
            <div class="carousel-inner">
                <div class="container">
                    {assign var="i" value=0}
                    {foreach $t_col as $rows}
                        {if $i eq 0}
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-6" style="margin-top: 10%;">
                                        <h1><span class="text-light bg-warning">Daihatsu {$name[0].nama}</span></h1>
                                        <div class="text-light font-5 mt-3"><span class="bg-success">Hadir dalam berbagai macam pilihan warna yang disesuaikan dengan kebutuhan seru Mu</span></div>
                                    </div>    
                                    <div class="col-md-6">
                                        <img class="w-100" src="{$_url}images/product/{$name[0].nama}/{$rows.gambar}" alt="color-slide"> 
                                        <h3 class="mb-5 text-center text-light">{$rows.judul}</h3>
                                    </div>  
                                </div>
                            </div>
                        {else}
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-6" style="margin-top: 10%;">
                                        <h1><span class="text-light bg-warning">Daihatsu {$name[0].nama}</span></h1>
                                        <div class="text-light font-5 mt-3"><span class="bg-success">Hadir dalam berbagai macam pilihan warna yang disesuaikan dengan kebutuhan seru Mu</span></div>
                                    </div> 
                                    <div class="col-md-6">
                                        <img class="w-100" src="{$_url}images/product/{$name[0].nama}/{$rows.gambar}" alt="color-slide">
                                        <h3 class="mb-5 text-center text-light">{$rows.judul}</h3>
                                    </div>     
                                </div>
                            </div>
                        {/if}
                        {assign var="i" value=$i+1}
                    {/foreach}
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
{/if}

{*<div class="container">
    <iframe class="w-100 my-5" src="https://www.youtube.com/embed/N4WjylxNk4E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    
</div>*}

{*PERFORMANCE SECTION*}
{if $bprf}
    <div class="img-hidden wow fadeIn" id="performanceSect" style="background:url('{$_url}images/product/{$name[0].nama}/banner/{$bprf[0].banner}') no-repeat right top / cover;position:relative;">
        <img src="{$_url}images/product/{$name[0].nama}/banner/{$bprf[0].banner}" alt="" class="w-100">    
    </div>
{/if}

{*SAFETY SECTION*}
{if $bsft}
    <div class="wow fadeIn" style="background:url('{$_url}images/product/{$name[0].nama}/banner/{$bsft[0].banner}') no-repeat right top / cover;position:relative" id="safetySect">
        <img src="{$_url}images/product/{$name[0].nama}/banner/{$bsft[0].banner}" alt="" class="w-100">
    </div>
{/if}
{if $t_sft}
    <div class="slick-two">
        {foreach $t_sft as $rows}
            <div class="tool">
                <div class="tool_img">
                    <img src="{$_url}images/product/{$name[0].nama}/{$rows.gambar}" alt="" class="w-100">
                </div>
                <div class="px-3">
                    <div>{$rows.judul}</div>
                    <div>{$rows.dsc}</div>
                </div>
            </div>
        {/foreach}
    </div>
{/if}

{*VARIANT SECTION*}
{if $bvar}
    <div id="variantSect">
        <!--<div class="slick-one">
            {foreach $bvar as $rows}
                <img class="d-block w-100" src="{$_url}images/product/{$name[0].nama}/banner/{$rows.banner}" alt="variant-slide">
            {/foreach}
        </div>-->
        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                {assign var="j" value=0}
                {foreach $bvar as $rows}
                    {if $j eq 0}
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{$_url}images/product/{$name[0].nama}/banner/{$rows.banner}" alt="variant-slide">
                        </div>
                    {else}
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{$_url}images/product/{$name[0].nama}/banner/{$rows.banner}" alt="variant-slide">
                        </div>
                    {/if}
                {assign var="j" value=$j+1}
                {/foreach}
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
{/if}

{*SPECIFICATION SECTION*}
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
                            {$s_dms[0].dsc}
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
                            {$s_msn[0].dsc}
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
                           {$s_trm[0].dsc}
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
                            {$s_skm[0].dsc}
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
                            {$s_spm[0].dsc}
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
                            {$s_sps[0].dsc}
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
                            {$s_ban[0].dsc}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="slick/slick/slick.js"></script>
<script>
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
    
</script>
{include file="footer.tpl"}