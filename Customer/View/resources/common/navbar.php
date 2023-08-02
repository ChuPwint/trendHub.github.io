<?php
if (!isset($_SESSION)) {
  session_start();
}
if (isset($_SESSION["currentLoginUser"])) {
  $loginId = $_SESSION["currentLoginUser"];
}
if (!isset($view)) {
  include "../../../Controller/categoryController.php";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>

  <!-- tailwind link -->
  <!-- <link href="../lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet" /> -->

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

  #navbar {
    transition: top 0.3s;
  }
</style>


<body class="bg-[#FFFAFA] font-roboto scrollbar-hide">

  <!-- start header  -->
  <div id="navbar" class="fixed top-0 w-full shadow-md z-40">
    <!-- start first navbar -->
    <nav class="py-2 px-4 bg-white shadow md:flex md:items-center md:justify-between">
      <div class="flex justify-between items-center ">

        <!-- desktop logo -->
        <img class="md:block hidden" src="../resources/img/header/logo.svg" alt="">

        <!-- mobile logo -->
        <img class="md:hidden w-[90px] order-2" src="../resources/img/header/headerLogo.svg " alt="">

        <!-- mobile login -->
        <?php if (!isset($loginId)) { ?>
          <button class="bg-[#F36823] text-textWhite py-2 px-6 rounded md:hidden order-3">
            <a href="../Login/login.php">Login</a>
          </button>
        <?php  } else { ?>
          <div class="md:hidden order-3">
            <a href=""><img class="w-12 cursor-pointer" src="../resources/img/profile/profile.png" alt=""></a>
          </div>
        <?php  } ?>

        <!-- mobile menu -->
        <span class=" text-3xl order-1 cursor-pointer mx-2 md:hidden block">
          <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
        </span>
      </div>

      <ul class="md:flex md:items-center z-50  md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
        <li class="mx-4 my-6 md:my-0">
          <a href="../index.php" class="text-md hover:text-[#F36823]  duration-300">Home</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="../Contact/aboutUs.php" class="text-md hover:text-[#F36823]  duration-300">About</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="../Contact/services.php" class="text-md hover:text-[#F36823]  duration-300">Service</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="../Contact/help.php" class="text-md hover:text-[#F36823]  duration-300">Help</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="../Contact/contact.php" class="text-md hover:text-[#F36823] duration-300">Contact</a>
        </li>
        <?php if (!isset($loginId)) { ?>
          <a href="./Login/login.php">
            <button class=" bg-tertiary text-textWhite  duration-500 py-2 px-6 hidden md:block mx-4 hover:bg-tertiary rounded ">
              Login
            </button>
          </a>
        <?php  } else { ?>
          <div>
            <a href=""><img class="w-10 cursor-pointer hidden md:block mx-4" src="../resources/img/profile/profile.png" alt=""></a>
          </div>
        <?php  } ?>
        <h2 class=""></h2>
      </ul>
    </nav>
    <!-- end first navbar -->
    <!-- start second navbar -->
    <?php if (!isset($view)) { ?>
      <nav class="bg-[#E4E4D2] py-2 px-3 md:px-7">
        <div class="flex justify-between">
          <div class="flex">

            <!-- desktop categories -->
            <div id="dropdownButton" class="relative  md:block hidden px-3 py-2 bg-[#F36823] hover:bg-[#F36823] text-textWhite rounded-l-md cursor-pointer">
              Categories
              <img class="inline" src="../resources/img/header/down-arrow.png" alt="">

              <ul id="dropdownMenu" class="absolute hidden z-50  mt-5 py-2 w-[300px] bg-white rounded-md shadow-lg">
                <?php foreach ($categoriesResult as $category) { ?>
                  <li><a href="../Product/category.php" class="block bg:bg-white px-4 py-2 text-gray-800 hover:bg-tertiary hover:text-white duration-400"><?= $category["category_name"] ?></a></li>
                <?php } ?>
              </ul>
            </div>
            <img id="menu-toggle" class="h-[40px] md:hidden cursor-pointer" src="../resources/img/header/category.svg" alt="">
            <input type="search" placeholder="Search..." class="md:text-[#000000]  md:rounded-l-none px-3 outline-none  md:w-[300px] w-[200px] rounded-md md:rounded-r-md">
          </div>
          <a href="../Checkout/shoppingCart.php"> <img class="pr-2 mt-2" src="../resources/img/header/cart.svg" alt=""></a>
          <span class="cart_item absolute md:right-5 right-3 md:top-[70px] top-[80px] w-5 h-5 text-sm text-white text-center rounded-full bg-tertiary">0</span>
        </div>
      </nav>
    <?php  } ?>
    <!-- end second navbar -->
  </div>
  <!-- end header -->

  <div id="slide-menu" class="hidden z-40 fixed right-0 top-0 h-full w-80 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out">
    <button id="menu-close">
      <div class="mt-10 flex flex-wrap space-x-2">
        <?php foreach ($categoriesResult as $category) { ?>
          <a href="../Product/category.php"><span class="px-2 mt-2 block py-2 hover:bg-tertiary hover:text-white shadow-md rounded-md"><?= $category["category_name"] ?></span></a>
        <?php } ?>
      </div>
    </button>
  </div>
  <!-- end header  -->

  <!-- navbar -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script src="../resources/js/homePage/header/navbarMobile.js"></script>
  <?php if (!isset($view)) { ?>
    <script src="../resources/js/homePage/header/categoryDesktop.js"></script>
    <script src="../resources/js/homePage/header/categoryMobile.js"></script>
  <?php } ?>
  <script src="../resources/js/addItemToCart/addItemtoCart.js"></script>
  <script src="../resources/lib/jquery3.6.0.js"></script>
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <!-- navbar -->

</body>

</html>