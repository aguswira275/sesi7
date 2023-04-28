<?php
    include("../konfigurasi.php");
  
    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS);
    if($cnn){
        $sql = "CREATE DATABASE " .DBNAME;
        $hsl = mysqli_query($cnn, $sql);
        if($hsl){
            echo "database". DBNAME ." berhasil dibuat";
        }else{
            echo "database". DBNAME ." gagal dibuat";
        };

    }else{
        echo "koneksi ke DBMS Mysql gagal";
    }
    mysqli_close($cnn);