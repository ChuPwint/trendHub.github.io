<?php

session_start();
if (isset($_SESSION["currentLoginUser"])) {
  $loginId = $_SESSION["currentLoginUser"];
}

include "../Controller/categoryController.php";
include "../Controller/uiElement/editInfoControllerIndex.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./resources/img/header/headerLogo.svg" type="image/icon type">
  <title>Trend Hub</title>

  <!-- Start Navbar -->
  <!-- google font link -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <!-- font awesome icon css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="./resources/lib/jquery3.6.0.js"></script>
  <!-- end navbar -->


  <!-- tailwind  link -->

  <link rel="stylesheet" href="./resources/lib/tailwind/output.css?id=<?= time() ?>">

  <!-- css link -->
  <link href="./resources/css/HomePage/effect.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />



</head>

<body class=" font-roboto">


  <!-- start header  -->
  <div id="navbar" class="fixed top-0 w-full shadow-md z-30">
    <!-- start first navbar -->
    <nav class="py-2 px-4 bg-white shadow md:flex md:items-center md:justify-between">
      <div class="flex justify-between items-center ">

        <!-- desktop logo -->
        <!-- <img class="md:block hidden" src="./resources/img/header/logo.svg" alt=""> -->
        <img class="md:block hidden" src="./resources/img/header/logo.svg" alt="">

        <!-- mobile logo -->
        <img class="md:hidden w-[90px] order-2" src="./resources/img/header/headerLogo.svg " alt="">

        <!-- mobile login -->
        <?php if (!isset($loginId)) { ?>
          <a href="./Login/login.php">
            <button class="bg-tertiary text-textWhite py-2 px-6 rounded md:hidden order-3">
              Login
            </button>
          </a>
        <?php  } else { ?>
          <div class="md:hidden order-3">
            <a href="../View/Profile/user_profile.php">
              <img class="w-12 cursor-pointer" src="../View/resources/img/profile/profile.png" alt="">
            </a>
          </div>
        <?php  } ?>

        <!-- mobile menu -->
        <span class=" text-3xl order-1 cursor-pointer mx-2 md:hidden block">
          <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
        </span>
      </div>

      <ul class="md:flex md:items-center z-50  md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
        <li class="mx-4 my-6 md:my-0">
          <a href="./index.php" class="text-md hover:text-[#F36823]  duration-300">Home</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="./Contact/aboutUs.php" class="text-md hover:text-[#F36823]  duration-300">About</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="./Contact/services.php" class="text-md hover:text-[#F36823]  duration-300">Service</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="./Contact/help.php" class="text-md hover:text-[#F36823]  duration-300">Help</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="./Contact/contact.php" class="text-md hover:text-[#F36823] duration-300">Contact</a>
        </li>

        <?php if (!isset($loginId)) { ?>
          <a href="./Login/login.php">
            <button class=" bg-tertiary text-textWhite  duration-500 py-2 px-6 hidden md:block mx-4 hover:bg-tertiary rounded ">
              Login
            </button>
          </a>
        <?php  } else { ?>
          <div>
            <a href="../View/Profile/user_profile.php"><img class="w-10 cursor-pointer hidden md:block mx-4" src="../View/resources/img/profile/profile.png" alt=""></a>
          </div>
        <?php  } ?>
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
            <!-- <ion-icon name="chevron-down-outline"></ion-icon> -->
            <img class="inline" src="./resources/img/header/down-arrow.png" alt="">

            <ul id="dropdownMenu" class="absolute hidden z-50  mt-5 py-2 w-[300px] bg-white rounded-md shadow-lg">
              <?php foreach ($categoriesResult as $category) { ?>
                <li><a href="./Product/category.php" class="block bg:bg-white px-4 py-2 text-gray-800 hover:bg-tertiary hover:text-white duration-400"><?= $category["category_name"] ?></a></li>
              <?php } ?>
            </ul>
          </div>
          <img id="menu-toggle" class="h-[40px] md:hidden cursor-pointer   " src="./resources/img/header/category.svg" alt="">
          <input type="search" placeholder="Search..." class="md:text-textBlack px-3 outline-none md:rounded-l-none md:w-[300px] w-[200px] rounded-md md:rounded-r-md">
        </div>
        <a href="./Checkout/shoppingCart.php"> <img class="pr-2 mt-2" src="./resources/img/header/cart.svg" alt=""></a>
        <span class="cart_item absolute md:right-5 right-3 md:top-[70px] top-[80px] w-5 h-5 text-sm text-white text-center rounded-full bg-tertiary">0</span>
      </div>
    </nav>
    <!-- end second navbar -->
  </div>

  <div id="slide-menu" class="hidden z-40 fixed right-0 top-0 h-full w-80 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out">
    <button id="menu-close">
      <div class="mt-10 flex flex-wrap space-x-2">
        <?php foreach ($categoriesResult as $category) { ?>
          <a href="./Product/category.php"><span class="px-2 mt-2 block py-2 hover:bg-tertiary hover:text-white shadow-md rounded-md"><?= $category["category_name"] ?></span></a>
        <?php } ?>
      </div>
    </button>

  </div>
  <!-- end header -->

  <!-- Slider Start -->
  <div class="swiper -mt-[10px]">
    <div class="swiper-wrapper">
      <!-- Slide1 -->
      <div class="swiper-slide">
        <?php
        $backgroundColor1 = isset($editInfo[0]["slide_bg1"]) && !empty($editInfo[0]["slide_bg1"]) ? $editInfo[0]["slide_bg1"] : '#2F2E41';
        $backgroundColor2 = isset($editInfo[0]["slide_bg2"]) && !empty($editInfo[0]["slide_bg2"]) ? $editInfo[0]["slide_bg2"] : '#2F2E41';
        $backgroundColor3 = isset($editInfo[0]["slide_bg3"]) && !empty($editInfo[0]["slide_bg3"]) ? $editInfo[0]["slide_bg3"] : '#2F2E41';
        $sliderImg1 = isset($editInfo[0]["image_silder1"]) && !empty($editInfo[0]["image_silder1"]) ? $editInfo[0]["image_silder1"] : '/Storage/slider/acer.png';
        $sliderImg2 = isset($editInfo[0]["image_silder2"]) && !empty($editInfo[0]["image_silder2"]) ? $editInfo[0]["image_silder2"] : '/Storage/slider/dell.png';
        $sliderImg3 = isset($editInfo[0]["image_silder3"]) && !empty($editInfo[0]["image_silder3"]) ? $editInfo[0]["image_silder3"] : '/Storage/slider/msi.svg';
         ?>

        <div class="w-full md:h-[320px] h-[220px] md:px-0 px-6 space-x-4 md:space-x-0 items-center mt-[130px] bg-[<?= $backgroundColor1 ?>] flex justify-around relative">
          <div class="img md:w-[300px] w-[180px]">
            <img src="../../<?= $sliderImg1 ?>" alt="">
          
         
          </div>
          <div class="content w-[400px] h-[250px]  ">
            <span class="md:text-xl text-md text-white md:mt-0 block mt-[60px] ">
              <?= $editInfo[0]["image_silder_title1"] ?>
            </span>
            <span class="md:text-md text-sm mt-5  text-white hidden md:block">
              <?= $editInfo[0]["image_silder_dsc1"] ?>
            </span>
          </div>
        </div>
      </div>

      <!-- Slide2 -->
      <div class="swiper-slide">
      <div class="w-full md:h-[320px] h-[220px] md:px-0 px-6 space-x-4 md:space-x-0 items-center mt-[130px] bg-[<?= $backgroundColor2 ?>] flex justify-around relative">

          <div class="  img w-[300px]  ">
          <img src="../../<?= $sliderImg2 ?>" alt="">
          </div>
          <div class="content w-[400px] h-[250px] ">
            <span class="md:text-xl text-md md:mt-0 mt-16 block text-white">
              <?= $editInfo[0]["image_silder_title2"] ?>
            </span>
            <span class="text-md mt-5 hidden md:block text-white">
              <?= $editInfo[0]["image_silder_dsc2"] ?>
            </span>
          </div>
        </div>
      </div>

      <!-- Slide3 -->
      <div class="swiper-slide">
      <div class="w-full md:h-[320px] h-[220px] md:px-0 px-6 space-x-4 md:space-x-0 items-center mt-[130px] bg-[<?= $backgroundColor3 ?>] flex justify-around relative">

          <div class="img w-[300px] ">
          <img src="../../<?= $sliderImg3 ?>" alt="">
          </div>
          <div class="content w-[400px] h-[250px] ">
            <span class="md:text-xl text-md text-white block md:mt-0 mt-16">
              <?= $editInfo[0]["image_silder_title3"] ?>
            </span>
            <span class="text-md mt-5 md:block hidden text-white">
              <?= $editInfo[0]["image_silder_dsc3"] ?>
            </span>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- Slider end -->


  <!-- start deals -->
  <div class=" max-w-[1700px] mx-auto">
    <div class="pt-[120px] -z-50 ">
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
  <div id="trending" class="max-w-[1700px] mx-auto relative">
    <h2 class="ml-[60px] px-8 mt-[80px] mb-[40px] text-xl font-bold ">Trending Products</h2>
    <div class="flex justify-center flex-wrap">

      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn text-[#808080] "><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
        <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
        <div class="title pl-[6px] text-lg absolute inset-x-0 bottom-[132px] text-left text-textBlack max-w-[250px] mx-auto break-normal ">Smart Watch</div>
        <div class="price absolute bottom-[92px] text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
        <div class=" absolute bottom-[72px] price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
        <div class="cartBtn py-[5px]  absolute inset-x-0 bottom-4 w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-tertiary text-center ">Add to Cart</div>
      </div>

      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn text-[#808080]"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
        <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
        <div class="title pl-[6px]  text-lg absolute inset-x-0 bottom-[132px] text-left text-textBlack max-w-[250px] mx-auto break-normal ">Smart Watch</div>
        <div class="price absolute bottom-[92px] text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
        <div class=" absolute bottom-[72px] price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
        <div class="cartBtn py-[5px]  absolute inset-x-0 bottom-4 w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-tertiary text-center ">Add to Cart</div>
      </div>

      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn text-[#808080]"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
        <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
        <div class="title pl-[6px]  text-lg absolute inset-x-0 bottom-[132px] text-left text-textBlack max-w-[250px] mx-auto break-normal ">Smart Watch</div>
        <div class="price absolute bottom-[92px] text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
        <div class=" absolute bottom-[72px] price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
        <div class="cartBtn py-[5px]  absolute inset-x-0 bottom-4 w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-tertiary text-center ">Add to Cart</div>
      </div>

      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn text-[#808080]"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
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



  <!-- start bestsellers products -->
  <div id="best" class="max-w-[1700px] mx-auto relative">
    <h2 class="ml-[60px] px-8 mt-[80px] mb-[40px] text-xl font-bold ">Bestseller Products</h2>
    <div class="flex justify-center flex-wrap">
      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn text-[#808080]"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
        <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
        <div class="title pl-[6px] text-lg absolute inset-x-0 bottom-[132px] text-left text-textBlack max-w-[250px] mx-auto break-normal ">Smart Watch</div>
        <div class="price absolute bottom-[92px] text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
        <div class=" absolute bottom-[72px] price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
        <div class="cartBtn py-[5px]  absolute inset-x-0 bottom-4 w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-tertiary text-center ">Add to Cart</div>
      </div>

      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn text-[#808080]"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
        <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
        <div class="title pl-[6px]  text-lg absolute inset-x-0 bottom-[132px] text-left text-textBlack max-w-[250px] mx-auto break-normal ">Smart Watch</div>
        <div class="price absolute bottom-[92px] text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
        <div class=" absolute bottom-[72px] price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
        <div class="cartBtn py-[5px]  absolute inset-x-0 bottom-4 w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-tertiary text-center ">Add to Cart</div>
      </div>

      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn text-[#808080]"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
        <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
        <div class="title pl-[6px]  text-lg absolute inset-x-0 bottom-[132px] text-left text-textBlack max-w-[250px] mx-auto break-normal ">Smart Watch</div>
        <div class="price absolute bottom-[92px] text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
        <div class=" absolute bottom-[72px] price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
        <div class="cartBtn py-[5px]  absolute inset-x-0 bottom-4 w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-tertiary text-center ">Add to Cart</div>
      </div>

      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn text-[#808080]"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
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


  <!-- start new products -->
  <div id="new" class="max-w-[1700px] mx-auto relative">
    <h2 class="ml-[60px] px-8 mt-[80px] mb-[40px] text-xl font-bold ">New Products</h2>
    <div class="flex justify-center flex-wrap">

      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn text-[#808080]"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
        <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
        <div class="title pl-[6px] text-lg absolute inset-x-0 bottom-[132px] text-left text-textBlack max-w-[250px] mx-auto break-normal ">Smart Watch</div>
        <div class="price absolute bottom-[92px] text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
        <div class=" absolute bottom-[72px] price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
        <div class="cartBtn py-[5px]  absolute inset-x-0 bottom-4 w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-tertiary text-center ">Add to Cart</div>
      </div>

      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn text-[#808080]"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
        <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
        <div class="title pl-[6px]  text-lg absolute inset-x-0 bottom-[132px] text-left text-textBlack max-w-[250px] mx-auto break-normal ">Smart Watch</div>
        <div class="price absolute bottom-[92px] text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
        <div class=" absolute bottom-[72px] price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
        <div class="cartBtn py-[5px]  absolute inset-x-0 bottom-4 w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-tertiary text-center ">Add to Cart</div>
      </div>

      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn text-[#808080]"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
        <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
        <div class="title pl-[6px]  text-lg absolute inset-x-0 bottom-[132px] text-left text-textBlack max-w-[250px] mx-auto break-normal ">Smart Watch</div>
        <div class="price absolute bottom-[92px] text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
        <div class=" absolute bottom-[72px] price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
        <div class="cartBtn py-[5px]  absolute inset-x-0 bottom-4 w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-tertiary text-center ">Add to Cart</div>
      </div>

      <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
        <Button onclick="toggleColor()" id="btnh1" class="heartBtn text-[#808080]"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
        <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
        <div class="title pl-[6px]  text-lg absolute inset-x-0 bottom-[132px] text-left text-textBlack max-w-[250px] mx-auto break-normal ">Smart Watch</div>
        <div class="price absolute bottom-[92px] text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
        <div class=" absolute bottom-[72px] price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
        <div class="cartBtn py-[5px]  absolute inset-x-0 bottom-4 w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-tertiary text-center ">Add to Cart</div>
        <span class="absolute  -bottom-[50px] right-[4px] hover:text-[#f36823] ">See More <ion-icon name="arrow-forward-outline"></ion-icon></span>
      </div>
    </div>
  </div>
  <!-- end new products -->



  <footer class="bg-secondary w-full h-auto font-roboto mt-[90px]">
    <div class="flex md:flex-row md:justify-around py-8 flex-col md:text-justify text-center ">
      <div class="">
        <span class="block text-[18px] font-semibold py-3">Customer Care</span>

        <a href="./Contact/help.php">
          <span class="cursor-pointer hover:text-tertiary block">FAQs</span>
        </a>

        <a href="./Point/points.php">
          <span class="cursor-pointer hover:text-tertiary block">Exchange Points</span>
        </a>

        <a href="./Contact/privacyAndPolicy.php">
          <span class="cursor-pointer hover:text-tertiary block">Privay & Policy</span>
        </a>

        <a href="../../Merchant/View/Login/login.php">
          <span class="cursor-pointer hover:text-tertiary block">Sell on Shop</span>
        </a>
      </div>

      <div class="">
        <span class="block text-[18px] font-semibold py-3 md:mt-0 mt-5">Shop</span>
        <a href="./index.php">
          <span class="block cursor-pointer hover:text-red-500">Shop</span>

        </a>
        <a href="#trending">
          <span class="block cursor-pointer hover:text-tertiary">Trending Products</span>

        </a>
        <a href="#best">
          <span class="block cursor-pointer hover:text-tertiary">Bestsellers Product</span>
        </a>

        <a href="#new">
          <span class="block cursor-pointer hover:text-tertiary">New Products</span>
        </a>
      </div>

      <div class="">
        <span class="block text-[18px] font-semibold py-3 md:mt-0 mt-5">Contact Us</span>
        <span class="block cursor-pointer ">Email : <a href="mailto:<?= $editInfo[0]["email"] ?>"><?= $editInfo[0]["email"] ?></a></span>
        <span class="block cursor-pointer ">Phone : <a href="tel:<?= $editInfo[0]["phoneNumber"] ?>"><?= $editInfo[0]["phoneNumber"] ?></a></span>
        <span class="block cursor-pointer  w-[400px]">Addres : <a target="_blank" href="<?= $editInfo[0]["locationLink"] ?>"><?= $editInfo[0]["address"] ?></a></span>
      </div>

      <div class="">
        <span class="block text-[18px] font-semibold py-3 text-center md:mt-0 mt-5">Follow Us</span>
        <div class="flex justify-center space-x-3">
          <a href="https://web.facebook.com/extbrainedu">
            <ion-icon class="text-2xl" name="logo-facebook"></ion-icon>
          </a>
          <ion-icon class="text-2xl" name="logo-instagram"></ion-icon>
          <ion-icon class="text-2xl" name="logo-twitter"></ion-icon>
        </div>
      </div>
    </div>
    <span class="text-center text-sm block pb-5">Copyright © 2023 TrendHub | Created by X-Tech</span>
  </footer>



  <script>
    function toggleColor(button) {
      if (button.style.color === "tomato") {
        button.style.color = "grey";
      } else {
        button.style.color = "tomato";
      }
    }


    var buttons = document.getElementsByClassName("heartBtn");

    for (var i = 0; i < buttons.length; i++) {
      buttons[i].addEventListener("click", function() {
        toggleColor(this);
      });
    }
  </script>

  <!-- start navbar -->
  <script src="./resources/js/homePage/header/navbarMobile.js"></script>
  <script src="./resources/js/homePage/header/categoryDesktop.js"></script>
  <script src="./resources/js/navbar/navbar.js"></script>
  <script src="./resources/js/homePage/header/categoryMobile.js"></script>
  <script src="./resources/js/addItemToCart/addItemtoCart.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- end navbar -->

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="./resources/js/homePage/header/slider.js"></script>

</body>

</html>