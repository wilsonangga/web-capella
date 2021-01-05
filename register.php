<?php
    require 'function.php';
    $konek=cvdb();
    $con = mysqli_connect($konek["dbs"], $konek["dbu"], $konek["dbp"],$konek["dbn"]);
    if(isset($_POST["register"])){
        if(register($_POST)>0){
            echo "<script>alert('user baru berhasil ditambahkan!')</script>";
        }else{
            echo mysqli_error($con);
        }
    }
?>