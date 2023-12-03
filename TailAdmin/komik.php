<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../Logo Invitoon 1.png">
    <title>INVITOON</title>
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body>
<?php
include("../koneksi.php");
?>
  <nav class="navbar-sticky bg-white sticky w-full z-10 top-0 left-0 right-0 border-b border-gray-200;">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="../Logo Invitoon 1.png" class="h-8" alt="INVITOON Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap">ADMIN INVITOON</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

                
                
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                <li>
                    <a href="dashboard.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0" aria-current="page">DASHBORD</a>
                </li>
                <li>
                    <a href="users.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">USERS</a>
                </li>
                <li>
                    <a href="komik.php" class="block py-2 px-3 text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0">KOMIK</a>
                </li>
                </ul>
            </div>

            
            

        </div>

        
    </nav>
<main class="bg-gray-200">
<div class="container">
<div class="relative overflow-x-auto shadow-md sm:rounded-lg p-10">
    <table class="bg-white-500 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" id="tableku">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
            <th scope="col" class="px-6 py-3">
                    ID
                </th>
            <th scope="col" class="px-6 py-3">
                    Cover
                </th>
                <th scope="col" class="px-6 py-3">
                    Judul Komik
                </th>
                <th scope="col" class="px-6 py-3">
                    Genre
                </th>
                <!-- <th scope="col" class="px-6 py-3">
                    Deskripsi
                </th> -->
                <th scope="col" class="px-6 py-3">
                    Pengarang
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody class="bg-gray-300 text-gray-900">
        <?php 
 $sql = "SELECT * FROM komik ORDER BY tanggal DESC";
 $result = mysqli_query($conn,$sql);
 if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
?>
      <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-white-200">
        <td class="px-6 py-4 border border-b-indigo-200"><a href="berita-detail.php?id=<?= $row["id"] ?>"><?= $row["id"] ?></a></td>
        <td class="px-6 py-4 border border-b-indigo-200"><img src="../admin/gambar/<?= $row["cover"] ?>"style ="width:100px" ></td>
        <td class="px-6 py-4 border border-b-indigo-200"><?= $row["judul_komik"] ?></td>
        <td class="px-6 py-4 border border-b-indigo-200"><?= $row["genre"] ?></td>
      <!--   <td"><?= $row["deskripsi"] ?></td> -->
        <td class="px-6 py-4 border border-b-indigo-200"><?= $row["pengarang"] ?></td>
        <td class="px-6 py-4 border border-b-indigo-200"><?= $row["tanggal"] ?></td>
        <td class="px-6 py-4 border border-b-indigo-200">
        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="komik-edit.php?id=<?php echo $row['id']; ?>">Edit</button>
        <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</button>
        </td>
      </tr>
<?php
 }
}
mysqli_close($conn);
?>
    </tbody>
         
    </table>
</div>
</div>
</main>



        
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script> let table = new DataTable("#tableku"); </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
        
</body>
</html>