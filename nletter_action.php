<?php
    require 'PHPMailer/PHPMailerAutoload.php';
    require 'function.php';
    require_once 'securimage/securimage.php';
    if(version_compare(phpversion(),'5.4.0','<')){if(session_id()==''){session_start();}}else{if(session_status()==PHP_SESSION_NONE){session_start();}}
    echo'<xmp><pre>';print_r($_REQUEST);echo'</pre></xmp>';
    $securimage4 = new Securimage(array('namespace' => 'nletter'));
    date_default_timezone_set("Asia/Bangkok");
    $arrayEl = array(0=>'nama_nl', 'no_hp_nl', 'email_nl', 'kota_nl', 'captcha_code_nletter');
    $err = array();
    $nama_nl = htmlspecialchars(isset($_REQUEST["nama_nl"])?trim($_REQUEST["nama_nl"]):"");
    $no_hp_nl = htmlspecialchars(isset($_REQUEST["no_hp_nl"])?trim($_REQUEST["no_hp_nl"]):"");
    $email_nl = htmlspecialchars(isset($_REQUEST["email_nl"])?trim($_REQUEST["email_nl"]):"");
    $kota_nl = htmlspecialchars(isset($_REQUEST["kota_nl"])?trim($_REQUEST["kota_nl"]):"");
    if ($nama_nl=="" || $no_hp_nl=="" || $email_nl=="" || $kota_nl=="") {
		if ($nama_nl=="") 			{$err['nama_nl']=			'Nama harus diisi';}
		if ($no_hp_nl=="") 		    {$err['no_hp_nl']=		        'No. Handphone harus diisi';}
		if ($email_nl=="") 			{$err['email_nl']=			'Email harus diisi';}
		if ($kota_nl=="") 	        {$err['kota_nl']=	        'Kota harus dipilih';}
	}

    if (count($err)==0) {
		if (!is_numeric($no_hp_nl)) 			        {$err['no_hp_nl'] = 'No. Handphone harus berupa angka';}
		// if (!check_email_address($email_nl)) 			{$err['email_nl'] = 'Email harus valid';}
	}

    if ($securimage4->check($_POST['captcha_code_nletter']) == false) {
        echo "The security code entered was incorrect.<br /><br />";
        echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
        $err['captcha_code_nletter'] = 'Kesalahan memasukkan Captcha';
        //exit;
    }

    if (count($err) == 0){
        $rsp=array(); $qp = "SELECT * FROM list_nletter WHERE email='$email_nl'";
        callRS($rsp, $qp);
        if(count($rsp) ==0 ){
            $qi = "INSERT INTO list_nletter (id,nama,no_hp,email,kota)
            VALUES ('', '$nama_nl', '$no_hp_nl', '$email_nl', '$kota_nl')";
            execRS($qi);
            echo '<script>
                    parent.hideloader();
                    parent.nletter();
                    parent.reloadCaptcha("captcha_refresh_nletter");
                    parent.$("#kota_nl").select2("val", "");
                  </script>';    
        }
        else{
            $err['email_nl'] = 'Email sudah terdaftar';
        }
            
    }

    if (count($err)!=0) {
		echo '<script type="text/javascript">';
            echo 'parent.hideloader();parent.reloadCaptcha("captcha_refresh_nletter");';
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