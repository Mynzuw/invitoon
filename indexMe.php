<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVITOON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .fakeimg {
            height: 200px;         
            background: #aaa;
        }
    </style>
</head>
<body>
    <nav class="container-fluid navbar navbar-dark bg-dark navbar-expand-sm">
        <a class="navbar-brand" href="#"><img src="Logo Invitoon 1.png" alt="" style="width: 50%;"></a>
        <button class="navbar-toggler" 
                data-bs-toggle="collapse" 
                data-bs-target="#menuutama"
                type="button"
                >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menuutama">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">GENRE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">TRENDING</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-8">
                    <div class="row">
<?php
include "koneksi.php";
include "fungsi.php";

 //Query SQL
$sql = "SELECT * FROM komik";

//eksekusi SQL
$hasil = mysqli_query($conn,$sql);

//hitung data yang ada di tabel
$jmlData = mysqli_num_rows($hasil);
//cek apakah ada datanya
if ($jmlData > 0) {

    //tampilkan datanya
    while ($row = mysqli_fetch_assoc($hasil)) {

 ?>
                    
                    <div class="col-sm-3 mt-5">
                        <div class="card shadow-sm">
                            <div class="card-body p-2">
                                <a href=""><img src="admin/gambar/<?= $row["cover"]; ?>" alt="Gambar Komik" class="img-fluid"></a>
                                <a href="" style="text-decoration: none;"><h6 class="mt-2"> <?= $row["judul_komik"]; ?> </h6></a>
                            </div>
                        </div>
                    </div>
<?php
    }
}
?>
</div>
</div>
<div class="col-sm-4">
                <h2>Trending</h2>
                    <div id="demo" class="carousel slide" data-bs-ride="carousel">

                         <!-- Indicators/dots -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                        </div>

                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="admin/gambar/NewCover-Gundala.jpg" alt="Los Angeles" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="admin/gambar/NewCover-SriAsih.jpg" alt="Chicago" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="admin/gambar/NewCover-GOdam.jpg" alt="New York" class="d-block w-100">
                            </div>
                    </div>

                            <!-- Left and right controls/icons -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            </button>
                            </div>
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item">
                                <a class="nav-link" href="#">Gundala</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#">Sri Asih</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#">Godam</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#">Mandala</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#">Aquanus</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#">Si Buta dari Gua Hantu</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#">Virgo</a>
                                </li>
                                
                            </ul>
                            <hr class="d-sm-none">
                </div>
</div>


    



    <div class="bg-dark mt-5 p-4 text-center text-white">
        <p>INVITOON</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>