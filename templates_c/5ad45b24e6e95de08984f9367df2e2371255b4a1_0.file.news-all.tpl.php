<?php
/* Smarty version 3.1.33, created on 2020-11-19 08:41:46
  from 'D:\xampp1\htdocs\NewWeb\smarty version\templates\news-all.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fb5cd5a0b70b7_59269219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ad45b24e6e95de08984f9367df2e2371255b4a1' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\NewWeb\\smarty version\\templates\\news-all.tpl',
      1 => 1605750096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb5cd5a0b70b7_59269219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp1\\htdocs\\NewWeb\\smartyversion\\Smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<title>Berita Lainnya | PT. Capella Medan</title>
<div class="container my-3">
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
            <div class="col-md-4 newsList mb-4">
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
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
