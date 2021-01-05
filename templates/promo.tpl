{include file="header.tpl"}
{if !empty($promo[0].judul)}
<title>{$promo[0].judul} | PT. Capella Medan</title>
<div class="container mb-5">
    <p class="text-center wow lightSpeedIn" style="font-weight:bold;font-size:25px;margin-top:10px;margin-bottom:10px;color:#1100fe;">
        {$promo[0].judul}
    </p>
    <img src="{$_url}images/promo/{$promo[0].gambar}" alt="" class="w-75 d-block mx-auto wow zoomIn">
<!--
    <div style="font-size:20px;" class="my-2 wow zoomInUp">
        <i class="far fa-calendar-check mr-2"></i>
        <span>{$promo[0].tanggal}</span>
    </div>
-->
   <p class="mt-2">{$promo[0].isi}</p>
<!--
    <p style="font-family:arial;text-align:justify;font-size:15px;" class="wow fadeInUp">
        
    </p>
-->
    <p class="text-danger mt-2">Berlaku s.d. {$promo[0].expired|tgl_indo}</p>
    <!--<a href="?ng=home">Kembali ke halaman utama</a>-->
    <!--{*PROMO SECTION*}
    <div class="row">
        <div class="col-md-12">
            <div class="headerPromo wow zoomIn">
                <div class="bg-dark text-light rounded mb-0">Promo</div>    
            </div>
        </div>
    </div>
    {foreach $promo_all as $rows}
        <div class="mb-5">
            <div class="card mb-3">
                <div class="row no-gutters" id="promoList">
                    <div class="col-md-4" style="max-height: 185px;overflow: hidden;">
                        <img src="{$_url}images/{$rows.gambar}" class="card-img" alt="{$rows.gambar}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{$rows.judul}</h5>
                            <p class="card-text">{$rows.isi}</p>
                            <p class="card-text"><small class="text-muted">Berlaku s.d. 23 Desember 2019</small></p>
                            <a href="?ng=promo/{$rows.id}">
                                <button class="btn btn-primary btn-sm">Selengkapnya&raquo;</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {/foreach}-->
</div>
{else}
    <title>Page Not Found</title>
    <h3><center>Maaf,Halaman Tidak Ditemukan !</center></h3>
{/if}
{include file="footer.tpl"}