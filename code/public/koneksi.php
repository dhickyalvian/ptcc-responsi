<?php
$databaseHost = "192.168.100.49:7306";
$databaseName = "sepatu";
$databaseUsername = "root";
$databasePassword = "sepatu";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if(!$mysqli)
    die("Gagal Koneksi . . . "); 
?>