<?php

include "../../Controller/uiElements/Information/viewController.php";
include "../../Controller/uiElements/pointEdit/viewPointControllerl.php";
include "../../Controller/uiElements/imgSlider1/viewController.php";
include "../../Controller/uiElements/imgSlider1/viewTextController.php";
include "../../Controller/uiElements/imgSlider2/viewController.php";
include "../../Controller/uiElements/imgSlider2/viewTextController.php";
include "../../Controller/uiElements/imgSlider3/viewController.php";
include "../../Controller/uiElements/imgSlider3/viewTextController.php";
include "../../Controller/uiElements/faq1/viewfaqControllerl.php";
include "../../Controller/uiElements/faq2/viewfaq2Controller.php";
include "../../Controller/uiElements/faq3/viewfaq3Controllerl.php";
include "../../Controller/uiElements/banner1/viewBannerController.php";
include "../../Controller/uiElements/banner2/viewBannerController.php";
include "../../Controller/uiElements/banner3/viewBannerController.php";
include "../../Controller/uiElements/banner4/viewBannerController.php";
include "../../Controller/uiElements/banner5/viewBannerController.php";
// include "../../Controller/uiElements/backgroundColor/viewBackgroundController.php";
// include "../../Controller/uiElements/textColor/viewTextController.php";
// include "../../Controller/uiElements/cardColor/viewCardController.php";
// include "../../Controller/uiElements/fontColor/viewFontColorController.php";
// include "../../Controller/uiElements/buttonColor/viewButtonColorController.php";
include ".././../Controller/uiElements/terms/viewtermsController.php";







?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI Elements</title>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css?id=<?= time() ?>">
    <script src="../resources/lib/jquery3.6.0.js"></script>
    <link rel="stylesheet" href="../resources/css/faq.css">


    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .table {
            border-spacing: 0 10px;
        }

        .custom-file-upload {
            display: inline-block;
            padding: 0px 20px;
            color: black;
            background-color: white;
            color: #fff;
            cursor: pointer;
            border-radius: 2px;
        }

        input[type="file"] {
            display: none;
        }
    </style>
</head>

