<?php
    require '../function.php';
    $output = "";
    if(!empty($_POST["product"]) && !empty($_POST["tool"])){
        $product = $_POST["product"];
        $tool = $_POST["tool"];
        $hasil = query("SELECT p.nama, pt.id, pt.kd_tool, pt.gambar, pt.judul, pt.dsc FROM product_tool pt INNER JOIN product p ON pt.product_id = p.id WHERE pt.product_id = '$product' AND pt.kd_tool = '$tool' ");
        $history = query("SELECT * FROM history WHERE tabel = 'product_tool'");
        if($hasil){
            $output .= '<div class="card"><div class="card-body">
            <div class="text-right mb-3"><button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#add_product_tool">+ Add</button></div>
            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Tool</th>
                                            <th>Judul</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ';
            $no = 1;
            foreach($hasil as $rows){
                switch($rows['kd_tool']){
                    case "t_int":
                        $n_tool = "Interior";
                        break;
                    case "t_ext":
                        $n_tool = "Exterior";
                        break;
                    case "t_360":
                        $n_tool = "360";
                        break;
                    case "t_col":
                        $n_tool = "Colour";
                        break;
                    case "t_sft":
                        $n_tool = "Safety";
                        break;
                    default:
                        $n_tool = "Tool";
                }
                $output .=" <tr>
                                <td>".$no."</td>
                                <td>".$rows['nama']."</td>
                                <td>".$n_tool."</td>
                                <td>".$rows['judul']."</td>
                                <td>
                                    <button type='button' class='btn btn-primary btn-sm' id='getPT' data-target='#' data-id='".$rows['id']."'>Edit</button>
                                    <button type='button' class='btn btn-danger btn-sm' id='delPT' data-target='#delete_product_tool' data-id='".$rows['id']."'>Delete</button>
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
                                            <th>Tool</th>
                                            <th>Judul</th>
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