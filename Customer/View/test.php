<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./headerLogo.svg" type="image/icon type">
  <title>Trend Hub</title>
  
  <!-- Start Navbar -->
  <!-- google font link -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <!-- font awesome icon css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <!-- end navbar -->


  <!-- tailwind  link -->
  <link href="./resources/lib/tailwind/output.css" rel="stylesheet" />

  <!-- css link -->
  <link href="./resources/css/HomePage/effect.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />



</head>

<body>


  <!-- start header  -->
  <div id="navbar" class="fixed top-0 w-full shadow-md z-30">
    <!-- start first navbar -->
    <nav class="py-2 px-4 bg-white shadow md:flex md:items-center md:justify-between">
      <div class="flex justify-between items-center ">

        <!-- desktop logo -->
        <img class="md:block hidden" src="./resources/img/header/logo.svg" alt="">

        <!-- mobile logo -->
        <img class="md:hidden w-[90px] order-2" src="./resources/img/header/headerLogo.svg " alt="">

        <!-- mobile login -->
        <button class="bg-tertiary text-textWhite py-2 px-6 rounded md:hidden order-3">Login</button>

        <!-- mobile menu -->
        <span class=" text-3xl order-1 cursor-pointer mx-2 md:hidden block">
          <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
        </span>
      </div>

      <ul class="md:flex md:items-center z-50  md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
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

        <button class="bg-tertiary text-textWhite  duration-500 py-2 px-6 hidden md:block mx-4 hover:bg-tertiary rounded ">
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
          <img id="menu-toggle" class="h-[40px] md:hidden cursor-pointer   " src="./resources/img/header/category.svg" alt="">
          <input type="search" placeholder="Search..." class="md:text-textBlack px-3 outline-none  md:w-[300px] w-[200px] rounded-md md:rounded-r-md">
        </div>
        <img class="pr-2" src="./resources/img/header/cart.svg" alt="">
      </div>
    </nav>
    <!-- end second navbar -->
  </div>
 


  <div id="slide-menu" class="hidden z-40 fixed right-0 top-0 h-full w-80 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out">
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
 <!-- end header -->

  <!-- Slider Start -->
  <div class="swiper">
    <div class="swiper-wrapper">
      <!-- Slide1 -->
      <div class="swiper-slide">
        <div class="w-full h-[320px]  items-center mt-[130px] bg-[#2F2E41] flex justify-around">
          <div class="img w-[200px] h-[200px]  bg-red-800"></div>
          <div class="content w-[400px] h-[250px] bg-green-400"></div>
        </div>
      </div>

      <!-- Slide2 -->
      <div class="swiper-slide">
        <div class="w-full h-[320px]  items-center mt-[130px] bg-[#2F2E41] flex justify-around">
          <div class="img w-[200px] h-[200px]  bg-green-800"></div>
          <div class="content w-[400px] h-[250px] bg-red-400"></div>
        </div>
      </div>

      <!-- Slide3 -->
      <div class="swiper-slide">
        <div class="w-full h-[320px]  items-center mt-[130px] bg-[#2F2E41] flex justify-around">
          <div class="img w-[200px] h-[200px]  bg-blue-800"></div>
          <div class="content w-[400px] h-[250px] bg-orange-400"></div>
        </div>
      </div>

    </div>
  </div>
  <!-- Slider end -->


  <!-- start deals -->
  <div class=" max-w-[1700px] mx-auto">
    <div class="pt-[180px] -z-50 ">
      <h2 class="px-8 py-4 ml-[60px] text-xl font-bold ">DAILY DEALS</h2>
      <div class="flex justify-center z-0 flex-wrap  ">

        <div class=" -z-50 w-[365px] md:my-0 my-5 mx-8 relative h-[200px] rounded-md shadow-md bg-[#FDC6DB] cursor-pointer card ">
          <div class="flex justify-around px-4 mt-[10px] relative">
            <div class="mt-[50px] font-bold">Make Up</div>
            <img class="mt-[30px]" src="./resources/img/homePage/Deals/makeup.png" alt="">
          </div>

          <div class="circle absolute w-[50px] h-[50px] bg-tertiary rounded-full right-3 top-3  ">
            <span class="text-textWhite leading-[50px] text-center mx-auto block">10%</span>
          </div>
        </div>

        <div class=" -z-50 w-[365px] md:my-0 my-5 mx-8 relative h-[200px] rounded-md shadow-md bg-primary cursor-pointer card ">
          <div class="flex justify-around px-4 mt-[10px] relative">
            <div class="mt-[50px] font-bold">Smart Watch</div>
            <img class="mt-[20px]" src="./resources/img/homePage/Deals/watch.png" alt="">
          </div>
          <div class="circle absolute w-[50px] h-[50px] bg-tertiary rounded-full right-3 top-3 ">
            <span class="text-textWhite leading-[50px] text-center mx-auto block">5%</span>
          </div>
        </div>


        <div class="-z-50 w-[365px] md:my-0 my-5 mx-8 relative h-[200px] rounded-md shadow-md bg-primary cursor-pointer card ">
          <div class="flex justify-around px-4 mt-[10px] relative">
            <div class="mt-[50px] font-bold">Shoes</div>
            <img class="mt-[30px]" src="./resources//img/homePage/Deals/shoes.png" alt="">
          </div>
          <div class="circle absolute w-[50px] h-[50px] bg-tertiary rounded-full right-3 top-3 ">
            <span class="text-textWhite leading-[50px] text-center mx-auto block">5%</span>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- end deals -->

  <!-- start trending products -->
  <div class="max-w-[1700px] mx-auto relative">
    <h2 class="ml-[60px] px-8 mt-[80px] mb-[40px] text-xl font-bold ">Trending Products</h2>
    <div class="flex justify-center flex-wrap">



      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
        <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
        <div class="title pl-[6px] text-lg absolute inset-x-0 bottom-[132px] text-left text-textBlack max-w-[250px] mx-auto break-normal ">Smart Watch</div>
        <div class="price absolute bottom-[92px] text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
        <div class=" absolute bottom-[72px] price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
        <div class="cartBtn py-[5px]  absolute inset-x-0 bottom-4 w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-tertiary text-center ">Add to Cart</div>
      </div>



      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
        <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
        <div class="title pl-[6px]  text-lg absolute inset-x-0 bottom-[132px] text-left text-textBlack max-w-[250px] mx-auto break-normal ">Smart Watch</div>
        <div class="price absolute bottom-[92px] text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
        <div class=" absolute bottom-[72px] price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
        <div class="cartBtn py-[5px]  absolute inset-x-0 bottom-4 w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-tertiary text-center ">Add to Cart</div>
      </div>




      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
        <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
        <div class="title pl-[6px]  text-lg absolute inset-x-0 bottom-[132px] text-left text-textBlack max-w-[250px] mx-auto break-normal ">Smart Watch</div>
        <div class="price absolute bottom-[92px] text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
        <div class=" absolute bottom-[72px] price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
        <div class="cartBtn py-[5px]  absolute inset-x-0 bottom-4 w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-tertiary text-center ">Add to Cart</div>
      </div>




      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
        <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
        <div class="title pl-[6px]  text-lg absolute inset-x-0 bottom-[132px] text-left text-textBlack max-w-[250px] mx-auto break-normal ">Smart Watch</div>
        <div class="price absolute bottom-[92px] text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
        <div class=" absolute bottom-[72px] price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
        <div class="cartBtn py-[5px]  absolute inset-x-0 bottom-4 w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-tertiary text-center ">Add to Cart</div>
        <span class="absolute  -bottom-[50px] right-[4px] hover:text-[#f36823] ">See More <ion-icon name="arrow-forward-outline"></ion-icon></span>
      </div>



    </div>

  </div>
  <!-- end trending products -->



  <!-- start trending products -->
  <div class="max-w-[1700px] mx-auto relative">
    <h2 class="ml-[60px] px-8 mt-[80px] mb-[40px] text-xl font-bold ">Trending Products</h2>
    <div class="flex justify-center flex-wrap">
      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
        <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
        <div class="title pl-[6px] text-lg absolute inset-x-0 bottom-[132px] text-left text-textBlack max-w-[250px] mx-auto break-normal ">Smart Watch</div>
        <div class="price absolute bottom-[92px] text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
        <div class=" absolute bottom-[72px] price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
        <div class="cartBtn py-[5px]  absolute inset-x-0 bottom-4 w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-tertiary text-center ">Add to Cart</div>
      </div>



      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
        <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
        <div class="title pl-[6px]  text-lg absolute inset-x-0 bottom-[132px] text-left text-textBlack max-w-[250px] mx-auto break-normal ">Smart Watch</div>
        <div class="price absolute bottom-[92px] text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
        <div class=" absolute bottom-[72px] price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
        <div class="cartBtn py-[5px]  absolute inset-x-0 bottom-4 w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-tertiary text-center ">Add to Cart</div>
      </div>




      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
        <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
        <div class="title pl-[6px]  text-lg absolute inset-x-0 bottom-[132px] text-left text-textBlack max-w-[250px] mx-auto break-normal ">Smart Watch</div>
        <div class="price absolute bottom-[92px] text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
        <div class=" absolute bottom-[72px] price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
        <div class="cartBtn py-[5px]  absolute inset-x-0 bottom-4 w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-tertiary text-center ">Add to Cart</div>
      </div>




      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
        <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
        <div class="title pl-[6px]  text-lg absolute inset-x-0 bottom-[132px] text-left text-textBlack max-w-[250px] mx-auto break-normal ">Smart Watch</div>
        <div class="price absolute bottom-[92px] text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
        <div class=" absolute bottom-[72px] price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
        <div class="cartBtn py-[5px]  absolute inset-x-0 bottom-4 w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-tertiary text-center ">Add to Cart</div>
        <span class="absolute  -bottom-[50px] right-[4px] hover:text-[#f36823] ">See More <ion-icon name="arrow-forward-outline"></ion-icon></span>
      </div>
    </div>

  </div>
  <!-- end trending products -->


  <!-- start beseller products -->
  <div class="max-w-[1700px] mx-auto relative">
    <h2 class="ml-[60px] px-8 mt-[80px] mb-[40px] text-xl font-bold ">Bestseller Products</h2>
    <div class="flex justify-center flex-wrap">

      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
        <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
        <div class="title pl-[6px] text-lg absolute inset-x-0 bottom-[132px] text-left text-textBlack max-w-[250px] mx-auto break-normal ">Smart Watch</div>
        <div class="price absolute bottom-[92px] text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
        <div class=" absolute bottom-[72px] price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
        <div class="cartBtn py-[5px]  absolute inset-x-0 bottom-4 w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-tertiary text-center ">Add to Cart</div>
      </div>



      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
        <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
        <div class="title pl-[6px]  text-lg absolute inset-x-0 bottom-[132px] text-left text-textBlack max-w-[250px] mx-auto break-normal ">Smart Watch</div>
        <div class="price absolute bottom-[92px] text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
        <div class=" absolute bottom-[72px] price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
        <div class="cartBtn py-[5px]  absolute inset-x-0 bottom-4 w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-tertiary text-center ">Add to Cart</div>
      </div>




      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
        <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
        <div class="title pl-[6px]  text-lg absolute inset-x-0 bottom-[132px] text-left text-textBlack max-w-[250px] mx-auto break-normal ">Smart Watch</div>
        <div class="price absolute bottom-[92px] text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
        <div class=" absolute bottom-[72px] price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
        <div class="cartBtn py-[5px]  absolute inset-x-0 bottom-4 w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-tertiary text-center ">Add to Cart</div>
      </div>




      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
        <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
        <div class="title pl-[6px]  text-lg absolute inset-x-0 bottom-[132px] text-left text-textBlack max-w-[250px] mx-auto break-normal ">Smart Watch</div>
        <div class="price absolute bottom-[92px] text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
        <div class=" absolute bottom-[72px] price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
        <div class="cartBtn py-[5px]  absolute inset-x-0 bottom-4 w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-tertiary text-center ">Add to Cart</div>
        <span class="absolute  -bottom-[50px] right-[4px] hover:text-[#f36823] ">See More <ion-icon name="arrow-forward-outline"></ion-icon></span>
      </div>

    </div>

  </div>
  <!-- end bestseller products -->



  <?php
  include "./resources/common/footer.php";

  ?>




  <script src="./resources/js/body/wishlist.js"></script>

  <!-- start navbar -->
  <script src="./resources/js/homePage/header/navbarMobile.js"></script>
  <script src="./resources/js/homePage/header/categoryDesktop.js"></script>
  <script src="./resources/js/navbar/navbar.js"></script>
  <script src="./resources/js/homePage/header/categoryMobile.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- end navbar -->

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="./resources/js/homePage/header/slider.js"></script>

</body>

</html>