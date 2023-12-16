<?php
include "header.php";
?>
    <main class="bg-gray-200">

    

<!--     <div class="flex justify-between border-b items-center text-center">
        <div class="flex items-center">
            <a href=""><img src="Logo Invitoon 1.png" alt="" class="w-14"></a>
            <p class="border-2 p-1 rounded-md w-20 h-10 mr-3 ">Home</p>
            <p class="border-2 p-1 rounded-md w-20 h-10 mr-3">Trending</p>
            <p class="border-2 p-1 rounded-md w-20 h-10 mr-3">Komik</p>
        </div>
    </div> -->

    
    <div class="p-4">
        <div class="grid grid-cols-12">
            <div class="col-span-1"></div>
            <div class="col-span-10">
                <div class="grid grid-cols-3 gap-4 mb-5">
                    <div class="col-span-3 rounded-md">
                        <div id="indicators-carousel" class="relative w-full" data-carousel="static">
                            <!-- Carousel wrapper -->
                            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                <!-- Item 1 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                    <img src="admin/gambar/NewCover-Gundala.jpg" class="object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                </div>
                                <!-- Item 2 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="admin/gambar/NewCover-SriAsih.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                </div>
                                <!-- Item 3 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="admin/gambar/NewCover-GOdam.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                </div>
                                <!-- Item 4 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="admin/gambar/Fuuto Pi.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                </div>
                                <!-- Item 5 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="admin/gambar/My Eternal Reign - Banner.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                </div>
                            </div>
                            <!-- Slider indicators -->
                            <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                            </div>
                            <!-- Slider controls -->
                            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                    </svg>
                                    <span class="sr-only">Previous</span>
    </span>
                            </button>
                            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <!-- <div class="col-span-1 border-2 rounded-md p-2">
                        <div>
                            <h1 class="text-2xl font-bold">INVITOON</h1>
                        </div>
                    </div> -->
                </div>

                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-2">
                        <div class="grid md:grid-cols-3 grid-cols-2 gap-2">
                        <?php
                        include "koneksi.php";
                        include "fungsi.php";

                        //Query SQL
                        
                        $sql = "SELECT * FROM komik ORDER BY judul_komik";

                        //eksekusi SQL
                        $hasil = mysqli_query($conn,$sql);

                        //hitung data yang ada di tabel
                        $jmlData = mysqli_num_rows($hasil);
                        //cek apakah ada datanya
                        if ($jmlData > 0) {

                            //tampilkan datanya
                            while ($row = mysqli_fetch_assoc($hasil)) {

                        ?>
                            <div class="col-span-1">
                                <?php 
                                include "koneksi.php";
                                $chapter = $row["komik_id"];
                                $sql = "SELECT komik.komik_id, komik.deskripsi, chapter.no_chapter FROM komik JOIN chapter ON komik.komik_id = chapter.komik_id WHERE komik.komik_id = $chapter";
                                $hasiljmlcahpter = mysqli_query($conn,$sql);
                                $jmlchptr = mysqli_num_rows($hasiljmlcahpter);
                                ?>
                                <div class="max-w-sm bg-white border-bl-2 border-br-2 border-gray-300 rounded-lg shadow-lg">
                                    <a href="chapter.php?komik_id=<?= $row["komik_id"] ?>">
                                        <img class="rounded-t-lg w-96 h-96 object-cover" src="admin/gambar/<?= $row["cover"]; ?>" alt="" />
                                    </a>
                                    <div class="p-5">
                                        <a href="chapter.php?komik_id=<?= $row["komik_id"] ?>">
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 line-clamp-1"><?= $row["judul_komik"]; ?></h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-1"><?= $row["deskripsi"]; ?></p>

                                        <div class="flex items-center mb-5">
                                            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                            <p class="ms-2 text-sm font-bold text-gray-900 dark:text-gray"><?= floatval($row["rating"]); ?></p>
                                            <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                            <a href="chapter.php?komik_id=<?= $row["komik_id"] ?>" class="text-sm font-medium text-gray-900 "><?= $jmlchptr ?> Chapter</a>
                                        </div>

                                      <!--   <a href="chapter.php?komik_id=<?= $row["komik_id"] ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Read more
                                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                            </svg>
                                        </a> -->
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-span-1 border-2 bg-white rounded-md py-2 px-4 max-h-[538px] overflow-y-auto">
                        <h1 class="text-2xl font-extrabold">Trending Komik</h1>
                        <table class="table-auto mt-4 mb-4">
                            <thead>
                                <tr class="border-b font-bold text-sm w-full">
                                    <th class="px-6 border-r py-3 w-64">Nama</th>
                                    <th class="px-6 py-3 w-64">Genre</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // include "koneksi.php";
                                // include "fungsi.php";

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
                                <tr class="border-t text-center text-sm w-full h-12">
                                    <td class="px-6 py-3 border-r w-64"><?= $row["judul_komik"]; ?></td>
                                    <td class="px-6 py-3 w-64 overflow-x-auto"><?= $row["genre"]; ?></td>
                                </tr>
                                <?php }} ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-span-1"></div>
        </div>
    </main>
 

    


</body>
</html>