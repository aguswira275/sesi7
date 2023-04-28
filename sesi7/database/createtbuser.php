<?php
    include("koneksi.php");

    $tbel1 = "CREATE TABLE tbUSER(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(35),
        email VARCHAR(255),
        username VARCHAR(10),
        passkey VARCHAR(255),
        iduser VARCHAR(255)
    );";

    // $hsl = mysqli_query($cnn , $tbel);
    // if($hsl){
    //     echo "tabel tbUSER ==> sukses";
    // }else{
    //     echo "tabel tbUSER ==> gagal";
    // }

    include("koneksi.php");

    $tbel2 = "CREATE TABLE tbMHS(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(30),
        nim VARCHAR(10),
        prodi VARCHAR(20),
        jeniskelamin VARCHAR(1),
        tglahir DATE,
        idmhs VARCHAR(255)
    );";

    $hsl1 = mysqli_query($cnn , $tbel1);
    if($hsl1){
        echo "tabel $tbel1 ==> sukses";
    }

    $hs2 = mysqli_query($cnn , $tbel2);
    if($hs2){
        echo "tabel $tbel2 ==> sukses";
    }