{include file="header.tpl"}
<title>Harga Daihatsu {$product[0]['nama']}</title>
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
            <img src="{$_url}images/product/{$product[0].nama}/{$product[0].gambar}" alt="" class="w-100 wow zoomIn">
        </div>
        <div class="col-md-6 wow zoomInRight pricelistDesc">
            <p>Daihatsu {$product[0].nama}</p>
            <p>Harga Mulai</p>
            <p>Rp {$product[0]['harga']|number_format:0:"":"."}</p>
        </div>
    </div>
    <button type="submit" class="btn btn-success btn-md rounded-5 w-100 dialog" data-target="#penawaran" data-id="{$product[0].nama}" id="getPenawaran" onclick="emptyErrMod();">
        <div class="my-0 mx-auto w-100 bold">Dapatkan Penawaran</div>
    </button>
    <div class="row">
        <div class="col-md-12">
            <p class="wow bounceIn font-5 text-center mt-3 bold">Detail Harga Daihatsu {$product[0].nama}</p>
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
                        <td class="text-uppercase" colspan="2">DAIHATSU     {$product[0].nama}</td>
                        <th>ACEH</th>
                        <th>SUMUT</th>
                        <th>SUMBAR</th>
                        <th>DURI</th>
                        <th>PEKANBARU</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $price as $rows}
                        <tr>
                            <td class="text-uppercase">{$product[0].nama}</td>
                            <td>{$rows.tipe}</td>
                            <td>Rp {$rows.bda|number_format:0:"":"."}</td>
                            <td>Rp {$rows.smt|number_format:0:"":"."}</td>
                            <td>Rp {$rows.sbr|number_format:0:"":"."}</td>
                            <td>Rp {$rows.dri|number_format:0:"":"."}</td>
                            <td>Rp {$rows.pbr|number_format:0:"":"."}</td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
            <ul>
                <li class="font-weight-bold">Harga sewaktu-waktu dapat berubah tanpa pemberitahuan terlebih dahulu</li>
            </ul>
        </div>
    </div>
</div>
{include file="footer.tpl"}