<?php
session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: login.php'); // Redirect jika tidak terotentikasi
    exit;
}
?>


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <!-- component -->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    
</head>
<body class="bg-gray-200">
<?php
include("../koneksi.php");
// Query to get the total number of komik
$sqlKomik = "SELECT COUNT(*) AS total_komik FROM komik";
$resultKomik = mysqli_query($conn, $sqlKomik);
$rowKomik = mysqli_fetch_assoc($resultKomik);
$totalKomik = $rowKomik['total_komik'];

// Query to get the total number of users
$sqlUsers = "SELECT COUNT(*) AS total_users FROM users";
$resultUsers = mysqli_query($conn, $sqlUsers);
$rowUsers = mysqli_fetch_assoc($resultUsers);
$totalUsers = $rowUsers['total_users'];

// Query to get the total number of chapters
$sqlChapters = "SELECT COUNT(*) AS total_chapters FROM chapter";
$resultChapters = mysqli_query($conn, $sqlChapters);
$rowChapters = mysqli_fetch_assoc($resultChapters);
$totalChapters = $rowChapters['total_chapters'];

// Close the database connection
mysqli_close($conn);
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
                    <a href="dashboard.php" class="block py-2 px-3 text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0" aria-current="page">DASHBORD</a>
                </li>
                <li>
                    <a href="users.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">USERS</a>
                </li>
                <li>
                    <a href="komik.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">KOMIK</a>
                </li>
                <li>
                    <form method="post" action="logout.php">
                        <button type="submit" name="logout" class="block py-2 px-3 text-black bg-red-700 rounded md:bg-transparent md:text-red-700 md:p-0">LOGOUT</button>
                    </form>
                </li>
                </ul>
                
            </div>

            
            

        </div>



    
        
    </nav>
<main >


<div class="p-10">
<span class="self-center text-2xl font-semibold whitespace-nowrap">DASHBOARD</span>
<p class="mb-10">
Dashbord untuk platform INVITOON mencakup informasi seperti jumlah total komik, jumlah total users, dan jumlah total chapter
</p>


<div class="flex flex-wrap bg-indigo-900 ">
    
    <a href="komik.php" class="mt-4 w-full lg:w-6/12 xl:w-4/12 px-5 mb-4">
    <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-3 xl:mb-0 shadow-lg">
        <div class="flex-auto p-4">
        <div class="flex flex-wrap">
            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
            <h5 class="text-blueGray-400 uppercase font-bold text-xs"> JUMLAH KOMIK</h5>
            <span class="font-semibold text-xl text-blueGray-700"><?php echo $totalKomik ?></span>
            </div>
            <div class="relative w-auto pl-4 flex-initial">
            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full  bg-red-500">
                <i class="fas fa-book"></i>
            </div>
            </div>
        </div>
        </div>
    </div>
    </a>

    <a href="users.php" class=" mt-4 w-full lg:w-6/12 xl:w-4/12 px-5">
    <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-4 xl:mb-0 shadow-lg">
        <div class="flex-auto p-4">
        <div class="flex flex-wrap">
            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
            <h5 class="text-blueGray-400 uppercase font-bold text-xs">JUMLAH USERS</h5>
            <span class="font-semibold text-xl text-blueGray-700"><?php echo $totalUsers ?></span>
            </div>
            <div class="relative w-auto pl-4 flex-initial">
            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full  bg-pink-500">
                <i class="fas fa-users"></i>
            </div>
            </div>
        </div>
        </div>
    </div>
    </a>

    <div class="mt-4 w-full lg:w-6/12 xl:w-4/12 px-5">
    <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
        <div class="flex-auto p-4">
        <div class="flex flex-wrap">
            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
            <h5 class="text-blueGray-400 uppercase font-bold text-xs">JUMLAH SELURUH CHAPTER</h5>
            <span class="font-semibold text-xl text-blueGray-700"><?php echo $totalChapters ?></span>
            </div>
            <div class="relative w-auto pl-4 flex-initial">
            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full  bg-lightBlue-500">
                <i class="fas fa-file"></i>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>

  
</body>
</html>