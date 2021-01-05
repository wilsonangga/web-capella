{include file="header.tpl"}
<title>Promo | PT. Capella Medan</title>
<input type="hidden" value='{$_url}' id="_url" name="url">
<div class="img-hidden wow fadeIn" style="background:url('images/banner-promo.jpg') no-repeat right top / cover;position:relative;">
    <img src="images/banner-promo.jpg" alt="" class="w-100" style="visibility:hidden;">    
</div>
<div class="container">
    {if $promo}
        {*PROMO SECTION*}
        <div class="form-group wow zoomIn">
            <select name="" class="form-control" id="wilayah_promo">
                <option value="All">-- Semua --</option>
                {foreach $cabang as $rows}
                    <option value="{$rows.kdcab}">{$rows.cabang}</option>
                {/foreach}
            </select>
        </div>
        <div id="promo-all" class="mb-5">
            {foreach $promo as $rows}
                <div class="wow rollIn">
                    <div class="card mb-3">
                        <div class="row no-gutters" id="promoList">
                            <div class="col-md-4" style="max-height: 185px;overflow: hidden;">
                                <img src="{$_url}images/promo/{$rows.gambar}" class="card-img" alt="{$rows.gambar}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{$rows.judul}</h5>
                                    <p class="card-text"><small class="text-muted">Berlaku s.d. {$rows.expired|tgl_indo}</small></p>
                                    <a href="?ng=promo/{$rows.id}/{$rows.judul|lower|replace:' ':'+'}">
                                        <button class="btn btn-primary btn-sm">Selengkapnya</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    {else}
        <div class="row">
            <div class="col-md-12 mb-5 text-center font-5 font-weight-bold">Tidak ada promo untuk saat ini.</div>
        </div>
    {/if}
</div>
<script src="{$_url}js/promo-all.js"></script>
{include file="footer.tpl"}