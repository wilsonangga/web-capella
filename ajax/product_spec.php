<?php
    require '../function.php';
    $output = "";
    if(!empty($_POST["product"])){
        $product = $_POST["product"];
        $hasil = query("SELECT ps.id, p.nama, ps.kd_spec, ps.dsc FROM product_spec ps INNER JOIN product p ON ps.product_id = p.id WHERE product_id = $product");
        $history = query("SELECT * FROM history WHERE tabel = 'product_spec'");
        if($hasil){
            $output .= '<div class="card"><div class="card-body">
            <div class="text-right mb-3"><button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#add_product_spec">+ Add</button></div>
            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Specification</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ';
            $no = 1;
            foreach($hasil as $rows){
                switch($rows['kd_spec']){
                    case "dms":
                        $n_spec = "Dimensi";
                        break;
                    case "msn":
                        $n_spec = "Mesin";
                        break;
                    case "trm":
                        $n_spec = "Transmisi";
                        break;
                    case "skm":
                        $n_spec = "Sistem Kemudi";
                        break;
                    case "spm":
                        $n_spec = "Sistem Pengereman";
                        break;
                    case "sps":
                        $n_spec = "Suspensi";
                        break;
                    case "ban":
                        $n_spec = "Ban";
                        break;
                    default:
                        $n_tool = "Specification";
                }
                $output .=" <tr>
                                <td>".$no."</td>
                                <td>".$rows['nama']."</td>
                                <td>".$n_spec."</td>
                                <td>
                                    <button type='button' class='btn btn-primary btn-sm' id='getPS' data-target='#' data-id='".$rows['id']."'>Edit</button>
                                    <button type='button' class='btn btn-danger btn-sm' id='delPS' data-target='#delete_product_spec' data-id='".$rows['id']."'>Delete</button>
                                </td>
                            </tr>";    
                            $no++;
            }
            $output .= '
                                    </tbody>
                                </table>
                            <div class="card-footer small text-muted mt-2">Last modified '.date('d F Y ( H:i:s )', strtotime($history[0]['last_update'])).'</div>
                            </div></div></div><script src="js/demo/datatables-demo.js"></script>';    
        }else{
            $output .= '<div class="card"><div class="card-body">
            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Specification</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            <div class="card-footer small text-muted mt-2">Last modified '.date('d F Y ( H:i:s )', strtotime($history[0]['last_update'])).'</div>
                            </div></div></div><script src="js/demo/datatables-demo.js"></script>';
        }
        echo $output;
    }
?>