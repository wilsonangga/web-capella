<?php
    require '../function.php';
    $output = "";
    if(!empty($_POST["cabang"])){
        $cabang = $_POST["cabang"];
        $unit = query("SELECT u.id,p.nama FROM unit_test_drive u INNER JOIN product p ON u.product_id=p.id WHERE kdcab = '$cabang'");
        $history = query("SELECT * FROM history WHERE tabel = 'unit_test_drive' AND kdcab = '".$cabang."'");
        $output .= '
        <div class="card"><div class="card-body">
            <div class="text-right mb-3"><div class="text-right mb-3"><button type="button" class="btn btn-success btn-sm" id="addUT" data-target="#add_unit_tdrive" data-id="'.$cabang.'">+ Add</button></div></div>
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
        echo $output;
    }
?>