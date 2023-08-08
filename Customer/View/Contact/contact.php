<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="icon" href="../resources/img/header/headerLogo.svg" type="image/icon type">
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../resources/lib/jquery3.6.0.js"></script>
</head>

<?php
    include "../resources/common/navbar.php";
    include "../../Controller/uiElement/editInfoController.php";

    $navColor = isset($editInfo[0]["nav_text_color"]) && !empty($editInfo[0]["nav_text_color"]) ? $editInfo[0]["nav_text_color"] : '#000000';
    $tertiaryColor = isset($editInfo[0]["tertiary_color"]) && !empty($editInfo[0]["tertiary_color"]) ? $editInfo[0]["tertiary_color"] : '#F36823';
    $buttonColor = isset($editInfo[0]["buy_button_color"]) && !empty($editInfo[0]["buy_button_color"]) ? $editInfo[0]["buy_button_color"] : '#F36823';
    $buttonText = isset($editInfo[0]["button_text"]) && !empty($editInfo[0]["button_text"]) ? $editInfo[0]["button_text"] : '#FFFFFF';
    $titleColor = isset($editInfo[0]["title_color"]) && !empty($editInfo[0]["title_color"]) ? $editInfo[0]["title_color"] : '#000000';
$primaryColor = isset($editInfo[0]["primary_color"]) && !empty($editInfo[0]["primary_color"]) ? $editInfo[0]["primary_color"] : '#FFFAFA';

    $lightTertiary = isset($editInfo[0]["light_tertiary"]) && !empty($editInfo[0]["light_tertiary"]) ? $editInfo[0]["light_tertiary"] : '#F5F5F5';
    ?>
