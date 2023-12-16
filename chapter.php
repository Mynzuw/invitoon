

    <?php
    include("header.php");
include("koneksi.php");
?>
<?php
    $id=0;
    if (isset($_GET["komik_id"])) {
        $id = $_GET["komik_id"];
        $id = mysqli_real_escape_string($conn, $id);
    }
    $sql = "SELECT * FROM komik WHERE komik_id=$id";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $id = $row["komik_id"];
        $judul_komik = $row["judul_komik"];
        $deskripsi = $row["deskripsi"];
        $cover = $row["cover"];
    } else {
        $id = "";
        $judul_komik = "";
        $deskripsi = "";
        $cover = "";
    }
    mysqli_close($conn);
?>
<div class="p-10 bg-gray-200">
<div class="grid grid-cols-2">
<div class="ml-10">
<div href="" class="flex flex-col bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-white-100 dark:border-white-700 dark:bg-white-800 dark:hover:bg-white-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="admin/gambar/<?= $row["cover"]; ?>" alt="">
    <div class=" p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray"><?= $row["judul_komik"]; ?></h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Pengarang : <?= $row["pengarang"]; ?></p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Genre : <?= $row["genre"]; ?></p>
      
        <div class="flex items-center mb-5">
        <?php 
                                include "koneksi.php";
                                $chapter = $row["komik_id"];
                                $sql = "SELECT komik.komik_id, komik.deskripsi, chapter.no_chapter FROM komik JOIN chapter ON komik.komik_id = chapter.komik_id WHERE komik.komik_id = $chapter";
                                $hasiljmlcahpter = mysqli_query($conn,$sql);
                                $jmlchptr = mysqli_num_rows($hasiljmlcahpter);
                                ?>
                                            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                            <p class="ms-2 text-sm font-bold text-gray-900 dark:text-gray"><?= $row['rating'] ?></p>
                                            <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                            <p href="#" class="text-sm font-medium text-gray-900 "><?= $jmlchptr ?> Chapter</p>                                           
                                        </div>
                                      
                                        

    </div>
  </div>
</div>
<div class="full:ml-[-5rem] full:mt-5 full:mr-30 ">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-900">Deskripsi</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?= $row["deskripsi"]; ?></p>
    </div>
</a>
</div>
</div>

<!--     
  
    <div class="relative">
        <div class="absolute inset-0 w-full h-full bg-gray-300 bg-opacity-75">
            <div class="">
                <h1 class="mb-4 text-4xl text-center font-bold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-black text-lg sm:text-sm">Gundala Putra Petir</h1>
                <p class="mb-6 text-lg  text-center font-normal text-gray-black lg:text-xl sm:px-16 xl:px-48 dark:text-black-400 text-lg sm:text-sm">Gundala adalah tokoh komik ciptaan Hasmi yang muncul pertama kali dalam komik Gundala Putra Petir pada tahun 1969. Genre komik adalah Fantasi. Jelas tampak pengaruh komik pahlawan super Amerika pada desain karakter maupun jenis kekuatannya, meskipun alur ceritanya bergaya Indonesia. Lokasi cerita sering digambarkan di kota Yogyakarta meskipun dalam filmnya pada tahun 1982 diceritakan berada di Jakarta. Gundala termasuk karakter komik yang cukup populer di Indonesia selain Si Buta dari Gua Hantu, Panji Tengkorak, dan Godam.</p>

            </div>
        </div>
        <img src="admin/gambar/NewCover-Gundala.jpg" alt="Gundala"/>
    </div>
    -->
    <?php

    include("koneksi.php");
$komik_id=0;
    if (isset($_GET["komik_id"])) {
        $komik_id = $_GET["komik_id"];
        $komik_id = mysqli_real_escape_string($conn, $komik_id);
    }
 $sql = "SELECT * FROM chapter WHERE komik_id=$komik_id ORDER BY no_chapter DESC";
 $hasil = mysqli_query($conn,$sql);
 if (mysqli_num_rows($hasil) > 0) {
  while ($row_chapter = mysqli_fetch_assoc($hasil)) {
?>
 <!-- Card 1 -->


 <div class="flex flex-col gap-4  items-center justify-center mb-3">
  <a href="baca-chapter.php?chapter_id=<?= $row_chapter["chapter_id"]; ?>" class="rounded-sm w-1/2 grid grid-cols-12 bg-white shadow p-3 gap-2 items-center hover:shadow-lg transition delay-150 duration-300 ease-in-out hover:scale-105 transform" href="#">
    
    <!-- Icon -->
    <div class="col-span-12 md:col-span-1">
        <img src="admin/gambar/<?= $row["cover"]; ?>" alt="">
    </div>
  

    <!-- Title -->
    <div class="col-span-11 xl:-ml-5">
      <p class="pl-5 text-blue-600 font-semibold"> Chapter <?= $row_chapter["no_chapter"]; ?> </p>
      <div class="flex items-center ml-5">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="blue" class="w-6 h-6">
  <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
</svg>
<p class="text-sm font-semibold text-gray-900 dark:text-gray"><?= $row_chapter["likes"]; ?></p>
</div>
        </div>

    <!-- Description -->
    <div class="md:col-start-2 col-span-11 xl:-ml-5">
      <p class="pl-5 text-sm text-gray-800 font-light"> 20 Desember 2023 </p>
    </div>
    
  </a>
  </div>
  
<?php
 }
}
mysqli_close($conn);
?>


    </div>

    


  
                

                

           
                  
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>