<?php
    require '../function.php';
//     ? $_GET["value"] : "";
//    $variant = $_GET["variant"];
    if(!empty($_GET["value"]) && empty($_GET["wilayah"])){
        $value = $_GET["value"];
        $query = query("SELECT tipe FROM product_price WHERE product_id = $value");
        $hasil = query("SELECT * FROM product WHERE id=$value");
        $data["isi"] = '<option value="" disabled selected>- Pilih Variant -</option>';   
        foreach($query as $rows){
            $data["isi"] .= '<option value="'.$rows["tipe"].'">'.$rows["tipe"].'</option>';   
        }
        $data["name"] = $hasil[0]['nama'];
        $data["image"] = $hasil[0]['gambar'];
        echo json_encode($data, JSON_PRETTY_PRINT);  
    }
    else if(!empty($_GET["variant"]) && !empty($_GET["wilayah"])){
        $wilayah = $_GET["wilayah"];  
        $value = $_GET["value"]; 
        $variant = $_GET["variant"]; 
        $query = query("SELECT $wilayah FROM product_price WHERE product_id = '".$value."' AND tipe = '".$variant."' ");
        echo "Rp. ".number_format($query[0][$wilayah],0,",",".");
    }
    else if(!empty($_GET["harga"]) && isset($_GET["dp"]) && isset($_GET["tenor"])){
        $wilayahh = $_GET["wilayahh"];
        $variantt = $_GET["variantt"];
        $pid = $_GET["pid"];
        $harga = query("SELECT $wilayahh FROM product_price WHERE product_id = '".$pid."' AND tipe = '".$variantt."' ");;
        $dp = $_GET["dp"];
        $tenor = $_GET["tenor"];
        $fee = query("SELECT fee FROM product_admin WHERE product_id= '".$pid."' AND tenor = '".$tenor."' ");
        $hasil = ($dp * $harga[0][$wilayahh])+$fee[0]['fee'];
        $bunga = query("SELECT rate FROM product_rate WHERE product_id = '".$pid."' AND tenor = '".$tenor."' ");
        $asr = query("SELECT asuransi FROM product_rate  WHERE product_id = '".$pid."' AND tenor = '".$tenor."' ");
        $angsuran = round((($harga[0][$wilayahh]-$hasil)*($bunga[0]['rate']/100+1) + $harga[0][$wilayahh]* $asr[0]['asuransi']/100)/$tenor);
        if($pid=="1903" || $pid=="1906" || $pid=="1907"){
            $hasil = $hasil+$angsuran;
        }
        $data["hasil"] = "Rp. ".number_format($hasil,0,",",".");
        $data["angsuran"] = "Rp. ".number_format($angsuran,0,",",".");
        echo json_encode($data);
    }
?>