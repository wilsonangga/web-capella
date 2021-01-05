<?php
    require 'function.php';
    if(!empty($_POST["edit_idPF"])){
        if(edit($_POST,'pf') > 0){
            echo '<script>parent.$("#edit_profile").modal("hide");
            parent.$("#edit_profileRes").modal("show");</script>';
        }
        else{
            echo '<script>alert("tidak ada data yang diubah")</script>';
        }    
    }else if(!empty($_POST["edit_idPSWD"])){
        $arrayEl = array(0=>'edit_currPSWD', 'edit_newPSWD', 'edit_repPSWD');
        $err = array();
        $id = $_POST["edit_idPSWD"];
        $user = query("SELECT * FROM user WHERE id = '$id'");
        $curr_pass = $_POST["edit_currPSWD"];
        $new_pass = $_POST["edit_newPSWD"];
        $rep_pass = $_POST["edit_repPSWD"];
        if(password_verify($curr_pass, $user[0]["password"])){
            if(strlen($new_pass) < 6){
                $err['edit_newPSWD']= 'Password minimal 6 karakter';       
            }
            else if($new_pass == $rep_pass){
                if($new_pass == $curr_pass){
                    $err['edit_newPSWD']= 'Password sama dengan yang saat ini';        
                }
                else{
                    if(edit($_POST,'pswd') > 0){
                        echo '<script>parent.$("#edit_profile_paswd").modal("hide");
                        parent.$("#edit_profile_paswdRes").modal("show");</script>';
                    }
                    else{
                        echo '<script>alert("tidak ada data yang diubah")</script>';
                    }    
                }
            }
            else{
                $err['edit_repPSWD']= 'Password yang dimasukkan tidak sama';    
            }
        }
        else{
            $err['edit_currPSWD']= 'Password yang dimasukkan salah';
        }
        if (count($err)!=0) {
            echo '<script type="text/javascript">';
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
    }else if(!empty($_POST["edit_idMU"])){
        if(edit($_POST,'mu') > 0){
            echo '<script>parent.$("#edit_manage_user").modal("hide");
            parent.$("#edit_manage_userRes").modal("show");</script>';
        }
        else{
            echo '<script>alert("tidak ada data yang diubah")</script>';
        }    
    }else if(!empty($_POST["edit_idAU"])){
        if(edit($_POST,'au') > 0){
            echo '<script>parent.$("#edit_about_us").modal("hide");
            parent.$("#edit_about_usRes").modal("show");</script>';
        }
        else{
            echo '<script>alert("tidak ada data yang diubah")</script>';
        }    
    }else if(!empty($_POST["edit_idAN"])){
        if(edit($_POST,'an') > 0){
            echo '<script>parent.$("#edit_announcement").modal("hide");
            parent.$("#edit_announcementRes").modal("show");</script>';
        }
        else{
            echo '<script>alert("tidak ada data yang diubah")</script>';
        }    
    }else if(!empty($_POST["edit_idDL"])){
        if(edit($_POST,'dl') > 0){
            echo '<script>parent.$("#edit_dealer").modal("hide");
            parent.$("#edit_dealerRes").modal("show");</script>';
        }
        else{
            echo '<script>alert("tidak ada data yang diubah")</script>';
        }    
    }else if(!empty($_POST["edit_idHS"])){
        if(edit($_POST,'hs') > 0){
            echo '<script>parent.$("#edit_data").modal("hide");
            parent.$("#edit_dataRes").modal("show");</script>';
        }
        else{
            echo '<script>alert("tidak ada data yang diubah")</script>';
        }    
    }else if(!empty($_POST["edit_idPL"])){
        if(edit($_POST,'pl') > 0){
            echo '<script>parent.$("#edit_promo_list").modal("hide");
            parent.$("#edit_promo_listRes").modal("show");</script>';
        }
        else{
            echo '<script>alert("tidak ada data yang diubah")</script>';
        }  
    }else if(!empty($_POST["edit_idPM"])){
        if(edit($_POST,'pm')>0){
            echo '<script>parent.$("#edit_product_main").modal("hide");
            parent.$("#edit_product_mainRes").modal("show");</script>';
        }else{
            echo '<script>alert("tidak ada data yang diubah")</script>';
        }
    }else if(!empty($_POST["edit_idPB"])){
        if(edit($_POST,'pb')>0){
            echo '<script>parent.$("#edit_product_banner").modal("hide");
            parent.$("#edit_product_bannerRes").modal("show");</script>';
        }else{
            echo '<script>alert("tidak ada data yang diubah")</script>';
        }
    }else if(!empty($_POST["edit_idPC"])){
        if(edit($_POST,'pc')>0){
            echo '<script>parent.$("#edit_product_color").modal("hide");
            parent.$("#edit_product_colorRes").modal("show");</script>';
        }else{
            echo '<script>alert("tidak ada data yang diubah")</script>';
        }
    }else if(!empty($_POST["edit_idPS"])){
        if(edit($_POST,'ps')>0){
            echo '<script>parent.$("#edit_product_spec").modal("hide");
            parent.$("#edit_product_specRes").modal("show");</script>';
        }else{
            echo '<script>alert("tidak ada data yang diubah")</script>';
        }
    }else if(!empty($_POST["edit_idPT"])){
        if(edit($_POST,'pt')>0){
            echo '<script>parent.$("#edit_product_tool").modal("hide");
            parent.$("#edit_product_toolRes").modal("show");</script>';
        }else{
            echo '<script>alert("tidak ada data yang diubah")</script>';
        }
    }else if(!empty($_POST["edit_idNL"])){
        if(edit($_POST,'nl')>0){
            echo '<script>parent.$("#edit_news_list").modal("hide");
            parent.$("#edit_news_listRes").modal("show");</script>';
        }else{
            echo '<script>alert("tidak ada data yang diubah")</script>';
        }
    }else if(!empty($_POST["edit_idCS"])){
        if(edit($_POST,'cs')>0){
            echo '<script>parent.$("#edit_contact_service").modal("hide");
            parent.$("#edit_contact_serviceRes").modal("show");</script>';
        }else{
            echo '<script>alert("tidak ada data yang diubah")</script>';
        }
    }else if(!empty($_POST["edit_idCP"])){
        if(edit($_POST,'cp') > 0){
            echo '<script>parent.$("#edit_contact_penawaran").modal("hide");
            parent.$("#edit_contact_penawaranRes").modal("show");</script>';
        }else{
            echo '<script>alert("tidak ada data yang diubah")</script>';
        }
    }else if(!empty($_POST["edit_idPP"])){
        if(edit($_POST,'pp') > 0){
            echo '<script>parent.$("#edit_product_price").modal("hide");
            parent.$("#edit_product_priceRes").modal("show");</script>';
        }else{
            echo '<script>alert("tidak ada data yang diubah")</script>';
        }
    }
    
?>