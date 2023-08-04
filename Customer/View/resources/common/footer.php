<?php

include "../../Controller/uiElement/editInfoController.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/tailwind/output.css">
    <title>Document</title>
    
    <!-- tailwind link -->

    <link href="../lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet" />

    

     <!-- google font link -->
     <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>

</body>

<footer class="bg-secondary w-full h-auto font-roboto mt-[90px]">
<div class="flex md:flex-row md:justify-around py-8 flex-col md:text-justify text-center ">
    <div class="">
        <span class="block text-[18px] font-semibold py-3">Customer Care</span>

        <a href="../Contact/help.php">
        <span class="cursor-pointer hover:text-tertiary block">FAQs</span>


        </a>
        <a href="../Point/points.php">
        <span class="cursor-pointer hover:text-tertiary block">Exchange Points</span>

        </a>
        <a href="../Contact/privacyAndPolicy.php">
        <span class="cursor-pointer hover:text-tertiary block">Privay & Policy</span>

        </a>
        <a href="../../../Merchant/View/Login/login.php">
        <span class="cursor-pointer hover:text-tertiary block">Sell on Shop</span>

        </a>
    </div>

    <div class="">
        <span class="block text-[18px] font-semibold py-3 md:mt-0 mt-5">Shop</span>
        <a href="../index.php">
        <span class="block cursor-pointer hover:text-red-500">Shop</span>

        </a>
        <a href="../#trending">
        <span class="block cursor-pointer hover:text-tertiary">Trending Products</span>

        </a>
        <a href="../#best">
        <span class="block cursor-pointer hover:text-tertiary">Bestsellers Product</span>

        </a>

        <a href="../#new">
        <span class="block cursor-pointer hover:text-tertiary">New Products</span>

        </a>

    </div>

    <div class="">
        <span class="block text-[18px] font-semibold py-3 md:mt-0 mt-5 text-[<?= $editInfo[0]["nav_text_color"] ?>] ">Contact Us</span>
        <span class="block cursor-pointer ">Email : <?= $editInfo[0]["email"] ?> <a href="mailto:<?= $editInfo[0]["email"] ?>"></a></span>
        <span class="block cursor-pointer  ">Phone : <?= $editInfo[0]["phoneNumber"] ?><a href="tel:<?= $editInfo[0]["phoneNumber"] ?>"></a></span>
        <span class="block cursor-pointer  w-[400px]"><a target="_blank" href="<?= $editInfo[0]["locationLink"] ?>">Address : <?= $editInfo[0]["address"] ?><a href="tel:09403559701"></a></span>
        
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
<span class="text-center text-sm block pb-5">Copyright © 2023 TrendHub  | Created by X-Tech</span>
</footer>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>

</html>