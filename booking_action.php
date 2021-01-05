<?php
	#if(!defined("root")){define("root",$_SERVER['DOCUMENT_ROOT']);}

    require 'PHPMailer/PHPMailerAutoload.php';
    require 'function.php';
	$dopopup = 0;
    require_once 'securimage/securimage.php';
    $securimage = new Securimage();
    
    #session_start();
	if(version_compare(phpversion(),'5.4.0','<')){if(session_id()==''){session_start();}}else{if(session_status()==PHP_SESSION_NONE){session_start();}}
	#error_reporting(1);
    #error_reporting (E_ALL ^ E_NOTICE);
	#error_reporting(E_ERROR | E_PARSE);
	echo'<xmp><pre>';print_r($_REQUEST);echo'</pre></xmp>';
    date_default_timezone_set("Asia/Bangkok");
	$arrayEl = array(0=>'nama', 'status', 'kota', 'no_handphone', 'email', 'no_polisi', 'model', 'tahun', 'kilometer', 'jenis_servis', 'tanggal', 'waktu', 'cabang', 'captcha');
	$err = array();
    $nama = htmlspecialchars(isset($_REQUEST["nama"])?trim($_REQUEST["nama"]):"");
	$status = isset($_REQUEST["status"])?trim($_REQUEST["status"]):"";
	$kota = htmlspecialchars(isset($_REQUEST["kota"])?$_REQUEST["kota"]:"");
	$no_handphone = htmlspecialchars(isset($_REQUEST["no_handphone"])?$_REQUEST["no_handphone"]:"");
	$email = htmlspecialchars(isset($_REQUEST["email"])?$_REQUEST["email"]:"");
	$no_polisi = htmlspecialchars(isset($_REQUEST["no_polisi"])?$_REQUEST["no_polisi"]:"");
	
	$model = isset($_REQUEST["model"])?$_REQUEST["model"]:"";
	$tahun = isset($_REQUEST["tahun"])?$_REQUEST["tahun"]:"";
	$kilometer = isset($_REQUEST["kilometer"])?$_REQUEST["kilometer"]:"";
	$jenis_servis = isset($_REQUEST["jenis_servis"])?$_REQUEST["jenis_servis"]:"";
	$tanggal = isset($_REQUEST["tanggal"])?$_REQUEST["tanggal"]:"";
	$waktu = isset($_REQUEST["waktu"])?$_REQUEST["waktu"]:"";
	$cabang = isset($_REQUEST["cabang"])?$_REQUEST["cabang"]:"";
	$permasalahan = isset($_REQUEST["permasalahan"])?$_REQUEST["permasalahan"]:"";
	$kirim=query("SELECT * FROM contact_service WHERE kdcab='$cabang' ");
	foreach($kirim as $data) {
		$kirim_email=$data['email'];
		$kirim_nama=$data['nama'];
        $kirim_cc=$data['cc'];
	}
            
	if ($nama=="" || $status=="" || $kota=="" || $no_handphone=="" || $email=="" || $no_polisi=="" || $model=="" || $tahun=="" || $kilometer=="" || $tanggal=="" || $waktu=="" || $cabang=="") {
		if ($nama=="") 			{$err['nama']=			'Nama harus diisi';}
		if ($status=="") 		{$err['status']=		'Status harus dipilih';}
		if ($kota=="") 			{$err['kota']=			'Kota harus dipilih';}
		if ($no_handphone=="") 	{$err['no_handphone']=	'No. Handphone harus diisi';}
		if ($email=="") 		{$err['email']=			'Email harus diisi';}
		if ($no_polisi=="") 	{$err['no_polisi']=		'No. Polisi harus diisi';}
		if ($model=="") 		{$err['model']=			'Model harus dipilih';}
		if ($tahun=="") 		{$err['tahun']=			'Tahun harus dipilih';}
		if ($kilometer=="") 	{$err['kilometer']=		'Kilometer harus diisi';}
		if ($tanggal=="") 		{$err['tanggal']=		'Tanggal harus diisi';}
		if ($waktu=="") 		{$err['waktu']=			'Waktu harus diisi';}
		if ($cabang=="") 		{$err['cabang']=		'Cabang harus dipilih';}
	}
    
	if (count($err)==0) {
		if (!is_numeric($no_handphone)) 			 {$err['no_handphone'] = 'No. Handphone harus berupa angka';}
		// if (!check_email_address($email)) 			 {$err['email'] ='Email harus valid';}
		if (!is_numeric($kilometer)) 				 {$err['kilometer'] = 'Kilometer harus berupa angka';}
		if (is_numeric($kilometer) && $kilometer<=0) {$err['kilometer'] = 'Kilometer harus lebih besar dari 0';}
	}
    /*
    if (count($err)==0) {
		$bolehAwal = strtotime(date('d-M-Y H:i:s', strtotime($tanggal.' 08:00')));
		$bolehAkhir = strtotime(date('d-M-Y H:i:s', strtotime($tanggal.' 15:00')));
		$bolehGa = strtotime(date('d-M-Y H:i:s', strtotime($tanggal.' '.$waktu)));
		#echo $bolehAwal.'<br/>';
		#echo $bolehAkhir.'<br/>';
		#echo $bolehGa.'<br/>';
		if ($bolehGa >= $bolehAwal && $bolehGa <= $bolehAkhir) {
			#echo 'boleh donk';
		} else {
			#echo 'ga boleh';
			$err['waktu'] = 'Waktu hanya boleh dari 08:00 s/d 15:00 WIB';
		}
	}
    */
    #
    if(count($err)==0){
        $cektanggal = date('Y-m-d');
        if($cektanggal == $tanggal){
            $err['tanggal'] = "Booking harus dilakukan 1 hari sebelum kedatangan";
        }
    }
    if(count($err)==0){
        $minjam = date("H");
        $minhari = date('Y-m-d', strtotime("tomorrow"));
        if($minjam>=16 && $tanggal==$minhari){
            $err['waktu'] = 'Booking tidak dapat dilakukan karena jadwal di jam ini sudah penuh';
//			if($waktu<>"Periode 5"){
//				$err['waktu'] = 'Booking tidak dapat dilakukan karena jadwal di jam ini sudah penuh';
//			}
        }
    }
    if(count($err)==0){
        $cekhari = date("D");
        $cektanggal = date('Y-m-d',strtotime("tomorrow")); 
        $cektanggal2 = date('Y-m-d');
        $libur = query("SELECT * FROM holiday WHERE tanggal_libur = '$cektanggal2'");
        if($cekhari == "Sun" && $cektanggal == $tanggal || $libur && $cektanggal == $tanggal){
            $err['tanggal'] = 'Booking tidak dapat dilakukan karena jadwal di hari ini sudah penuh';
        }
    }
    if(count($err)==0){
        $libur = query("SELECT * FROM holiday WHERE tanggal_libur = '$tanggal'");
        $hari = date("D",strtotime($tanggal));
        if($hari == "Sun" || $libur){
            $err['tanggal'] = 'Bengkel tutup pada Hari Minggu & Hari Libur Nasional';
        }
    }
    if (count($err)==0) {
		$tanggal_unix = strtotime(date('d-M-Y', strtotime($tanggal)));
		$rsc = array(); 
        $qc = "SELECT * FROM list_booking WHERE tanggal_unix='".$tanggal_unix."' AND waktu='".$waktu."' AND cabang='".$cabang."' " ;
		callRS($rsc, $qc);
		if (count($rsc)>3) {
			$err['waktu'] = 'Booking tidak dapat dilakukan karena jadwal di jam ini sudah penuh';
		}
	}
    
    if ($securimage->check($_POST['captcha_code']) == false) {
        echo "The security code entered was incorrect.<br /><br />";
        echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
        $err['captcha'] = 'Kesalahan memasukkan Captcha';
        //exit;
    }
	
    if (count($err)==0) {
        $tanggal_unix = strtotime(date('d-M-Y', strtotime($tanggal)));
        $rsp=array(); $qp = "SELECT * FROM list_booking WHERE no_polisi='$no_polisi' AND tanggal_unix = '$tanggal_unix'";
        callRS($rsp, $qp);
        if (count($rsp)==0) {
			//Initial Variable
			$no_polisi = strtoupper($no_polisi);
            //Cek No Booking
            $rsc = array(); 
            $qc = "SELECT * FROM list_booking WHERE tanggal_unix='".strtotime(date('d-M-Y', strtotime($tanggal)))."' AND cabang='".$cabang."' " ;
            callRS($rsc, $qc);
            $isitgl = str_replace('-','/',$tanggal);
            $noBook="BOOKING/".$cabang.'/'.$isitgl.'/'.sprintf('%02d',count($rsc)+1);
            // end Cek No Booking
            
            $qi = "INSERT INTO list_booking (kdbooking,nama, status, kota, no_handphone, email, no_polisi, model, tahun, kilometer, jenis_servis, tanggal_unix, tanggal, waktu, cabang, permasalahan)
                VALUES ('$noBook', '$nama', '$status', '$kota', '$no_handphone', '$email', '$no_polisi', '$model', '$tahun', '$kilometer', '$jenis_servis', '$tanggal_unix', '$tanggal', '$waktu' , '$cabang', '$permasalahan')";
            execRS($qi);

            # RS = result set
            $rsp=array(); $qp = "SELECT * FROM list_booking WHERE no_polisi='$no_polisi' AND tanggal_unix = '$tanggal_unix';";
            callRS($rsp, $qp);

            echo'<xmp><pre>';print_r($rsp);echo'</pre></xmp>';
            #contoh: $no_polisi = $rsp[0]["no_polisi"];
            $isiwaktu="aa";
            if($rsp[0]["waktu"]=="Periode 1"){
                $isiwaktu="08.00-09.00";
            }else if ($rsp[0]["waktu"]=="Periode 2"){
                $isiwaktu="09.00-10.00";
            }
            else if ($rsp[0]["waktu"]=="Periode 3"){
                $isiwaktu="10.00-11.00";
            }
            else if ($rsp[0]["waktu"]=="Periode 4"){
                $isiwaktu="11.00-12.00";
            }
            else if ($rsp[0]["waktu"]=="Periode 5"){
                $isiwaktu="14.00-15.00";
            }
            ##########################################################################################################
                $mail = new PHPMailer;
                $mail->SMTPDebug = 2;
                $mail->isSMTP();
                $mail->SMTPOptions = array(
                        'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
                $mail->Host = '';
                $mail->SMTPAuth = true;
                $mail->Username = '';
                $mail->Password = '';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
                $mail->From = 'info@capelladaihatsu.co.id';
                $mail->FromName = 'Capella Medan';
                $mail->addAddress($kirim_email, $kirim_nama);
                $mail->addReplyTo('cmcro.ho@gmail.com', 'CMCRO HO');
                /*$mail->addReplyTo('wiga020700@gmail.com','Wilson Angga');*/
                # CC = carbon copy
                $mail->addCC($kirim_cc);
                # BCC = black carbon copy
                $mail->addBCC('cmcro.ho@gmail.com');
                /*$mail->addBCC('wiga020700@gmail.com','Wilson Angga');*/
                $mail->isHTML(true);
                $mail->Subject = 'Booking Service';
                $mail->Body    = '<table style="width:100%; margin:0px auto;">
                                        <tr>
                                            <td style="width:35%;">Kode_Booking</td>
                                            <td>: '.$rsp[0]["kdbooking"].'</td>
                                        </tr> 
                                        <tr>
                                            <td>Nama</td>
                                            <td>: '.$rsp[0]["nama"].'</td>
                                        </tr> 
                                        <tr>
                                            <td>Status</td>  
                                            <td>: '.$rsp[0]["status"].'</td>
                                        </tr>   
                                        <tr>
                                            <td>Kota</td>     
                                            <td>: '.$rsp[0]["kota"].'</td>
                                        </tr>    
                                        <tr>
                                            <td>No. Handphone</td>
                                            <td>: '.$rsp[0]["no_handphone"].'</td>
                                        </tr> 
                                        <tr>
                                            <td>Email</td>     
                                            <td>: '.$rsp[0]["email"].'</td>
                                        </tr>    
                                        <tr>
                                            <td>No. Polisi</td>  
                                            <td>: '.$rsp[0]["no_polisi"].'</td>
                                        </tr>               
                                        <tr>
                                            <td>Model</td>     
                                            <td>: '.$rsp[0]["model"].'</td>
                                        </tr>
                                        <tr>
                                            <td>Tahun</td>    
                                            <td>: '.$rsp[0]["tahun"].'</td>
                                        </tr>
                                        <tr>
                                            <td>Kilometer</td>    
                                            <td>: '.$rsp[0]["kilometer"].' KM</td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Servis</td>  
                                            <td>: '.$rsp[0]["jenis_servis"].'</td>
                                        </tr>
                                        <tr>
                                            <td>Cabang</td>
                                            <td>: '.$rsp[0]["cabang"].'</td>
                                        </tr>    
                                        <tr>
                                            <td>Permasalahan</td>      
                                            <td>: '.$rsp[0]["permasalahan"].'</td>
                                        </tr>                           
                                        <tr>
                                            <td colspan="2">
                                                <br>
                                                Sudah melakukan booking pada
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Tanggal
                                            </td>
                                            <td>
                                                : '.date('d-M-Y', $rsp[0]["tanggal_unix"]).'
                                            </td>
                                        </tr>   
                                        <tr>
                                            <td>Waktu</td>
                                            <td>: '.$isiwaktu.'</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                Mohon untuk menghubungi contact person diatas untuk melakukan konfirmasi.      
                                            </td>
                                        </tr>
                                  </table>';
                /*$mail->Body    = '<table>
                                      <tr>
                                      Nama : '.$rsp[0]["nama"].'<br>
                                      </tr>
                                      Status : '.$rsp[0]["status"].'<br>
                                      Kota : '.$rsp[0]["kota"].'<br>
                                      No. Handphone : '.$rsp[0]["no_handphone"].'<br>
                                      Email : '.$rsp[0]["email"].'<br>
                                      No. Polisi : '.$rsp[0]["no_polisi"].'<br>
                                      Model : '.$rsp[0]["model"].'<br>
                                      Tahun : '.$rsp[0]["tahun"].'<br>
                                      Kilometer : '.$rsp[0]["kilometer"].'<br>
                                      Jenis Servis : '.$rsp[0]["jenis_servis"].' '.$rsp[0]["others"].'<br>
                                      Cabang : '.$rsp[0]["cabang"].'<br>
                                      Permasalahan: '.$rsp[0]["permasalahan"].'<br>
                                      Sudah melakukan booking pada<br> 
                                      Tanggal : '.date('d-M-Y H:i:s', $rsp[0]["tanggal_unix"]).'<br/>
                                      Mohon untuk menghubungi contact person diatas untuk melakukan konfirmasi.
                                  </table>
                                  ';*/
                #$mail->AltBody = '';
                $mail->send();
                $mail->ClearAllRecipients();
                $mail->ClearReplyTos();
                $mail->addAddress($rsp[0]["email"], $rsp[0]["nama"]);
                $mail->addReplyTo($kirim_email, $kirim_nama);
                $mail->Body    = '<div>Terimakasih telah melakukan booking service dengan rincian berikut ini :</div>
                <table>
                    <tr>
                        <td style="width:35%;">Kode_Booking</td>
                        <td>: '.$rsp[0]["kdbooking"].'</td>
                    </tr>
                    <tr>
                        <td>
                            Tanggal
                        </td>
                        <td>
                            : '.date('d-M-Y', $rsp[0]["tanggal_unix"]).'
                        </td>
                    </tr>   
                    <tr>
                        <td>Waktu</td>
                        <td>: '.$isiwaktu.'</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            Silahkan tunjukkan email ini pada saat datang ke bengkel. Terimakasih.   
                        </td>
                    </tr>
                </table>';
                if(!$mail->send()) {
                    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
                    #echo '<script type="text/javascript">alert("'.$mail->ErrorInfo.'")</script>';
                } else {
                    $terkirim = 1;
                    #echo '<script type="text/javascript">alert("tersend")</script>';
                    echo 'Message has been sent';
                    echo '<script type="text/javascript">';
                        echo 'parent.hideloader();parent.doPopup("'.$rsp[0]["kdbooking"].'")';
                    echo '</script>';
                }
             ##########################################################################################################
        } # end if (count($rsp)==0))
        else {
            $err['no_polisi'] = 'Anda telah melakukan booking untuk No. Polisi yang sama di hari yang sama.';
        }
    } 
	if (count($err)!=0) {
		echo '<script type="text/javascript">';
            echo 'parent.hideloader();parent.reloadCaptcha("captcha_refresh_bs");';
			for ($j=0;$j<count($arrayEl);$j++) {
				echo 'parent.emptyError("'.$arrayEl[$j].'");';
			}
			foreach($err AS $ee => $ff) {
				if (isset($ff)) {
					echo 'parent.showError("'.$ee.'", "'.$ff.'");';
				}
			}
		echo '</script>';
	}
	#echo'<xmp><pre>';print_r($err);echo'</pre></xmp>';
	
	exit;
?>