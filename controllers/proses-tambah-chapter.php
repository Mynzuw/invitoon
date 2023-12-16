<?php
// Koneksi ke database (gantilah dengan informasi koneksi sesuai database Anda)
include('../koneksi.php'); 

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$komik_id   = $_POST['komik_id'];
$no_chapter  = $_POST['no_chapter'];
$chapter_id = $komik_id*10000 + $no_chapter;



// Cek apakah tombol "Tambah Data" ditekan
if(isset($_POST['no_chapter'])) {
    // Query SQL untuk menyisipkan data ke database
    $sql = "INSERT INTO chapter (komik_id, no_chapter, chapter_id) VALUES ($komik_id, $no_chapter, $chapter_id)";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan ke database." ;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi ke database
$conn->close();
?>