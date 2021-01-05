<?php
    require 'function.php';
    if(!empty($_POST['titleHS'])){
        if(add($_POST,'hs') > 0){
            echo '<script>';
                echo 'parent.$("#add_data").modal("hide");
                      parent.$("#add_dataRes").modal("show");';
            echo '</script>';
        }
        else{
            echo "<script>alert('Data gagal ditambahkan');</script>";
        }    
    }
    else if(!empty($_POST['add_titleAU'])){
        if(add($_POST,'au') > 0){
            echo '<script>';
                echo 'parent.$("#add_about_us").modal("hide");
                      parent.$("#add_about_usRes").modal("show");';
            echo '</script>';
        }
        else{
            echo "<script>alert('Data gagal ditambahkan');</script>";
        }    
    }
    else if(!empty($_POST['add_contentAN'])){
        if(add($_POST,'an') > 0){
            echo '<script>';
                echo 'parent.$("#add_announcement").modal("hide");
                      parent.$("#add_announcementRes").modal("show");';
            echo '</script>';
        }
        else{
            echo "<script>alert('Data gagal ditambahkan');</script>";
        }    
    }
    else if(!empty($_POST['add_kdcabDL'])){
        if(add($_POST,'dl') > 0){
            echo '<script>';
                echo 'parent.$("#add_dealer").modal("hide");
                      parent.$("#add_dealerRes").modal("show");';
            echo '</script>';
        }
        else{
            echo "<script>alert('Data gagal ditambahkan');</script>";
        }    
    }
    else if(!empty($_POST['add_titlePL'])){
        if(add($_POST,'pl') > 0){
            echo '<script>';
                echo 'parent.$("#add_promo_list").modal("hide");
                      parent.$("#add_promo_listRes").modal("show");';
            echo '</script>';
        }
        else{
            echo "<script>alert('Data gagal ditambahkan');</script>";
        }    
    }
    else if(!empty($_POST['add_namePM'])){
        if(add($_POST,'pm') > 0){
            echo '<script>';
                echo 'parent.$("#add_product_main").modal("hide");
                      parent.$("#add_product_mainRes").modal("show");';
            echo '</script>';
        }
        else{
            echo "<script>alert('Data gagal ditambahkan');</script>";
        }
    }
    else if(!empty($_POST['add_idPB'])){
        if(add($_POST,'pb') > 0){
            echo '<script>';
                echo 'parent.$("#add_product_banner").modal("hide");
                      parent.$("#add_product_bannerRes").modal("show");';
            echo '</script>';
        }
        else{
            echo "<script>alert('Data gagal ditambahkan');</script>";
        }
    }
    else if(!empty($_POST['add_idPC'])){
        if(add($_POST,'pc') > 0){
            echo '<script>';
                echo 'parent.$("#add_product_color").modal("hide");
                      parent.$("#add_product_colorRes").modal("show");';
            echo '</script>';
        }
        else{
            echo "<script>alert('Data gagal ditambahkan');</script>";
        }
    }
    else if(!empty($_POST['add_specPS'])){
        if(add($_POST,'ps') > 0){
            echo '<script>';
                echo 'parent.$("#add_product_spec").modal("hide");
                      parent.$("#add_product_specRes").modal("show");';
            echo '</script>';
        }
        else{
            echo "<script>alert('Data gagal ditambahkan');</script>";
        }
    }
    else if(!empty($_POST['add_judulPT'])){
        if(add($_POST,'pt') > 0){
            echo '<script>';
                echo 'parent.$("#add_product_tool").modal("hide");
                      parent.$("#add_product_toolRes").modal("show");';
            echo '</script>';
        }
        else{
            echo "<script>alert('Data gagal ditambahkan');</script>";
        }
    }
    else if(!empty($_POST['add_judulNL'])){
        if(add($_POST,'nl') > 0){
            echo '<script>';
                echo 'parent.$("#add_news_list").modal("hide");
                      parent.$("#add_news_listRes").modal("show");';
            echo '</script>';
        }
        else{
            echo "<script>alert('Data gagal ditambahkan');</script>";
        }
    }
    else if(!empty($_POST['add_kdcabCS'])){
        if(add($_POST,'cs') > 0){
            echo '<script>';
                echo 'parent.$("#add_contact_service").modal("hide");
                      parent.$("#add_contact_serviceRes").modal("show");';
            echo '</script>';
        }
        else{
            echo "<script>alert('Data gagal ditambahkan');</script>";
        }
    }
    else if(!empty($_POST['add_kdcabCP'])){
        if(add($_POST,'cp') > 0){
            echo '<script>';
                echo 'parent.$("#add_contact_penawaran").modal("hide");
                      parent.$("#add_contact_penawaranRes").modal("show");';
            echo '</script>';
        }
        else{
            echo "<script>alert('Data gagal ditambahkan');</script>";
        }
    }
    else if(!empty($_POST['add_cabangUT'])){
        $rsc = array(); 
        $qc = "SELECT * FROM unit_test_drive WHERE kdcab='".$_POST['add_cabangUT']."' AND product_id = '".$_POST['add_unitUT']."'" ;
        callRS($rsc, $qc);
        if(count($rsc)>0){
            echo "<script>alert('Unit sudah terdaftar!')</script>";
            return false;
        }
        if(add($_POST,'ut') > 0){
            echo '<script>';
                echo 'parent.$("#add_unit_tdrive").modal("hide");
                      parent.$("#add_unit_tdriveRes").modal("show");';
            echo '</script>';
        }
        else{
            echo "<script>alert('Data gagal ditambahkan');</script>";
        }
    }
    
    
?>