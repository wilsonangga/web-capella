<?php
    require '../function.php';
    if(!empty($_POST['idPF'])){
        $id = $_POST['idPF'];
        $hasil = query("SELECT * FROM user WHERE id=$id");
        $data["id"] = $hasil[0]['id'];
        $data["name"] = $hasil[0]['nama'];
        $data["username"] = $hasil[0]['username'];
        $data["cabang"] = $hasil[0]['kdcab'];
        if($hasil[0]['role'] == 1)
            $data["role"] = "admin";
        else if($hasil[0]['role'] == 2)
            $data["role"] = "user";
        echo json_encode($data, JSON_PRETTY_PRINT);    
    }else if(!empty($_POST['idMU'])){
        $id = $_POST['idMU'];
        $hasil = query("SELECT * FROM user WHERE id=$id");
        $data["id"] = $hasil[0]['id'];
        $data["name"] = $hasil[0]['nama'];
        $data["username"] = $hasil[0]['username'];
        $data["cabang"] = $hasil[0]['kdcab'];
        $data["role"] = $hasil[0]['role'];
        echo json_encode($data, JSON_PRETTY_PRINT);    
    }else if(!empty($_POST['idAU'])){
        $id = $_POST['idAU'];
        $hasil = query("SELECT * FROM about_us WHERE id=$id");
        $data["id"] = $hasil[0]['id'];
        $data["title"] = $hasil[0]['judul'];
        $data["sub"] = $hasil[0]['subjudul'];
        $data["content"] = $hasil[0]['isi'];
        $data["status"] = $hasil[0]['status'];
        echo json_encode($data, JSON_PRETTY_PRINT);    
    }
    else if(!empty($_POST['idAN'])){
        $id = $_POST['idAN'];
        $hasil = query("SELECT * FROM marquee WHERE id=$id");
        $data["id"] = $hasil[0]['id'];
        $data["content"] = $hasil[0]['isi'];
        $data["status"] = $hasil[0]['status'];
        echo json_encode($data, JSON_PRETTY_PRINT);    
    }
    else if(!empty($_POST['idDL'])){
        $id = $_POST['idDL'];
        $hasil = query("SELECT * FROM dealer WHERE id=$id");
        $data["id"] = $hasil[0]['id'];
        $data["sort"] = $hasil[0]['sort'];
        $data["kdcab"] = $hasil[0]['kdcab'];
        $data["cabang"] = $hasil[0]['cabang'];
        $data["address"] = $hasil[0]['alamat'];
        $data["nosh"] = $hasil[0]['no_showroom'];
        $data["nosv"] = $hasil[0]['no_service'];
        $data["layanan"] = $hasil[0]['layanan'];
        $data["maps"] = $hasil[0]['maps'];
        $data["status"] = $hasil[0]['status'];
        $data["info"] = $hasil[0]['info'];
        echo json_encode($data, JSON_PRETTY_PRINT);    
    }
    else if(!empty($_POST['id'])){
        $id = $_POST['id'];
        $hasil = query("SELECT * FROM home_slideshow WHERE id=$id");
        $data["id"] = $hasil[0]['id'];
        $data["sort"] = $hasil[0]['sort'];
        $data["title"] = $hasil[0]['name'];
        $data["image"] = $hasil[0]['gambar'];
        $data["status"] = $hasil[0]['status'];
        echo json_encode($data, JSON_PRETTY_PRINT);    
    }else if(!empty($_POST['idd'])){
        $id = $_POST['idd'];
        $hasil = query("SELECT * FROM promo WHERE id=$id");
        $data["id"] = $hasil[0]['id'];
        $data["dealer"] = $hasil[0]['kdcab'];
        $data["image"] = $hasil[0]['gambar'];
        $data["exp"] = $hasil[0]['expired'];
        $data["title"] = $hasil[0]['judul'];
        $data["content"] = $hasil[0]['isi'];
        $data["status"] = $hasil[0]['status'];
        echo json_encode($data, JSON_PRETTY_PRINT);
    }else if(!empty($_POST['idPM'])){
        $id = $_POST['idPM'];
        $hasil = query("SELECT * FROM product WHERE id=$id");
        $data["id"] = $hasil[0]['id'];
        $data["name"] = $hasil[0]['nama'];
        $data["price"] = $hasil[0]['harga'];
        $data["seaters"] = $hasil[0]['seaters'];
        $data["images"] = $hasil[0]['gambar'];
        $data["brosur"] = $hasil[0]['brosur'];
        echo json_encode($data, JSON_PRETTY_PRINT);
    }else if(!empty($_POST['idPB'])){
        $id = $_POST['idPB'];
        $hasil = query("SELECT * FROM product_detail WHERE id=$id");
        $pid = $hasil[0]['product_id'];
        $product = query("SELECT nama FROM product WHERE id = $pid");
        $data["id"] = $hasil[0]['id'];
        $data["name"] = $product[0]['nama'];
        $data["kd_ban"] = $hasil[0]['kd_ban'];
        $data["images"] = $hasil[0]['banner'];
        echo json_encode($data, JSON_PRETTY_PRINT);
    }else if(!empty($_POST['idPC'])){
        $id = $_POST['idPC'];
        $hasil = query("SELECT * FROM product_color WHERE id=$id");
        $data["product_id"] = $hasil[0]['product_id'];
        $data["warna"] = $hasil[0]['color'];
        $data["nwarna"] = $hasil[0]['n_color'];
        echo json_encode($data, JSON_PRETTY_PRINT);
    }else if(!empty($_POST["idPP"])){
        $id = $_POST["idPP"];
        $cabang = $_POST["cabangPP"];
        $hasil = query("SELECT * FROM product_price WHERE id = '$id'");
        $data["product_id"] = $hasil[0]['product_id'];
        $data["tipe"] = $hasil[0]['tipe'];
        $data["harga"] = $hasil[0][$cabang];
        echo json_encode($data, JSON_PRETTY_PRINT);
    }else if(!empty($_POST["idPS"])){
        $id = $_POST["idPS"];
        $hasil = query("SELECT * FROM product_spec WHERE id = '$id'");
        $data["product_id"] = $hasil[0]['product_id'];
        $data["kd_spec"] = $hasil[0]['kd_spec'];
        $data["dsc"] = $hasil[0]['dsc'];
        echo json_encode($data, JSON_PRETTY_PRINT);
    }else if(!empty($_POST["idPT"])){
        $id = $_POST["idPT"];
        $nama = query("SELECT nama FROM product p INNER JOIN product_tool pt ON p.id = pt.product_id WHERE pt.id = '$id'");
        $nama = $nama[0]['nama'];
        $hasil = query("SELECT * FROM product_tool WHERE id = '$id'");
        $data["product_id"] = $hasil[0]['product_id'];
        $data["tool"] = $hasil[0]['kd_tool'];
        $data["images"] = $hasil[0]['gambar'];
        $data["judul"] = $hasil[0]['judul'];
        $data["dsc"] = $hasil[0]['dsc'];
        $data["nama"] = $nama;
        echo json_encode($data, JSON_PRETTY_PRINT);
    }else if(!empty($_POST["idNL"])){
        $id = $_POST["idNL"];
        $hasil = query("SELECT * FROM news WHERE id = '$id'");
        $data["idNL"] = $hasil[0]['id'];
        $data["cabang"] = $hasil[0]['kdcab'];
        $data["judul"] = $hasil[0]['judul'];
        $data["gambar"] = $hasil[0]['gambar'];
        $data["isi"] = $hasil[0]['isi'];
        echo json_encode($data, JSON_PRETTY_PRINT);
    }else if(!empty($_POST["idCS"])){
        $id = $_POST["idCS"];
        $hasil = query("SELECT * FROM contact_service WHERE id=$id");
        $data["id"] = $hasil[0]['id'];
        $data["sort"] = $hasil[0]['sort'];
        $data["kdcab"] = $hasil[0]['kdcab'];
        $data["cabang"] = $hasil[0]['cabang'];
        $data["nama"] = $hasil[0]['nama'];
        $data["email"] = $hasil[0]['email'];
        $data["cc"] = $hasil[0]['cc'];
        echo json_encode($data, JSON_PRETTY_PRINT);
    }else if(!empty($_POST["idCP"])){
        $id = $_POST["idCP"];;
        $hasil = query("SELECT * FROM contact_kacab WHERE id=$id");
        $data["id"] = $hasil[0]['id'];
        $data["kdcab"] = $hasil[0]['kdcab'];
        $data["nama"] = $hasil[0]['nama'];
        $data["email"] = $hasil[0]['email'];  
        echo json_encode($data, JSON_PRETTY_PRINT);
    }
?>