<body class="bg-secondary md:bg-[<?=$primayColor?>] font-roboto">

 

    <div class="absolute bg-white w-full h-[250px] rounded-br-[70%] rounded-tr-none rounded-bl-none md:hidden z-[-1]">
    </div>

    <section class="container w-full mx-auto md:h-[80vh] flex justify-center items-center px-10 py-10 md:py-0">
        <!-- contact container -->
        <div class="bg-white md:bg-[url('../resources/img/contact/contact_bg.svg')] bg-cover bg-center py-5 rounded-md drop-shadow-xl md:flex md:items-center md:drop-shadow-none md:pl-20 md:space-x-28">
            <!-- left side -->
            <div class="text-center md:text-start px-5 py-5">
                <h1 class="text-xl font-bold md:text-4xl">Contact Us</h1>
                <p class="text-sm pt-5 pb-10 md:text-xl md:w-[350px]">Feel free to contact us any time. We will get back to you as soon as we can!</p>
                <form action="">
                    <textarea name="" id="" cols="30" rows="10" class="resize-none border-2 border-[<?=$buttonColor?>] rounded py-2 px-2 outline-none bg-white md:bg-[#F7F7F7] w-full md:w-auto" placeholder="Message"></textarea>
                </form>

                <button type="submit" class="w-full bg-[<?=$buttonColor?>] py-2 rounded text-white mt-5 md:w-[277px]">Send</button>
            </div>

            <?php
            $editEmail = isset($editInfo[0]["email"]) && !empty($editInfo[0]["email"]) ? $editInfo[0]["email"] : 'trendhub2023.shop@gmail.com';
            $editPhoneNumber = isset($editInfo[0]["phoneNumber"]) && !empty($editInfo[0]["phoneNumber"]) ? $editInfo[0]["phoneNumber"] : '09 40-355-970';
            $editAddress = isset($editInfo[0]["email"]) && !empty($editInfo[0]["email"]) ? $editInfo[0]["email"] : ' No.1200, room(6B), Yadanar Street, South Oakkalapa,Yangon, Myanmar';
            $editAddressLink = isset($editInfo[0]["locationLink"]) && !empty($editInfo[0]["locationLink"]) ? $editInfo[0]["locationLink"] : 'https://www.google.com/maps/place/Ex;braiN+Office/@16.8430957,96.1949609,17z/data=!3m1!4b1!4m6!3m5!1s0x30c193f51faa68ff:0x72868c60b69532c4!8m2!3d16.8430906!4d96.1975358!16s%2Fg%2F11scs4qwp8?entry=tts&shorturl=1';
            $editTime = isset($editInfo[0]["time"]) && !empty($editInfo[0]["time"]) ? $editInfo[0]["time"] : '08:00 am - 08:00 pm';

            ?>

            <!-- right side  -->
            <div class="hidden md:block md:w-">
                <div class="px-10 py-10 bg-[<?=$secondaryColor?>] leading-10 pr-18">
                    <p class="text-3xl font-medium text-[<?=$titleColor?>]">Info</p>
                    <div class="flex items-center space-x-5 mt-2 text-[<?=$navColor?>]">
                    <ion-icon class="w-[20px] h-[20px]" name="mail-outline"></ion-icon>
                        <!-- <img class="w-[20px] h-[20px]" src="../resources/img/contact/black_message.svg" alt="message"> -->
                        <span class="md:text-sm"><a href="mailto:<?= $editEmail ?>"><?= $editEmail ?> </a></span>
                    </div>
                    <div class="flex items-center space-x-5 text-[<?=$titleColor?>]">
                    <ion-icon class="w-[20px] h-[20px]" name="call-outline"></ion-icon>
                        <!-- <img class="w-[20px] h-[20px]" src="../resources/img/contact/black_phone.svg" alt="phone"> -->
                        <span><a href="tel:<?= $editPhoneNumber ?>"><?= $editPhoneNumber ?></a></span>
                    </div>
                    <div class="flex items-start space-x-5 text-[<?=$titleColor?>]">
                    <ion-icon class="w-[20px] h-[20px]" name="location-outline"></ion-icon>
                        <!-- <img class="w-[20px] h-[20px]" src="../resources/img/contact/black_address.svg" alt="address"> -->
                        <span class="w-[190px] md:text-sm"><a target="_blank" href="<?= $editAddressLink ?>"><?= $editAddress ?></a></span>
                    </div>
                    <div class="flex items-center space-x-5 text-[<?=$titleColor?>]">
                        <!-- <img class="w-[20px] h-[20px]" src="../resources/img/contact/black_time.svg" alt="time"> -->
                        <ion-icon class="w-[20px] h-[20px]" name="time-outline"></ion-icon>
                        <span><?= $editTime ?></span>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="bg-[#F36823] md:hidden">
        <div class="px-10 py-10 text-white leading-10">
            <p class="text-3xl font-medium">Info</p>
            <div class="flex items-center space-x-5 mt-2">
                <img src="../resources/img/contact/message.svg" alt="message">
                <span><a href="mailto:<?= $editInfo[0]["email"] ?>"><?= $editInfo[0]["email"] ?></a></span>
            </div>
            <div class="flex items-center space-x-5">
                <img src="../resources/img/contact/phone.svg" alt="phone">
                <span><a href="tel:<?= $editInfo[0]["phoneNumber"] ?>"><?= $editInfo[0]["phoneNumber"] ?></a></span>
            </div>
            <div class="flex items-start space-x-5">
                <img class="w-[30px] h-[30px]" class="pt-2" src="../resources/img/contact/address.svg" alt="address">
                <span><a target="_blank" href="https://www.google.com/maps/dir/16.8355994,96.1643746/Yadanar+St,+Yangon/@16.8352103,96.1636821,17.83z/data=!4m8!4m7!1m0!1m5!1m1!1s0x30c19344dcaf12cb:0x9faa458f191e61fe!2m2!1d96.1643481!2d16.8354793?entry=ttu"><?= $editInfo[0]["address"] ?></a></span>
            </div>
            <div class="flex items-center space-x-5">
                <img class="w-[30px] h-[30px]" src="../resources/img/contact/time.svg" alt="time">
                <span><?= $editInfo[0]["time"] ?></span>
            </div>
        </div>
    </section>

    <section class="hidden md:block">
        <?php
        include "../resources/common/footer.php"
        ?>
    </section>


</body>

</html>