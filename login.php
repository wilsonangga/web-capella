<?php
    require 'function.php';
    if(isset($_POST["login"])){
        $username = $_POST["email"];
        $password = $_POST["password"];
        
        //cek apakah username ada atau tidak
        $rsc = array();
        $qc = "SELECT username FROM user WHERE username = '$username'" ;
        callRS($rsc, $qc);
        if(count($rsc) == 1){
            //cek password
            $row = query("SELECT password FROM user WHERE username = '$username'");
            if(password_verify($password, $row[0]["password"])){
                header("Location: ?ng=home");
                exit;
            }
        }
    }
?>