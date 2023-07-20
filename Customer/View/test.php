<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./headerLogo.svg" type="image/icon type">
    <title>Trend Hub</title>

    <!-- google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- tailwind  link -->
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet" />

    <!-- css link -->
    <link href="./resources/css/HomePage/effect.css" rel="stylesheet" />

    <!-- font awesome icon css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

</head>
<body>
<?php
include "./resources/common/navbar.php";

?>    


<!-- start deals -->
<div class=" max-w-[2100px] mx-auto">
<div class="pt-[180px] -z-50 ">
<h2 class="px-8 py-4 ml-[60px] text-xl font-bold ">DAILY DEALS</h2>
<div class="flex justify-center z-0 flex-wrap  ">

<div class=" -z-50 w-[365px] md:my-0 my-5 mx-8 relative h-[200px] rounded-md shadow-md bg-[#FDC6DB] cursor-pointer card ">
<div class="flex justify-around px-4 mt-[10px] relative">
  <div class="mt-[50px] font-bold" >Make Up</div>
  <img class="mt-[30px]" src="./resources/img/homePage/Deals/makeup.png" alt="">
</div>

  <div class="circle absolute w-[50px] h-[50px] bg-tertiary rounded-full right-3 top-3  ">
    <span class="text-textWhite leading-[50px] text-center mx-auto block">10%</span>
  </div>
</div>

<div class=" -z-50 w-[365px] md:my-0 my-5 mx-8 relative h-[200px] rounded-md shadow-md bg-primary cursor-pointer card ">
<div class="flex justify-around px-4 mt-[10px] relative">
<div class="mt-[50px] font-bold" >Smart Watch</div>
  <img class="mt-[20px]" src="./resources/img/homePage/Deals/watch.png" alt="">
</div>
  <div class="circle absolute w-[50px] h-[50px] bg-tertiary rounded-full right-3 top-3 ">
    <span class="text-textWhite leading-[50px] text-center mx-auto block">5%</span>
  </div>
</div>


<div class="-z-50 w-[365px] md:my-0 my-5 mx-8 relative h-[200px] rounded-md shadow-md bg-primary cursor-pointer card ">
<div class="flex justify-around px-4 mt-[10px] relative">
<div class="mt-[50px] font-bold" >Shoes</div>
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
      <div class="title text-center text-textBlack ">Summit E13 Flip Evo - A13M</div>
      <div class="price text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
      <div class="price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
      <div class="cartBtn py-[5px] absolute bottom-5 left-6  w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-buttonColor hover:bg-tertiary text-center ">Add to Cart</div>
    </div>

    <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
    <Button onclick="toggleColor()" id="btnh2" class="heartBtn"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
      <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
      <div class="title text-center text-textBlack ">Summit E13 Flip Evo - A13M</div>
      <div class="price text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
      <div class="price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
      <div class="cartBtn py-[5px] absolute bottom-5 left-6  w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-buttonColor hover:bg-tertiary text-center ">Add to Cart</div>
    </div>

    <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
    <Button onclick="toggleColor()" id="btnh3" class="heartBtn"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
      <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
      <div class="title text-center text-textBlack ">Summit E13 Flip Evo - A13M</div>
      <div class="price text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
      <div class="price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
      <div class="cartBtn py-[5px] absolute bottom-5 left-6  w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-buttonColor hover:bg-tertiary text-center ">Add to Cart</div>
    </div>

    <div class="productCard mx-4 md:my-0 my-4 w-[280px] h-[360px] bg-white shadow-md rounded-md relative">
    <Button onclick="toggleColor()" id="btnh4" class="heartBtn"><i class="fa fa-heart absolute right-3 top-3 text-lg "></i></i></Button>
      <img class="imgEffect w-[160px] cursor-pointer mx-auto" src="./resources/img/homePage/Deals/watch.png" alt="">
      <div class="title text-center text-textBlack ">Summit E13 Flip Evo - A13M</div>
      <div class="price text-md pt-8 pl-5 text-[#F36823] ">KS 4,775,000</div>
      <div class="price text-sm text-gray-600  line-through pl-5">KS 5,000,000</div>
      <div class="cartBtn py-[5px] absolute bottom-5 left-6  w-[200px] mx-auto rounded-md cursor-pointer text-textWhite bg-buttonColor hover:bg-tertiary text-center ">Add to Cart</div>
      <span class= "absolute  -bottom-[60px]  ">See More</span>

    </div>

  </div>

</div>
<!-- end trending products -->

<?php
include "./resources/common/footer.php";

?>    




<script src="./resources/js/body/wishlist.js"></script>
</body>
</html>