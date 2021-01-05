<?php
session_start();
    require 'PHPMailer/PHPMailerAutoload.php';
    require 'function.php';
           ##########################################################################################################
            $mail = new PHPMailer;
            $mail->SMTPDebug = 1;
            $mail->isSMTP();
            $mail->SMTPOptions = array(
                    'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
//            $mail->Host = 'srv37.niagahoster.com';
            $mail->Host = 'smtp.capellagroup.com';
            /*$mail->Host = 'aaaaaaa';*/
            $mail->SMTPAuth = true;
            $mail->Username = 'helpdesk@capellagroup.com';
            $mail->Password = '6923aNuMbt';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            //$mail->Port = 465;
            $mail->From = 'helpdesk@capellagroup.com';
            $mail->FromName = 'Capella Medan';
            //$mail->setFrom('info@capelladaihatsu.co.id', 'Capella Medan');
            $mail->addAddress('cm.mkt.web@capellagroup.com', 'CMCRO HO');
            $mail->addReplyTo('cm.mkt.web@capellagroup.com', 'Wilson Angga');
            # CC = carbon copy
            //$mail->addCC($kirim_cc);
            # BCC = black carbon copy
            /*$mail->addBCC('angcungsen@gmail.com');*/
            $mail->isHTML(true);
            $mail->Subject = 'Contact Us';
            $mail->Body    = '<table style="width:100%; margin:0px auto;">
                                    <tr>
                                        <td style="width:35%;">Nama</td>
                                        <td>: TES</td>
                                    </tr> 
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>: TES</td>
                                    </tr> 
                                    <tr>
                                        <td>Kota</td>  
                                        <td>: TES</td>
                                    </tr>   
                                    <tr>
                                        <td>Email</td>     
                                        <td>: TES</td>
                                    </tr>    
                                    <tr>
                                        <td>No. Handphone</td>
                                        <td>: TES</td>
                                    </tr> 
                                    <tr>
                                        <td>Pesan</td>     
                                        <td>: TES</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Mohon untuk menghubungi contact person diatas untuk melakukan menindaklanjuti.      
                                        </td>
                                    </tr>
                              </table>';
            if(!$mail->send()) {
                echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
                echo '<script type="text/javascript">alert("'.$mail->ErrorInfo.'")</script>';
            } else {
                $terkirim = 1;
                echo '<script type="text/javascript">alert("tersend")</script>';
                echo 'Message has been sent';
            }
         ##########################################################################################################
?>