<body class="font-roboto">
    <section class=" w-full bg-[#12141B] max-w-[1600px] mx-auto flex">
        <!-- Import side bar  -->
        <?php $menu = "uiElement" ?>
        <?php include "../resources/common/adminSideBar.php" ?>

        <!-- Right-side Start -->
        <div class="h-screen overflow-hidden w-full">
            <!-- Search Start-->
            <div class="bg-[#262B3A] flex justify-between items-center py-3 px-10">
                <div class="text-white">
                    <p class="text-2xl font-semibold">UI Elements</p>
                    <?php
                    $timestamp = time();

                    date_default_timezone_set('Asia/Yangon');
                    $day = date('D');
                    $month = date('F');
                    $date = date('j');
                    $year = date('Y', $timestamp);


                    ?>
                    <p><?php echo "Date : $day, $month $date, $year" ?></p>
                </div>

                <input type="text" name="" id="" class="w-[800px] py-2 px-5 rounded outline-none" placeholder="Search...">
            </div>
            <!-- Search End-->



            <div class="px-[53px] py-8 data-output  overflow-y-scroll h-[750px] scrollbar-hide">

                <span class="block mx-auto text-center text-white text-2xl font-semibold ">Logo</span>
                <div class="text-white mx-auto text-center mt-5">
                    <form action="">
                        <label for="">Logo</label>
                        <label for="file-upload" class="custom-file-upload text-black ml-2">
                            Choose File
                        </label>
                        <input type="file" id="file-upload" class="bg-[black] w-[270px] h-[27px] rounded-sm" />


                        <button class="px-[15px] rounded-sm text-[black] ml-2 bg-[white]">Save</button>
                    </form>
                </div>


                <div class="text-white flex justify-between mt-10">
                    <div>
                        <span class="text-xl">Background Color</span>
                        <form action="">
                            <div class="flex justify-between mt-4">
                                <span>Primay</span>
                                <input value="#FFFAFA" class="rounded-sm" type="color">
                            </div>

                            <div class="flex justify-between mt-4">
                                <span>Secondary</span>
                                <input value="#E4E4D2" class="rounded-sm" type="color">
                            </div>

                            <div class="flex justify-between mt-4">
                                <span>Tertiary </span>
                                <input value="#F36823" class="rounded-sm" type="color">
                            </div>
                            <button class="px-[15px] mt-4 rounded-sm text-[black] ml-[105px] bg-[white]">Save</button>
                        </form>



                    </div>
                    <div>
                        <span class="text-xl">Text Color</span>
                        <form action="">
                            <div class="flex justify-between mt-4">
                                <span>Price Text</span>
                                <input value="#F36823" class="rounded-sm" type="color">
                            </div>

                            <div class="flex justify-between mt-4">
                                <span>Nav Text</span>
                                <input value="#fffafa" class="rounded-sm" type="color">
                            </div>

                            <div class="flex justify-between mt-4">
                                <span>Title </span>
                                <input value="#F36823" class="rounded-sm" type="color">
                            </div>
                            <button class="px-[15px] mt-4 rounded-sm text-[black] ml-[105px] bg-[white]">Save</button>
                        </form>
                    </div>
                    <div>
                        <span class="text-xl"> Card Color</span>
                        <form action="">
                            <div class="flex justify-between mt-4">
                                <span>Price Card</span>
                                <input class="rounded-sm" type="color">
                            </div>


                            <button class="px-[15px] mt-4 rounded-sm text-[black] ml-[105px] bg-[white]">Save</button>
                        </form>
                    </div>
                    <div>
                        <span class="text-xl">Font Color</span>
                        <form action="">
                            <div class="flex justify-between mt-4">
                                <span>h1</span>
                                <input value="black" class="rounded-sm" type="color">
                            </div>

                            <div class="flex justify-between mt-4">
                                <span>h2</span>
                                <input value="#F36823" class="rounded-sm" type="color">
                            </div>

                            <button class="px-[15px] mt-4 rounded-sm text-[black] ml-[105px] bg-[white]">Save</button>
                        </form>
                    </div>

                    <div>
                        <span class="text-xl">Button Color</span>
                        <form action="">
                            <div class="flex justify-between mt-4">
                                <span>Buy</span>
                                <input value="#F36823" class="rounded-sm" type="color">
                            </div>


                            <button class="px-[15px] mt-4 rounded-sm text-[black] ml-[105px] bg-[white]">Buy</button>
                        </form>
                    </div>
                </div>

                <hr class="mt-10 h-[2px] mx-auto">
                <?php
                $phoneNumber = isset($editInfo[0]["phoneNumber"]) && !empty($editInfo[0]["phoneNumber"]) ? $editInfo[0]["phoneNumber"] : '09 40-355-970';
                $email = isset($editInfo[0]["email"]) && !empty($editInfo[0]["email"]) ? $editInfo[0]["email"] : 'trendhub2023.shop@gmail.com';
                $address = isset($editInfo[0]["address"]) && !empty($editInfo[0]["address"]) ? $editInfo[0]["address"] : 'No.1200, room(6B), Yadanar Street, South Oakkalapa,Yangon, Myanmar';
                $addressLink = isset($editInfo[0]["locationLink"]) && !empty($editInfo[0]["locationLink"]) ? $editInfo[0]["locationLink"] : 'https://www.google.com/maps/place/Ex;braiN+Office/@16.8430957,96.1949609,17z/data=!3m1!4b1!4m6!3m5!1s0x30c193f51faa68ff:0x72868c60b69532c4!8m2!3d16.8430906!4d96.1975358!16s%2Fg%2F11scs4qwp8?entry=tts&shorturl=1';
                $time = isset($editInfo[0]["time"]) && !empty($editInfo[0]["time"]) ? $editInfo[0]["time"] : '08:00 am - 08:00 pm';


                ?>

                <div class="text-white flex  justify-between mt-10">
                    <div>
                        <span class="text-xl">Information</span>
                        <form action="../../Controller/uiElements/Information/updateController.php " method="post">
                            <div class="flex justify-between space-x-4 mt-4">
                                <span>Phone No</span>
                                <input name="phoneNumber" value="<?= $phoneNumber ?>" class="pl-2 rounded-sm text-black w-[300px] ml-[100px]  " type="text" placeholder="09 xxx xxxx xxx">
                            </div>


                            <div class="flex justify-between mt-4">
                                <span>Email</span>
                                <input value="<?= $email  ?>" name="gmail" class="pl-2 w-[300px] ml-[100px] rounded-sm text-black" type="email" placeholder="trend@gmail.com">
                            </div>

                            <div class="flex justify-between mt-4">
                                <span>Address </span>
                                <input value="<?= $address ?>" name="address" class="pl-2 rounded-sm text-black w-[300px] ml-[100px] " type="text" placeholder="Yangon">
                            </div>
                            <div class="flex justify-between mt-4">
                                <span>Location Link </span>
                                <input value="<?= $addressLink ?>" name="location" class="pl-2 rounded-sm text-black w-[300px] ml-[100px] " type="text" placeholder="Location Link">
                            </div>



                            <div class="flex justify-between mt-4">
                                <span>Time </span>
                                <input value="<?= $time ?>" name="time" class="pl-2 rounded-sm text-black w-[300px] ml-[100px] " type="text" placeholder="08:00 am - 08:00pm">
                            </div>


                            <button type="submit" class="px-[15px] mt-4 rounded-sm text-[black] ml-[440px] bg-[white]">Save</button>
                        </form>

                        <?php


                        $bannerImg1 = isset($editbanner1[0]["banner1"]) && !empty($editbanner1[0]["banner1"]) ? $editbanner1[0]["banner1"] : '/Storage/banner/bannerP1.svg';
                        $bannerImg2 = isset($editbanner2[0]["banner2"]) && !empty($editbanner2[0]["banner2"]) ? $editbanner2[0]["banner2"] : '/Storage/banner/bannerP1.svg';
                        $bannerImg3 = isset($editbanner3[0]["banner3"]) && !empty($editbanner3[0]["banner3"]) ? $editbanner3[0]["banner3"] : '/Storage/banner/bannerP2.svg';
                        $bannerImg4 = isset($editbanner4[0]["banner4"]) && !empty($editbanner4[0]["banner4"]) ? $editbanner4[0]["banner4"] : '/Storage/banner/bannerP2.svg';



                        ?>


                    </div>
                    <div>
                        <span class="text-xl">Banner</span>
                        <form class="relative" action="../../Controller/uiElements/banner1/updateBannerController.php" method="post" enctype="multipart/form-data">
                            <div class="flex  mt-4">
                                <label for="banner1">
                                    <a target="_blank" href="../../../<?= $bannerImg1 ?>">
                                        <img id="saveBanner1" src="../../../<?= $bannerImg1 ?>" class=" h-[30px] w-[40px] mr-2" alt="">
                                    </a>

                                </label>

                                <span>Banner 1 from Product Page</span>
                                <label for="banner1" class="custom-file-upload text-black ml-[17px]  h-[25px]">
                                    Choose File
                                </label>


                                <input value="" name="banner1" accept=".png,.jpg,.svg" type="file" id="banner1" class="bg-[black] w-[270px] h-[27px] rounded-sm" />

                            </div>
                            <button type="submit" class="px-[15px] h-6  absolute top-0 inline rounded-sm text-[black] right-0 bg-[white]">Save</button>



                        </form>
                        <form class="relative" action="../../Controller/uiElements/banner2/updateBannerController.php" method="post" enctype="multipart/form-data">
                            <div class="flex  mt-4">
                                <label for="banner2">
                                    <a target="_blank" href="../../../<?= $bannerImg2 ?>">
                                        <img id="saveBanner2" src="../../../<?= $bannerImg2 ?>" class=" h-[30px] w-[40px] mr-2" alt="">
                                    </a>

                                </label>

                                <span>Banner 2 from Product Page</span>
                                <label for="banner2" class="custom-file-upload text-black ml-[17px]  h-[25px]">
                                    Choose File
                                </label>


                                <input value="" name="banner2" accept=".png,.jpg,.svg" type="file" id="banner2" class="bg-[black] w-[270px] h-[27px] rounded-sm" />

                            </div>
                            <button type="submit" class="px-[15px] h-6  absolute top-0 inline rounded-sm text-[black] right-0 bg-[white]">Save</button>

                        </form>


                        <form class="relative" action="../../Controller/uiElements/banner3/updateBannerController.php" method="post" enctype="multipart/form-data">
                            <div class="flex  mt-4">
                                <label for="banner3">
                                    <a target="_blank" href="../../../<?= $bannerImg3 ?>">
                                        <img id="saveBanner3" src="../../../<?= $bannerImg3 ?>" class=" h-[30px] w-[40px] mr-2" alt="">

                                    </a>
                                </label>

                                <span>Banner 1 from Category Page</span>
                                <label for="banner3" class="custom-file-upload text-black ml-2 h-[25px]">
                                    Choose File
                                </label>


                                <input value="" name="banner3" accept=".png,.jpg,.svg" type="file" id="banner3" class="bg-[black] w-[270px] h-[27px] rounded-sm" />

                            </div>
                            <button type="submit" class="px-[15px] h-6  absolute top-0 inline rounded-sm text-[black] right-0 bg-[white]">Save</button>

                        </form>




                        <form class="relative" action="../../Controller/uiElements/banner4/updateBannerController.php" method="post" enctype="multipart/form-data">
                            <div class="flex  mt-4">
                                <label for="banner4">
                                    <a target="_blank" href="../../../<?= $bannerImg4 ?>">
                                        <img id="saveBanner4" src="../../../<?= $bannerImg4 ?>" class=" h-[30px] w-[40px] mr-2" alt="">

                                    </a>

                                </label>

                                <span>Banner 2 from Category Page</span>
                                <label for="banner4" class="custom-file-upload text-black ml-[80px] relative right-[72px] h-[25px]">
                                    Choose File
                                </label>



                                <input value="" name="banner4" accept=".png,.jpg,.svg" type="file" id="banner4" class="bg-[black] w-[270px] h-[27px] rounded-sm" />

                            </div>
                            <!-- <button type="submit" class="px-[15px] h-6 -mt-7 rounded-sm text-[black] ml-[400px] bg-[white]">Save</button> -->
                            <button type="submit" class="px-[15px] h-6  absolute top-0 inline rounded-sm text-[black] right-0 bg-[white]">Save</button>

                        </form>


                        <!-- <form action="../../Controller/uiElements/banner5/updateBannerController.php" method="post" enctype="multipart/form-data">
                            <div class="flex  mt-4">
                                <label for="banner5">
                                    <img id="saveBanner5" src="../../../<?= $editbanner5[0]["banner5"] ?>" class=" h-[30px] w-[40px] mr-2" alt="">

                                </label>
                                
                                <span>Banner 3 from Category Page</span>
                                <label for="banner5" class="custom-file-upload text-black ml-2 pt-3 h-[25px]">
                                    Choose File
                                </label>
                                

                                <input value="" name="banner5" accept=".png,.jpg,.svg" type="file" id="banner5" class="bg-[black] w-[270px] h-[27px] rounded-sm" />

                            </div>
                            <button type="submit" class="px-[15px] h-6 -mt-7 rounded-sm text-[black] ml-[400px] bg-[white]">Save</button>
                        </form> -->

                    </div>



                </div>

                <hr class="mt-10 h-[2px] mx-auto">

                <div class="text-white flex  justify-between mt-10">
                    <div>
                        <?php
                        $moneyAmount = isset($editPoint[0]["money_amout"]) && !empty($editPoint[0]["money_amout"]) ? $editPoint[0]["money_amout"] : '10000';
                        $pointAmount = isset($editPoint[0]["point_amount"]) && !empty($editPoint[0]["point_amount"]) ? $editPoint[0]["point_amount"] : '1';


                        ?>
                        <span class="text-xl">Point Exchange Rate</span>
                        <span class="text-md mt-4 block">Current point : <?= $moneyAmount ?> Kyats to <?= $pointAmount ?> Points.</span>
                        <form action="../../Controller/uiElements/pointEdit/updatePointController.php" method="post">


                            <div class="flex space-x-32 ">
                                <div class="flex space-x-5 mt-4">
                                    <span>Money Amount:</span>
                                    <input placeholder="Money Amount" name="moneyAmt" value="<?= $moneyAmount ?>" class=" w-[120px] rounded-sm text-black text-center" type="text">
                                </div>

                                <span class="block mt-4">TO</span>

                                <div class="flex space-x-5 mt-4">
                                    <span>Point Amount:</span>
                                    <input placeholder="Point Amount" name="pointAmt" value="<?= $pointAmount ?>" class=" w-[120px] rounded-sm text-black text-center" type="text">
                                </div>
                                <button type="submit" class="px-[15px] mt-4 rounded-sm text-[black]   bg-[white]">Save</button>

                            </div>




                        </form>



                    </div>




                </div>

                <hr class="mt-10 h-[2px] mx-auto">

                <div class="text-white flex  justify-between mt-10">


                    <!-- start slider 1 -->
                    <div>
                        <span class="text-xl">Image Slider1</span>
                        <form action="../../Controller/uiElements/imgSlider1/updateController.php" method="post" class="mt-[40px]" enctype="multipart/form-data">
                            <div class="flex mt-4  w-[330px]  relative">
                                <span>Image</span>
                                <?php
                                $slideImg1 = isset($editSlide1[0]["image_silder1"]) && !empty($editSlide1[0]["image_silder1"]) ? $editSlide1[0]["image_silder1"] : '/Storage/slider/acer.png';
                                $slideImg2 = isset($editSlide1[0]["image_silder2"]) && !empty($editSlide1[0]["image_silder2"]) ? $editSlide1[0]["image_silder2"] : '/Storage/slider/dell.png';
                                $slideImg3 = isset($editSlide1[0]["image_silder3"]) && !empty($editSlide1[0]["image_silder3"]) ? $editSlide1[0]["image_silder3"] : '/Storage/slider/msi.svg';
                                $sliderTitle1 = isset($editInfo[0]["image_silder_title1"]) && !empty($editInfo[0]["image_silder_title1"]) ? $editInfo[0]["image_silder_title1"] : 'Intel® Evo™ Platform The Ultimate Premium Laptop Experience';
                                $sliderTitle2 = isset($editInfo[0]["image_silder_title2"]) && !empty($editInfo[0]["image_silder_title2"]) ? $editInfo[0]["image_silder_title2"] : 'Intel® Evo™ Platform The Ultimate Premium Laptop Experience';
                                $sliderTitle3 = isset($editInfo[0]["image_silder_title3"]) && !empty($editInfo[0]["image_silder_title3"]) ? $editInfo[0]["image_silder_title3"] : 'Intel® Evo™ Platform The Ultimate Premium Laptop Experience';
                                $sliderDsc1 = isset($editInfo[0]["image_silder_dsc1"]) && !empty($editInfo[0]["image_silder_dsc1"]) ? $editInfo[0]["image_silder_dsc1"] : 'Feature the latest 13th Gen. Intel® Core™ i7 processor and certified by the Intel® Evo™ platform, you can now unleash your productivity with outstanding performance, on-the-go portability, and long-lasting battery life.';
                                $sliderDsc2 = isset($editInfo[0]["image_silder_dsc2"]) && !empty($editInfo[0]["image_silder_dsc2"]) ? $editInfo[0]["image_silder_dsc2"] : 'Feature the latest 13th Gen. Intel® Core™ i7 processor and certified by the Intel® Evo™ platform, you can now unleash your productivity with outstanding performance, on-the-go portability, and long-lasting battery life.';
                                $sliderDsc3 = isset($editInfo[0]["image_silder_dsc3"]) && !empty($editInfo[0]["image_silder_dsc3"]) ? $editInfo[0]["image_silder_dsc3"] : 'Feature the latest 13th Gen. Intel® Core™ i7 processor and certified by the Intel® Evo™ platform, you can now unleash your productivity with outstanding performance, on-the-go portability, and long-lasting battery life.';
                                $sliderBackgroundColor1 = isset($editInfo[0]["slide_bg1"]) && !empty($editInfo[0]["slide_bg1"]) ? $editInfo[0]["slide_bg1"] : '#2F2E41';
                                $sliderBackgroundColor2 = isset($editInfo[0]["slide_bg2"]) && !empty($editInfo[0]["slide_bg2"]) ? $editInfo[0]["slide_bg2"] : '#2F2E41';
                                $sliderBackgroundColor3 = isset($editInfo[0]["slide_bg3"]) && !empty($editInfo[0]["slide_bg3"]) ? $editInfo[0]["slide_bg3"] : '#2F2E41';
                                $slideTextColor1 = isset($editInfo[0]["slide_text_color1"]) && !empty($editInfo[0]["slide_text_color1"]) ? $editInfo[0]["slide_text_color1"] : '#ffffff';
                                $slideTextColor2 = isset($editInfo[0]["slide_text_color2"]) && !empty($editInfo[0]["slide_text_color2"]) ? $editInfo[0]["slide_text_color2"] : '#ffffff';
                                $slideTextColor3 = isset($editInfo[0]["slide_text_color3"]) && !empty($editInfo[0]["slide_text_color3"]) ? $editInfo[0]["slide_text_color3"] : '#ffffff';



                                ?>

                                <label for="" class="ml-5">
                                    <a target="_blank" href="../../../<?= $slideImg1 ?>">

                                        <img id="saveSlide1" src="../../../<?= $slideImg1 ?>" class=" h-[30px] w-[40px] mr-2" alt="slider1">

                                    </a>
                                </label>
                                <label for="slide1" class="custom-file-upload text-black ml-3 h-[25px]">
                                    Choose File
                                </label>
                                <button class="px-[15px] ml-[240px] rounded-sm text-[black] absolute right-0  bg-[white]">Save</button>


                                <input name="slide1" type="file" id="slide1" class="bg-[black] w-[270px] h-[27px] rounded-sm" />
                            </div>
                        </form>
                        <form action="../../Controller/uiElements/imgSlider1/updateTextController.php" method="post">

                            <div class="flex  mt-4">
                                <span>Title</span>
                                <textarea placeholder="Enter Title" class="resize-none text-black outline-none rounded-sm ml-[27px]" name="imgTitleOne" id="" cols="32" rows="3">
                                    <?=
                                    $sliderTitle1 ?>
                                </textarea>

                            </div>

                            <div class="flex  mt-4">
                                <span>Des</span>
                                <textarea placeholder="Enter Description" class="resize-none text-black outline-none rounded-sm ml-[27px]" name="imgDscOne" id="" cols="32" rows="5">
                                <?=
                                $sliderDsc1 ?>
                                </textarea>

                            </div>
                            <div class="flex justify-between mt-4">
                                <span>Background Color</span>
                                <input name="slideBg1" value="<?= $sliderBackgroundColor1  ?>" class="rounded-sm w-[60px]" type="color">
                            </div>
                            <div class="flex justify-between mt-4">
                                <span>Text Color</span>
                                <input name="slide_text_color1" value="<?= $slideTextColor1 ?>" class="rounded-sm w-[60px]" type="color">
                            </div>



                            <button class="px-[15px] mt-4 rounded-sm text-[black] ml-[260px] bg-[white]">Save</button>
                        </form>


                    </div>
                    <!-- end slider 1 -->


                    <!-- start slider 2 -->
                    <div>
                        <span class="text-xl">Image Slider2</span>
                        <form class="mt-[40px]" action="../../Controller/uiElements/imgSlider2/updateController.php" method="post" enctype="multipart/form-data">
                            <div class="flex mt-4  w-[330px]  relative">
                                <span>Image</span>


                                <label for="" class="ml-5">
                                    <a target="_blank" href="../../../<?= $slideImg2 ?>">

                                        <img id="saveSlide2" src="../../../<?= $slideImg2 ?>" class=" h-[30px] w-[40px] mr-2" alt="slider2">

                                    </a>
                                </label>
                                <label for="slide2" class="custom-file-upload text-black ml-3 h-[25px]">
                                    Choose File
                                </label>
                                <button class="px-[15px] ml-[240px] rounded-sm text-[black] absolute right-0  bg-[white]">Save</button>


                                <input name="slide2" type="file" id="slide2" class="bg-[black] w-[270px] h-[27px] rounded-sm" />
                            </div>
                        </form>

                        <form action="../../Controller/uiElements/imgSlider2/updateTextController.php" method="post">
                            <div class="flex  mt-4">
                                <span>Title</span>
                                <textarea class="resize-none text-black outline-none rounded-sm ml-[27px]" name="imgTitleTwo" id="" cols="32" rows="3">
                                <?= $sliderTitle2 ?>
                                </textarea>

                            </div>

                            <div class="flex  mt-4">
                                <span>Des</span>
                                <textarea class="resize-none text-black outline-none rounded-sm ml-[27px]" name="imgDscTwo" id="" cols="32" rows="5">
                                <?= $sliderDsc2 ?>
                                </textarea>

                            </div>


                            <div class="flex justify-between mt-4">
                                <span>Background Color</span>
                                <input name="slideBg2" value="<?= $sliderBackgroundColor2  ?>" class="rounded-sm w-[60px]" type="color">


                            </div>
                            <div class="flex justify-between mt-4">
                                <span>Text Color</span>
                                <input name="slide_text_color2" value="<?= $slideTextColor2 ?>" class="rounded-sm w-[60px]" type="color">
                            </div>


                            <button class="px-[15px] mt-4 rounded-sm text-[black] ml-[260px] bg-[white]">Save</button>
                        </form>


                    </div>
                    <!-- end slider 2 -->


                    <!-- start slider 3 -->
                    <div>
                        <span class="text-xl">Image Slider3</span>
                        <form class="mt-[40px]" action="../../Controller/uiElements/imgSlider3/updateController.php" method="post" enctype="multipart/form-data">
                            <div class="flex mt-4  w-[330px]  relative">
                                <span>Image</span>


                                <label for="" class="ml-5">
                                    <a target="_blank" href="../../../<?= $slideImg3 ?>">

                                        <img id="saveSlide3" src="../../../<?= $slideImg3 ?>" class=" h-[30px] w-[40px] mr-2" alt="slider3">

                                    </a>
                                </label>
                                <label for="slide3" class="custom-file-upload text-black ml-3 h-[25px]">
                                    Choose File
                                </label>
                                <button class="px-[15px] ml-[240px] rounded-sm text-[black] absolute right-0  bg-[white]">Save</button>


                                <input name="slide3" type="file" id="slide3" class="bg-[black] w-[270px] h-[27px] rounded-sm" />
                            </div>
                        </form>

                        <form action="../../Controller/uiElements/imgSlider3/updateTextController.php" method="post">
                            <div class="flex  mt-4">
                                <span>Title</span>
                                <textarea class="resize-none text-black outline-none rounded-sm ml-[27px]" name="imgTitleThree" id="" cols="32" rows="3">
                                <?= $sliderTitle3 ?>
                                </textarea>

                            </div>

                            <div class="flex  mt-4">
                                <span>Des</span>
                                <textarea class="resize-none text-black outline-none rounded-sm ml-[27px]" name="imgDscThree" id="" cols="32" rows="5">
                                <?= $sliderDsc3 ?>

                                </textarea>

                            </div>


                            <div class="flex justify-between mt-4">
                                <span>Background Color</span>
                                <input name="slideBg3" value="<?= $sliderBackgroundColor3 ?>" class="rounded-sm w-[60px]" type="color">

                            </div>
                            <div class="flex justify-between mt-4">
                                <span>Text Color</span>
                                <input name="slide_text_color3" value="<?= $slideTextColor3 ?>" class="rounded-sm w-[60px]" type="color">
                            </div>

                            <button class="px-[15px] mt-4 rounded-sm text-[black] ml-[260px] bg-[white]">Save</button>

                        </form>


                    </div>
                    <!-- end slider 3 -->






                </div>

                <hr class="mt-10 h-[2px] mx-auto">

                <select class="w-[70px] text-black h-[25px] outline-none mt-10 rounded-sm ml-[64px]" id="faq-select">
                    <option value="faq1">FAQ1</option>
                    <option value="faq2">FAQ2</option>
                    <option value="faq3">FAQ3</option>
                </select>


                <div class="text-white flex  mt-5">
                    <div class="faq text-black" id="faq1">

                        <?php
                        $question1 = isset($editInfo[0]["question1"]) && !empty($editInfo[0]["question1"]) ? $editInfo[0]["question1"] : 'How to use my points?';
                        $question2 = isset($editInfo[0]["question2"]) && !empty($editInfo[0]["question2"]) ? $editInfo[0]["question2"] : 'Where to check my orders?';
                        $question3 = isset($editInfo[0]["question3"]) && !empty($editInfo[0]["question3"]) ? $editInfo[0]["question3"] : 'What payment options are available?';
                        $answer1 = isset($editInfo[0]["answer1"]) && !empty($editInfo[0]["answer1"]) ? $editInfo[0]["answer1"] : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora soluta ipsa quibusdam laudantium dolor placeat repudiandae, sunt et nostrum voluptatem architecto eius vel modi porro perspiciatis dicta harum similique! Quas, ab sit! Consectetur num ';
                        $answer2 = isset($editInfo[0]["answer2"]) && !empty($editInfo[0]["answer2"]) ? $editInfo[0]["answer2"] : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora soluta ipsa quibusdam laudantium dolor placeat repudiandae, sunt et nostrum voluptatem architecto eius vel modi porro perspiciatis dicta harum similique! Quas, ab sit! Consectetur num ';
                        $answer3 = isset($editInfo[0]["answer3"]) && !empty($editInfo[0]["answer3"]) ? $editInfo[0]["answer3"] : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora soluta ipsa quibusdam laudantium dolor placeat repudiandae, sunt et nostrum voluptatem architecto eius vel modi porro perspiciatis dicta harum similique! Quas, ab sit! Consectetur num ';


                        ?>

                        <form action="../../Controller/uiElements/faq1/updatefaqController.php" method="post">

                            <div class="flex justify-between w-[1040px]">
                                <span class="block text-white ">Ques:</span>
                                <textarea name="questionOne" cols="120" rows="2" class=" resize-none text-black" type="text" placeholder="Question 1">
                                <?= $question1 ?>
                                </textarea>
                            </div>
                            <div class="flex  mt-4 justify-between">
                                <span class="block text-white">Ans:</span>
                                <textarea cols="120" rows="4" name="answerOne" class="resize-none  text-black" type="text" placeholder="Answer 1">
                                <?= $answer1 ?>
                                </textarea>
                            </div>
                            <button type="submit" class="px-[15px] mt-4 rounded-sm text-[black] ml-[973px] bg-[white]">Save</button>

                        </form>
                    </div>


                    <div class="faq" id="faq2">

                        <form action="../../Controller/uiElements/faq2/updatefaq2Controller.php" method="post">

                            <div class="flex justify-between w-[1040px]">
                                <span class="block text-white ">Ques:</span>
                                <textarea name="questionTwo" cols="120" rows="2" class=" resize-none  text-black" type="text" placeholder="Question 1">
                                                     <?= $question2 ?>
                                                  </textarea>
                            </div>
                            <div class="flex  mt-4 justify-between">
                                <span class="block text-white">Ans:</span>
                                <textarea cols="120" rows="4" name="answerTwo" class="resize-none  text-black" type="text" placeholder="Answer 1">
                                     <?= $answer2 ?>
                                         </textarea>
                            </div>
                            <button type="submit" class="px-[15px] mt-4 rounded-sm text-[black] ml-[973px] bg-[white]">Save</button>

                        </form>
                    </div>

                    <div class="faq" id="faq3">
                        <form action="../../Controller/uiElements/faq3/updatefaq3Controller.php" method="post">

                            <div class="flex justify-between w-[1040px]">
                                <span class="block text-white ">Ques:</span>
                                <textarea name="questionThree" cols="120" rows="2" class=" resize-none  text-black" type="text" placeholder="Question 1">
                                                              <?= $question3 ?>
                                                             </textarea>
                            </div>
                            <div class="flex  mt-4 justify-between">
                                <span class="block text-white">Ans:</span>
                                <textarea cols="120" rows="4" name="answerThree" class="resize-none  text-black" type="text" placeholder="Answer 1">
                                                     <?= $anwer3 ?>
                                                                 </textarea>
                            </div>
                            <button type="submit" class="px-[15px] mt-4 rounded-sm text-[black] ml-[973px] bg-[white]">Save</button>

                        </form>
                    </div>
                </div>


                <hr class="mt-10 h-[2px] mx-auto">

                <div class="text-white flex  justify-between mt-10 mb-[100px]">


                    <div>
                        <span class="text-black w-[90px] rounded-sm ml-[65px] px-2 bg-white" name="" id="">
                            Terms

                        </span>
                        <form action="../../Controller/uiElements/terms/updatetermsController.php" method="post">

                            <div class="flex  mt-4">
                                <span>Terms:</span>
                                <textarea class="resize-none text-black outline-none rounded-sm ml-[20px] text-start justify-start " name="terms" id="" cols="123" rows="3">
                                    <?= $editTerms[0]["terms"] ?>
                                </textarea>

                            </div>


                            <button class="px-[15px] mt-4 rounded-sm text-[black] ml-[1002px] bg-[white]">Save</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
        <!-- Right-side End -->
    </section>
    </div>


    <script src="../resources/js/modal_box.js"></script>
    <script src="../resources/js/faq.js"></script>
    <script src="../resources//js/imgSave.js"></script>
</body>

</html>