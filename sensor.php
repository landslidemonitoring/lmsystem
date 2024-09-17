<?php

include 'koneksi.php';

$kemiringan = $_GET['kemiringan'];
$curahhujan  = $_GET['curah hujan'];
$kelembaban = $_GET['kelembaban'];
$pergeseran = $_GET['pergeseran'];

$kemiringan = $_GET['kemiringan'];
$curahhujan  = $_GET['curah hujan'];
$kelembaban = $_GET['kelembaban'];
$pergeseran = $_GET['pergeseran'];




$query = "INSERT INTO node1 set id=null, kemiringan='$kemiringan', curah hujan='$curahhujan', kelembaban='$kelembaban', pergeseran='$pergeseran'";
    $queryResult = mysqli_query($koneksi, $query);
    
    if($queryResult>0){
        echo "BERHASIL";
    }else{
        echo "false";
    }

$query = "INSERT INTO node2 set id=null, set id=null, kemiringan='$kemiringan', curah hujan='$curahhujan', kelembaban='$kelembaban', pergeseran='$pergeseran'";
    $queryResult = mysqli_query($koneksi, $query);
    
    if($queryResult>0){
        echo "BERHASIL";
    }else{
        echo "false";
    }

?>