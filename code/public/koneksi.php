<?php
$databaseHost = "{Tambahkan IP Anda Disini}:7306";
$databaseName = "sepatu";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if(!$mysqli)
    die("Gagal Koneksi . . . "); 
?>