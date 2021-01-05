<?php
    require '../function.php';
    $output = "";
    if(isset($_POST["product"])){
        $product = $_POST["product"];
        $name = query("SELECT * FROM product WHERE id = '$product'");
        $color = query("SELECT * FROM product_color WHERE product_id = '$product'");
        $history = query("SELECT * FROM history WHERE tabel = 'product_color' ");
        $output .= '
        <div class="card"><div class="card-body">
            <div class="text-right mb-3"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add_product_color">+ Add</button></div>
            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Warna</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ';
            $no = 1;
            foreach($color as $rows){
                $output .=" <tr>
                                <td>".$no."</td>
                                <td>".$name[0]['nama']."</td>
                                <td>".$rows['n_color']."</td>
                                <td>
                                    <button type='button' class='btn btn-primary btn-sm' id='getPC' data-target='#edit_product_color' data-id='".$rows['id']."'>Edit</button>
                                    <button type='button' class='btn btn-danger btn-sm' id='delPC' data-target='#delete_product_color' data-id='".$rows['id']."'>Delete</button>
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