<?php
    require '../function.php';
    if(isset($_GET["value"])){
        $cabang = $_GET["value"];
        $query = query("SELECT product_id FROM unit_test_drive WHERE kdcab = '$cabang' ");
        echo '<option>-- Pilih Mobil --</option>';
        foreach($query as $rows){
            $mobil = query("SELECT nama FROM product WHERE id = '".$rows['product_id']."' ");
            echo '<option value='.$rows['product_id'].'>'.$mobil[0]['nama'].'</option>';
        }
    }
?>