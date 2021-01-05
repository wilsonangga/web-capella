{include file="header.tpl"}
    <title>Booking Service | PT. Capella Medan</title>
    <div class="form-group"><img src="{$_url}images/banner.jpg" alt="service" class="w-100"></div>
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
                            <img src="{$_url}images/capella.png" alt="capella" class="d-block mx-auto w-15">
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
                <img src="{$_url}images/capella.png" alt="capella" class="popup">
                <p class="isipopup" id="isipopup"></p>
                <a href="" onclick="window.location='index.php?page=booking';return false;"><button class="form-control confirm">OK</button></a>
            </div>
-->
            <div class="row m-5">
                <div class="mt-5">
                    <img src="{$_url}images/logobooking.png" alt="logo-booking" style="width:65%">
                </div>
            </div>
            <div class="row m-3">
                <div class="col-sm-6">
                   <!--Data Pribadi-->
                    <div>     
                        <img src="{$_url}images/datapribadi.png" alt="data-pribadi" class="simbol">
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
                            {foreach $city as $rows}
                                <option value="{$rows.name}">{$rows.name}</option>
                            {/foreach}
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
                        <img src="{$_url}images/datakendaraan.png" alt="data-kendaraan" class="simbol">
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
                            {foreach $product as $rows}
                                <option value="{$rows.nama}">{$rows.nama}</option>
                            {/foreach}
                            <option value="Others">Others</option>
                        </select>
						<div class="err model"></div>
                    </div>     
                             
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <select name="tahun" id="tahun" class="form-control">
                            <option value="">- Pilih tahun mobil -</option>
                            {for $i=2005 to $smarty.now|date_format:"%Y"}
                                <option value="{$i}">{$i}</option> 
                            {/for}
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
                    <img src="{$_url}images/informasiservis.png" alt="informasi-servis" class="simbol">
                    <span class="header">
                        Informasi Servis
                    </span>
                    <!--jenis servis-->
                    <div class="form-group mt-3">
                        <label for="jenis_servis">Jenis Servis</label>    
                        <select name="jenis_servis" id="jenis_servis" class="form-control">
                            <option value="">- Pilih jenis servis -</option>
                            {foreach $service as $rows}
                                <option value="{$rows.servis}">{$rows.servis}</option>
                            {/foreach}
                        </select>
						<div class="err jenis_servis"></div>
                    </div>
                    
                    
                   
                    
                    <div class="form-group">
                        <label for="taggal">Tanggal Datang</label>
                        <input type="date" id="tanggal" min="{$mintgl}" name="tanggal" class="form-control" onkeydown="return false">
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
                            {foreach $contact as $rows}
                                <option value="{$rows.kdcab}">{$rows.cabang}</option>
                            {/foreach}
                        </select>
						<div class="err cabang"></div>
                    </div>
                    <div class="form-group">
                        <label for="permasalahan">Permasalahan</label>
                        <textarea type="text" name="permasalahan" id="permasalahan" class="form-control"></textarea>
						<div class="err permasalahan"></div>
                    </div>
                    <div id="captcha_refresh_bs">
                        {$captcha1}
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
    
    {assign var="viewFrame" value=1}
        {if $viewFrame eq 1} 
            <iframe name="frame_action" id="frame_action" src="kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
        {else}
            <iframe name="frame_action" id="frame_action" src="kosong.php" width="100%" height="10" style="overflow:hidden;" visibility="hidden" scrolling="no" frameborder="0"></iframe>
        {/if}
	<div style="display:none;"></div>
    <script type="text/javascript">
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
        
    </script>
{include file="footer.tpl"}