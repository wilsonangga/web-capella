<?php
    require '../function.php';
    $output = "";
    if(isset($_POST["product"])){
        $product = $_POST["product"];
        $name = query("SELECT * FROM product WHERE id = '$product'");
        $banner = query("SELECT * FROM product_detail WHERE product_id = '$product'");
        $history = query("SELECT * FROM history WHERE tabel = 'product_detail' ");
        $output .= '
        <div class="card"><div class="card-body">
            <div class="text-right mb-3"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add_product_banner">+ Add</button></div>
            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Banner</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ';
            $no = 1;
            foreach($banner as $rows){
                switch($rows['kd_ban']){
                    case 'b_top':
                        $bn = "Banner Top";
                        break;
                    case 'b_int':
                        $bn = "Banner Interior";
                        break;
                    case 'b_ext':
                        $bn = "Banner Exterior";
                        break;
                    case 'b_col':
                        $bn = "Banner Colour";
                        break;
                    case 'b_prf':
                        $bn = "Banner Performance";
                        break;
                    case 'b_sft':
                        $bn = "Banner Safety";
                        break;
                    case 'b_var':
                        $bn = "Banner Variant";
                        break;
                    case 'b_mnu':
                        $bn = "Logo Produk";
                        break;
                    default:
                        $bn = "Banner";
                }
                    
                $output .=" <tr>
                                <td>".$no."</td>
                                <td>".$name[0]['nama']."</td>
                                <td>".$bn."</td>
                                <td>
                                    <button type='button' class='btn btn-primary btn-sm' id='getPB' data-target='#edit_product_banner' data-id='".$rows['id']."'>Edit</button>
                                    <button type='button' class='btn btn-danger btn-sm' id='delPB' data-target='#delete_product_banner' data-id='".$rows['id']."'>Delete</button>
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
?>