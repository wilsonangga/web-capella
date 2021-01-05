<?php
    require '../function.php';
    $output = "";
    $_url = $_POST['_url'];

//     <!-- Area Chart Example-->
//                    <div class="card mb-3">
//                        <div class="card-header">
//                            <i class="fas fa-chart-area"></i>
//                            Area Chart Example
//                        </div>
//                        <div class="card-body">
//                            <canvas id="myAreaChart" width="100%" height="30"></canvas>
//                        </div>
//                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
//                    </div>

    if(!isset($_POST["content"]) || $_POST["content"] == "dashboard"){
        $id_user = $_POST["id_user"];
        $kdcab = $_POST["kdcab"];
        $profile = query("SELECT * FROM user WHERE id = '$id_user'");
        if($profile[0]['role'] == 1){
            $rsc1 = array(); 
            $qc1 = "SELECT * FROM list_contact_us";
            callRS($rsc1, $qc1);
            $total1 = count($rsc1);
            $rsc2 = array(); 
            $qc2 = "SELECT * FROM list_booking";
            callRS($rsc2, $qc2);
            $total2 = count($rsc2);
            $rsc3 = array(); 
            $qc3 = "SELECT * FROM list_penawaran";
            callRS($rsc3, $qc3);
            $total3 = count($rsc3);
            $rsc4 = array(); 
            $qc4 = "SELECT * FROM list_test_drive";
            callRS($rsc4, $qc4);
            $total4 = count($rsc4);
            $role = "admin";
        }
        else if($profile[0]['role'] == 2){
            $rsc2 = array(); 
            $qc2 = "SELECT * FROM list_booking WHERE cabang = '$kdcab'";
            callRS($rsc2, $qc2);
            $total2 = count($rsc2);
            $rsc3 = array(); 
            $qc3 = "SELECT * FROM list_penawaran WHERE cabang = '$kdcab'";
            callRS($rsc3, $qc3);
            $total3 = count($rsc3);
            $rsc4 = array(); 
            $qc4 = "SELECT * FROM list_test_drive WHERE cabang = '$kdcab'";
            callRS($rsc4, $qc4);
            $total4 = count($rsc4);
            $role = "user";
        }
        $output .= '
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Overview</li>
                </ol>

                <!-- Icon Cards-->
                <div class="row">
                    ';
        if(isset($total1)){
            $output .= '<div class="col-xl-3 col-sm-6 mb-3">
                            <div class="card text-white bg-primary o-hidden h-100">
                                <div class="card-body">
                                    <div class="card-body-icon">
                                        <i class="fas fa-fw fa-comments"></i>
                                    </div>
                                    <div class="mr-5">Total : '.$total1.' Messages!</div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="#" id="vd_data_cu">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>';
        }
        $output .= '
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="card text-white bg-secondary o-hidden h-100">
                                <div class="card-body">
                                    <div class="card-body-icon">
                                        <i class="fas fa-fw fa-list"></i>
                                    </div>
                                    <div class="mr-5">Total : '.$total2.' Booking Service!</div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="#" id="vd_data_booking">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
        ';
        if($kdcab != 'AMP'){
            $output .= '
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="card text-white bg-success o-hidden h-100">
                                <div class="card-body">
                                    <div class="card-body-icon">
                                        <i class="fas fa-fw fa-shopping-cart"></i>
                                    </div>
                                    <div class="mr-5">Total : '.$total3.'  Penawaran!</div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="#" id="vd_data_penawaran">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="card text-white bg-danger o-hidden h-100">
                                <div class="card-body">
                                    <div class="card-body-icon">
                                        <i class="fas fa-fw fa-life-ring"></i>
                                    </div>
                                    <div class="mr-5">Total : '.$total4.' Test Drive!</div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="#" id="vd_data_tdrive">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>';
        }
        
        $output .= '
                </div>

                <!-- DataTables Example -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fa fa-user-circle"></i>
                                Profile
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="images/avatar.png" class="w-100">
                                        </div>
                                        <div class="col-sm-6 pt-4">
                                            <div class="mb-2"><i class="fa fa-user mr-2"></i>'.$profile[0]['nama'].'</div>
                                            <div class="mb-2"><i class="fa fa-key mr-2"></i>'.$role.'</div>
                                            <div class="mb-2"><i class="fa fa-suitcase mr-2"></i>'.$profile[0]['kdcab'].'</div>
                                            <div class="mb-2"><i class="fa fa-envelope mr-2"></i>'.$profile[0]['username'].'</div>
                                        </div>
                                        <div class="col-sm-3 pt-4">
                                            <div class="mb-2"><button type="button" class="btn btn-primary btn-sm" id="getPF" data-target="#edit_profile" data-id="'.$id_user.'">Edit Profile</button></div>
                                            <div><button type="button" class="btn btn-danger btn-sm" id="getPSWD" data-target="#edit_profile_paswd" data-id="'.$id_user.'">Change Password</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer small text-muted">Last modified '.date('d F Y ( H:i:s )', strtotime($profile[0]['last_update'])).'</div>
                        </div>
                    </div>
                </div>
                <!-- Demo scripts for this page-->
                <script src="js/demo/chart-area-demo.js"></script>
                ';
        echo $output;
    }
    else if($_POST["content"] == "manage_user"){
        $user = query("SELECT * FROM user");
        $history = query("SELECT * FROM history WHERE tabel = 'user'");
        $output .='
                    <!-- DataTables Example -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            Manage User
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Avatar</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Cabang</th>  
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                    ';
        $no = 1;
        foreach($user as $rows){
            if($rows['role'] == 1)
                $role = "admin";
            else
                $role = "user";
            $output .=" <tr>
                            <td style='width:5%'>".$no."</td>
                            <td style='width:10%'><img src='images/avatar.png' class='m-0 w-100'></td>
                            <td>".$rows['nama']."</td>
                            <td>".$rows['username']."</td>
                            <td>".$rows['kdcab']."</td>
                            <td>".$role."</td>
                            <td>
                                <button type='button' class='btn btn-primary btn-sm' id='getMU' data-target='#edit_manage_user' data-id='".$rows['id']."'>Edit</button>
                                <button type='button' class='btn btn-danger btn-sm' id='delMU' data-target='#delete_manage_user' data-id='".$rows['id']."'>Delete</button>
                            </td>
                        </tr>";    
            $no++;
        }
        $output .='
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Last modified '.date('d F Y ( H:i:s )', strtotime($history[0]['last_update'])).'</div>
                    </div>
                    <script src="js/demo/datatables-demo.js"></script>
        ';
        echo $output;
    }
    else if($_POST["content"] == "about_us"){
        $slideshow = query("SELECT * FROM about_us");
        $history = query("SELECT * FROM history WHERE tabel = 'about_us'");
        $output .='
                    <!-- DataTables Example -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            About Us
                        </div>
                        <div class="card-body">
                            <div class="text-right mb-3"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add_about_us">+ Add</button></div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Subjudul</th>  
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                    ';
        $no = 1;
        foreach($slideshow as $rows){
            $output .=" <tr>
                            <td>".$no."</td>
                            <td>".$rows['judul']."</td>
                            <td>".$rows['subjudul']."</td>
                            <td>".$rows['status']."</td>
                            <td>
                                <button type='button' class='btn btn-primary btn-sm' id='getAU' data-target='#edit_about_us' data-id='".$rows['id']."'>Edit</button>
                                <button type='button' class='btn btn-danger btn-sm' id='delAU' data-target='#delete_about_us' data-id='".$rows['id']."'>Delete</button>
                            </td>
                        </tr>";    
            $no++;
        }
        $output .='
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Last modified '.date('d F Y ( H:i:s )', strtotime($history[0]['last_update'])).'</div>
                    </div>
                    <script src="js/demo/datatables-demo.js"></script>
        ';
        echo $output;
    }
    else if($_POST["content"] == "announcement"){
        $marquee = query("SELECT * FROM marquee");
        $history = query("SELECT * FROM history WHERE tabel = 'marquee'");
        $output .='
                    <!-- DataTables Example -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            Announcement
                        </div>
                        <div class="card-body">
                            <div class="text-right mb-3"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add_announcement">+ Add</button></div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Konten</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                    ';
        $no = 1;
        foreach($marquee as $rows){
            $output .=" <tr>
                            <td>".$no."</td>
                            <td>".$rows['isi']."</td>
                            <td>".$rows['status']."</td>
                            <td>
                                <button type='button' class='btn btn-primary btn-sm' id='getAN' data-target='#edit_announcement' data-id='".$rows['id']."'>Edit</button>
                                <button type='button' class='btn btn-danger btn-sm' id='delAN' data-target='#delete_announcement' data-id='".$rows['id']."'>Delete</button>
                            </td>
                        </tr>";    
            $no++;
        }
        $output .='
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Last modified '.date('d F Y ( H:i:s )', strtotime($history[0]['last_update'])).'</div>
                    </div>
                    <script src="js/demo/datatables-demo.js"></script>
        ';
        echo $output;
    }
    else if($_POST["content"] == "dealer"){
        $dealer = query("SELECT * FROM dealer");
        $history = query("SELECT * FROM history WHERE tabel = 'dealer'");
        $output .='
                    <!-- DataTables Example -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            Dealer
                        </div>
                        <div class="card-body">
                            <div class="text-right mb-3"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add_dealer">+ Add</button></div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sort</th>
                                            <th>Kode Cabang</th>
                                            <th>Nama Cabang</th>  
                                            <th>Layanan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                    ';
        $no = 1;
        foreach($dealer as $rows){
            $output .=" <tr>
                            <td>".$rows['sort']."</td>
                            <td>".$rows['kdcab']."</td>
                            <td>".$rows['cabang']."</td>
                            <td>".$rows['layanan']."</td>
                            <td>
                                <button type='button' class='btn btn-primary btn-sm' id='getDL' data-target='#edit_dealer' data-id='".$rows['id']."'>Edit</button>
                                <button type='button' class='btn btn-danger btn-sm' id='delDL' data-target='#delete_dealer' data-id='".$rows['id']."'>Delete</button>
                            </td>
                        </tr>";    
            $no++;
        }
        $output .='
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Last modified '.date('d F Y ( H:i:s )', strtotime($history[0]['last_update'])).'</div>
                    </div>
                    <script src="js/demo/datatables-demo.js"></script>
        ';
        echo $output;
    }
    else if($_POST["content"] == "slideshow"){
        $slideshow = query("SELECT * FROM home_slideshow");
        $history = query("SELECT * FROM history WHERE tabel = 'home_slideshow'");
        $output .='
                    <!-- DataTables Example -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            Home Slideshow
                        </div>
                        <div class="card-body">
                            <div class="text-right mb-3"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add_data">+ Add</button></div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sort</th>
                                            <th>Judul</th>
                                            <th>Gambar</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                    ';
        foreach($slideshow as $rows){
            $output .=" <tr>
                            <td>".$rows['sort']."</td>
                            <td>".$rows['name']."</td>
                            <td>".$rows['gambar']."</td>
                            <td>".$rows['status']."</td>
                            <td>
                                <button type='button' class='btn btn-primary btn-sm' id='getHS' data-target='#edit_data' data-id='".$rows['id']."'>Edit</button>
                                <button type='button' class='btn btn-danger btn-sm' id='delHS' data-target='#delete_data' data-id='".$rows['id']."'>Delete</button>
                            </td>
                        </tr>";    
        }
        $output .='
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Last modified '.date('d F Y ( H:i:s )', strtotime($history[0]['last_update'])).'</div>
                    </div>
                    <script src="js/demo/datatables-demo.js"></script>
        ';
        echo $output;
    }
    else if($_POST["content"] == "promo_list"){
        $role = $_POST["role"];
        $kdcab = $_POST["kdcab"];
        if($role == 1){
            $promo = query("SELECT * FROM promo");
            $history = query("SELECT MAX(last_update) AS 'last_update' FROM history WHERE tabel = 'promo_list'");
        }
        else{
            $promo = query("SELECT * FROM promo WHERE kdcab = '$kdcab'");
            $history = query("SELECT * FROM history WHERE tabel = 'promo_list' AND kdcab = '$kdcab'");
        }
        $output .='
                    <!-- DataTables Example -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            Promo List
                        </div>
                        <div class="card-body">
                            <div class="text-right mb-3"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add_promo_list">+ Add</button></div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Dealer</th>
                                            <th>Judul</th>
                                            <th>Konten</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                    ';
        if($promo){
            foreach($promo as $rows){
                $output .=" <tr>
                                <td>".$rows['tanggal']."</td>
                                <td>".$rows['kdcab']."</td>
                                <td>".$rows['judul']."</td>
                                <td>".$rows['isi']."</td>
                                <td>".$rows['status']."</td>
                                <td>
                                    <button type='button' class='btn btn-primary btn-sm' id='getPL' data-target='#edit_promo_list' data-id='".$rows['id']."'>Edit</button>
                                    <button type='button' class='btn btn-danger btn-sm' id='delPL' data-target='#delete_promo_list' data-id='".$rows['id']."'>Delete</button>
                                </td>
                            </tr>";    
            }
        }
        $output .='
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Last modified '.date('d F Y ( H:i:s )', strtotime($history[0]['last_update'])).'</div>
                    </div>
                    <script src="js/demo/datatables-demo.js"></script>
        ';
        echo $output;
    }
    else if($_POST["content"] == "product_main"){
        $product = query("SELECT * FROM product");
        $history = query("SELECT * FROM history WHERE tabel = 'product'");
        $output .='
                    <!-- DataTables Example -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            Product Main
                        </div>
                        <div class="card-body">
                            <div class="text-right mb-3"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add_product_main">+ Add</button></div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Gambar</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Seaters</th>
                                            <th>Brosur</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                    ';
        foreach($product as $rows){
            $output .=" <tr>
                            <td>".$rows['id']."</td>
                            <td>".$rows['gambar']."</td>
                            <td>".$rows['nama']."</td>
                            <td>".number_format($rows['harga'], 0, ',', '.')."</td>
                            <td>".$rows['seaters']."</td>
                            <td>".$rows['brosur']."</td>
                            <td>
                                <button type='button' class='btn btn-primary btn-sm' id='getPM' data-target='#edit_product_main' data-id='".$rows['id']."'>Edit</button>
                                <button type='button' class='btn btn-danger btn-sm' id='delPM' data-target='#delete_product_main' data-id='".$rows['id']."'>Delete</button>
                            </td>
                        </tr>";    
        }
        $output .='
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Last modified '.date('d F Y ( H:i:s )', strtotime($history[0]['last_update'])).'</div>
                    </div>
                    <script src="js/demo/datatables-demo.js"></script>
        ';
        echo $output;
    }
    else if($_POST["content"] == "product_banner"){
        $product = query("SELECT * FROM product");
        $output .='
        <div class="row">
            <div class="col-md-12 mb-2">
                <select name="produk_banner" id="produk_banner" class="form-control form-control-sm">
                    <option value="" disabled selected>-- PILIH PRODUK --</option>
                    ';
        foreach($product as $rows){
            $output .= '
            <option value="'.$rows['id'].'">'.$rows['nama'].'</option>';
        }
        $output .='
                </select>
            </div>
        </div>
        <div id="load_banner" class="mb-4">&nbsp;</div>
        ';    
        echo $output;
    }
    else if($_POST["content"] == "product_color"){
        $product = query("SELECT * FROM product");
        $output .='
        <div class="row">
            <div class="col-md-12 mb-2">
                <select name="produk_color" id="produk_color" class="form-control form-control-sm">
                    <option value="" disabled selected>-- PILIH PRODUK --</option>
                    ';
        foreach($product as $rows){
            $output .= '
            <option value="'.$rows['id'].'">'.$rows['nama'].'</option>';
        }
        $output .='
                </select>
            </div>
        </div>
        <div id="load_color" class="mb-4">&nbsp;</div>
        ';    
        echo $output;
    }
    else if($_POST["content"] == "product_price"){
        $id_user = $_POST["id_user"];
        $profile = query("SELECT * FROM user WHERE id = '$id_user'");
        if($profile[0]['role'] == 1){
            $product = query("SELECT * FROM product");
            $output .='
            <div class="row">
                <div class="col-md-6 mb-2">
                    <select name="cabang_price" id="cabang_price" class="form-control form-control-sm">
                        <option value="" disabled selected>-- PILIH CABANG --</option>
                        <option value="bda">ACEH</option>
                        <option value="smt">SUMUT</option>
                        <option value="sbr">SUMBAR</option>
                        <option value="dri">DURI</option>
                        <option value="pbr">PEKANBARU</option>
                    </select>
                </div>
                <div class="col-md-6 mb-2">
                    <select name="produk_price" id="produk_price" class="form-control form-control-sm">
                        <option value="" disabled selected>-- PILIH PRODUK --</option>
                        ';
            foreach($product as $rows){
                $output .= '
                <option value="'.$rows['id'].'">'.$rows['nama'].'</option>';
            }
            $output .='
                    </select>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-12 text-right">
                    <button type="button" class="btn btn-success btn-sm text-right" id="filter_price"><i class="fa fa-filter" aria-hidden="true"></i> Filter</button>
                </div>
            </div>
            <div id="load_price" class="mb-4">&nbsp;</div>
            ';    
        }
        else{
            $product = query("SELECT * FROM product");
            $output .='
            <div class="row">
                <div class="col-md-12 mb-2">
                    <select name="produk_price" id="produk_price" class="form-control form-control-sm">
                        <option value="" disabled selected>-- PILIH PRODUK --</option>
                        ';
            foreach($product as $rows){
                $output .= '
                <option value="'.$rows['id'].'">'.$rows['nama'].'</option>';
            }
            $output .='
                    </select>
                </div>
            </div>
            <div id="load_price" class="mb-4">&nbsp;</div>
            ';    
        }
        
        echo $output;
    }
    else if($_POST["content"] == "product_spec"){
        $product = query("SELECT * FROM product");
        $output .='
        <div class="row">
            <div class="col-md-12 mb-2">
                <select name="produk_spec" id="produk_spec" class="form-control form-control-sm">
                    <option value="" disabled selected>-- PILIH PRODUK --</option>
                    ';
        foreach($product as $rows){
            $output .= '
            <option value="'.$rows['id'].'">'.$rows['nama'].'</option>';
        }
        $output .='
                </select>
            </div>
        </div>
        <div id="load_spec" class="mb-4">&nbsp;</div>
        ';    
        echo $output;
    }
    else if($_POST["content"] == "product_tool"){
        $product = query("SELECT * FROM product");
        $output .='
        <div class="row">
            <div class="col-md-6 mb-2">
                <select name="produk_tool" id="produk_tool" class="form-control form-control-sm">
                    <option value="" disabled selected>-- PILIH PRODUK --</option>
                    ';
        foreach($product as $rows){
            $output .= '
            <option value="'.$rows['id'].'">'.$rows['nama'].'</option>';
        }
        $output .='
                </select>
            </div>
            <div class="col-md-6 mb-2">
                <select name="kd_tool" id="kd_tool" class="form-control form-control-sm">
                    <option value="" disabled selected>-- PILIH TOOL --</option>
                    <option value="t_int">Interior</option>
                    <option value="t_ext">Exterior</option>
                    <option value="t_360">360</option>
                    <option value="t_col">Colour</option>
                    <option value="t_sft">Safety</option>
                </select>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-12 text-right">
                <button type="button" class="btn btn-success btn-sm text-right" id="filter_tool"><i class="fa fa-filter" aria-hidden="true"></i> Filter</button>
            </div>
        </div>
        <div id="load_tool" class="mb-4">&nbsp;</div>
        ';    
        
        
        echo $output;
    }
    else if($_POST["content"] == "news_list"){
        $role = $_POST["role"];
        $kdcab = $_POST["kdcab"];
        if($role == 1){
            $news = query("SELECT * FROM news");
            $history = query("SELECT MAX(last_update) AS 'last_update' FROM history WHERE tabel = 'news'");
        }
        else{
            $news = query("SELECT * FROM promo WHERE kdcab = '$kdcab'");
            $history = query("SELECT * FROM history WHERE tabel = 'news' AND kdcab = '$kdcab'");
        }
        $output .='
                    <!-- DataTables Example -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            News List
                        </div>
                        <div class="card-body">
                            <div class="text-right mb-3"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add_news_list">+ Add</button></div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Cabang</th>
                                            <th>Tanggal</th>
                                            <th>Judul</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                    ';
        $no = 1;
        foreach($news as $rows){
            $output .=" <tr>
                            <td>".$no."</td>
                            <td>".$rows['kdcab']."</td>
                            <td>".$rows['tanggal']."</td>
                            <td>".$rows['judul']."</td>
                            <td>
                                <button type='button' class='btn btn-primary btn-sm' id='getNL' data-target='#edit_news_list' data-id='".$rows['id']."'>Edit</button>
                                <button type='button' class='btn btn-danger btn-sm' id='delNL' data-target='#delete_news_list' data-id='".$rows['id']."'>Delete</button>
                            </td>
                        </tr>";    
            $no++;
        }
        $output .='
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Last modified '.date('d F Y ( H:i:s )', strtotime($history[0]['last_update'])).'</div>
                    </div>
                    <script src="js/demo/datatables-demo.js"></script>
        ';
        echo $output;
    }
    else if($_POST["content"] == "contact_service"){
        $contact = query("SELECT * FROM contact_service");
        $history = query("SELECT * FROM history WHERE tabel = 'contact_service'");
        $output .='
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            Contact Service
                        </div>
                        <div class="card-body">
                            <div class="text-right mb-3"><button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#add_contact_service">+ Add</button></div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sort</th>
                                            <th>Kode</th>
                                            <th>Nama PIC</th>
                                            <th>Email PIC</th>
                                            <th>CC</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                    ';
        
        foreach($contact as $rows){
            $output .=" <tr>
                            <td>".$rows['sort']."</td>
                            <td>".$rows['kdcab']."</td>
                            <td>".$rows['nama']."</td>
                            <td>".$rows['email']."</td>
                            <td>".$rows['cc']."</td>
                            <td>
                                <button type='button' class='btn btn-primary btn-sm' id='getCS' data-target='#edit_contact_service' data-id='".$rows['id']."'>Edit</button>
                                <button type='button' class='btn btn-danger btn-sm' id='delCS' data-target='#delete_contact_service' data-id='".$rows['id']."'>Delete</button>
                            </td>
                        </tr>";   
        }
        $output .='
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Last modified '.date('d F Y ( H:i:s )', strtotime($history[0]['last_update'])).'</div>
                    </div>
                    <script src="js/demo/datatables-demo.js"></script>
        ';
        echo $output;
    }else if($_POST["content"] == "data_booking"){
        $role = $_POST["role"];
        $kdcab = $_POST["kdcab"];
        if($role == 1){
            $booking = query("SELECT * FROM list_booking");
            $history = query("SELECT MAX(time_stamp) AS 'last_update' FROM list_booking");
        }
        else{
            $booking = query("SELECT * FROM list_booking WHERE cabang = '$kdcab'");
            $history = query("SELECT MAX(time_stamp) AS 'last_update' FROM list_booking WHERE cabang = '$kdcab'");
        }
        $output .='
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            List Booking
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Booking</th>
                                            <th>Cabang</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                    ';
        
        $no = 1;
        foreach($booking as $rows){
            $output .=" <tr>
                            <td>".$no."</td>
                            <td>".$rows['kdbooking']."</td>
                            <td>".$rows['cabang']."</td>
                            <td>".$rows['nama']."</td>
                            <td>".$rows['tanggal']."</td>
                            <td>
                                <button type='button' class='btn btn-info btn-sm' id='getDB' data-target='#view_data_booking' data-id='".$rows['kdbooking']."'>View</button>
                            </td>
                        </tr>";   
            $no++;
        }
        $output .='
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Last modified '.date('d F Y ( H:i:s )', strtotime($history[0]['last_update'])).'</div>
                    </div>
                    <script src="js/demo/datatables-demo.js"></script>
        ';
        echo $output;
    }else if($_POST["content"] == "contact_us"){
        $contact = query("SELECT * FROM list_contact_us");
        $history = query("SELECT MAX(time_stamp) as 'last_update' FROM list_contact_us");
        $output .='
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            List Contact Us
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Kota</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                    ';
        $no = 1;
        foreach($contact as $rows){
            $output .=" <tr>
                            <td>".$no."</td>
                            <td>".$rows['nama']."</td>
                            <td>".$rows['email']."</td>
                            <td>".$rows['kota']."</td>
                            <td>
                                <button type='button' class='btn btn-info btn-sm' id='getCU' data-target='#view_data_cu' data-id='".$rows['id']."'>View</button>
                            </td>
                        </tr>";  
            $no++;
        }
        $output .='
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Last modified '.date('d F Y ( H:i:s )', strtotime($history[0]['last_update'])).'</div>
                    </div>
                    <script src="js/demo/datatables-demo.js"></script>
        ';
        echo $output;
    }else if($_POST["content"] == "contact_penawaran"){
        $contact = query("SELECT * FROM contact_kacab");
        $history = query("SELECT * FROM history WHERE tabel = 'contact_kacab'");
        $output .='
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            Contact Penawaran
                        </div>
                        <div class="card-body">
                            <div class="text-right mb-3"><button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#add_contact_penawaran">+ Add</button></div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama PIC</th>
                                            <th>Email PIC</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                    ';
        $no = 1;
        foreach($contact as $rows){
            $output .=" <tr>
                            <td>".$no."</td>
                            <td>".$rows['kdcab']."</td>
                            <td>".$rows['nama']."</td>
                            <td>".$rows['email']."</td>
                            <td>
                                <button type='button' class='btn btn-primary btn-sm' id='getCP' data-target='#edit_contact_penawaran' data-id='".$rows['id']."'>Edit</button>
                                <button type='button' class='btn btn-danger btn-sm' id='delCP' data-target='#delete_contact_penawaran' data-id='".$rows['id']."'>Delete</button>
                            </td>
                        </tr>";  
            $no++;
        }
        $output .='
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Last modified '.date('d F Y ( H:i:s )', strtotime($history[0]['last_update'])).'</div>
                    </div>
                    <script src="js/demo/datatables-demo.js"></script>
        ';
        echo $output;
    }else if($_POST["content"] == "data_penawaran"){
        $role = $_POST["role"];
        $kdcab = $_POST["kdcab"];
        if($role == 1){
            $penawaran = query("SELECT * FROM list_penawaran");
            $history = query("SELECT MAX(time_stamp) AS 'last_update' FROM list_penawaran");
        }
        else{
            $penawaran = query("SELECT * FROM list_penawaran WHERE cabang = '$kdcab'");
            $history = query("SELECT MAX(time_stamp) AS 'last_update' FROM list_penawaran WHERE cabang = '$kdcab'");
        }
        $output .='
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            List Penawaran
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Cabang</th>
                                            <th>Time Stamp</th>
                                            <th>Nama</th>
                                            <th>No. Hp</th>
                                            <th>Mobil</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                    ';
        
        $no = 1;
        foreach($penawaran as $rows){
            $output .=" <tr>
                            <td>".$no."</td>
                            <td>".$rows['cabang']."</td>
                            <td>".$rows['time_stamp']."</td>
                            <td>".$rows['nama']."</td>
                            <td>".$rows['no_hp']."</td>
                            <td>".$rows['mobil']."</td>
                            <td>
                                <button type='button' class='btn btn-info btn-sm' id='getDP' data-target='#view_data_penawaran' data-id='".$rows['id']."'>View</button>
                            </td>
                        </tr>";   
            $no++;
        }
        $output .='
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Last modified '.date('d F Y ( H:i:s )', strtotime($history[0]['last_update'])).'</div>
                    </div>
                    <script src="js/demo/datatables-demo.js"></script>
        ';
        echo $output;
    }else if($_POST["content"] == "data_tdrive"){
        $role = $_POST["role"];
        $kdcab = $_POST["kdcab"];
        if($role == 1){
            $tdrive = query("SELECT * FROM list_test_drive");
            $history = query("SELECT MAX(time_stamp) AS 'last_update' FROM list_test_drive");
        }
        else{
            $tdrive = query("SELECT * FROM list_test_drive WHERE cabang = '$kdcab'");
            $history = query("SELECT MAX(time_stamp) AS 'last_update' FROM list_test_drive WHERE cabang = '$kdcab'");
        }
        $output .='
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            List Test Drive
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Booking</th>
                                            <th>Cabang</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                    ';
        
        $no = 1;
        foreach($tdrive as $rows){
            $output .=" <tr>
                            <td>".$no."</td>
                            <td>".$rows['kdtdrive']."</td>
                            <td>".$rows['cabang']."</td>
                            <td>".$rows['nama']."</td>
                            <td>".$rows['tanggal']."</td>
                            <td>
                                <button type='button' class='btn btn-info btn-sm' id='getDT' data-target='#view_data_tdrive' data-id='".$rows['kdtdrive']."'>View</button>
                            </td>
                        </tr>";   
            $no++;
        }
        $output .='
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Last modified '.date('d F Y ( H:i:s )', strtotime($history[0]['last_update'])).'</div>
                    </div>
                    <script src="js/demo/datatables-demo.js"></script>
        ';
        echo $output;
    }else if($_POST["content"] == "unit_tdrive"){
        $kdcab = $_POST["kdcab"];
        $id_user = $_POST["id_user"];
        $profile = query("SELECT * FROM user WHERE id = '$id_user'");
        if($profile[0]['role'] == 1){
            $unit = query("SELECT * FROM unit_test_drive");
            $cabang = query("SELECT * FROM dealer");
            $output .='
            <div class="row">
                <div class="col-md-12 mb-2">
                    <select name="cabang_tdrive" id="cabang_tdrive" class="form-control form-control-sm">
                    <option value="" disabled selected>-- PILIH CABANG --</option>';
            foreach($cabang as $rows){
                $output .= '
                <option value="'.$rows['kdcab'].'">'.$rows['cabang'].'</option>';
            }
            $output .='
                    </select>
                </div>
            </div>
            <div id="load_unit" class="mb-4">&nbsp;</div>
            ';    
        }else{
            $history = query("SELECT * FROM history WHERE tabel = 'unit_test_drive' AND kdcab = '".$kdcab."'");
            $unit = query("SELECT u.id,p.nama FROM unit_test_drive u INNER JOIN product p ON u.product_id=p.id WHERE kdcab = '$kdcab'");
            $output .= '
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Unit Test Drive
                </div>
                <div class="card-body">
                    <div class="text-right mb-3"><button type="button" class="btn btn-success btn-sm" id="addUT" data-target="#add_unit_tdrive" data-id="'.$kdcab.'">+ Add</button></div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Produk</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ';
            $no = 1;
            foreach($unit as $rows){
                $output .=" <tr>
                                <td>".$no."</td>
                                <td>".$rows['nama']."</td>
                                <td>
                                    <button type='button' class='btn btn-danger btn-sm' id='delUT' data-target='#' data-id='".$rows['id']."'>Delete</button>
                                </td>
                            </tr>";    
                            $no++;
            }
            $output .= '
                            </tbody>
                        </table>
                    <div class="card-footer small text-muted mt-2">Last modified '.date('d F Y ( H:i:s )', strtotime($history[0]['last_update'])).'</div>
                    </div></div></div><script src="js/demo/datatables-demo.js"></script>';
        }
        
        echo $output;
    }
?>