<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- tailwind link -->
    <link href="../lib/tailwind/output.css" rel="stylesheet" />

     <!-- google font link -->
     <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


</head>


<style>
    /* For Webkit-based browsers (Chrome, Safari and Opera) */
.scrollbar-hide::-webkit-scrollbar {
    display: none;
}

/* For IE, Edge and Firefox */
.scrollbar-hide {
    -ms-overflow-style: none;  
    scrollbar-width: none;  
}
#navbar{
transition: top 0.3s;
}
</style>


<body class="bg-primary font-roboto h-[140vh] scrollbar-hide">

    <!-- start header  -->
<div id="navbar" class="fixed top-0 w-full shadow-md z-40">
        <!-- start first navbar -->
        <nav class="py-2 px-4 bg-white shadow md:flex md:items-center md:justify-between">
            <div class="flex justify-between items-center ">
    
                <!-- desktop logo -->
                <img class="md:block hidden" src="../img/header/logo.svg" alt="">
    
                <!-- mobile logo -->
                <img  class="md:hidden w-[90px] order-2" src="./img/header/headerLogo.svg " alt="">
    
                <!-- mobile login -->
                <button class="bg-tertiary text-textWhite py-2 px-6 rounded md:hidden order-3">Login</button>
    
                <!-- mobile menu -->
                <span class=" text-3xl order-1 cursor-pointer mx-2 md:hidden block">
                    <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
                </span>
            </div>
    
            <ul
                class="md:flex md:items-center z-50  md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
                <li class="mx-4 my-6 md:my-0">
                    <a href="#" class="text-md hover:text-[#F36823]  duration-300">Home</a>
                </li>
                <li class="mx-4 my-6 md:my-0">
                    <a href="#" class="text-md hover:text-[#F36823]  duration-300">About</a>
                </li>
                <li class="mx-4 my-6 md:my-0">
                    <a href="#" class="text-md hover:text-[#F36823]  duration-300">Service</a>
                </li>
                <li class="mx-4 my-6 md:my-0">
                    <a href="#" class="text-md hover:text-[#F36823]  duration-300">Help</a>
                </li>
                <li class="mx-4 my-6 md:my-0">
                    <a href="#" class="text-md hover:text-[#F36823] duration-300">Contact</a>
                </li>
    
                <button
                    class="bg-tertiary text-textWhite  duration-500 py-2 px-6 hidden md:block mx-4 hover:bg-tertiary rounded ">
                    Login
                </button>
                <h2 class=""></h2>
            </ul>
        </nav>
        <!-- end first navbar -->
        <!-- start second navbar -->
        <nav class="bg-secondary py-2 px-3 md:px-7">
            <div class="flex justify-between">
          <div class="flex">
            
            <!-- desktop categories -->
            <div id="dropdownButton" class="relative  md:block hidden px-3 py-2 bg-tertiary hover:bg-tertiary text-textWhite rounded-l-md cursor-pointer">
              Categories
              <ion-icon name="chevron-down-outline"></ion-icon>
              
               
    
                <ul id="dropdownMenu" class="absolute hidden z-50  mt-5 py-2 w-[300px] bg-white rounded-md shadow-lg">
                    <li><a href="#" class="block bg:bg-white px-4 py-2 text-gray-800 hover:bg-tertiary hover:text-white duration-400">Womens’s & Girls’s Fashion</a></li>
                    <li><a href="#" class="block bg:bg-white px-4 py-2 text-gray-800 hover:bg-tertiary hover:text-white duration-400">Mens’s & Boys’ Fashion</a></li>
                    <li><a href="#" class="block bg:bg-white px-4 py-2 text-gray-800 hover:bg-tertiary hover:text-white duration-400">Sports & Outdoors</a></li>
                    <li><a href="#" class="block bg:bg-white px-4 py-2 text-gray-800 hover:bg-tertiary hover:text-white duration-400">Health & Beauty</a></li>
                    <li><a href="#" class="block bg:bg-white px-4 py-2 text-gray-800 hover:bg-tertiary hover:text-white duration-400">Jewelry </a></li>
                    <li><a href="#" class="block bg:bg-white px-4 py-2 text-gray-800 hover:bg-tertiary hover:text-white duration-400">Watches</a></li>
                    <li><a href="#" class="block bg:bg-white px-4 py-2 text-gray-800 hover:bg-tertiary hover:text-white duration-400">Home & Lifestyle</a></li>
                    <li><a href="#" class="block bg:bg-white px-4 py-2 text-gray-800 hover:bg-tertiary hover:text-white duration-400">Mother & Baby</a></li>
                    <li><a href="#" class="block bg:bg-white px-4 py-2 text-gray-800 hover:bg-tertiary hover:text-white duration-400">Bags</a></li>
                    <li><a href="#" class="block bg:bg-white px-4 py-2 text-gray-800 hover:bg-tertiary hover:text-white duration-400">Groceries</a></li>
                    <li><a href="#" class="block bg:bg-white px-4 py-2 text-gray-800 hover:bg-tertiary hover:text-white duration-400">Tv & Home Appliances</a></li>
                    <li><a href="#" class="block bg:bg-white px-4 py-2 text-gray-800 hover:bg-tertiary hover:text-white duration-400">Electronics Devices</a></li>
                    <li><a href="#" class="block bg:bg-white px-4 py-2 text-gray-800 hover:bg-tertiary hover:text-white duration-400">Others</a></li>
                  </ul>
            </div>
            <img id="menu-toggle" class="h-[40px] md:hidden cursor-pointer" src="../img/header/category.svg" alt="">
            <input type="search" placeholder="Search..." class="md:text-textBlack px-3 outline-none  md:w-[300px] w-[200px] rounded-md md:rounded-r-md">
          </div>
          <img class="pr-2" src="../img/header/cart.svg" alt="">
        </div>
        </nav>
        <!-- end second navbar -->
