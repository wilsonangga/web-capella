{include file="header.tpl"}
<title>Berita Lainnya | PT. Capella Medan</title>
<div class="container my-3">
    <div class="row mt-5">
        <div class="col-md-12">
            <h5 class="wow fadeInDown" style="text-decoration:underline;">Berita</h5>
        </div>
    </div>
    <div class="row wow fadeIn" data-wow-delay="0.3s" id="news_sect">
        {foreach $news as $rows}
            <div class="col-md-4 newsList mb-4">
                <div class="card">
                    <div class="newsImg">
                        <img src="{$_url}images/news/{$rows.gambar}" alt="" class="card-img-top">
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
</div>
{include file="footer.tpl"}