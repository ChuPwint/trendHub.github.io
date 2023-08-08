<?php

include "../../Controller/uiElement/editInfoController.php";



// print_r($editInfo);
$secondaryColor = isset($editInfo[0]["secondary_color"]) && !empty($editInfo[0]["secondary_color"]) ? $editInfo[0]["secondary_color"] : '#E4E4D2';
$navColor = isset($editInfo[0]["nav_text_color"]) && !empty($editInfo[0]["nav_text_color"]) ? $editInfo[0]["nav_text_color"] : '#000000';


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

<footer class="bg-[<?= $secondaryColor ?>] w-full h-auto font-roboto mt-[90px]">
<div class="flex md:flex-row md:justify-around py-8 flex-col md:text-justify text-center ">
    <div class="">
        <span class="block text-[18px] font-semibold text-[<?= $navColor ?>] py-3">Customer Care</span>

        <a href="../Contact/help.php">
        <span class="cursor-pointer text-[<?= $navColor ?>] block">FAQs</span>


        </a>
        <a href="../Point/points.php">
        <span class="cursor-pointer text-[<?= $navColor ?>] block">Exchange Points</span>

        </a>
        <a href="../Contact/privacyAndPolicy.php">
        <span class="cursor-pointer text-[<?= $navColor ?>] block">Privay & Policy</span>

        </a>
        <a href="../../../Merchant/View/Login/login.php">
        <span class="cursor-pointer text-[<?= $navColor ?>] block">Sell on Shop</span>

        </a>
    </div>

    <div class="">
        <span class="block text-[18px] font-semibold py-3 text-[<?= $navColor ?>] md:mt-0 mt-5">Shop</span>
        <a href="../index.php">
        <span class="block cursor-pointer text-[<?= $navColor ?>]">Shop</span>

        </a>
        <a href="../#trending">
        <span class="block cursor-pointer text-[<?= $navColor ?>]">Trending Products</span>

        </a>
        <a href="../#best">
        <span class="block cursor-pointer text-[<?= $navColor ?>]">Bestsellers Product</span>

        </a>

        <a href="../#new">
        <span class="block cursor-pointer text-[<?= $navColor ?>]">New Products</span>

        </a>

    </div>
<?php
        $editEmail= isset($editInfo[0]["email"]) && !empty($editInfo[0]["email"]) ? $editInfo[0]["email"] : 'trendhub2023.shop@gmail.com';
        $editPhoneNumber= isset($editInfo[0]["phoneNumber"]) && !empty($editInfo[0]["phoneNumber"]) ? $editInfo[0]["phoneNumber"] : '09 40-355-970';
        $editAddress= isset($editInfo[0]["email"]) && !empty($editInfo[0]["email"]) ? $editInfo[0]["email"] : ' No.1200, room(6B), Yadanar Street, South Oakkalapa,Yangon, Myanmar';
        $editAddressLink = isset($editInfo[0]["locationLink"]) && !empty($editInfo[0]["locationLink"]) ? $editInfo[0]["locationLink"] : 'https://www.google.com/maps/place/Ex;braiN+Office/@16.8430957,96.1949609,17z/data=!3m1!4b1!4m6!3m5!1s0x30c193f51faa68ff:0x72868c60b69532c4!8m2!3d16.8430906!4d96.1975358!16s%2Fg%2F11scs4qwp8?entry=tts&shorturl=1';



?>
    <div class="">
        <span class="block text-[18px] font-semibold py-3 md:mt-0 mt-5 text-[<?= $navColor ?>] ">Contact Us</span>
        <span class="block cursor-pointer text-[<?= $navColor ?>] ">Email : <?= $editEmail ?> <a href="mailto:<?=  $editEmail  ?>"></a></span>
        <span class="block cursor-pointer text-[<?= $navColor ?>]  ">Phone : <?= $editPhoneNumber ?><a href="tel:<?= $editPhoneNumber ?>"></a></span>
        <span class="block cursor-pointer text-[<?= $navColor ?>]  w-[400px]"><a target="_blank" href="<?= $editAddressLink ?>">Address : <?= $editAddress ?></a></span>
        
    </div>

    <div class="">
        <span class="block text-[18px] font-semibold py-3 text-center md:mt-0 mt-5 text-[<?= $navColor ?>]">Follow Us</span>
      <div class="flex justify-center space-x-3">
        <a href="https://web.facebook.com/extbrainedu">
      <ion-icon class="text-2xl text-[<?= $navColor ?>]" name="logo-facebook"></ion-icon>

        </a>
      <ion-icon class="text-2xl text-[<?= $navColor ?>]" name="logo-instagram"></ion-icon>
      <ion-icon class="text-2xl text-[<?= $navColor ?>]" name="logo-twitter"></ion-icon>
      </div>
    </div>

  
</div>
<span class="text-center text-sm block pb-5 text-[<?= $navColor ?>]">Copyright © 2023 TrendHub  | Created by X-Tech</span>
</footer>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>

</html>