<?php
    require 'Smarty/libs/Smarty.class.php';
    require 'function.php';
    require_once 'securimage/securimage.php';
    $smarty = new Smarty;
    
    define('APP_URL', 'http://127.0.0.1:5000/NewWeb/smarty%20version/');
    $smarty->assign("_url",APP_URL);
   
    $today = date('Y-m-d');
    $mintgl = date('Y-m-d', strtotime("tomorrow"));
    $smarty -> assign("mintgl",$mintgl);
    date_default_timezone_set("Asia/Bangkok");
    
    $city = query("SELECT * FROM oc_city");
    $smarty -> assign("city",$city);

    $securimage1= new Securimage(array('namespace' => 'tdrive'));
    $options = array(
        'input_name'   => 'captcha_code_tdrive',     // Name of the text input field
        'input_id'     => 'captcha_code_tdrive',     // ID of the text input field
        'image_id'     => 'tdrive_captcha_img', // ID of the captcha image
        'namespace'    => 'tdrive',             // namespace for storing and validating
    );
    $captcha = Securimage::getCaptchaHtml($options);
    $smarty -> assign("captcha",$captcha);

    $securimage4= new Securimage(array('namespace' => 'nletter'));
    $options4 = array(
        'input_name'   => 'captcha_code_nletter',     // ID of the text input field
        'input_id'   => 'captcha_code_nletter',     // ID of the text input field
        'image_id'     => 'nletter_captcha_img', // ID of the captcha image
        'namespace'    => 'nletter',             // namespace for storing and validating
    );
    $captcha4 = Securimage::getCaptchaHtml($options4);
    $smarty -> assign("captcha4",$captcha4);

    $securimage3= new Securimage(array('namespace' => 'pw'));
    $options3 = array(
        'input_name'   => 'captcha_code_pw',     // Name of the text input field
        'input_id'     => 'captcha_code_pw',     // ID of the text input field
        'image_id'     => 'pw_captcha_img', // ID of the captcha image
        'namespace'    => 'pw',             // namespace for storing and validating
    );
    $captcha3 = Securimage::getCaptchaHtml($options3);
    $smarty -> assign("captcha3",$captcha3);

    $dealer_pw = query("SELECT * FROM dealer");
    $smarty -> assign("dealer_pw",$dealer_pw);
    $product_pw = query("SELECT * FROM product");
    $smarty -> assign("product_pw",$product_pw);
    $marquee = query("SELECT * FROM marquee WHERE status = 'Show'");
    $smarty -> assign("marquee",$marquee);

    (!isset($_GET['ng']))?$link = "home":$link = $_GET['ng'];
    $destin = explode("/",$link);
    $smarty -> assign("destin",$destin[0]);
        
    switch($destin[0]) {
        case 'home':
            require_once 'securimage/securimage.php';
            $securimage2= new Securimage(array('namespace' => 'cus'));
            $options2 = array(
                'input_name'   => 'captcha_code_cus',     // Name of the text input field
                'input_id'     => 'captcha_code_cus',     // ID of the text input field
                'image_id'     => 'cus_captcha_img', // ID of the captcha image
                'namespace'    => 'cus',             // namespace for storing and validating
            );
            $captcha2 = Securimage::getCaptchaHtml($options2);
            $slideshow = query("SELECT * FROM home_slideshow WHERE status = 'Show' ORDER BY sort");
            $promo_box = query("SELECT * FROM promo WHERE status = 'Show' AND expired >= CURDATE() ORDER BY expired ASC LIMIT 1");
            $promo = query("SELECT * FROM promo WHERE status = 'Show' AND expired >= CURDATE() ORDER BY expired ASC LIMIT 3");
            $product = query("SELECT * FROM product");
            $otr = query("SELECT * FROM product_price");
            $color = query("SELECT * FROM product_color");
            $news = query("SELECT * FROM news ORDER BY tanggal DESC LIMIT 3");
            $about = query("SELECT * FROM about_us WHERE status='Show'");
            $dealer = query("SELECT * FROM dealer WHERE status = 'Show' ORDER BY sort");
            $smarty -> assign("captcha2",$captcha2);
            $smarty -> assign("slideshow",$slideshow);
            $smarty -> assign("promo_box",$promo_box);
            $smarty -> assign("promo",$promo);
            $smarty -> assign("product",$product);
            $smarty -> assign("otr",$otr);
            $smarty -> assign("color",$color);
            $smarty -> assign("news",$news);
            $smarty -> assign("about",$about);
            $smarty -> assign("dealer",$dealer);
            $smarty -> display("home.tpl");
        break;
        case 'product':
            require_once 'securimage/securimage.php';
            $pid = $destin[1];
            $pname = $destin[2];
            if(empty($pname)){
                $pname = query("SELECT * FROM product WHERE id=$pid");
                $pname = strtolower(str_replace(" ","+",$pname[0]['nama']));
                header("Location:".constant(APP_URL)."?ng=product/$pid/$pname");
            }
            $pname = str_replace("+"," ",$pname);    
            $tdrive = query("SELECT nama FROM product WHERE id=$pid");
            $product = query("SELECT * FROM product");
            $dealer = query("SELECT * FROM dealer WHERE status = 'Show' ORDER BY sort");
            $name = query("SELECT * FROM product WHERE id=$pid");
            $btop = query("SELECT * FROM product_detail WHERE product_id=$pid AND kd_ban='b_top'");
            $bint = query("SELECT * FROM product_detail WHERE product_id=$pid AND kd_ban='b_int'");
            $bext = query("SELECT * FROM product_detail WHERE product_id=$pid AND kd_ban='b_ext'");
            $bcol = query("SELECT * FROM product_detail WHERE product_id=$pid AND kd_ban='b_col'");
            $bprf = query("SELECT * FROM product_detail WHERE product_id=$pid AND kd_ban='b_prf'");
            $bsft = query("SELECT * FROM product_detail WHERE product_id=$pid AND kd_ban='b_sft'");
            $bvar = query("SELECT * FROM product_detail WHERE product_id=$pid AND kd_ban='b_var'");
            $bmnu = query("SELECT * FROM product_detail WHERE product_id=$pid AND kd_ban='b_mnu'");
            $t_int = query("SELECT * FROM product_tool WHERE product_id=$pid AND kd_tool='t_int'");
            $t_ext = query("SELECT * FROM product_tool WHERE product_id=$pid AND kd_tool='t_ext'");
            $t_sft = query("SELECT * FROM product_tool WHERE product_id=$pid AND kd_tool='t_sft'");
            $t_col = query("SELECT * FROM product_tool WHERE product_id=$pid AND kd_tool='t_col'");
            $t_360 = query("SELECT dsc FROM product_tool WHERE product_id=$pid AND kd_tool='t_360'");
            $s_dms = query("SELECT * FROM product_spec WHERE product_id=$pid AND kd_spec='dms'"); 
            $s_msn = query("SELECT * FROM product_spec WHERE product_id=$pid AND kd_spec='msn'"); 
            $s_trm = query("SELECT * FROM product_spec WHERE product_id=$pid AND kd_spec='trm'"); 
            $s_skm = query("SELECT * FROM product_spec WHERE product_id=$pid AND kd_spec='skm'");
            $s_spm = query("SELECT * FROM product_spec WHERE product_id=$pid AND kd_spec='spm'");
            $s_sps = query("SELECT * FROM product_spec WHERE product_id=$pid AND kd_spec='sps'");
            $s_ban = query("SELECT * FROM product_spec WHERE product_id=$pid AND kd_spec='ban'");
            $smarty -> assign("pid",$pid);
            $smarty -> assign("tdrive",$tdrive);
            $smarty -> assign("product",$product);
            $smarty -> assign("dealer",$dealer);
            $smarty -> assign("name",$name);
            $smarty -> assign("btop",$btop);
            $smarty -> assign("bint",$bint);
            $smarty -> assign("bext",$bext);
            $smarty -> assign("bcol",$bcol);
            $smarty -> assign("bprf",$bprf);
            $smarty -> assign("bsft",$bsft);
            $smarty -> assign("bvar",$bvar);
            $smarty -> assign("bmnu",$bmnu);
            $smarty -> assign("t_int",$t_int);
            $smarty -> assign("t_ext",$t_ext);
            $smarty -> assign("t_sft",$t_sft);
            $smarty -> assign("t_col",$t_col);
            $smarty -> assign("t_360",$t_360);
            $smarty -> assign("s_dms",$s_dms);
            $smarty -> assign("s_msn",$s_msn);
            $smarty -> assign("s_trm",$s_trm);
            $smarty -> assign("s_skm",$s_skm);
            $smarty -> assign("s_spm",$s_spm);
            $smarty -> assign("s_sps",$s_sps);
            $smarty -> assign("s_ban",$s_ban);
            $smarty -> display("product.tpl");
            break;
        case 'news':
            $id = $destin[1];
            $judul = $destin[2];
            if(empty($judul)){
                $judul = query("SELECT * FROM news WHERE id=$id");
                $judul = strtolower(str_replace(" ","+",$judul[0]['judul']));
                header("Location:".constant(APP_URL)."?ng=news/$id/$judul");
            }
            $judul = str_replace("+"," ",$judul);    
            $news = query("SELECT * FROM news WHERE NOT id=$id ORDER BY tanggal DESC LIMIT 3");
            $detail = query("SELECT * FROM news WHERE id=$id AND judul='$judul'");
            $smarty -> assign("news",$news);
            $smarty -> assign("id",$id);
            $smarty -> assign("detail",$detail);
            $smarty -> display("news.tpl");
            break;
        case 'news-all';
            $news = query("SELECT * FROM news ORDER BY tanggal DESC");
            $smarty -> assign("news",$news);
            $smarty -> display("news-all.tpl");
            break;
        case 'promo':
            $id = $destin[1];
            $judul = $destin[2];
            if(empty($judul)){
                $judul = query("SELECT * FROM promo WHERE id=$id");
                $judul = strtolower(str_replace(" ","+",$judul[0]['judul']));
                header("Location:".constant(APP_URL)."?ng=promo/$id/$judul");
            }
            $judul = str_replace("+"," ",$judul);
            $promo = query("SELECT * FROM promo WHERE id = $id AND judul='$judul'");
            $smarty -> assign("promo",$promo);
            $smarty -> display("promo.tpl");
            break;
        case 'promo-all':
            $promo = query("SELECT * FROM promo WHERE status = 'Show' AND expired >= CURDATE() ORDER BY tanggal DESC");
            $cabang = query("SELECT kdcab,cabang FROM dealer");
            $smarty -> assign("promo",$promo);
            $smarty -> assign("cabang",$cabang);
            $smarty -> display("promo-all.tpl");
            break;
        case 'price-list':
            $pid = $destin[1];
            $pname = $destin[2];
            if(empty($pname)){
                $pname = query("SELECT * FROM product WHERE id=$pid");
                $pname = strtolower(str_replace(" ","+",$pname[0]['nama']));
                header("Location:".constant(APP_URL)."?ng=price-list/$pid/$pname");
            }
            $pname = str_replace("+"," ",$pname);    
            $product = query("SELECT * FROM product WHERE id = $pid");
            $price = query("SELECT * FROM product_price WHERE product_id = $pid");
            $smarty -> assign("product",$product);
            $smarty -> assign("price",$price);
            $smarty -> display("price-list.tpl");
            break;
        case 'booking':
            date_default_timezone_set("Asia/Bangkok");
            $securimage= new Securimage();
            $options = array();
            $options['input_name'] = 'captcha_code';
            $captcha1 = Securimage::getCaptchaHtml($options);
            $product = query("SELECT * FROM product");
            $contact = query("SELECT * FROM contact_service ORDER BY sort");
            $service = query("SELECT * FROM service");
            $hari = date('h:i:s');
            $smarty -> assign("hari",$hari);
            $smarty -> assign("captcha1",$captcha1);
            $smarty -> assign("product",$product);
            $smarty -> assign("contact",$contact);
            $smarty -> assign("service",$service);
            $smarty -> display("booking.tpl");
            break;
        case 'simulasi-kredit':
            $product = query("SELECT * FROM product");
            $smarty -> assign("product",$product);
            $smarty -> display("simulasi-kredit.tpl");
            break;
        case 'managecp':
            $smarty -> display("register.tpl");
            break;
        case 'masukadmin':
            if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
                $id  = $_COOKIE['id'];
                $key = $_COOKIE['key'];
                
                //ambil username berdasarkan id
                $result = query("SELECT * FROM user WHERE id = $id");
                //cek cookie dan username
                if($key == hash('sha256',$result[0]['username'])){
                    $_SESSION["login"] = true;
                    $_SESSION["id_user"] = $result[0]['id'];
                    $_SESSION["name"] = $result[0]['nama'];
                    $_SESSION["kdcab"] = $result[0]['kdcab'];
                    $_SESSION["role"] = $result[0]['role'];
                }
            }
            if(isset($_SESSION["login"])){
                if($_SESSION["role"] == 1)
                    header("Location: ?ng=halaman-admin");
                else
                    header("Location: ?ng=halaman-user");
                exit;
            }
            $err = 0;
            if(isset($_POST["login"])){
                $username = $_POST["email"];
                $password = $_POST["password"];

                //cek apakah username ada atau tidak
                $rsc = array();
                $qc = "SELECT username FROM user WHERE username = '$username'" ;
                callRS($rsc, $qc);
                if(count($rsc) == 1){
                    //cek password
                    $row = query("SELECT * FROM user WHERE username = '$username'");
                    if(password_verify($password, $row[0]["password"])){
                        $_SESSION["login"] = true;
                        $_SESSION["id_user"] = $row[0]['id'];
                        $_SESSION["name"] = $row[0]['nama'];
                        $_SESSION["kdcab"] = $row[0]['kdcab'];
                        $_SESSION["role"] = $row[0]['role'];
                        //cek remember me
                        if(isset($_POST["remember"])){
                            //buat cookie
                            setcookie('id',$row[0]['id'],time()+60);
                            setcookie('key',hash('sha256',$row[0]['username']),time()+60);
                        }
                        
                        if($_SESSION["role"] == 1)
                            header("Location: ?ng=halaman-admin");
                        else
                            header("Location: ?ng=halaman-user");
                        exit;
                    }
                    $err = 1;   
                }else{
                    echo "<script>alert('Username atau Password Anda Salah');</script>";
                }
            }
            if($err == 1)
                echo "username/password salah";
            $smarty -> display("login.tpl");
            break;
        case 'halaman-admin':
            if(!isset($_SESSION["login"])){
                header("Location: ?ng=masukadmin");
                exit;
            }
            if($_SESSION["kdcab"] != "ALL"){
                header("Location: ?ng=halaman-user");
                exit;
            }
            $id = $_SESSION["id_user"];
            $profile = query("SELECT * FROM user WHERE id = '$id'");
            $name = $profile[0]['nama'];
            $kdcab = $_SESSION["kdcab"];
            $role = $_SESSION["role"];
            $dealer = query("SELECT kdcab,cabang FROM dealer");
            $product = query("SELECT * FROM product");
            $smarty -> assign("id_user",$id);
            $smarty -> assign("name",$name);
            $smarty -> assign("kdcab",$kdcab);
            $smarty -> assign("role",$role);
            $smarty -> assign("dealer",$dealer);
            $smarty -> assign("product",$product);
            $smarty -> display("halaman-admin.tpl");
            break;
        case 'halaman-user':
            if(!isset($_SESSION["login"])){
                header("Location: ?ng=masukadmin");
                exit;
            }
            if($_SESSION["kdcab"] == "ALL"){
                header("Location: ?ng=halaman-admin");
                exit;
            }
            $id = $_SESSION["id_user"];
            $profile = query("SELECT * FROM user WHERE id = '$id'");
            $name = $profile[0]['nama'];
            $kdcab = $_SESSION["kdcab"];
            $role = $_SESSION["role"];
            $dealer = query("SELECT kdcab,cabang FROM dealer");
            $product = query("SELECT * FROM product");
            $smarty -> assign("id_user",$id);
            $smarty -> assign("name",$name);
            $smarty -> assign("kdcab",$kdcab);
            $smarty -> assign("role",$role);
            $smarty -> assign("dealer",$dealer);
            $smarty -> assign("product",$product);
            $smarty -> display("halaman-user.tpl");
            break;
        case 'logout':
            $_SESSION = [];
            session_unset();
            session_destroy();
            header("Location: ?ng=masukadmin");
            break;
        default:
//            include 'templates/header.tpl';
            echo "<h3><center>Maaf,Halaman Tidak Ditemukan !</center></h3>";
//            include 'templates/footer.tpl';
            break;
    }

/*
    else{
        $slideshow = query("SELECT * FROM home_slideshow ORDER BY sort");
        $product = query("SELECT * FROM product");
        $news = query("SELECT * FROM news");
        $about = query("SELECT * FROM about_us");
        $dealer = query("SELECT * FROM dealer ORDER BY sort");
        $smarty -> assign("slideshow",$slideshow);
        $smarty -> assign("product",$product);
        $smarty -> assign("news",$news);
        $smarty -> assign("about",$about);
        $smarty -> assign("dealer",$dealer);
        $smarty -> display("home.tpl");
    }
*/
?>