</div>
    <!-- end header -->




      
      <div id="slide-menu" class="hidden fixed right-0 top-0 h-full w-80 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out">
        <button id="menu-close">
          <div class="mt-10 flex flex-wrap space-x-2">
        <span class="px-2 mt-2 block py-2 hover:bg-tertiary hover:text-white shadow-md rounded-md">Womens’s & Girls’s Fashion</span>
        <span class="px-2 mt-2 block py-2 hover:bg-tertiary hover:text-white shadow-md rounded-md">Jewelry </span>
        <span class="px-2 mt-2 block py-2 hover:bg-tertiary hover:text-white shadow-md rounded-md">Mens’s & Boys’ Fashion</span>
        <span class="px-2 mt-2 block py-2 hover:bg-tertiary hover:text-white shadow-md rounded-md">Watches</span>
        <span class="px-2 mt-2 block py-2 hover:bg-tertiary hover:text-white shadow-md rounded-md">Sports & Outdoors</span>
        <span class="px-2 mt-2 block py-2 hover:bg-tertiary hover:text-white shadow-md rounded-md">Health & Beauty</span>
        <span class="px-2 mt-2 block py-2 hover:bg-tertiary hover:text-white shadow-md rounded-md">Watches</span>
        <span class="px-2 mt-2 block py-2 hover:bg-tertiary hover:text-white shadow-md rounded-md">Home & Lifestyle</span>
        <span class="px-2 mt-2 block py-2 hover:bg-tertiary hover:text-white shadow-md rounded-md">Bags</span>
        <span class="px-2 mt-2 block py-2 hover:bg-tertiary hover:text-white shadow-md rounded-md">Groceries</span>
        <span class="px-2 mt-2 block py-2 hover:bg-tertiary hover:text-white shadow-md rounded-md">Tv & Home Appliances</span>
        <span class="px-2 mt-2 block py-2 hover:bg-tertiary hover:text-white shadow-md rounded-md">Electronics Devices</span>
        <span class="px-2 mt-2 block py-2 hover:bg-tertiary hover:text-white shadow-md rounded-md">Others</span>
   
          </div>
        </button>

      </div>
      
     
    <!-- end header  -->


    <!-- navbar -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="../js/homePage/header/navbarMobile.js"></script>
    <script src="../js/homePage/header/categoryDesktop.js"></script>
    <script src="../js/homePage/header/categoryMobile.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- navbar -->

</body>

</html>