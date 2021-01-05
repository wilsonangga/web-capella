<?php
    require 'PHPMailer/PHPMailerAutoload.php';
    require 'function.php';
    require_once 'securimage/securimage.php';
    $securimage2= new Securimage(array('namespace' => 'cus'));
    if(version_compare(phpversion(),'5.4.0','<')){if(session_id()==''){session_start();}}else{if(session_status()==PHP_SESSION_NONE){session_start();}}
    echo'<xmp><pre>';print_r($_REQUEST);echo'</pre></xmp>';
    date_default_timezone_set("Asia/Bangkok");
	$arrayEl = array(0=>'namaCU', 'jkCU', 'kotaCU', 'emailCU','no_hpCU', 'pesanCU','captcha_code_cus');
	$err = array();
    $namaCU = htmlspecialchars(isset($_REQUEST["namaCU"])?trim($_REQUEST["namaCU"]):"");
    $jkCU = htmlspecialchars(isset($_REQUEST["jkCU"])?trim($_REQUEST["jkCU"]):"");
    $kotaCU = htmlspecialchars(isset($_REQUEST["kotaCU"])?trim($_REQUEST["kotaCU"]):"");
    $emailCU = htmlspecialchars(isset($_REQUEST["emailCU"])?trim($_REQUEST["emailCU"]):"");
    $no_hpCU = htmlspecialchars(isset($_REQUEST["no_hpCU"])?trim($_REQUEST["no_hpCU"]):"");
    $pesanCU = htmlspecialchars(isset($_REQUEST["pesanCU"])?trim($_REQUEST["pesanCU"]):"");
    
    if($namaCU=="" || $jkCU=="" || $kotaCU=="" || $emailCU=="" || $no_hpCU=="" || $pesanCU==""){
        if($namaCU=="")           {$err['namaCU']  =   'Nama harus diisi';}
        if($jkCU=="")             {$err['jkCU']    =   'Jenis kelamin harus dipilih';}
        if($kotaCU=="")           {$err['kotaCU']  =   'Kota harus dipilih';}
        if($emailCU=="")          {$err['emailCU'] =   'Email harus diisi';}
        if($no_hpCU=="")          {$err['no_hpCU'] =   'No. Handphone harus diisi';}
        if($pesanCU=="")          {$err['pesanCU'] =   'Pesan harus diisi';}
    }

    if(count($err) == 0){
        if (!is_numeric($no_hpCU)) 			            {$err['no_hpCU'] = 'No. Handphone harus berupa angka';}
		// if (!check_email_address($emailCU)) 			{$err['emailCU'] = 'Email harus valid';}
    }

    if ($securimage2->check($_POST['captcha_code_cus']) == false) {
        echo "The security code entered was incorrect.<br /><br />";
        echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
        $err['captcha_code_cus'] = 'Kesalahan memasukkan Captcha';
        //exit;
    }

    if(count($err) == 0){
        $qi = "INSERT INTO list_contact_us (id,nama,jk,kota,email,no_hp,pesan)
            VALUES ('','$namaCU','$jkCU', '$kotaCU', '$emailCU', '$no_hpCU', '$pesanCU')";
        execRS($qi);
       ($jkCU == "Laki-Laki")?$yth = "Bapak":$yth = "Ibu";
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
            $mail->addAddress('cmcro.ho@gmail.com', 'CMCRO HO');
            $mail->addReplyTo($emailCU, $namaCU);
            # CC = carbon copy
            //$mail->addCC($kirim_cc);
            # BCC = black carbon copy
            /*$mail->addBCC('angcungsen@gmail.com');*/
            $mail->isHTML(true);
            $mail->Subject = 'Contact Us';
            $mail->Body    = '<table style="width:100%; margin:0px auto;">
                                    <tr>
                                        <td style="width:35%;">Nama</td>
                                        <td>: '.$namaCU.'</td>
                                    </tr> 
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>: '.$jkCU.'</td>
                                    </tr> 
                                    <tr>
                                        <td>Kota</td>  
                                        <td>: '.$kotaCU.'</td>
                                    </tr>   
                                    <tr>
                                        <td>Email</td>     
                                        <td>: '.$emailCU.'</td>
                                    </tr>    
                                    <tr>
                                        <td>No. Handphone</td>
                                        <td>: '.$no_hpCU.'</td>
                                    </tr> 
                                    <tr>
                                        <td>Pesan</td>     
                                        <td>: '.$pesanCU.'</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Mohon untuk menghubungi contact person diatas untuk melakukan menindaklanjuti.      
                                        </td>
                                    </tr>
                              </table>';
            $mail->send();
            $mail->ClearAllRecipients();
            $mail->ClearReplyTos();
            $mail->addAddress($emailCU, $namaCU);
            $mail->Body    = '<p>Yth '.$yth.' '.$namaCU.',                     <br>
                              Terimakasih atas email anda ke Capella Daihatsu. Kami akan menjawab pesan anda dalam waktu 2 hari kerja. Apabila ada permasalahan yang mendesak, silahkan menghubungi kami melalui contact cabang terkait yang tertera pada website.
                              <br><br>
                              Salam Sahabat, <br>
                              Capella Daihatsu. 
                              </p>';
            if(!$mail->send()) {
                echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
                
                #echo '<script type="text/javascript">alert("'.$mail->ErrorInfo.'")</script>';
            } else {
                $terkirim = 1;
                #echo '<script type="text/javascript">alert("tersend")</script>';
                echo 'Message has been sent';
                echo '<script>';
                        echo 'parent.hideloader();
                              parent.cus();
                              parent.reloadCaptcha("captcha_refresh_cus");
                              parent.$("#kotaCU").select2("val", "");';
                        for ($j=0;$j<count($arrayEl);$j++) {
                            echo 'parent.emptyError("'.$arrayEl[$j].'");';
                         };
                echo '</script>';
            }
         ##########################################################################################################
         
    }

    if (count($err)!=0) {
		echo '<script type="text/javascript">';
            echo 'parent.hideloader();parent.reloadCaptcha("captcha_refresh_cus");';
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
?>