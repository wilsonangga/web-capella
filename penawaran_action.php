<?php
    require 'PHPMailer/PHPMailerAutoload.php';
    require 'function.php';
    require_once 'securimage/securimage.php';
    $securimage3= new Securimage(array('namespace' => 'pw'));
    if(version_compare(phpversion(),'5.4.0','<')){if(session_id()==''){session_start();}}else{if(session_status()==PHP_SESSION_NONE){session_start();}}
    echo'<xmp><pre>';print_r($_REQUEST);echo'</pre></xmp>';
    date_default_timezone_set("Asia/Bangkok");
	$arrayEl = array(0=>'namaPW', 'no_hpPW', 'emailPW', 'jkPW','kotaPW', 'cabangPW', 'mobilPW', 'captcha_code_pw');
	$err = array();
    $namaPW = htmlspecialchars(isset($_REQUEST["namaPW"])?trim($_REQUEST["namaPW"]):"");
    $no_hpPW = htmlspecialchars(isset($_REQUEST["no_hpPW"])?trim($_REQUEST["no_hpPW"]):"");
    $emailPW = htmlspecialchars(isset($_REQUEST["emailPW"])?trim($_REQUEST["emailPW"]):"");
    $jkPW = htmlspecialchars(isset($_REQUEST["jkPW"])?trim($_REQUEST["jkPW"]):"");
    $kotaPW = htmlspecialchars(isset($_REQUEST["kotaPW"])?trim($_REQUEST["kotaPW"]):"");
    $cabangPW = htmlspecialchars(isset($_REQUEST["cabangPW"])?trim($_REQUEST["cabangPW"]):"");
    $mobilPW = htmlspecialchars(isset($_REQUEST["mobilPW"])?trim($_REQUEST["mobilPW"]):"");
    $kirim=query("SELECT * FROM contact_kacab WHERE kdcab='".$cabangPW."' ");
	foreach($kirim as $data) {
		$kirim_email=$data['email'];
		$kirim_nama=$data['nama'];
	}

    if($namaPW=="" || $no_hpPW=="" || $emailPW=="" || $jkPW=="" || $kotaPW=="" || $cabangPW=="" || $mobilPW==""){
        if($namaPW=="")         {$err['namaPW']  =   'Nama harus diisi';}
        if($no_hpPW=="")           {$err['no_hpPW']    =   'No. Handphone harus diisi';}
        if($emailPW=="")         {$err['emailPW']  =   'Email harus diisi';}
        if($jkPW=="")        {$err['jkPW'] =   'Jenis kelamin harus dipilih';}
        if($kotaPW=="")        {$err['kotaPW'] =   'Kota harus diisi';}
        if($cabangPW=="")        {$err['cabangPW'] =   'Cabang harus dipilih';}
        if($mobilPW=="")        {$err['mobilPW'] =   'Mobil harus dipilih';}
    }

    if(count($err) == 0){
        if (!is_numeric($no_hpPW)) 			            {$err['no_hpPW'] = 'No. Handphone harus berupa angka';}
		// if (!check_email_address($emailPW)) 			{$err['emailPW'] = 'Email harus valid';}
    }

    if ($securimage3->check($_POST['captcha_code_pw']) == false) {
        echo "The security code entered was incorrect.<br /><br />";
        echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
        $err['captcha_code_pw'] = 'Kesalahan memasukkan Captcha';
        //exit;
    }

    if(count($err) == 0){
        $qi = "INSERT INTO list_penawaran (id,nama,no_hp,email,jk,kota,cabang,mobil)
            VALUES ('','$namaPW','$no_hpPW', '$emailPW', '$jkPW', '$kotaPW', '$cabangPW', '$mobilPW')";
        execRS($qi);
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
            $mail->addReplyTo($emailPW, $namaPW);
            # CC = carbon copy
            //$mail->addCC($kirim_cc);
            # BCC = black carbon copy
            /*$mail->addBCC('angcungsen@gmail.com');*/
            $mail->isHTML(true);
            $mail->Subject = 'Penawaran Mobil';
            $mail->Body    = '<table style="width:100%; margin:0px auto;">
                                    <tr>
                                        <td style="width:35%;">Nama</td>
                                        <td>: '.$namaPW.'</td>
                                    </tr> 
                                    <tr>
                                        <td>No. Handphone</td>
                                        <td>: '.$no_hpPW.'</td>
                                    </tr> 
                                    <tr>
                                        <td>Email</td>  
                                        <td>: '.$emailPW.'</td>
                                    </tr>   
                                    <tr>
                                        <td>Jenis Kelamin</td>     
                                        <td>: '.$jkPW.'</td>
                                    </tr>    
                                    <tr>
                                        <td>Kota</td>
                                        <td>: '.$kotaPW.'</td>
                                    </tr> 
                                    <tr>
                                        <td>Cabang</td>     
                                        <td>: '.$cabangPW.'</td>
                                    </tr>
                                    <tr>
                                        <td>Mobil</td>     
                                        <td>: '.$mobilPW.'</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Mohon untuk menghubungi contact person diatas untuk memberikan penawaran.      
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
                echo '<script>';
                        echo 'parent.hideloader();
                              parent.pw();
                              parent.reloadCaptcha("captcha_refresh_pw");
                              parent.$("#kotaPW").select2("val", "");';
                        for ($j=0;$j<count($arrayEl);$j++) {
                            echo 'parent.emptyError("'.$arrayEl[$j].'");';
                         };
                echo '</script>';
            }
         ##########################################################################################################
         
    }

    if (count($err)!=0) {
		echo '<script type="text/javascript">';
            echo 'parent.hideloader();parent.reloadCaptcha("captcha_refresh_pw");';
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