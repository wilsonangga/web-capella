<?php
    require 'PHPMailer/PHPMailerAutoload.php';
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
    $mail->addAddress('capelladaihatsu88@gmail.com', 'Capella Medan');
    $mail->isHTML(true);
    $mail->Subject = $dealer.' '.$action.' Promo : '.$title;
    if($action == "Tambah")
        $mail->Body    = $dealer.' menambahkan promo baru.';
    else
        $mail->Body    = $dealer.' melakukan perubahan terhadap promo.';            
    $mail->send();
?>