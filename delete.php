<?php
    require 'function.php';
    if(!empty($_POST["del_idMU"])){
        $id = $_POST["del_idMU"];
        if(delete($id,'mu') > 0){
            echo '<script>parent.$("#delete_manage_user").modal("hide");parent.$("#delete_manage_userRes").modal("show");
            </script>';
        }
        else{
            echo '<script>
                alert("data gagal dihapus");
            </script>';
        }    
    }else if(!empty($_POST["del_idAU"])){
        $id = $_POST["del_idAU"];
        if(delete($id,'au') > 0){
            echo '<script>parent.$("#delete_about_us").modal("hide");parent.$("#delete_about_usRes").modal("show");
            </script>';
        }
        else{
            echo '<script>
                alert("data gagal dihapus");
            </script>';
        }    
    }else if(!empty($_POST["del_idAN"])){
        $id = $_POST["del_idAN"];
        if(delete($id,'an') > 0){
            echo '<script>parent.$("#delete_announcement").modal("hide");parent.$("#delete_announcementRes").modal("show");
            </script>';
        }
        else{
            echo '<script>
                alert("data gagal dihapus");
            </script>';
        }    
    }else if(!empty($_POST["del_idDL"])){
        $id = $_POST["del_idDL"];
        if(delete($id,'dl') > 0){
            echo '<script>parent.$("#delete_dealer").modal("hide");parent.$("#delete_dealerRes").modal("show");
            </script>';
        }
        else{
            echo '<script>
                alert("data gagal dihapus");
            </script>';
        }    
    }else if(!empty($_POST["del_idHS"])){
        $id = $_POST["del_idHS"];
        if(delete($id,'hs') > 0){
            echo '<script>parent.$("#delete_data").modal("hide");parent.$("#delete_dataRes").modal("show");
            </script>';
        }
        else{
            echo '<script>
                alert("data gagal dihapus");
            </script>';
        }    
    }else if(!empty($_POST["del_idPL"])){
        $id = $_POST["del_idPL"];
        if(delete($id,'pl') > 0){
            echo '<script>parent.$("#delete_promo_list").modal("hide");parent.$("#delete_promo_listRes").modal("show");
            </script>';
        }
        else{
            echo '<script>
                alert("data gagal dihapus");
            </script>';
        } 
    }else if(!empty($_POST["del_idPM"])){
        $id = $_POST["del_idPM"];
        if(delete($id,'pm') > 0){
            echo '<script>parent.$("#delete_product_main").modal("hide");parent.$("#delete_product_mainRes").modal("show");
            </script>';
        }
        else{
            echo '<script>
                alert("data gagal dihapus");
            </script>';
        }
    }else if(!empty($_POST["del_idPB"])){
        $id = $_POST["del_idPB"];
        if(delete($id,'pb') > 0){
            echo '<script>parent.$("#delete_product_banner").modal("hide");parent.$("#delete_product_bannerRes").modal("show");
            </script>';
        }
        else{
            echo '<script>
                alert("data gagal dihapus");
            </script>';
        }
    }else if(!empty($_POST["del_idPC"])){
        $id = $_POST["del_idPC"];
        if(delete($id,'pc') > 0){
            echo '<script>parent.$("#delete_product_color").modal("hide");parent.$("#delete_product_colorRes").modal("show");
            </script>';
        }
        else{
            echo '<script>
                alert("data gagal dihapus");
            </script>';
        }
    }else if(!empty($_POST["del_idPS"])){
        $id = $_POST["del_idPS"];
        if(delete($id,'ps') > 0){
            echo '<script>parent.$("#delete_product_spec").modal("hide");parent.$("#delete_product_specRes").modal("show");
            </script>';
        }
        else{
            echo '<script>
                alert("data gagal dihapus");
            </script>';
        }
    }else if(!empty($_POST["del_idPT"])){
        $id = $_POST["del_idPT"];
        if(delete($id,'pt') > 0){
            echo '<script>parent.$("#delete_product_tool").modal("hide");parent.$("#delete_product_toolRes").modal("show");
            </script>';
        }
        else{
            echo '<script>
                alert("data gagal dihapus");
            </script>';
        }
    }else if(!empty($_POST["del_idNL"])){
        $id = $_POST["del_idNL"];
        if(delete($id,'nl') > 0){
            echo '<script>parent.$("#delete_news_list").modal("hide");parent.$("#delete_news_listRes").modal("show");
            </script>';
        }
        else{
            echo '<script>
                alert("data gagal dihapus");
            </script>';
        }
    }else if(!empty($_POST["del_idCS"])){
        $id = $_POST["del_idCS"];
        if(delete($id,'cs') > 0){
            echo '<script>parent.$("#delete_contact_service").modal("hide");parent.$("#delete_contact_serviceRes").modal("show");
            </script>';
        }
        else{
            echo '<script>
                alert("data gagal dihapus");
            </script>';
        }
    }else if(!empty($_POST["del_idCP"])){
        $id = $_POST["del_idCP"];
        if(delete($id,'cp') > 0){
            echo '<script>parent.$("#delete_contact_penawaran").modal("hide");parent.$("#delete_contact_penawaranRes").modal("show");
            </script>';
        }
        else{
            echo '<script>
                alert("data gagal dihapus");
            </script>';
        }
    }else if(!empty($_POST["del_idUT"])){
        $id = $_POST["del_idUT"];
        if(delete($id,'ut') > 0){
            echo '<script>parent.$("#delete_unit_tdrive").modal("hide");parent.$("#delete_unit_tdriveRes").modal("show");
            </script>';
        }
        else{
            echo '<script>
                alert("data gagal dihapus");
            </script>';
        }
    }
    
?>