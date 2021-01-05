<?php
    require '../function.php';
    $output = "";
    if(!empty($_POST["cabang"]) && !empty($_POST["produk"])){
        if($_POST['role'] == 1){
            $cabang = $_POST["cabang"];
            $produk = $_POST["produk"];
            $price = query("SELECT pp.id,pp.product_id,p.nama,pp.tipe,pp.bda,pp.smt,pp.sbr,pp.dri,pp.pbr FROM product p INNER JOIN product_price pp ON p.id = pp.product_id WHERE pp.product_id = $produk");    
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
            $history = query("SELECT * FROM history WHERE tabel = '".$produk."' AND kdcab = '".$kdcab."'");
            $output .= '<div class="card"><div class="card-body">
            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Tipe</th>
                                            <th>Harga '.$cabang.'</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="ayla_table">
                                        ';
            $no = 1;
            foreach($price as $rows){
                $output .=" <tr>
                                <td>".$no."</td>
                                <td>".$rows['nama']."</td>
                                <td>".$rows['tipe']."</td>
                                <td>".number_format($rows[$cabang], 0, ',', '.')."</td>
                                <td>
                                    <button type='button' class='btn btn-primary btn-sm' id='getPP' data-target='#' data-id='".$rows['id']."'>Edit</button>
                                </td>
                            </tr>";    
                            $no++;
            }
            $output .= '
                                    </tbody>
                                </table>
                            <div class="card-footer small text-muted mt-2">Last modified '.date('d F Y ( H:i:s )', strtotime($history[0]['last_update'])).'</div>
                            </div></div></div><script src="js/demo/datatables-demo.js"></script>';
            echo $output;
        }
        else{
            $cabang = $_POST["cabang"];
            $produk = $_POST["produk"];
            $price = query("SELECT pp.id,pp.product_id,p.nama,pp.tipe,pp.bda,pp.smt,pp.sbr,pp.dri,pp.pbr FROM product p INNER JOIN product_price pp ON p.id = pp.product_id WHERE pp.product_id = $produk");    
            if($cabang == "BDA")
                $kdcab = "bda";
            else if($cabang == "GT1")
                $kdcab = "smt";
            else if($cabang == "PDG")
                $kdcab = "sbr";
            else if($cabang == "DRI")
                $kdcab = "dri";
            else if($cabang == "SDR")
                $kdcab = "pbr";
            $history = query("SELECT * FROM history WHERE tabel = '".$produk."' AND kdcab = '".$cabang."'");
            $output .= '<div class="card"><div class="card-body">
            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Tipe</th>
                                            <th>Harga '.$cabang.'</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="ayla_table">
                                        ';
            $no = 1;
            foreach($price as $rows){
                $output .=" <tr>
                                <td>".$no."</td>
                                <td>".$rows['nama']."</td>
                                <td>".$rows['tipe']."</td>
                                <td>".number_format($rows[$kdcab], 0, ',', '.')."</td>
                                <td>
                                    <button type='button' class='btn btn-primary btn-sm' id='getPP' data-target='#' data-id='".$rows['id']."'>Edit</button>
                                </td>
                            </tr>";    
                            $no++;
            }
            $output .= '
                                    </tbody>
                                </table>
                            <div class="card-footer small text-muted mt-2">Last modified '.date('d F Y ( H:i:s )', strtotime($history[0]['last_update'])).'</div>
                            </div></div></div><script src="js/demo/datatables-demo.js"></script>';
            echo $output;
        }
    }
   
?>