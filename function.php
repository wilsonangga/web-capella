<?php
session_start();
function cvdb () {
	$DBSource = "localhost";
	$UIDDB = "root";
	$UPWDDB = "";
    $DBName = "capella_web";
	return array("dbs"=>$DBSource, "dbu"=>$UIDDB, "dbp"=>$UPWDDB, "dbn"=>$DBName);
}
function query($query){
    $konek=cvdb();
    $con = mysqli_connect($konek["dbs"], $konek["dbu"], $konek["dbp"],$konek["dbn"]);
    $result = mysqli_query($con, $query);
    $rows = "";
    while($row=mysqli_fetch_assoc($result)){
        $rows[] = $row; 
    }
    return $rows;
}

function vname(&$var, $scope=false, $prefix='unique', $suffix='value') {
	if($scope) $vals = $scope;
	else      $vals = $GLOBALS;
	$old = $var;
	$var = $new = $prefix.rand().$suffix;
	$vname = FALSE;
	foreach($vals as $key => $val) {
		if($val === $new) $vname = $key;
	}
	$var = $old;
	return $vname;
}
function showMySQLError ($parSQL, $callertype) {
	die("<br />\n<span style='font-family:verdana;font-size:12px;'><br />\nError Number:<br />\n<span style='font-weight:bold;'>".mysql_errno()."</span>,<br />\nError Message:<br />\n<span style='font-weight:bold;'>".mysql_error()."</span><br />query: <span style='font-weight:bold;'>".$parSQL."</span>\n<br /><span>CallerNVariable= [".$callertype."]</span>");
	//die("query error");
}
function callRS(&$rs, $parSQL) {
	#$theVariable = vname(&$rs);
	$theVariable = vname($rs);
	$setup = cvdb();
	$con = mysqli_connect($setup["dbs"], $setup["dbu"], $setup["dbp"]);
	if (!$con) showMySQLError($parSQL, "callRS: ".$theVariable);
	$gege = mysqli_select_db($con, $setup["dbn"]);
	if (!$gege) showMySQLError($parSQL, "callRS: ".$theVariable);
	if (!($result = mysqli_query($con, $parSQL))) showMySQLError($parSQL, "callRS: ".$theVariable);
	$cnt = -1;
	while(($row = mysqli_fetch_array($result))==true){
		$cnt++; $rs[$cnt] = $row;
	}
	if (!mysqli_close($con)) showMySQLError($parSQL, "callRS: ".$theVariable);
}
function execRS($parSQL) {
	$theVariable = vname($parSQL);
	$setup = cvdb();
	$con = mysqli_connect($setup["dbs"], $setup["dbu"], $setup["dbp"], $setup["dbn"]);
	if (!$con) showMySQLError($parSQL, "execRS: ".$theVariable);
	$gege = mysqli_select_db($con, $setup["dbn"]);
	if (!$gege) showMySQLError($parSQL, "execRS: ".$theVariable);
	if (!($result = mysqli_query($con, $parSQL))) showMySQLError($parSQL, "execRS: ".$theVariable);
	if (!mysqli_close($con)) showMySQLError($parSQL, "execRS: ".$theVariable);
}
function check_email_address($email) {
	// First, we check that there's one @ symbol, 
	// and that the lengths are right. 
	if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
		// Email invalid because wrong number of characters 
		// in one section or wrong number of @ symbols.
		return false;
	}
	// Split it into sections to make life easier
	$email_array = explode("@", $email);
	$local_array = explode(".", $email_array[0]);
	for ($i = 0; $i < sizeof($local_array); $i++) {
		if
		(!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&
		'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$",
		$local_array[$i])) {
			return false;
		}
	}
	// Check if domain is IP. If not, 
	// it should be valid domain name
	if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) {
		$domain_array = explode(".", $email_array[1]);
		if (sizeof($domain_array) < 2) {
			return false; // Not enough parts to domain
		}
		for ($i = 0; $i < sizeof($domain_array); $i++) {
			if
			(!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|
			([A-Za-z0-9]+))$",
			$domain_array[$i])) {
				return false;
			}
		}
	}
	return true;
}
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
function register($data){
    $konek=cvdb();
    $con = mysqli_connect($konek["dbs"], $konek["dbu"], $konek["dbp"],$konek["dbn"]);
    $username  = strtolower(stripslashes($data["inputEmail"]));
    $password  = mysqli_real_escape_string($con,$data["inputPassword"]);
    $password2 = mysqli_real_escape_string($con,$data["inputPassword2"]);
    $token = mysqli_real_escape_string($con,$data["inputToken"]);

    //cek username sudah ada atau belum
    $rsc = array(); 
    $qc = "SELECT username from user WHERE username = '$username'" ;
	callRS($rsc, $qc);
    if(count($rsc)>0){
        echo "<script>alert('username sudah terdaftar!')</script>";
        return false;
    }
    
    //cek konfirmasi password
    if($password != $password2){
        echo "<script>alert('konfirmasi password tidak sesuai!')</script>";
        return false;
    }
    
    //cek token
    if($token != "Capella@Medan112233"){
        echo "<script>alert('Token Salah !')</script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($con,"INSERT INTO user (id,username,password) VALUES ('','$username','$password')");
    return mysqli_affected_rows($con);
} 
function delete($id,$sect){
    $konek=cvdb();
    $con = mysqli_connect($konek["dbs"], $konek["dbu"], $konek["dbp"],$konek["dbn"]);
    if($sect == 'mu'){
        mysqli_query($con,"DELETE FROM user WHERE id = '".$id."'");    
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'user'");
    }else if($sect == 'au'){
        mysqli_query($con,"DELETE FROM about_us WHERE id = '".$id."'");    
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'about_us'");
    }else if($sect == 'an'){
        mysqli_query($con,"DELETE FROM marquee WHERE id = '".$id."'");    
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'marquee'");
    }else if($sect == 'dl'){
        mysqli_query($con,"DELETE FROM dealer WHERE id = '".$id."'");    
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'dealer'");
    }else if($sect == 'hs'){
        $fileName = query("SELECT gambar FROM home_slideshow WHERE id = $id");
        unlink('images/slideshow/'.$fileName[0]['gambar']);
        mysqli_query($con,"DELETE FROM home_slideshow WHERE id = '".$id."'");    
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'home_slideshow'");
    }else if($sect == 'pl'){
        $fileName = query("SELECT gambar FROM promo WHERE id = $id");
        $kdcab = query("SELECT kdcab FROM promo WHERE id = $id");
        unlink('images/promo/'.$fileName[0]['gambar']);
        mysqli_query($con,"DELETE FROM promo WHERE id = $id");  
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'promo_list' AND kdcab = '".$kdcab[0]['kdcab']."'");
    }else if($sect == 'pm'){
        $folderName = query("SELECT nama FROM product WHERE id = $id");
        $brosName = query("SELECT brosur FROM product WHERE id = $id");
        unlink('brosur/'.$brosName[0]['brosur']);
        rrmdir('images/product/'.$folderName[0]['nama']);
        mysqli_query($con,"DELETE FROM product WHERE id = $id");  
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'product'");
    }else if($sect == 'pb'){
        $pid = query("SELECT product_id FROM product_detail WHERE id = $id");
        $pid = $pid[0]['product_id'];
        $folderName = query("SELECT nama FROM product WHERE id = $pid");
        $fileName = query("SELECT banner FROM product_detail WHERE id = $id");
        unlink('images/product/'.$folderName[0]['nama'].'/banner/'.$fileName[0]['banner']);
        mysqli_query($con,"DELETE FROM product_detail WHERE id = $id");  
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'product_detail'");
    }else if($sect == 'pc'){
        mysqli_query($con,"DELETE FROM product_color WHERE id = $id");  
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'product_color'");
    }else if($sect == 'ps'){
        mysqli_query($con,"DELETE FROM product_spec WHERE id = $id");  
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'product_spec'");
    }else if($sect == 'pt'){
        $pid = query("SELECT product_id FROM product_tool WHERE id = $id");
        $pid = $pid[0]['product_id'];
        $folderName = query("SELECT nama FROM product WHERE id = $pid");
        $fileName = query("SELECT gambar FROM product_tool WHERE id = $id");
        unlink('images/product/'.$folderName[0]['nama'].'/'.$fileName[0]['gambar']);
        mysqli_query($con,"DELETE FROM product_tool WHERE id = $id");  
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'product_tool'");
    }else if($sect == 'nl'){
        $fileName = query("SELECT gambar FROM news WHERE id = $id");
        $kdcab = query("SELECT kdcab FROM news WHERE id = $id");
        unlink('images/news/'.$fileName[0]['gambar']);
        mysqli_query($con,"DELETE FROM news WHERE id = $id");  
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'news' AND kdcab = '".$kdcab[0]['kdcab']."'");
    }else if($sect == 'cs'){
        mysqli_query($con,"DELETE FROM contact_service WHERE id = $id");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'contact_service'");
    }else if($sect == 'cp'){
        mysqli_query($con,"DELETE FROM contact_kacab WHERE id = $id");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'contact_kacab'");
    }else if($sect == 'ut'){
        $kdcab = query("SELECT kdcab FROM unit_test_drive WHERE id = $id");
        mysqli_query($con,"DELETE FROM unit_test_drive WHERE id = $id");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'unit_test_drive' AND kdcab = '".$kdcab[0]['kdcab']."'");
    }
    return mysqli_affected_rows($con);
}
function add($data,$sect){
    $konek=cvdb();
    $con = mysqli_connect($konek["dbs"], $konek["dbu"], $konek["dbp"],$konek["dbn"]);
    if($sect == 'au'){
        $title  = htmlspecialchars(trim($data["add_titleAU"]));
        $sub  = htmlspecialchars(trim($data["add_subAU"]));
        $content  = $data["add_contentAU"];
        $status  = htmlspecialchars(trim($data["add_statusAU"]));
        mysqli_query($con,"INSERT INTO about_us VALUES ('','$title','$sub','$content','$status')");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'about_us'");
    }else if($sect == 'an'){
        $content = htmlspecialchars(trim($data["add_contentAN"]));
        $status = htmlspecialchars(trim($data["add_statusAN"]));
        mysqli_query($con,"INSERT INTO marquee(id,isi,status) VALUES ('','$content','$status')");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'marquee'");
    }else if($sect == 'dl'){
        $kdcab = htmlspecialchars(trim(strtoupper($data["add_kdcabDL"])));
        $name = htmlspecialchars(trim($data["add_cabangDL"]));
        $address = htmlspecialchars(trim($data["add_alamatDL"]));
        $nosh = htmlspecialchars(trim($data["add_noshDL"]));
        $nosv = htmlspecialchars(trim($data["add_nosvDL"]));
        $layanan = htmlspecialchars(trim($data["add_layananDL"]));
        $maps = htmlspecialchars(trim($data["add_mapsDL"]));
        $status = htmlspecialchars(trim($data["add_statusDL"]));
        $info = $data["add_infoDL"];
        
        $rsc = array(); 
        $qc = "SELECT * FROM dealer";
        callRS($rsc, $qc);
        $sort = count($rsc)+1;
        
        mysqli_query($con,"INSERT INTO dealer(id,kdcab,cabang,alamat,no_showroom,no_service,layanan,maps,info,sort,status) VALUES ('','$kdcab','$name','$address','$nosh','$nosv','$layanan','$maps','$info',$sort,'$status')");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'dealer'");
    }else if($sect == 'hs'){
        $title  = htmlspecialchars(trim($data["titleHS"]));
        $status = htmlspecialchars(trim($data["statusHS"]));

        $rsc = array(); 
        $qc = "SELECT * FROM home_slideshow";
        callRS($rsc, $qc);
        $sort = count($rsc)+1;

        $image  = upload('slideshow','imgHS',NULL);
        if(!$image){
            return false;
        }
        mysqli_query($con,"INSERT INTO home_slideshow (id,name,gambar,status,sort) VALUES ('','$title','$image','$status','$sort')");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'home_slideshow'");
    }else if($sect == 'pl'){
        $kd_role = $_SESSION["role"];
        $dealer  = htmlspecialchars(trim($data["add_dealerPL"]));
        $expired = htmlspecialchars(trim($data["add_expPL"]));
        $title = htmlspecialchars(trim($data["add_titlePL"]));
        $content = $data["add_contentPL"];
        if($kd_role == 1)
            $status = htmlspecialchars(trim($data["add_statusPL"]));
        else
            $status = "Pend";
        $image  = upload('promo','add_imgPL',NULL);
        
        if(!$image){
            return false;
        }
        mysqli_query($con,"INSERT INTO promo VALUES ('','$dealer','$image',CURDATE(),'$expired','$title','$content','$status')");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'promo_list' AND kdcab = '$dealer'");
        $action = "Tambah";
        if($kd_role != 1)
            require 'mail_info.php';
    }else if($sect == 'pm'){
        $id = htmlspecialchars(trim($data["add_idPM"]));
        $image  = check_upload('product','add_imgPM');
        $name = htmlspecialchars(trim($data["add_namePM"]));
        $price = htmlspecialchars(trim($data["add_pricePM"]));
        $seaters = htmlspecialchars(trim($data["add_seatersPM"]));
        $brosur = check_upload('brosur','add_brosurPM');
        if(!$brosur || !$image){
            return false;
        }
        mkdir('images/product/'.$name);
        mkdir('images/product/'.$name.'/banner/');
        $arr = array($name);
        if($image && $brosur){
            $image = upload('product','add_imgPM',$arr);
            $brosur = upload('brosur','add_brosurPM',NULL);
        }
        mysqli_query($con,"INSERT INTO product(id,gambar,nama,harga,seaters,brosur) VALUES ('$id','$image','$name',$price,$seaters,'$brosur')");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'product'");
    }else if($sect == 'pb'){
        $id = htmlspecialchars(trim($data["add_idPB"]));
        $name = query("SELECT * FROM product WHERE id = '$id'");
        $name = $name[0]['nama'];
        $jbanner  = htmlspecialchars(trim($data["add_jbannerPB"]));
        $arr = array($name,'banner');
        $image  = upload('product','add_imgPB',$arr);
        if(!$image){
            return false;
        }
        mysqli_query($con,"INSERT INTO product_detail(id,product_id,kd_ban,banner) VALUES ('','$id','$jbanner','$image')");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'product_detail'");
    }else if($sect == 'pc'){
        $id = htmlspecialchars(trim($data["add_idPC"]));
        $nwarna  = htmlspecialchars(trim($data["add_nwarnaPC"]));
        $warna = $data["add_warnaPC"];
        mysqli_query($con,"INSERT INTO product_color(id,product_id,color,n_color) VALUES ('','$id','$warna','$nwarna')");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'product_color'");
    }else if($sect == 'ps'){
        $product = htmlspecialchars(trim($data["add_productPS"]));
        $spec  = htmlspecialchars(trim($data["add_specPS"]));
        $dsc = $data["add_dscPS"];
        mysqli_query($con,"INSERT INTO product_spec(id,product_id,kd_spec,dsc) VALUES ('','$product','$spec','$dsc')");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'product_spec'");
    }else if($sect == 'pt'){
        $product = htmlspecialchars(trim($data["add_productPT"]));
        $tool = htmlspecialchars(trim($data["add_toolPT"]));
        $name = query("SELECT nama FROM product WHERE id = $product");
        $arr = array($name[0]['nama']);
        $image = upload('product','add_imgPT',$arr);
        if(!$image){
            return false;
        }
        $judul = $data["add_judulPT"];
        $dsc = htmlspecialchars(trim($data["add_desPT"]));
        mysqli_query($con,"INSERT INTO product_tool(id,product_id,kd_tool,gambar,judul,dsc) VALUES ('','$product','$tool','$image','$judul','$dsc')");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'product_tool'");
    }else if($sect == 'nl'){
        $judul = htmlspecialchars(trim($data["add_judulNL"]));
        $cabang = htmlspecialchars(trim($data["add_cabangNL"]));
        $image  = upload('news','add_imgNL',NULL);
        if(!$image){
            return false;
        }
        $content = $data["add_contentNL"];
        $tanggal = date("Y-m-d");
        mysqli_query($con,"INSERT INTO news (id,kdcab,judul,gambar,tanggal,isi) VALUES ('','$cabang','$judul','$image','$tanggal','$content')");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'news' AND kdcab = '$cabang'");
    }else if($sect == 'cs'){
        $kdcab = htmlspecialchars(trim(strtoupper($data["add_kdcabCS"])));
        $cabang = htmlspecialchars(trim($data["add_cabangCS"]));
        $nama = htmlspecialchars(trim($data["add_namaCS"]));
        $email = htmlspecialchars(trim($data["add_emailCS"]));
        $cc = htmlspecialchars(trim($data["add_ccCS"]));
        $rsc = array(); 
        $qc = "SELECT * FROM contact_service";
        callRS($rsc, $qc);
        $sort = count($rsc)+1;
        mysqli_query($con,"INSERT INTO contact_service VALUES ('','$kdcab','$cabang','$nama','$email','$cc','$sort')");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'contact_service'");
    }else if($sect == 'cp'){
        $kdcab = htmlspecialchars(trim(strtoupper($data["add_kdcabCP"])));
        $nama = htmlspecialchars(trim(strtoupper($data["add_namaCP"])));
        $email = htmlspecialchars(trim($data["add_emailCP"]));
        mysqli_query($con,"INSERT INTO contact_kacab VALUES ('','$kdcab','$nama','$email')");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'contact_kacab'");
    }else if($sect == 'ut'){
        $kdcab = htmlspecialchars(trim($data["add_cabangUT"]));
        $unit = htmlspecialchars(trim($data["add_unitUT"]));
        mysqli_query($con,"INSERT INTO unit_test_drive(id,kdcab,product_id) VALUES ('','$kdcab','$unit')");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'unit_test_drive' AND kdcab='$kdcab'");
    }
    return mysqli_affected_rows($con);
}
function rrmdir($dir) {
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
          if ($object != "." && $object != "..") {
            if (filetype($dir."/".$object) == "dir") 
               rrmdir($dir."/".$object); 
            else unlink   ($dir."/".$object);
          }
        }
        reset($objects);
        rmdir($dir);
    }
}
function check_upload($path,$name){
    $namaFile = $_FILES[$name]['name'];
    $error = $_FILES[$name]['error'];
    $tmpName = $_FILES[$name]['tmp_name'];
    $ukuranFile = $_FILES[$name]['size'];
    
    if($path == 'brosur'){
        //cek apakah tidak ada gambar yang diupload
        if($error == 4){
            echo "<script>alert('Pilih file terlebih dahulu');</script>";
            return false;
        }

        //cek apakah yang diupload gambar 
        $ekstensiFileValid = 'pdf';
        $ekstensiFile = pathinfo($namaFile,PATHINFO_EXTENSION);
        $ekstensiFile = strtolower($ekstensiFile);
        if($ekstensiFile != $ekstensiFileValid){
            echo "<script>alert('File wajib dalam format PDF');</script>";
            return false;
        }
    }else{
        //cek apakah tidak ada gambar yang diupload
        if($error == 4){
            echo "<script>alert('Pilih gambar terlebih dahulu');</script>";
            return false;
        }

        //cek apakah yang diupload gambar 
        $ekstensiGambarValid = ['jpg','jpeg','png'];
        $ekstensiGambar = pathinfo($namaFile,PATHINFO_EXTENSION);
        $ekstensiGambar = strtolower($ekstensiGambar);
        if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
            echo "<script>alert('yang anda upload bukan gambar');</script>";
            return false;
        }

        //cek ukuran file
        if($ukuranFile>1000000){
            echo "<script>alert('Ukuran gambar terlalu besar');</script>";
            return false;
        }
    }
    return true;
}
function upload($path,$name,$product){
    $namaFile = $_FILES[$name]['name'];
    $error = $_FILES[$name]['error'];
    $tmpName = $_FILES[$name]['tmp_name'];
    $ukuranFile = $_FILES[$name]['size'];
    
    if($path == 'brosur'){
        //cek apakah tidak ada brosur yang diupload
        if($error == 4){
            echo "<script>alert('Pilih file terlebih dahulu');</script>";
            return false;
        }

        //cek apakah yang diupload brosur 
        $ekstensiFileValid = 'pdf';
        $ekstensiFile = pathinfo($namaFile,PATHINFO_EXTENSION);
        $ekstensiFile = strtolower($ekstensiFile);
        if($ekstensiFile != $ekstensiFileValid){
            echo "<script>alert('File wajib dalam format PDF');</script>";
            return false;
        }
        
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiFile;
        move_uploaded_file($tmpName, $path.'/'.$namaFileBaru);
    }else{
        //cek apakah tidak ada gambar yang diupload
        if($error == 4){
            echo "<script>alert('Pilih gambar terlebih dahulu');</script>";
            return false;
        }

        //cek apakah yang diupload gambar 
        $ekstensiGambarValid = ['jpg','jpeg','png'];
        $ekstensiGambar = pathinfo($namaFile,PATHINFO_EXTENSION);
        $ekstensiGambar = strtolower($ekstensiGambar);
        if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
            echo "<script>alert('yang anda upload bukan gambar');</script>";
            return false;
        }

        //cek ukuran file
        if($ukuranFile>1000000){
            echo "<script>alert('Ukuran gambar terlalu besar');</script>";
            return false;
        }

        //upload gambar
        //generatae nama baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        if(!is_null($product))
            if(!isset($product[1]))
                move_uploaded_file($tmpName,'images/'.$path.'/'.$product[0].'/'.$namaFileBaru);
            else
                move_uploaded_file($tmpName,'images/'.$path.'/'.$product[0].'/'.$product[1].'/'.$namaFileBaru);
        else
            move_uploaded_file($tmpName,'images/'.$path.'/'.$namaFileBaru);
    }
    return $namaFileBaru;
}
function edit($data,$sect){
    $konek=cvdb();
    $con = mysqli_connect($konek["dbs"], $konek["dbu"], $konek["dbp"],$konek["dbn"]);
    if($sect == 'pf'){
        $id = $data["edit_idPF"];
        $name = htmlspecialchars(trim($data["edit_namePF"]));
        $cabang = htmlspecialchars(trim($data["edit_cabangPF"]));
        if($data["edit_rolePF"] == "admin")
            $role = 1;
        else if($data["edit_rolePF"] == "user")
            $role = 2;
        mysqli_query($con,"UPDATE user SET nama = '$name', kdcab = '$cabang', role = $role, last_update = NOW()  WHERE id = '$id'");
    }else if($sect == 'pswd'){
        $id = $data["edit_idPSWD"];
        $new_pass = $_POST["edit_newPSWD"];
        $new_pass = password_hash($new_pass, PASSWORD_DEFAULT);
        mysqli_query($con,"UPDATE user SET password = '$new_pass', last_update = NOW()  WHERE id = '$id'");
    }else if($sect == 'mu'){
        $id = $data["edit_idMU"];
        $name = htmlspecialchars(trim($data["edit_nameMU"]));
        $cabang = htmlspecialchars(trim($data["edit_cabangMU"]));
        $role = htmlspecialchars(trim($data["edit_roleMU"]));
        mysqli_query($con,"UPDATE user SET nama = '$name', kdcab = '$cabang', role = $role WHERE id = '$id'");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'user'");
    }else if($sect == 'au'){
        $id = $data["edit_idAU"];
        $title = htmlspecialchars(trim($data["edit_titleAU"]));
        $sub = htmlspecialchars(trim($data["edit_subAU"]));
        $content = $data["edit_contentAU"];
        $status = $data["edit_statusAU"];
        mysqli_query($con,"UPDATE about_us SET judul = '$title', subjudul = '$sub', isi = '$content', status = '$status' WHERE id = '$id'");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'about_us'");
    }else if($sect == 'an'){
        $id = $data["edit_idAN"];
        $content = $data["edit_contentAN"];
        $status = $data["edit_statusAN"];
        mysqli_query($con,"UPDATE marquee SET isi = '$content', status = '$status' WHERE id = '$id'");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'marquee'");
    }else if($sect == 'dl'){
        $id = $data["edit_idDL"];
        $sort = htmlspecialchars(trim($data["edit_sortDL"]));
        $kdcab = htmlspecialchars(trim(strtoupper($data["edit_kdcabDL"])));
        $name = htmlspecialchars(trim($data["edit_cabangDL"]));
        $address = htmlspecialchars(trim($data["edit_alamatDL"]));
        $nosh = htmlspecialchars(trim($data["edit_noshDL"]));
        $nosv = htmlspecialchars(trim($data["edit_nosvDL"]));
        $layanan = htmlspecialchars(trim($data["edit_layananDL"]));
        $maps = htmlspecialchars(trim($data["edit_mapsDL"]));
        $status = htmlspecialchars(trim($data["edit_statusDL"]));
        $info = $data["edit_infoDL"];
        mysqli_query($con,"UPDATE dealer SET kdcab = '$kdcab', cabang = '$name', alamat = '$address', no_showroom = '$nosh', no_service = '$nosv', layanan = '$layanan', maps = '$maps', info = '$info', sort = $sort, status = '$status' WHERE id = '$id'");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'dealer'");
    }
    else if($sect == 'hs'){
        $id = $data["edit_idHS"];
        $sort = htmlspecialchars(trim($data["edit_sortHS"]));
        $title = htmlspecialchars(trim($data["edit_titleHS"]));
        $imgOld = $data["old_img"];
        if($_FILES['edit_imgHS']['error'] === 4){
            $img = $imgOld;
        }else{
            $img = upload('slideshow',"edit_imgHS",NULL);
            if(!$img){
                return false;
            }
            unlink('images/slideshow/'.$imgOld);
        }
        $status = $data["edit_statusHS"];
        mysqli_query($con,"UPDATE home_slideshow SET sort = $sort, name = '$title', status = '$status', gambar = '$img' WHERE id = '$id'");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'home_slideshow'");
    }else if($sect == 'pl'){
        $kd_role = $_SESSION["role"];
        $id = $data["edit_idPL"];
        $dealer = $data["edit_dealerPL"];
        $exp = $data["edit_expPL"];
        $title = $data["edit_titlePL"];
        $content = $data["edit_contentPL"];
        if($kd_role == 1)
            $status = $data["edit_statusPL"];
        else
            $status = "Pend";
        $imgOld = $data["old_imgPL"];
        if($_FILES['edit_imgPL']['error'] === 4){
            $img = $imgOld;
        }else{
            $img = upload('promo',"edit_imgPL",NULL);
            if(!$img){
                return false;
            }
            unlink('images/promo/'.$imgOld);
        }
        mysqli_query($con, "UPDATE promo SET kdcab = '$dealer', gambar = '$img', expired = '$exp', judul = '$title', isi = '$content', status = '$status' WHERE id = $id");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'promo_list' AND kdcab = '$dealer'");
        $action = "Edit";
        if($kd_role != 1)
            require 'mail_info.php';
    }else if($sect == 'pm'){
        $idOld = $data["old_idPM"];
        $id = $data["edit_idPM"];
        $name = $data["edit_namePM"];
        $price = $data["edit_pricePM"];
        $seaters = $data["edit_seatersPM"];
        $imgOld = $data["old_imgPM"];
        $brosOld = $data["old_brosurPM"];
        if($_FILES['edit_imgPM']['error'] === 4 || $_FILES['edit_brosurPM']['error'] === 4){
            if($_FILES['edit_imgPM']['error'] === 4)
                $img = $imgOld;
            if($_FILES['edit_brosurPM']['error'] === 4)
                $bros = $brosOld;
        }
        if($_FILES['edit_imgPM']['error'] !== 4 || $_FILES['edit_brosurPM']['error'] !== 4){
            if($_FILES['edit_imgPM']['error'] !== 4){
                $arr = array($name);
                $img = upload('product',"edit_imgPM",$arr);
                if(!$img){
                    return false;
                }
                unlink('images/product/'.$name.'/'.$imgOld);    
            }
            if($_FILES['edit_brosurPM']['error'] !== 4){
                $bros = upload('brosur',"edit_brosurPM",NULL);
                if(!$bros){
                    return false;
                }
                unlink('brosur/'.$brosOld);
            }
        }
        mysqli_query($con, "UPDATE product SET id = '$id', gambar = '$img', nama = '$name', harga = $price, seaters = $seaters, brosur = '$bros' WHERE id = $idOld");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'product'");
    }else if($sect == 'pb'){
        $id = htmlspecialchars(trim($data["edit_idPB"]));
        $name = query("SELECT product_id FROM product_detail WHERE id = '$id'");
        $name = $name[0]['product_id'];
        $name = query("SELECT nama FROM product WHERE id = '$name'");
        $name = $name[0]['nama'];
        echo "<script>alert('".$name."')</script>";
        $jbanner  = htmlspecialchars(trim($data["edit_jbannerPB"]));
        $imgOld = $data["old_imgPB"];
        if($_FILES['edit_imgPB']['error'] === 4){
            $img = $imgOld;
        }else{
            $arr = array($name,'banner');
            $img  = upload('product','edit_imgPB',$arr);
            if(!$img){
                return false;
            }
            unlink('images/product/'.$name.'/banner/'.$imgOld);
        }
        mysqli_query($con, "UPDATE product_detail SET kd_ban = '$jbanner', banner = '$img' WHERE id = $id");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'product_detail'");
    }else if($sect == 'pc'){
        $id = htmlspecialchars(trim($data["edit_idPC"]));
        $nwarna  = htmlspecialchars(trim($data["edit_nwarnaPC"]));
        $warna = $data["edit_warnaPC"];
        mysqli_query($con,"UPDATE product_color SET color = '$warna', n_color = '$nwarna' WHERE id = $id");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'product_color'");
    }else if($sect == 'ps'){
        $id = htmlspecialchars(trim($data["edit_idPS"]));
        $product  = htmlspecialchars(trim($data["edit_productPS"]));
        $spec  = htmlspecialchars(trim($data["edit_specPS"]));
        $dsc = $data["edit_dscPS"];
        mysqli_query($con,"UPDATE product_spec SET dsc = '$dsc' WHERE id = $id");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'product_spec'");
    }else if($sect == 'pt'){
        $id = htmlspecialchars(trim($data["edit_idPT"]));
        $product = htmlspecialchars(trim($data["edit_productPT"]));
        $tool = htmlspecialchars(trim($data["edit_toolPT"]));
        $nama = query("SELECT nama FROM product WHERE id = $product");
        $nama = $nama[0]['nama'];
        $imgOld = $data["old_imgPT"];
        $arr = array($nama);
        if($_FILES['edit_imgPT']['error'] === 4){
            $img = $imgOld;
        }else{
            $img = upload('product',"edit_imgPT",$arr);
            if(!$img){
                return false;
            }
            unlink('images/product/'.$nama.'/'.$imgOld);
        }
        $judul = $data["edit_judulPT"];
        $dsc = htmlspecialchars(trim($data["edit_desPT"]));
        
        mysqli_query($con,"UPDATE product_tool SET gambar = '$img',judul = '$judul', dsc = '$dsc' WHERE id = $id");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'product_tool'");
    }else if($sect == 'nl'){
        $id = $data["edit_idNL"];
        $cabang = $data["edit_cabangNL"];
        $judul = $data["edit_judulNL"];
        $imgOld = $data["old_imgNL"];
        if($_FILES['edit_imgNL']['error'] === 4){
            $img = $imgOld;
        }else{
            $img = upload('news',"edit_imgNL",NULL);
            if(!$img){
                return false;
            }
            unlink('images/news/'.$imgOld);
        }
        $content = $data["edit_contentNL"];
        mysqli_query($con, "UPDATE news SET kdcab = '$cabang', judul = '$judul', gambar = '$img', isi = '$content' WHERE id = $id");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'news' AND kdcab = '$cabang'");
    }else if($sect == 'cs'){
        $id = $data["edit_idCS"];
        $sort = $data["edit_sortCS"];
        $kdcab = strtoupper($data["edit_kdcabCS"]);
        $cabang = $data["edit_cabangCS"];
        $nama = $data["edit_namaCS"];
        $email = $data["edit_emailCS"];
        $cc = $data["edit_ccCS"];
        mysqli_query($con,"UPDATE contact_service SET kdcab='$kdcab',cabang='$cabang',nama='$nama',email='$email',cc='$cc',sort='$sort' WHERE id=$id");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'contact_service'");
    }else if($sect == 'cp'){
        $id = $data["edit_idCP"];
        $kdcab = $data["edit_kdcabCP"];
        $nama = $data["edit_namaCP"];
        $email = $data["edit_emailCP"];
        mysqli_query($con, "UPDATE contact_kacab SET kdcab='$kdcab', nama='$nama',email='$email' WHERE id=$id");
        mysqli_query($con,"UPDATE history SET last_update = NOW() WHERE tabel = 'contact_kacab'");
    }else if($sect == 'pp'){
        $id = $data["edit_idPP"];
        $pid = $data["edit_namaPP"];
        $harga = $data["edit_hargaPP"];
        $cabang = $data["edit_cabangPP"];
        if($cabang == "bda")
            $kdcab = "BDA";
        else if($cabang == "smt")
            $kdcab = "GT1";
        else if($cabang == "sbr")
            $kdcab = "PDG";
        else if($cabang == "dri")
            $kdcab = "DRI";
        else if($cabang == "pbr")
            $kdcab = "SDR";
        mysqli_query($con, "UPDATE product_price SET $cabang=$harga WHERE id=$id");
        mysqli_query($con, "UPDATE history SET last_update = NOW() WHERE tabel = '$pid' AND kdcab = '$kdcab'");
    }
    return mysqli_affected_rows($con);
}
?>