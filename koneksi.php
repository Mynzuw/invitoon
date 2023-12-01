<?php
$serverName = "localhost";
$userName = "root";
$password = "12345678";
$dbName = "web23";


//buat koneksi
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

//cek koneksi
if (!$conn) {
    die("Koneksi gagal");
}
?>