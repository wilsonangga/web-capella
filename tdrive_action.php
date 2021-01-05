<?php
    require 'PHPMailer/PHPMailerAutoload.php';
    require 'function.php';
    require_once 'securimage/securimage.php';
    if(version_compare(phpversion(),'5.4.0','<')){if(session_id()==''){session_start();}}else{if(session_status()==PHP_SESSION_NONE){session_start();}}
    echo'<xmp><pre>';print_r($_REQUEST);echo'</pre></xmp>';
    $securimage1 = new Securimage(array('namespace' => 'tdrive'));
    date_default_timezone_set("Asia/Bangkok");
	$arrayEl = array(0=>'nama_td', 'no_hp', 'email_td', 'kota_td','cabang_td', 'tgl_td', 'wkt_td', 'mobil_td', 'captcha_code_tdrive');
	$err = array();
    $nama_td = htmlspecialchars(isset($_REQUEST["nama_td"])?trim($_REQUEST["nama_td"]):"");
    $no_hp = htmlspecialchars(isset($_REQUEST["no_hp"])?trim($_REQUEST["no_hp"]):"");
    $email_td = htmlspecialchars(isset($_REQUEST["email_td"])?trim($_REQUEST["email_td"]):"");
    $kota_td = htmlspecialchars(isset($_REQUEST["kota_td"])?trim($_REQUEST["kota_td"]):"");
    $cabang_td = htmlspecialchars(isset($_REQUEST["cabang_td"])?trim($_REQUEST["cabang_td"]):"");
    $tgl_td = htmlspecialchars(isset($_REQUEST["tgl_td"])?trim($_REQUEST["tgl_td"]):"");
    $wkt_td = htmlspecialchars(isset($_REQUEST["wkt_td"])?trim($_REQUEST["wkt_td"]):"");
    $mobil_td = htmlspecialchars(isset($_REQUEST["mobil_td"])?trim($_REQUEST["mobil_td"]):"");
    $kirim = query("SELECT * FROM contact_kacab WHERE kdcab='".$cabang_td."' ");
	foreach($kirim as $data) {
		$kirim_email=$data['email'];
		$kirim_nama=$data['nama'];
	}

    if ($nama_td=="" || $no_hp=="" || $email_td=="" || $kota_td=="" || $cabang_td=="" || $tgl_td=="" || $wkt_td=="" || $mobil_td=="") {
		if ($nama_td=="") 			{$err['nama_td']=			'Nama harus diisi';}
		if ($no_hp=="") 		    {$err['no_hp']=		        'No. Handphone harus diisi';}
		if ($email_td=="") 			{$err['email_td']=			'Email harus diisi';}
		if ($kota_td=="") 	        {$err['kota_td']=	        'Kota harus dipilih';}
		if ($cabang_td=="") 		{$err['cabang_td']=			'Cabang harus dipilih';}
		if ($tgl_td=="") 	        {$err['tgl_td']=		    'Tanggal harus diisi';}
		if ($wkt_td=="") 		    {$err['wkt_td']=			'Waktu harus diisi';}
		if ($mobil_td=="") 		    {$err['mobil_td']=			'Mobil harus dipilih';}
	}
    
    if (count($err)==0) {
		if (!is_numeric($no_hp)) 			{$err['no_hp'] = 'No. Handphone harus berupa angka';}
		// if (!check_email_address($email_td)) 			{$err['email_td'] ='Email harus valid';}
	}

    if(count($err)==0){
        $hari = date("D",strtotime($tgl_td));
        if($hari == "Sun"){
            $err['tgl_td'] = 'Showroom tutup pada Hari Minggu & Hari Libur Nasional';
        }
    }
    if ($securimage1->check($_POST['captcha_code_tdrive']) == false) {
        echo "The security code entered was incorrect.<br /><br />";
        echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
        $err['captcha_code_tdrive'] = 'Kesalahan memasukkan Captcha';
        //exit;
    }
    if (count($err)==0) {
       /* $rsp=array(); $qp = "SELECT * FROM list_test_drive WHERE tanggal='$tgl_td' AND cabang='$cabang_td'";
        callRS($rsp, $qp);*/
        $rsc = array(); 
        $qc = "SELECT * FROM list_test_drive WHERE tanggal='".$tgl_td."' AND cabang='".$cabang_td."' " ;
        callRS($rsc, $qc);
        $isitgl = str_replace('-','/',$tgl_td);
        $kdtdrive = "TDRIVE/".$cabang_td.'/'.$isitgl.'/'.sprintf('%02d',count($rsc)+1);
        $qi = "INSERT INTO list_test_drive (id,kdtdrive,nama,no_hp,email,kota,cabang,tanggal,waktu,mobil)
            VALUES ('','$kdtdrive','$nama_td', '$no_hp', '$email_td', '$kota_td', '$cabang_td', '$tgl_td', '$wkt_td', '$mobil_td')";
        execRS($qi);
        $mobil = query("SELECT nama FROM product WHERE id = '$mobil_td'");
        $isiwaktu="aa";
        if($wkt_td=="Periode 1"){
            $isiwaktu="08.00-09.00";
        }else if ($wkt_td=="Periode 2"){
            $isiwaktu="09.00-10.00";
        }
        else if ($wkt_td=="Periode 3"){
            $isiwaktu="10.00-11.00";
        }
        else if ($wkt_td=="Periode 4"){
            $isiwaktu="11.00-12.00";
        }
        else if ($wkt_td=="Periode 5"){
            $isiwaktu="14.00-15.00";
        }
        else if ($wkt_td=="Periode 6"){
            $isiwaktu="15.00-16.00";
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
            $mail->addReplyTo($email_td, $nama_td);
            # CC = carbon copy
            //$mail->addCC($kirim_cc);
            # BCC = black carbon copy
            /*$mail->addBCC('angcungsen@gmail.com');*/
            $mail->isHTML(true);
            $mail->Subject = 'Test Drive';
            $mail->Body    = '<table style="width:100%; margin:0px auto;">
                                    <tr>
                                        <td style="width:40%;">Kode Test Drive</td>
                                        <td>: '.$kdtdrive.'</td>
                                    </tr> 
                                    <tr>
                                        <td>Nama</td>
                                        <td>: '.$nama_td.'</td>
                                    </tr> 
                                    <tr>
                                        <td>No. Handphone</td>  
                                        <td>: '.$no_hp.'</td>
                                    </tr>   
                                    <tr>
                                        <td>Email</td>     
                                        <td>: '.$email_td.'</td>
                                    </tr>    
                                    <tr>
                                        <td>Kota</td>
                                        <td>: '.$kota_td.'</td>
                                    </tr> 
                                    <tr>
                                        <td>Cabang</td>     
                                        <td>: '.$cabang_td.'</td>
                                    </tr>
                                    <tr>
                                        <td>Mobil</td>    
                                        <td>: '.$mobil[0]['nama'].'</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><br>Telah melakukan booking test drive pada : </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>  
                                        <td>: '.$tgl_td.'</td>
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
            $mail->send();
            $mail->ClearAllRecipients();
            $mail->ClearReplyTos();
            $mail->addAddress($email_td, $nama_td);
            $mail->addReplyTo($kirim_email, $kirim_nama);
            $mail->Body    = '<div>Terimakasih telah melakukan booking test drive dengan rincian berikut ini :</div>
            <table>
                <tr>
                    <td style="width:35%;">Kode Booking</td>
                    <td>: '.$kdtdrive.'</td>
                </tr>
                <tr>
                    <td>
                        Tanggal
                    </td>
                    <td>
                        : '.$tgl_td.'
                    </td>
                </tr>   
                <tr>
                    <td>Waktu</td>
                    <td>: '.$isiwaktu.'</td>
                </tr>
                <tr>
                    <td>Mobil</td>
                    <td>: '.$mobil[0]['nama'].'</td>
                </tr>
                <tr>
                    <td colspan="2">
                        Silahkan tunjukkan email ini pada saat datang ke Showroom. Terimakasih.   
                    </td>
                </tr>
            </table>';
//        $mail->Body    = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
//
//<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
//<head>
//<!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
//<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
//<meta content="width=device-width" name="viewport"/>
//<!--[if !mso]><!-->
//<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
//<!--<![endif]-->
//<title></title>
//<!--[if !mso]><!-->
//<!--<![endif]-->
//<style type="text/css">
//		body {
//			margin: 0;
//			padding: 0;
//		}
//
//		table,
//		td,
//		tr {
//			vertical-align: top;
//			border-collapse: collapse;
//		}
//
//		* {
//			line-height: inherit;
//		}
//
//		a[x-apple-data-detectors=true] {
//			color: inherit !important;
//			text-decoration: none !important;
//		}
//	</style>
//<style id="media-query" type="text/css">
//		@media (max-width: 585px) {
//
//			.block-grid,
//			.col {
//				min-width: 320px !important;
//				max-width: 100% !important;
//				display: block !important;
//			}
//
//			.block-grid {
//				width: 100% !important;
//			}
//
//			.col {
//				width: 100% !important;
//			}
//
//			.col>div {
//				margin: 0 auto;
//			}
//
//			img.fullwidth,
//			img.fullwidthOnMobile {
//				max-width: 100% !important;
//			}
//
//			.no-stack .col {
//				min-width: 0 !important;
//				display: table-cell !important;
//			}
//
//			.no-stack.two-up .col {
//				width: 50% !important;
//			}
//
//			.no-stack .col.num4 {
//				width: 33% !important;
//			}
//
//			.no-stack .col.num8 {
//				width: 66% !important;
//			}
//
//			.no-stack .col.num4 {
//				width: 33% !important;
//			}
//
//			.no-stack .col.num3 {
//				width: 25% !important;
//			}
//
//			.no-stack .col.num6 {
//				width: 50% !important;
//			}
//
//			.no-stack .col.num9 {
//				width: 75% !important;
//			}
//
//			.video-block {
//				max-width: none !important;
//			}
//
//			.mobile_hide {
//				min-height: 0px;
//				max-height: 0px;
//				max-width: 0px;
//				display: none;
//				overflow: hidden;
//				font-size: 0px;
//			}
//
//			.desktop_hide {
//				display: block !important;
//				max-height: none !important;
//			}
//		}
//	</style>
//</head>
//<body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #3a3d46;">
//<!--[if IE]><div class="ie-browser"><![endif]-->
//<table bgcolor="#3a3d46" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="table-layout: fixed; vertical-align: top; min-width: 320px; Margin: 0 auto; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #3a3d46; width: 100%;" valign="top" width="100%">
//<tbody>
//<tr style="vertical-align: top;" valign="top">
//<td style="word-break: break-word; vertical-align: top;" valign="top">
//<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color:#3a3d46"><![endif]-->
//<div style="background-color:#f6f6f6;">
//<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 565px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
//<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
//<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f6f6f6;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:565px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
//<!--[if (mso)|(IE)]><td align="center" width="565" style="background-color:transparent;width:565px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:20px; padding-bottom:20px;"><![endif]-->
//<div class="col num12" style="min-width: 320px; max-width: 565px; display: table-cell; vertical-align: top; width: 565px;">
//<div style="width:100% !important;">
//<!--[if (!mso)&(!IE)]><!-->
//<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:20px; padding-bottom:20px; padding-right: 0px; padding-left: 0px;">
//<!--<![endif]-->
//<div align="center" class="img-container center autowidth" style="padding-right: 0px;padding-left: 0px;">
//<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]--><a href="http://www.capelladaihatsu.co.id/" style="outline:none" tabindex="-1" target="_blank"> <img align="center" alt="Logo" border="0" class="center autowidth" src="http://127.0.0.1:5000/NewWeb/smarty%20version/images/logo_capela_medan.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 300px; display: block;" title="Logo" width="171"/></a>
//<!--[if mso]></td></tr></table><![endif]-->
//</div>
//<!--[if (!mso)&(!IE)]><!-->
//</div>
//<!--<![endif]-->
//</div>
//</div>
//<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
//<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
//</div>
//</div>
//</div>
//<div style="background-color:transparent;">
//<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 565px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
//<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
//<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:565px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
//<!--[if (mso)|(IE)]><td align="center" width="565" style="background-color:transparent;width:565px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top:15px; padding-bottom:15px;"><![endif]-->
//<div class="col num12" style="min-width: 320px; max-width: 565px; display: table-cell; vertical-align: top; width: 565px;">
//<div style="width:100% !important;">
//<!--[if (!mso)&(!IE)]><!-->
//<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:15px; padding-bottom:15px; padding-right: 10px; padding-left: 10px;">
//<!--<![endif]-->
//<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 30px; padding-bottom: 5px; font-family: Arial, sans-serif"><![endif]-->
//<div style="color:#f6f6f6;font-family:Poppins, Arial, Helvetica, sans-serif;line-height:1.2;padding-top:30px;padding-right:10px;padding-bottom:5px;padding-left:10px;">
//<div style="font-size: 14px; line-height: 1.2; color: #f6f6f6; font-family: Poppins, Arial, Helvetica, sans-serif; mso-line-height-alt: 17px;">
//<p style="font-size: 35px; line-height: 1.2; word-break: break-word; text-align: center; mso-line-height-alt: 46px; margin: 0;"><span style="font-size: 35px;"><strong>Sahabat Siap Untuk </strong><span style="color: #00aeef;"><strong>Test Drive?</strong> </span></span></p>
//</div>
//</div>
//<!--[if mso]></td></tr></table><![endif]-->
//<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 15px; padding-left: 15px; padding-top: 0px; padding-bottom: 20px; font-family: Arial, sans-serif"><![endif]-->
//<div style="color:#ffffff;font-family:Poppins, Arial, Helvetica, sans-serif;line-height:1.5;padding-top:0px;padding-right:15px;padding-bottom:20px;padding-left:15px;">
//<div style="font-size: 14px; line-height: 1.5; color: #ffffff; font-family: Poppins, Arial, Helvetica, sans-serif; mso-line-height-alt: 21px;">
//<p style="font-size: 15px; line-height: 1.5; word-break: break-word; text-align: center; mso-line-height-alt: 23px; margin: 0;"><span style="font-size: 15px;">Kami ingin mengingatkan sahabat mengenai Test Drive yang telah di booking dengan rincian sebagai berikut.</span></p>
//</div>
//</div>
//<!--[if mso]></td></tr></table><![endif]-->
//<!--[if (!mso)&(!IE)]><!-->
//</div>
//<!--<![endif]-->
//</div>
//</div>
//<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
//<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
//</div>
//</div>
//</div>
//<div style="background-color:transparent;">
//<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 565px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffffff;">
//<div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">
//<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:565px"><tr class="layout-full-width" style="background-color:#ffffff"><![endif]-->
//<!--[if (mso)|(IE)]><td align="center" width="565" style="background-color:#ffffff;width:565px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:10px; padding-bottom:10px;"><![endif]-->
//<div class="col num12" style="min-width: 320px; max-width: 565px; display: table-cell; vertical-align: top; width: 565px;">
//<div style="width:100% !important;">
//<!--[if (!mso)&(!IE)]><!-->
//<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:10px; padding-bottom:10px; padding-right: 0px; padding-left: 0px;">
//<!--<![endif]-->
//<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
//<div style="color:#4b4b4b;font-family:Poppins, Arial, Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
//<div style="font-size: 14px; line-height: 1.2; color: #4b4b4b; font-family: Poppins, Arial, Helvetica, sans-serif; mso-line-height-alt: 17px;">
//<p style="font-size: 26px; line-height: 1.2; word-break: break-word; text-align: center; mso-line-height-alt: 31px; margin: 0;"><span style="font-size: 26px;">Mobil: <span style="color: #00aeef;"><strong>Grand New Xenia</strong></span></span></p>
//</div>
//</div>
//<!--[if mso]></td></tr></table><![endif]-->
//<!--[if (!mso)&(!IE)]><!-->
//</div>
//<!--<![endif]-->
//</div>
//</div>
//<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
//<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
//</div>
//</div>
//</div>
//<div style="background-color:transparent;">
//<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 565px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
//<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
//<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:565px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
//<!--[if (mso)|(IE)]><td align="center" width="565" style="background-color:transparent;width:565px; border-top: 0px solid #00AEEF; border-left: 1px solid #00AEEF; border-bottom: 0px solid #00AEEF; border-right: 1px solid #00AEEF;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
//<div class="col num12" style="min-width: 320px; max-width: 565px; display: table-cell; vertical-align: top; width: 563px;">
//<div style="width:100% !important;">
//<!--[if (!mso)&(!IE)]><!-->
//<div style="border-top:0px solid #00AEEF; border-left:1px solid #00AEEF; border-bottom:0px solid #00AEEF; border-right:1px solid #00AEEF; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
//<!--<![endif]-->
//<div align="center" class="img-container center autowidth" style="padding-right: 0px;padding-left: 0px;">
//<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]-->
//<div style="font-size:1px;line-height:35px"> </div><img align="center" alt="Image" border="0" class="center autowidth" src="http://127.0.0.1:5000/NewWeb/smarty%20version/images/xenia.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 417px; display: block;" title="Image" width="417"/>
//<div style="font-size:1px;line-height:35px"> </div>
//<!--[if mso]></td></tr></table><![endif]-->
//</div>
//<!--[if (!mso)&(!IE)]><!-->
//</div>
//<!--<![endif]-->
//</div>
//</div>
//<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
//<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
//</div>
//</div>
//</div>
//
//<div style="background-color:transparent;">
//<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 565px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
//<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
//<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:565px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
//<!--[if (mso)|(IE)]><td align="center" width="565" style="background-color:transparent;width:565px; border-top: 0px solid #00AEEF; border-left: 1px solid #00AEEF; border-bottom: 1px solid #00AEEF; border-right: 1px solid #00AEEF;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 20px; padding-left: 20px; padding-top:20px; padding-bottom:20px;"><![endif]-->
//<div class="col num12" style="min-width: 320px; max-width: 565px; display: table-cell; vertical-align: top; width: 563px;">
//<div style="width:100% !important;">
//<!--[if (!mso)&(!IE)]><!-->
//<div style="border-top:0px solid #00AEEF; border-left:1px solid #00AEEF; border-bottom:1px solid #00AEEF; border-right:1px solid #00AEEF; padding-top:20px; padding-bottom:20px; padding-right: 20px; padding-left: 20px;">
//<!--<![endif]-->
//<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
//<div style="color:#ffffff;font-family:Poppins, Arial, Helvetica, sans-serif;line-height:1.5;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
//<div style="font-size: 14px; line-height: 1.5; color: #ffffff; font-family: Poppins, Arial, Helvetica, sans-serif; mso-line-height-alt: 21px;">
//<p style="font-size: 14px; line-height: 1.5; word-break: break-word; text-align: center; mso-line-height-alt: 21px; margin: 0;">Daihatsu Grand New Xenia adalah mobil jenis MPV yang pertama kali diluncurkan pada tahun 2003. Mobil ini memiliki 2 tipe mesin, yaitu 1000cc dan 1300cc. Kemudian, mobil ini juga memiliki 10 varian yang dapat dipilih oleh Sahabat sebagai kendaraan keluarga.</p>
//</div>
//</div>
//<!--[if mso]></td></tr></table><![endif]-->
//<!--[if (!mso)&(!IE)]><!-->
//</div>
//<!--<![endif]-->
//</div>
//</div>
//<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
//<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
//</div>
//</div>
//</div>
//<div style="background-color:transparent;">
//<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 565px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
//<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
//<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:565px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
//<!--[if (mso)|(IE)]><td align="center" width="565" style="background-color:transparent;width:565px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:35px; padding-bottom:5px;"><![endif]-->
//<div class="col num12" style="min-width: 320px; max-width: 565px; display: table-cell; vertical-align: top; width: 565px;">
//<div style="width:100% !important;">
//<!--[if (!mso)&(!IE)]><!-->
//<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:35px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
//<!--<![endif]-->
//<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
//<div style="color:#f6f6f6;font-family:Poppins, Arial, Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
//<div style="font-size: 14px; line-height: 1.2; color: #f6f6f6; font-family: Poppins, Arial, Helvetica, sans-serif; mso-line-height-alt: 17px;">
//<p style="font-size: 30px; line-height: 1.2; word-break: break-word; text-align: center; mso-line-height-alt: 36px; margin: 0;"><span style="font-size: 30px;">Sampai bertemu disana <span style="color: #00aeef;">Sahabat :</span></span></p>
//</div>
//</div>
//<!--[if mso]></td></tr></table><![endif]-->
//<!--[if (!mso)&(!IE)]><!-->
//</div>
//<!--<![endif]-->
//</div>
//</div>
//<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
//<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
//</div>
//</div>
//</div>
//<div style="background-color:transparent;">
//<div class="block-grid two-up" style="Margin: 0 auto; min-width: 320px; max-width: 565px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
//<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
//<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:565px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
//<!--[if (mso)|(IE)]><td align="center" width="282" style="background-color:transparent;width:282px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:20px;"><![endif]-->
//<div class="col num6" style="max-width: 320px; min-width: 282px; display: table-cell; vertical-align: top; width: 282px;">
//<div style="width:100% !important;">
//<!--[if (!mso)&(!IE)]><!-->
//<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:20px; padding-right: 0px; padding-left: 0px;">
//<!--<![endif]-->
//<div align="center" class="img-container center autowidth" style="padding-right: 0px;padding-left: 0px;">
//<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]--><img align="center" alt="Image" border="0" class="center autowidth" src="http://127.0.0.1:5000/NewWeb/smarty%20version/images/icon-01_1.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 108px; display: block;" title="Image" width="108"/>
//<!--[if mso]></td></tr></table><![endif]-->
//</div>
//<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
//<div style="color:#f6f6f6;font-family:Poppins, Arial, Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
//<div style="font-size: 14px; line-height: 1.2; color: #f6f6f6; font-family: Poppins, Arial, Helvetica, sans-serif; mso-line-height-alt: 17px;">
//<p style="font-size: 18px; line-height: 1.2; word-break: break-word; text-align: center; mso-line-height-alt: 22px; margin: 0;"><span style="font-size: 18px;">Senin, 5 September 2020, Pukul 14.00</span></p>
//</div>
//</div>
//<!--[if mso]></td></tr></table><![endif]-->
//<!--[if (!mso)&(!IE)]><!-->
//</div>
//<!--<![endif]-->
//</div>
//</div>
//<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
//<!--[if (mso)|(IE)]></td><td align="center" width="282" style="background-color:transparent;width:282px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
//<div class="col num6" style="max-width: 320px; min-width: 282px; display: table-cell; vertical-align: top; width: 282px;">
//<div style="width:100% !important;">
//<!--[if (!mso)&(!IE)]><!-->
//<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
//<!--<![endif]-->
//<div align="center" class="img-container center autowidth" style="padding-right: 0px;padding-left: 0px;">
//<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]--><img align="center" alt="Image" border="0" class="center autowidth" src="http://127.0.0.1:5000/NewWeb/smarty%20version/images/icon-02_1.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 108px; display: block;" title="Image" width="108"/>
//<!--[if mso]></td></tr></table><![endif]-->
//</div>
//<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
//<div style="color:#f6f6f6;font-family:Poppins, Arial, Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
//<div style="font-size: 14px; line-height: 1.2; color: #f6f6f6; font-family: Poppins, Arial, Helvetica, sans-serif; mso-line-height-alt: 17px;">
//<p style="font-size: 18px; line-height: 1.2; word-break: break-word; text-align: center; mso-line-height-alt: 22px; margin: 0;"><span style="font-size: 18px;">Capella Daihatsu Gatsu 1</span></p>
//</div>
//</div>
//<!--[if mso]></td></tr></table><![endif]-->
//<!--[if (!mso)&(!IE)]><!-->
//</div>
//<!--<![endif]-->
//</div>
//</div>
//<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
//<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
//</div>
//</div>
//</div>
//<div style="background-color:transparent;">
//<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 565px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
//<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
//<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:565px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
//<!--[if (mso)|(IE)]><td align="center" width="565" style="background-color:transparent;width:565px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:25px; padding-bottom:0px;"><![endif]-->
//<div class="col num12" style="min-width: 320px; max-width: 565px; display: table-cell; vertical-align: top; width: 565px;">
//<div style="width:100% !important;">
//<!--[if (!mso)&(!IE)]><!-->
//<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:25px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
//<!--<![endif]-->
//<div align="center" class="img-container center autowidth" style="padding-right: 0px;padding-left: 0px;">
//<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]-->
//<!--[if mso]></td></tr></table><![endif]-->
//</div>
//<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 25px; padding-left: 25px; padding-top: 15px; padding-bottom: 5px; font-family: Arial, sans-serif"><![endif]-->
//
//<!--[if mso]></td></tr></table><![endif]-->
//<!--[if (!mso)&(!IE)]><!-->
//</div>
//<!--<![endif]-->
//</div>
//</div>
//<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
//<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
//</div>
//</div>
//</div>
//<div style="background-color:transparent;">
//<div class="block-grid two-up" style="Margin: 0 auto; min-width: 320px; max-width: 565px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
//<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
//<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:565px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
//<!--[if (mso)|(IE)]><td align="center" width="282" style="background-color:transparent;width:282px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:5px;"><![endif]-->
//<div class="col num6" style="max-width: 320px; min-width: 282px; display: table-cell; vertical-align: top; width: 282px;">
//<div style="width:100% !important;">
//<!--[if (!mso)&(!IE)]><!-->
//<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
//<!--<![endif]-->
//
//<!--[if (!mso)&(!IE)]><!-->
//</div>
//<!--<![endif]-->
//</div>
//</div>
//<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
//<!--[if (mso)|(IE)]></td><td align="center" width="282" style="background-color:transparent;width:282px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:5px;"><![endif]-->
//<div class="col num6" style="max-width: 320px; min-width: 282px; display: table-cell; vertical-align: top; width: 282px;">
//<div style="width:100% !important;">
//<!--[if (!mso)&(!IE)]><!-->
//<div style="border-top:0px solid transparent; border-left:0px solid     transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
//<!--<![endif]-->
//
//<!--[if (!mso)&(!IE)]><!-->
//</div>
//<!--<![endif]-->
//</div>
//</div>
//<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
//<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
//</div>
//</div>
//</div>
//<div style="background-color:transparent;">
//<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 565px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
//<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
//<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:565px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
//<!--[if (mso)|(IE)]><td align="center" width="565" style="background-color:transparent;width:565px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
//<div class="col num12" style="min-width: 320px; max-width: 565px; display: table-cell; vertical-align: top; width: 565px;">
//<div style="width:100% !important;">
//<!--[if (!mso)&(!IE)]><!-->
//<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
//<!--<![endif]-->
//<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
//<tbody>
//<tr style="vertical-align: top;" valign="top">
//<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
//<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" height="0" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 0px; width: 100%;" valign="top" width="100%">
//<tbody>
//<tr style="vertical-align: top;" valign="top">
//<td height="0" style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
//</tr>
//</tbody>
//</table>
//</td>
//</tr>
//</tbody>
//</table>
//<!--[if (!mso)&(!IE)]><!-->
//</div>
//<!--<![endif]-->
//</div>
//</div>
//<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
//<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
//</div>
//</div>
//</div>
//<div style="background-color:#4e5159;">
//<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 565px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
//<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
//<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#4e5159;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:565px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
//<!--[if (mso)|(IE)]><td align="center" width="565" style="background-color:transparent;width:565px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
//<div class="col num12" style="min-width: 320px; max-width: 565px; display: table-cell; vertical-align: top; width: 565px;">
//<div style="width:100% !important;">
//<!--[if (!mso)&(!IE)]><!-->
//<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
//<!--<![endif]-->
//<table cellpadding="0" cellspacing="0" class="social_icons" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" valign="top" width="100%">
//<tbody>
//<tr style="vertical-align: top;" valign="top">
//<td style="word-break: break-word; vertical-align: top; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
//<table align="center" cellpadding="0" cellspacing="0" class="social_table" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-tspace: 0; mso-table-rspace: 0; mso-table-bspace: 0; mso-table-lspace: 0;" valign="top">
//<tbody>
//<tr align="center" style="vertical-align: top; display: inline-block; text-align: center;" valign="top">
//<td style="word-break: break-word; vertical-align: top; padding-bottom: 0; padding-right: 5px; padding-left: 5px;" valign="top"><a href="http://capelladaihatsu.co.id/" target="_blank"><img alt="Twitter" height="32" src="http://127.0.0.1:5000/NewWeb/smarty%20version/images/web2x.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; display: block;" title="Twitter" width="32"/></a></td>
//<td style="word-break: break-word; vertical-align: top; padding-bottom: 0; padding-right: 5px; padding-left: 5px;" valign="top"><a href="https://www.facebook.com/PTCapella-Medan-752944848419405" target="_blank"><img alt="Facebook" height="32" src="http://127.0.0.1:5000/NewWeb/smarty%20version/images/facebook2x.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; display: block;" title="Facebook" width="32"/></a></td>
//<td style="word-break: break-word; vertical-align: top; padding-bottom: 0; padding-right: 5px; padding-left: 5px;" valign="top"><a href="https://www.instagram.com/capelladaihatsu_official" target="_blank"><img alt="Instagram" height="32" src="http://127.0.0.1:5000/NewWeb/smarty%20version/images/instagram2x.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; display: block;" title="Instagram" width="32"/></a></td>
//</tr>
//</tbody>
//</table>
//</td>
//</tr>
//</tbody>
//</table>
//<!--[if (!mso)&(!IE)]><!-->
//</div>
//<!--<![endif]-->
//</div>
//</div>
//<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
//<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
//</div>
//</div>
//</div>
//
//<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
//</td>
//</tr>
//</tbody>
//</table>
//<!--[if (IE)]></div><![endif]-->
//</body>
//</html>';
            if(!$mail->send()) {
                echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
                #echo '<script type="text/javascript">alert("'.$mail->ErrorInfo.'")</script>';
            } else {
                $terkirim = 1;
                #echo '<script type="text/javascript">alert("tersend")</script>';
                echo 'Message has been sent';
                echo '<script>';
                        echo 'parent.hideloader();
                              parent.tdrive("'.$kdtdrive.'");
                              parent.reloadCaptcha("captcha_refresh_tdrive");
                              parent.$("#kota_td").select2("val", "");';
                        for ($j=0;$j<count($arrayEl);$j++) {
                            echo 'parent.emptyError("'.$arrayEl[$j].'");';
                         };
                echo '</script>';
            }
         ##########################################################################################################
        
    } 

	if (count($err)!=0) {
		echo '<script type="text/javascript">';
            echo 'parent.hideloader();parent.reloadCaptcha("captcha_refresh_tdrive");';
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