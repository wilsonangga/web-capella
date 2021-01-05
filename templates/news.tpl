{include file="header.tpl"}
{if !empty($detail[0].judul)}
    <title>{$detail[0].judul} | PT. Capella Medan</title>    
    <input type="hidden" id="newsId" name="newsId" value="{$id}">
    <div class="container newsDetail">
            <p class="newsTitle wow lightSpeedIn">{$detail[0].judul}</p>
            <img src="{$_url}images/news/{$detail[0].gambar}" alt="" class="wow zoomIn">
            <div class="date my-2 wow zoomInUp">
                <i class="far fa-calendar-check mr-2"></i>
                <span>{$detail[0].tanggal}</span>
            </div>
            <div class="newsContent">
                {$detail[0].isi}
            </div>
      <!--      <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.new.capelladaihatsu.co.id%2Findex.php%3Fpage%3Dnews%26id%3D{$id}&layout=button_count&size=large&appId=2469056813411686&width=102&height=28" width="102" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            -->


            <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.capelladaihatsu.co.id%2F%3Fng%3Dnews%2F{$id}&layout=button_count&size=large&appId=2469056813411686&width=102&height=28" width="102" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            <a href="" data-action="share/whatsapp/share" id="share_wa" style="display: inline-block"><img src="{$_url}images/whatsapp.png" alt="" class="ml-2" style="width: 65%"></a>



    </div>

    <div class="container mb-3">
        <div class="row mt-5">
            <div class="col-md-12">
                <h5 class="wow fadeInDown" style="text-decoration:underline;">Berita</h5>
            </div>
        </div>
        <div class="row wow fadeIn" data-wow-delay="0.3s" id="news_sect">
            {foreach $news as $rows}
                <div class="col-md-4 newsList">
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
        <div class="row mb-3 mt-1">
            <div class="col-md-12 text-right wow fadeInLeft">
                <a href="?ng=news-all">Berita Lainnya &raquo;</a>
            </div>
        </div>
    </div>
{else}
    <title>Page Not Found</title>
    <h3><center>Maaf,Halaman Tidak Ditemukan !</center></h3>
{/if}
<script>
    var x = document.getElementsByTagName('meta');
    var id = document.getElementById('newsId').value;
    for (i = 0; i < x.length; i++) {
        if (x[i].getAttribute('property') === "og:url") {
            $("#share_wa").attr("href","whatsapp://send?text=http://www.capelladaihatsu.co.id/?ng=news/"+id);
        }
    }
    $("div.newsContent p").addClass("wow fadeInUp");
</script>
{include file="footer.tpl"}