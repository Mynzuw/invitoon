<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "web23";


//buat koneksi
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

//cek koneksi
if (!$conn) {
    die("Koneksi gagal");
}
?>