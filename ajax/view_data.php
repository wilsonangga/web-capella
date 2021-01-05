<?php
    require '../function.php';
    if(!empty($_POST["idDB"])){
        $id = $_POST['idDB'];
        $hasil = query("SELECT * FROM list_booking WHERE kdbooking='$id'");
        $data["id"] = $hasil[0]['kdbooking'];
        $data["nama"] = $hasil[0]['nama'];
        $data["status"] = $hasil[0]['status'];
        $data["kota"] = $hasil[0]['kota'];
        $data["no_hp"] = $hasil[0]['no_handphone'];
        $data["email"] = $hasil[0]['email'];
        $data["no_pol"] = $hasil[0]['no_polisi'];
        $data["model"] = $hasil[0]['model'];
        $data["tahun"] = $hasil[0]['tahun'];
        $data["km"] = $hasil[0]['kilometer'];
        $data["jenis_servis"] = $hasil[0]['jenis_servis'];
        $data["tanggal"] = $hasil[0]['tanggal'];
        $data["waktu"] = $hasil[0]['waktu'];
        $data["cabang"] = $hasil[0]['cabang'];
        $data["permasalahan"] = $hasil[0]['permasalahan'];
        $data["time_stamp"] = $hasil[0]['time_stamp'];
        echo json_encode($data, JSON_PRETTY_PRINT);
    }else if(!empty($_POST["idCU"])){
        $id = $_POST["idCU"];
        $hasil = query("SELECT * FROM list_contact_us WHERE id=$id");
        $data["nama"] = $hasil[0]['nama'];
        $data["no_hp"] = $hasil[0]['no_hp'];
        $data["email"] = $hasil[0]['email'];
        $data["jk"] = $hasil[0]['jk'];
        $data["kota"] = $hasil[0]['kota'];
        $data["pesan"] = $hasil[0]['pesan'];
        $data["time_stamp"] = $hasil[0]['time_stamp'];
        echo json_encode($data, JSON_PRETTY_PRINT);
    }else if(!empty($_POST["idDP"])){
        $id = $_POST["idDP"];
        $hasil = query("SELECT * FROM list_penawaran WHERE id=$id");
        $data["nama"] = $hasil[0]['nama'];
        $data["no_hp"] = $hasil[0]['no_hp'];
        $data["email"] = $hasil[0]['email'];
        $data["jk"] = $hasil[0]['jk'];
        $data["kota"] = $hasil[0]['kota'];
        $data["cabang"] = $hasil[0]['cabang'];
        $data["mobil"] = $hasil[0]['mobil'];
        $data["time_stamp"] = $hasil[0]['time_stamp'];
        echo json_encode($data, JSON_PRETTY_PRINT);
    }else if(!empty($_POST["idDT"])){
        $id = $_POST["idDT"];;
        $hasil = query("SELECT * FROM list_test_drive WHERE kdtdrive='$id'");
        $data["id"] = $hasil[0]['kdtdrive'];
        $data["nama"] = $hasil[0]['nama'];
        $data["no_hp"] = $hasil[0]['no_hp'];
        $data["email"] = $hasil[0]['email'];  
        $data["kota"] = $hasil[0]['kota'];  
        $data["cabang"] = $hasil[0]['cabang'];  
        $data["tanggal"] = $hasil[0]['tanggal'];  
        $data["waktu"] = $hasil[0]['waktu'];  
        $data["mobil"] = $hasil[0]['mobil'];  
        $data["time_stamp"] = $hasil[0]['time_stamp'];  
        echo json_encode($data, JSON_PRETTY_PRINT);
    }
?>