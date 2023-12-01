<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVITOON</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <!-- <style>
        .fakeimg {
            height: 200px;         
            background: #aaa;
        }
    </style> -->
</head>
<body>
<header class="relative">
    <nav class="sticky bg-white fixed relative w-full z-20 top-0 left-0 right-0 border-b border-gray-200;">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="Logo Invitoon 1.png" class="h-8" alt="Flowbite Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap">INVITOON</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <form class="py-2 px-3">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white ">Cari</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-blue dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari Judul Komik" required>
                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
                    
                </div>
            </form>
            <div class="py-2 px-3">
                <button type="button" class="bg-blue-700 hover:bg-blue-800 text-white font-bold py-3 px-4 border border-blue-700 rounded">Masuk</button>
            </div>
          

                
                
                
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
                    <a href="index.php" class="block py-2 px-3 text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Trending</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Kategori</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Contact</a>
                </li>
                </ul>
            </div>

            
            

        </div>

        
    </nav>

    

<!--     <div class="flex justify-between border-b items-center text-center">
        <div class="flex items-center">
            <a href=""><img src="Logo Invitoon 1.png" alt="" class="w-14"></a>
            <p class="border-2 p-1 rounded-md w-20 h-10 mr-3 ">Home</p>
            <p class="border-2 p-1 rounded-md w-20 h-10 mr-3">Trending</p>
            <p class="border-2 p-1 rounded-md w-20 h-10 mr-3">Komik</p>
        </div>
    </div> -->

    </header>
    <div class="bg-gray-200 flex flex-col gap-4  items-center justify-center">
        <img src="admin/gambar/NewCover-Gundala.jpg" alt="">
    
  
  <!-- Card 1 -->
  <a class="rounded-sm w-1/2 grid grid-cols-12 bg-white shadow p-3 gap-2 items-center hover:shadow-lg transition delay-150 duration-300 ease-in-out hover:scale-105 transform" href="#">
    
    <!-- Icon -->
    <div class="col-span-12 md:col-span-1">
        <img src="admin/gambar/cover_gundala.jpg" alt="">
    </div>
    
    <!-- Title -->
    <div class="col-span-11 xl:-ml-5">
      <p class="pl-5 text-blue-600 font-semibold"> Episode 3 </p>
    </div>
    
    <!-- Description -->
    <div class="md:col-start-2 col-span-11 xl:-ml-5">
      <p class="pl-5 text-sm text-gray-800 font-light"> 6 Desember 2023 </p>
    </div>
    
  </a>

    <!-- Card 1 -->
    <a class="rounded-sm w-1/2 grid grid-cols-12 bg-white shadow p-3 gap-2 items-center hover:shadow-lg transition delay-150 duration-300 ease-in-out hover:scale-105 transform" href="#">
    
    <!-- Icon -->
    <div class="col-span-12 md:col-span-1">
        <img src="admin/gambar/cover_gundala.jpg" alt="">
    </div>
    
    <!-- Title -->
    <div class="col-span-11 xl:-ml-5">
      <p class="pl-5 text-blue-600 font-semibold"> Episode 2 </p>
    </div>
    
    <!-- Description -->
    <div class="md:col-start-2 col-span-11 xl:-ml-5">
      <p class="pl-5 text-sm text-gray-800 font-light"> 29 November 2023 </p>
    </div>
    
  </a>

    <!-- Card 1 -->
    <a class="rounded-sm w-1/2 grid grid-cols-12 bg-white shadow p-3 gap-2 items-center hover:shadow-lg transition delay-150 duration-300 ease-in-out hover:scale-105 transform" href="#">
    
    <!-- Icon -->
    <div class="col-span-12 md:col-span-1">
        <img src="admin/gambar/cover_gundala.jpg" alt="">
    </div>
    
    <!-- Title -->
    <div class="col-span-11 xl:-ml-5">
      <p class="pl-5 text-blue-600 font-semibold"> Episode 1 </p>
    </div>
    
    <!-- Description -->
    <div class="md:col-start-2 col-span-11 xl:-ml-5">
      <p class="pl-5 text-sm text-gray-800 font-light"> 22 November 2023 </p>
    </div>
    
  </a>






    </div>

    


  
                

                

           
                  
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>