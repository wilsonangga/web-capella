<?php
/* Smarty version 3.1.33, created on 2020-12-01 11:32:42
  from 'D:\xampp1\htdocs\NewWeb\smarty version\templates\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fc5c76accf926_08336533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b2edfb9ef4b933ac046b7ab48700ad34b6c162f' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\NewWeb\\smarty version\\templates\\news.tpl',
      1 => 1606797149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc5c76accf926_08336533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp1\\htdocs\\NewWeb\\smartyversion\\Smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if (!empty($_smarty_tpl->tpl_vars['detail']->value[0]['judul'])) {?>
    <title><?php echo $_smarty_tpl->tpl_vars['detail']->value[0]['judul'];?>
 | PT. Capella Medan</title>    
    <input type="hidden" id="newsId" name="newsId" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <div class="container newsDetail">
            <p class="newsTitle wow lightSpeedIn"><?php echo $_smarty_tpl->tpl_vars['detail']->value[0]['judul'];?>
</p>
            <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/news/<?php echo $_smarty_tpl->tpl_vars['detail']->value[0]['gambar'];?>
" alt="" class="wow zoomIn">
            <div class="date my-2 wow zoomInUp">
                <i class="far fa-calendar-check mr-2"></i>
                <span><?php echo $_smarty_tpl->tpl_vars['detail']->value[0]['tanggal'];?>
</span>
            </div>
            <div class="newsContent">
                <?php echo $_smarty_tpl->tpl_vars['detail']->value[0]['isi'];?>

            </div>
      <!--      <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.new.capelladaihatsu.co.id%2Findex.php%3Fpage%3Dnews%26id%3D<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&layout=button_count&size=large&appId=2469056813411686&width=102&height=28" width="102" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            -->


            <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.capelladaihatsu.co.id%2F%3Fng%3Dnews%2F<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&layout=button_count&size=large&appId=2469056813411686&width=102&height=28" width="102" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            <a href="" data-action="share/whatsapp/share" id="share_wa" style="display: inline-block"><img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/whatsapp.png" alt="" class="ml-2" style="width: 65%"></a>



    </div>

    <div class="container mb-3">
        <div class="row mt-5">
            <div class="col-md-12">
                <h5 class="wow fadeInDown" style="text-decoration:underline;">Berita</h5>
            </div>
        </div>
        <div class="row wow fadeIn" data-wow-delay="0.3s" id="news_sect">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                <div class="col-md-4 newsList">
                    <div class="card">
                        <div class="newsImg">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/news/<?php echo $_smarty_tpl->tpl_vars['rows']->value['gambar'];?>
" alt="" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <i class="far fa-calendar-check"></i>
                                <span><?php echo $_smarty_tpl->tpl_vars['rows']->value['tanggal'];?>
</span>
                            </div>
                            <div class="card-title text-uppercase font-weight-bold judul">
                                <?php echo $_smarty_tpl->tpl_vars['rows']->value['judul'];?>

                            </div>
                            <div class="card-text text-secondary isi">
                                <?php echo $_smarty_tpl->tpl_vars['rows']->value['isi'];?>

                            </div>
                            <div class="card-text pt-2 text-right">
                                <a href="?ng=news/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
/<?php echo smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['rows']->value['judul'], 'UTF-8'),' ','+');?>
">
                                    <button class="btn btn-success btn-sm">Selengkapnya &raquo;</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="row mb-3 mt-1">
            <div class="col-md-12 text-right wow fadeInLeft">
                <a href="?ng=news-all">Berita Lainnya &raquo;</a>
            </div>
        </div>
    </div>
<?php } else { ?>
    <title>Page Not Found</title>
    <h3><center>Maaf,Halaman Tidak Ditemukan !</center></h3>
<?php }
echo '<script'; ?>
>
    var x = document.getElementsByTagName('meta');
    var id = document.getElementById('newsId').value;
    for (i = 0; i < x.length; i++) {
        if (x[i].getAttribute('property') === "og:url") {
            $("#share_wa").attr("href","whatsapp://send?text=http://www.capelladaihatsu.co.id/?ng=news/"+id);
        }
    }
    $("div.newsContent p").addClass("wow fadeInUp");
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
