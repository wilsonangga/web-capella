<?php
    require '../function.php';
    $output = "";
    $_url = $_POST['_url'];
    if(!isset($_POST["content"])){
        $output .= "
                    <div class='m-5'>
                    <img src='".$_url."images/ok.png'>
                    <h1 class='text-light mt-3'>BOOK A SERVICE</h1>
                    <h5 class='text-light mt-3'>Nikmati kenyamanan service Daihatsu Kamu</h5>
                    <p class='text-light mt-3'>Tak perlu lagi mengantri untuk mendaftarkan diri dan mobil kesayangan tiap kali service bulanan datang. Dapatkan kemudahan service kendaraan Sahabat dengan layanan Book A Service. Cukup isi form yang ada maka dealer terdekat akan memasukkan nama sahabat dalam daftar prioritas.</p>
                    <a href='?ng=booking' target='_blank'><button class='btn btn-warning font-weight-bold' style='color:#274293;'>LANJUT &raquo;</button></a>
                    </div>
                    ";
        echo $output;
    }
    else if($_POST["content"]=="booking"){
        $output .= "
                    <div class='m-5 wow fadeIn'>
                    <img src='".$_url."images/ok.png'>
                    <h1 class='text-light mt-3'>BOOK A SERVICE</h1>
                    <h5 class='text-light mt-3'>Nikmati kenyamanan service Daihatsu Kamu</h5>
                    <p class='text-light mt-3'>Tak perlu lagi mengantri untuk mendaftarkan diri dan mobil kesayangan tiap kali service bulanan datang. Dapatkan kemudahan service kendaraan Sahabat dengan layanan Book A Service. Cukup isi form yang ada maka dealer terdekat akan memasukkan nama sahabat dalam daftar prioritas.</p>
                    <a href='?ng=booking' target='_blank'><button class='btn btn-warning font-weight-bold' style='color:#274293;'>LANJUT &raquo;</button></a>
                    </div>
                    ";
        echo $output;
    }
    else if($_POST["content"]=="testdrive"){
        $output .= "
                    <div class='m-5 wow fadeIn'>
                    <img src='".$_url."images/ok.png'>
                    <h1 class='text-light mt-3'>TEST DRIVE</h1>
                    <h5 class='text-light mt-3'>Nikmati kenyamanan service Daihatsu Kamu</h5>
                    <p class='text-light mt-3'>Dapatkan kemudahan test drive dengan memanfaatkan fitur Test Drive Daihatsu. Dengan fitur ini Sahabat memiliki kesempatan untuk mengetahui spesifikasi mobil impianmu. Test Drive juga bisa menjadi pemandu bagi Sahabat dalam memiliki mobil yang sesuai kebutuhan dan kapasitas berkendara.</p>
                    <a href='#' data-toggle='modal' data-target='#testdrive' onclick='emptyErrMod();'><button class='btn btn-warning font-weight-bold' style='color:#274293;'>LANJUT &raquo;</button></a>
                    </div>
                    ";
        echo $output;
    }
    else if($_POST["content"]=="contactus"){
        $output .= "
                    <div class='m-5 wow fadeIn'>
                    <img src='".$_url."images/ok.png'>
                    <h1 class='text-light mt-3'>CONTACT US</h1>
                    <h5 class='text-light mt-3'>Nikmati kenyamanan service Daihatsu Kamu</h5>
                    <p class='text-light mt-3'>Hubungi kami jika Sahabat membutuhkan informasi baik seputar produk, booking service maupun test drive. Kami akan ada 24 jam* penuh untuk melayani segala kebutuhan dan keluhan para Sahabat.</p>
                    <a href='#' data-toggle='modal' data-target='#contactus' onclick='emptyErrMod()';><button class='btn btn-warning font-weight-bold' style='color:#274293;'>LANJUT &raquo;</button></a>
                    </div>
                    ";
        echo $output;
    }
    else if($_POST["content"]=="s_kredit"){
        $output .= "
                    <div class='m-5 wow fadeIn'>
                    <img src='".$_url."images/ok.png'>
                    <h1 class='text-light mt-3'>SIMULASI KREDIT</h1>
                    <h5 class='text-light mt-3'>Nikmati kenyamanan service Daihatsu Kamu</h5>
                    <p class='text-light mt-3'>Cari tahu perkiraan uang muka dan angsuran yang harus anda bayar untuk membeli mobil Daihatsu. Untuk mendapatkan hitungan pasti, silahkan hubungi kami dengan menekan tombol dapatkan penawaran pada produk di atas.</p>
                    <a href='?ng=simulasi-kredit'><button class='btn btn-warning font-weight-bold' style='color:#274293;'>LANJUT &raquo;</button></a>
                    </div>
                    ";
        echo $output;
    }
?>