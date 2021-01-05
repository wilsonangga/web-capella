{include file="header.tpl"}
<title>PT. Capella Medan Daihatsu</title>
    <input type="hidden" value="home" id="local">   
    <input type="hidden" value='{$_url}' id="_url">
    {if $promo_box}
        {*KOTAK PROMO*}
        <div class="modal fade" id="kotak_promo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">{$promo_box[0].judul}</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        <img src="{$_url}images/promo/{$promo_box[0].gambar}" alt="" class="card-img-top ">
                    </div>

                    <div class="modal-footer">
                        <a href="?ng=promo/{$promo_box[0].id}/{$promo_box[0].judul|lower|replace:' ':'+'}"><button type="button" class="btn btn-primary">Lebih Lanjut</button></a>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>    
    {/if}
    
    {*CAROUSEL*}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators" style="z-index:1">
            {assign var="i" value=0}
            {foreach $slideshow as $number}
                {if $i == 0}
                    <li data-target="#carouselExampleIndicators" data-slide-to="{$i}" class="active"></li>
                {else}
                    <li data-target="#carouselExampleIndicators" data-slide-to="{$i}"></li>
                {/if}
                {assign var="i" value=$i+1}
            {/foreach}
        </ol>
        <div class="carousel-inner">
            {assign var="j" value=0}
            {foreach $slideshow as $row}
                {if $j eq 0}
                    <div class="carousel-item active">
                        <img class="d-block w-100 " src="{$_url}images/slideshow/{$row.gambar}">
                    </div>
                {else}
                    <div class="carousel-item">
                        <img class="d-block w-100 " src="{$_url}images/slideshow/{$row.gambar}">
                    </div>
                {/if}
                {assign var="j" value=$j+1}
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
    
    <div class="container mt-3 mb-2">
        {*MODAL CONTACTUS*}
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
                                            {foreach $city as $rows}
                                                <option value="{$rows.name}">{$rows.name}</option>
                                            {/foreach} 
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
                                        {$captcha2}
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
                    {assign var="viewFrame" value=0}
                        {if $viewFrame eq 1} 
                            <iframe name="frame_action2" id="frame_action2" src="{$_url}kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                        {else}
                            <iframe name="frame_action2" id="frame_action2" src="{$_url}kosong.php" width="100%" height="10" style="overflow:hidden;" visibility="hidden" scrolling="no" frameborder="0"></iframe>
                        {/if}
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
                                    <img src="{$_url}images/capella.png" alt="capella" class="d-block mx-auto w-15">
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
        
        {*PROMO SECTION*}
        <div id="promo_list">
            <div class="row wow rollIn">
                <div class="col-md-12">
                    <div class="headerPromo wow zoomIn">
                        <div class="bg-dark text-light rounded mb-0">Promo</div>    
                    </div>
                </div>
            </div>
            {if $promo}
                {foreach $promo as $rows}
                    <div class="wow rollIn mb-3">
                        <div class="card">
                            <div class="row no-gutters" class="promoList">
                                <div class="col-md-4" style="max-height: 185px;overflow: hidden;">
                                    <img src="{$_url}images/promo/{$rows.gambar}" class="card-img " alt="{$rows.gambar}">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{$rows.judul}</h5>
                                        <p class="card-text"><small class="text-muted">Berlaku s.d. <!--tgl_indo({$rows.expired|date_format:"%e %B %Y"})--> {$rows.expired|tgl_indo}</small></p>
                                        <a href="?ng=promo/{$rows.id}/{$rows.judul|lower|replace:' ':'+'}">
                                            <button class="btn btn-primary btn-sm">Selengkapnya</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {/foreach}
                <div class="row mb-5 mt-1">
                    <div class="col-md-12 text-right wow fadeInLeft">
                        <a href="?ng=promo-all">Promo Lainnya &raquo;</a>
                    </div>
                </div>
            {else}
                <div class="row">
                    <div class="col-md-12 mb-5 text-center font-5 font-weight-bold">Tidak ada promo untuk saat ini.</div>
                </div>
            {/if}
        </div>
        
        {*PRODUCT SECTION*}
        <div id="product_list">
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="headerProduk wow zoomIn">
                        <div class="bg-dark text-light rounded mb-0">Produk</div>    
                    </div>
                </div>
            </div>
            <div class="row mb-3" id="product_sect">
                {foreach $product as $row}
                    <div class="col-lg-3 col-md-4 productList wow fadeInLeft">
                        <div class="card">
                            <img src="{$_url}images/product/{$row.nama}/{$row.gambar}" alt="" class="card-img-top ">
                            <div class="card-body text-center pt-0 pl-2 pr-2 pb-0">
                                <div class="card-title border-bottom border-secondary border-2 mb-0">
                                    <div class="bold text-uppercase" style="font-size:20px;">{$row.nama}</div>
                                </div>
                                <div class="card-text">OTR Sumatera Utara mulai dari :</div>
                                <div class="card-text text-danger font-5 bold">Rp {$row.harga|number_format:0:"":"."}</div>
                                <a href="{$_url}?ng=price-list/{$row.id}/{$row.nama|lower|replace:' ':'+'}" style="margin: 0;">Lihat detail harga</a>
                                <div class="card-text bold text-uppercase text-secondary">{$row.seaters} Seaters</div>
                                <ul class="text-left">
                                {foreach $color as $rows}
                                        {if $row.id eq $rows.product_id}
                                            <li>
                                                <div style="background-color: {$rows.color};" title="Warna {$row.nama}" data-toggle="popover" data-placement="top" data-content="{$rows.n_color}" data-html="true" data-trigger="hover">&nbsp;</div>       
                                            </li>
                                        {/if}
                                    {/foreach}
                                </ul>
                                <div class="card-text p-2 mb-5">
    <!--                                <a href="index.php?page=product&id={$row.id}">-->
                                    <a href="{$_url}?ng=product/{$row.id}/{$row.nama|lower|replace:' ':'+'}">
                                        <button class="btn btn-primary btn-md rounded-5 float-left bold p-0">
                                            <div class="my-0 mx-auto w-65">Lihat Produk</div>
                                        </button>
                                    </a>
                                    <button type="submit" class="btn btn-success btn-md rounded-5 float-left bold p-0 dialog" data-target="#penawaran" data-id="{$row.nama}" id="getPenawaran" onclick="emptyErrMod();">
                                        <div class="my-0 mx-auto w-65">Dapatkan Penawaran</div>
                                    </button>
                                    <a href="{$_url}brosur/{$row.brosur}" download>
                                        <button class="btn btn-danger btn-md rounded-5 float-left bold p-0">
                                            <div class="my-0 mx-auto w-65">Download Brosur</div>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> 
                {/foreach}
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid p-0 wow fadeIn">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-md-6 p-0">
                    <div class="d-flex">
                        <div class="w-50">
                            <img src="{$_url}images/bookingservice.jpg" alt="booking_service" class="w-100" id="booking_service" onmouseover="hover(this,'{$_url}images/bookingservice2.jpg')" onmouseout="unhover(this,'{$_url}images/bookingservice.jpg')">
                        </div>
                        <div class="w-50">
                            <img src="{$_url}images/testdrive.jpg" alt="test_drive" class="w-100" id="test_drive" onmouseover="hover(this,'{$_url}images/testdrive2.jpg')" onmouseout="unhover(this,'{$_url}images/testdrive.jpg')">
                        </div>    
                    </div>
                    <div class="d-flex">
                        <div class="w-50">
                            <img src="{$_url}images/contactus.jpg" alt="contact_us" class="w-100" id="contact_us" onmouseover="hover(this,'{$_url}images/contactus2.jpg')" onmouseout="unhover(this,'{$_url}images/contactus.jpg')">
                        </div>   
                        <div class="w-50">
                            <img src="images/simulasikredit.jpg" alt="simulasi_kredit" class="w-100" id="s_kredit" onmouseover="hover(this,'{$_url}images/simulasikredit2.jpg')" onmouseout="unhover(this,'{$_url}images/simulasikredit.jpg')">
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
        {*NEWS SECTION*}
        <div id="news_list">
            <div class="row mb-2 wow slideInUp">
                <div class="col-md-12">
                    <h5 class="berita">BERITA</h5>
                </div>
            </div>
            <div class="row wow fadeIn" id="news_sect">
                {foreach $news as $rows}
                <div class="col-md-4 newsList">
                    <div class="card">
                        <div class="newsImg">
                            <img src="{$_url}images/news/{$rows.gambar}" alt="" class="card-img-top ">
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <i class="far fa-calendar-check"></i>
                                <span>{$rows.tanggal}</span>
                            </div>
                            <div class="card-title text-uppercase font-weight-bold judul">
                                {$rows.judul}
                            </div>
                            <div class="card-text text-secondary isi">
                                {$rows.isi}
                            </div>
                            <div class="card-text pt-2 text-right">
                                <a href="?ng=news/{$rows.id}/{$rows.judul|lower|replace:' ':'+'}">
                                    <button class="btn btn-success btn-sm">Selengkapnya &raquo;</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {/foreach}
            </div>
            <div class="row mb-3 mt-1">
                <div class="col-md-12 text-right wow fadeInLeft">
                    <a href="?ng=news-all">Berita Lainnya &raquo;</a>
                </div>
            </div>
        </div>

        {*ABOUTUS SECTION*}
        <div id="aboutus_list">
            <div class="row mb-5">
                <div class="col-md-12">
                    <h5 class="about wow bounceInDown">TENTANG KAMI</h5>
                    <ul class="nav nav-tabs wow bounceInUp" role="tablist">
                        {assign var="k" value=1}
                        {foreach $about $rows}
                            {if $k eq 1}
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#menu{$k}">{$rows.judul}</a>
                                </li>
                            {else}
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#menu{$k}">{$rows.judul}</a>
                                </li>
                            {/if}
                            {assign var="k" value=$k+1}
                        {/foreach}
                    </ul>
            
                    <!-- Tab panes -->
                    <div class="tab-content wow bounceInUp">
                        {assign var="l" value=1}
                        {foreach $about $rows}
                            {if $l eq 1}
                                <div id="menu{$l}" class="container tab-pane active about_us"><br>
                                    <h5>{$rows.subjudul}</h5>
                                    {$rows.isi}
                                </div>
                            {else}
                                <div id="menu{$l}" class="container tab-pane about_us"><br>
                                    <h5>{$rows.subjudul}</h5>
                                    {$rows.isi}
                                </div>
                            {/if}
                            {assign var="l" value=$l+1}
                        {/foreach}
                    </div>
                </div>
            </div> 
        </div>

        {*LOCATION SECTION*}
        <div id="dealer_list">
            <div class="row">
                <div class="col-md-12">
                    <div class="headerLokasi wow fadeInLeft">
                        <div class="bg-dark text-light rounded mb-0">Lokasi Dealer</div>    
                    </div>
                </div>
            </div>
           
            {*MODAL GOOGLE MAP*}
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
        
            {*MODAL INFORMASI*}
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
                {foreach $dealer as $rows}
                    <div class="col-lg-4 col-md-6 overflow-hidden">
                        <table class="dealer wow">
                            <thead>
                                <tr>
                                    <td class="text-uppercase" colspan="2">{$rows.cabang}</td>
                                </tr>
                                <tr>
                                    <th colspan="2">PT. CAPELLA MEDAN</th>
                                </tr>    
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        {$rows.alamat}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Showroom</td>
                                    <td>: {$rows.no_showroom}</td>
                                </tr>
                                <tr>
                                    <td>Service</td>
                                    <td>: {$rows.no_service}</td>
                                </tr>
                                <tr>
                                    <td>Layanan</td>
                                    <td>: {$rows.layanan}</td>
                                </tr>    
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2">
                                        <button class="btn btn-sm btn-primary mt-2 mb-2" data-target="#dealer" data-id="{$rows.maps}" id="getDealer">Google Map</button>
                                        <button class="btn btn-sm btn-danger mt-2 mb-2" id="getInfo" data-id='{$rows.info}'>Informasi</button>
                                    </td>
                                </tr>                    
                            </tfoot>
                        </table>
                    </div>
                {/foreach}
            </div>
       </div>
    <script src="{$_url}js/jumbotron_ajax.js"></script>        
{include file="footer.tpl"}
