<?php
/* Smarty version 3.1.33, created on 2020-04-22 09:32:08
  from 'D:\xampp1\htdocs\NewWeb\smarty version\templates\booking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e9faca8f2f358_54096987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fbfc9582156c8a903fe81a8fd4c9b785bcf6cd9' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\NewWeb\\smarty version\\templates\\booking.tpl',
      1 => 1587522727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e9faca8f2f358_54096987 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp1\\htdocs\\NewWeb\\smartyversion\\Smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <title>Booking Service | PT. Capella Medan</title>
    <div class="form-group"><img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/banner.jpg" alt="service" class="w-100"></div>
    <div class="modal fade mt-5" id="booking" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h3 class="text-light">Booking Service</h3>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">

                        <div class="modal-title">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto w-15">
                            <p class="isipopup mt-3" id="isipopup"></p>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <form action="booking_action.php" target="frame_action" method="post">
        <div class="container booking my-5">
            <div id="popbg" onclick="cancelPopup();return false;"></div>
<!--
            <div id="popup">
                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="popup">
                <p class="isipopup" id="isipopup"></p>
                <a href="" onclick="window.location='index.php?page=booking';return false;"><button class="form-control confirm">OK</button></a>
            </div>
-->
            <div class="row m-5">
                <div class="mt-5">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/logobooking.png" alt="logo-booking" style="width:65%">
                </div>
            </div>
            <div class="row m-3">
                <div class="col-sm-6">
                   <!--Data Pribadi-->
                    <div>     
                        <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/datapribadi.png" alt="data-pribadi" class="simbol">
                        <span class="header">
                            Data Pribadi
                        </span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" placeholder="NAMA LENGKAP" class="form-control" required autofocus />
						<div class="err nama"></div>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="">- Pilih status member -</option>
                            <option value="Member">Member</option>
                            <option value="Non-Member">Non-Member</option>
                        </select>
						<div class="err status"></div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="kota">Kota</label>
                        <select name="kota" id="kota" class="form-control">
                            <option value="">- Pilih kota -</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['city']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['name'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
						<div class="err kota"></div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="no_handphone">No. Handphone</label>
                        <input type="tel" name="no_handphone" id="no_handphone" class="form-control" placeholder="NO. HANDPHONE" required />
						<div class="err no_handphone"></div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="EMAIL AKTIF" required />
                        <div class="err email"></div>
                    </div>        
                       
                       
                       
                       
                    <!--Data Kendaraan-->
                    <div class="mt-4 mb-2">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/datakendaraan.png" alt="data-kendaraan" class="simbol">
                        <span  class="header">
                            Data Kendaraan
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="no_polisi">No. Polisi</label>
                        <input type="text" name="no_polisi" id="no_polisi" class="form-control nopol" placeholder="NO. POLISI" required />
						<div class="err no_polisi"></div>
                    </div>
                    
                    <div class="form-group">
                        <label for="model">Model/Type</label>
                        <select name="model" id="model" class="form-control">
                            <option value="">- Pilih model -</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['nama'];?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['nama'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <option value="Others">Others</option>
                        </select>
						<div class="err model"></div>
                    </div>     
                             
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <select name="tahun" id="tahun" class="form-control">
                            <option value="">- Pilih tahun mobil -</option>
                            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? smarty_modifier_date_format(time(),"%Y")+1 - (2005) : 2005-(smarty_modifier_date_format(time(),"%Y"))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 2005, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option> 
                            <?php }
}
?>
                        </select>
						<div class="err tahun"></div>
                    </div>  
                    
                    <div class="form-group mb-4">
                        <label for="kilometer">Kilometer</label>
                        <input type="number" name="kilometer" id="kilometer" class="form-control km" placeholder="KILOMETER KENDARAAN" min=0 required />
						<div class="err kilometer"></div>
                    </div>      
                </div>
                
                <div class="col-sm-6">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/informasiservis.png" alt="informasi-servis" class="simbol">
                    <span class="header">
                        Informasi Servis
                    </span>
                    <!--jenis servis-->
                    <div class="form-group mt-3">
                        <label for="jenis_servis">Jenis Servis</label>    
                        <select name="jenis_servis" id="jenis_servis" class="form-control">
                            <option value="">- Pilih jenis servis -</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['service']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['servis'];?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['servis'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
						<div class="err jenis_servis"></div>
                    </div>
                    
                    
                   
                    
                    <div class="form-group">
                        <label for="taggal">Tanggal Datang</label>
                        <input type="date" id="tanggal" min="<?php echo $_smarty_tpl->tpl_vars['mintgl']->value;?>
" name="tanggal" class="form-control" onkeydown="return false">
						<div class="err tanggal"></div>
                    </div>
                    <div class="form-group">
                        <label for="waktu">Jam Datang</label>
                        <select name="waktu" id="waktu" class="form-control" onchange="fungsiWaktu()">
                            <option value="">- Pilih waktu -</option>
                            <option value="Periode 1">08.00 - 09.00</option>
                            <option value="Periode 2">09.00 - 10.00</option>
                            <option value="Periode 3">10.00 - 11.00</option>
                            <option value="Periode 4" >11.00 - 12.00</option>
                            <option value="Periode 5">14.00 - 15.00</option>
                        </select>
						<div class="err waktu"></div>
                    </div>
                    
                    <div class="form-group">
                        <label for="cabang">Cabang</label>
                        <select name="cabang" id="cabang" class="form-control">
                            <option value="">- Pilih cabang -</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['kdcab'];?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['cabang'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
						<div class="err cabang"></div>
                    </div>
                    <div class="form-group">
                        <label for="permasalahan">Permasalahan</label>
                        <textarea type="text" name="permasalahan" id="permasalahan" class="form-control"></textarea>
						<div class="err permasalahan"></div>
                    </div>
                    <div id="captcha_refresh_bs">
                        <?php echo $_smarty_tpl->tpl_vars['captcha1']->value;?>

                        <div class="err captcha"></div>
                    </div>
                    <!-- button -->   
                    <div class="form-group mt-3">
                        <!--<a href="#" onclick="doPopup();return false;">-->
                        <button type="submit" name="submit" id="submit" class="form-control submit" onclick="loaderBS()">Submit</button>
                        <button type="Reset" name="reset" class="form-control reset">Reset</button>
                        <!--</a>-->
                    </div>
                </div>
            </div>
        </div>
    </form>
    
    <?php $_smarty_tpl->_assignInScope('viewFrame', 1);?>
        <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
            <iframe name="frame_action" id="frame_action" src="kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
        <?php } else { ?>
            <iframe name="frame_action" id="frame_action" src="kosong.php" width="100%" height="10" style="overflow:hidden;" visibility="hidden" scrolling="no" frameborder="0"></iframe>
        <?php }?>
	<div style="display:none;"></div>
    <?php echo '<script'; ?>
 type="text/javascript">
        /*function emptyError(parEl){
			$(".err."+ parEl +"").html("");
		}
		function showError(parEl, parMsg) {
			$("."+ parEl +"").html(parMsg);
			reloadCaptcha();
		}
		function reloadCaptcha()
		{
			document.getElementById("refresh_btn").click();
		}
        function loader(){
            $('#loader').show();
        }
        function hideloader(){
            setTimeout(function() {
                $("#loader").hide();
            }, 2000);
        }*/
        function doPopup(varMsg){
            var isi="Terimakasih telah melakukan booking service. Informasi sudah kami terima. Anda akan segera dihubungi oleh pihak kami untuk konfirmasi. No. Booking Anda : <br>"+"<p style='color:red; font-weight:bold;'>"+varMsg+"</p>";
            $("#isipopup").html(isi);
            $("#booking").modal("show");
			$("#popbg").fadeIn(200, function(){
				$("#popup").fadeIn(200);
			});
            //document.getElementById("popbg").style.display='block';
            //document.getElementById("popup").style.display='block';
        }
//        function cancelPopup(){
//			$("#popup").fadeOut(300, function(){
//				$("#popbg").fadeOut(300);
//			});
//            window.location='index.php?page=booking';
//            return false;
//            //document.getElementById("popbg").style.display='none';
//            //document.getElementById("popup").style.display='none';
//        }
        function fungsiWaktu() {
            var x = document.getElementById("waktu").value;
            if(x=='Periode 4'){
                 if (!confirm("Untuk booking pukul 11.00 - 12.00, mobil akan dilayani pada pukul 13.00")) {
                    x="";
                 }
                document.getElementById("waktu").value = x;
            }
        }
        $('#booking').on('hidden.bs.modal', function () {
            location.reload();
        })
        $("#kota").select2({
            placeholder: 'Select an option'
        });    
        
    <?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
