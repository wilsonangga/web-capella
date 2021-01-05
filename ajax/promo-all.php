<?php
    require '../function.php';
    $_url = $_POST['_url'];
    if(isset($_POST["value"])){
        if($_POST["value"] == "All"){
            $hasil = query("SELECT * FROM promo WHERE status = 'Show' AND expired >= CURDATE() ORDER BY tanggal DESC");
            foreach($hasil as $rows){
                echo '<div class="mb-5">
                <div class="card mb-3">
                    <div class="row no-gutters" id="promoList">
                        <div class="col-md-4" style="max-height: 185px;overflow: hidden;">
                            <img src="'.$_url.'images/promo/'.$rows["gambar"].'" class="card-img" alt="rows.gambar">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">'.$rows["judul"].'</h5>
                                <p class="card-text"><small class="text-muted">Berlaku s.d. '.tgl_indo($rows["expired"]).'</small></p>
                                <a href="?ng=promo/'.$rows["id"].'">
                                    <button class="btn btn-primary btn-sm">Selengkapnya</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            }
    
        }
        else{
            $w_promo = $_POST["value"];
            $hasil = query("SELECT * FROM promo WHERE kdcab = '".$w_promo."' AND status = 'Show' AND expired >= CURDATE() ORDER BY tanggal DESC");
            if(!$hasil)
                echo '<div class="row">
                <div class="col-md-12 mb-5 text-center font-5 font-weight-bold">Tidak ada promo untuk saat ini.</div>
            </div>';
            else{
                foreach($hasil as $rows){
                    echo '<div class="mb-5">
                    <div class="card mb-3">
                        <div class="row no-gutters" id="promoList">
                            <div class="col-md-4" style="max-height: 185px;overflow: hidden;">
                                <img src="'.$_url.'images/promo/'.$rows["gambar"].'" class="card-img" alt="rows.gambar">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">'.$rows["judul"].'</h5>
                                    <p class="card-text"><small class="text-muted">Berlaku s.d. '.tgl_indo($rows["expired"]).'</small></p>
                                    <a href="?ng=promo/'.$rows["id"].'">
                                        <button class="btn btn-primary btn-sm">Selengkapnya</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                }
            }
        }
    }
?>