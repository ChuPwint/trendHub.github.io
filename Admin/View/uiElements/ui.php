<?php

include "../../Controller/uiElements/Information/viewController.php";
include "../../Controller/uiElements/pointEdit/viewPointControllerl.php";
include "../../Controller/uiElements/imgSlider1/viewController.php";
include "../../Controller/uiElements/imgSlider2/viewController.php";
include "../../Controller/uiElements/imgSlider3/viewController.php";
include "../../Controller/uiElements/faq1/viewfaqControllerl.php";
include "../../Controller/uiElements/faq2/viewfaq2Controller.php";
include "../../Controller/uiElements/faq3/viewfaq3Controllerl.php";
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


                <div class="text-white flex  justify-between mt-10">
                    <div>
                        <span class="text-xl">Information</span>
                        <form action="../../Controller/uiElements/Information/updateController.php " method="post">
                            <div class="flex justify-between space-x-4 mt-4">
                                <span>Phone No</span>
                                <input name="phoneNumber" value="<?= $editInfo[0]["phoneNumber"]   ?>" class="pl-2 rounded-sm text-black w-[300px] ml-[100px]  " type="text" placeholder="09 xxx xxxx xxx">
                            </div>


                            <div class="flex justify-between mt-4">
                                <span>Email</span>
                                <input value="<?= $editInfo[0]["email"]   ?>" name="gmail" class="pl-2 w-[300px] ml-[100px] rounded-sm text-black" type="email" placeholder="trend@gmail.com">
                            </div>

                            <div class="flex justify-between mt-4">
                                <span>Address </span>
                                <input value="<?= $editInfo[0]["address"]  ?>" name="address" class="pl-2 rounded-sm text-black w-[300px] ml-[100px] " type="text" placeholder="Yangon">
                            </div>

                            <div class="flex justify-between mt-4">
                                <span>Time </span>
                                <input value="<?= $editInfo[0]["time"] ?>" name="time" class="pl-2 rounded-sm text-black w-[300px] ml-[100px] " type="text" placeholder="08:00 am - 08:00pm">
                            </div>


                            <button type="submit" class="px-[15px] mt-4 rounded-sm text-[black] ml-[400px] bg-[white]">Save</button>
                        </form>



                    </div>
                    <div>
                        <span class="text-xl">Banner</span>
                        <form action="">
                            <div class="flex justify-between mt-4">
                                <label for="banner1">
                                    <img id="saveBanner1" src="../resources/img/banner/defaultImg.jpg" class=" h-[30px] w-[40px] mr-2" alt="">

                                </label>
                                <span>Banner 1 from Product Page</span>
                                <label for="banner1" class="custom-file-upload text-black ml-2">
                                    Choose File
                                </label>

                                <input accept=".png,.jpg" type="file" id="banner1" class="bg-[black] w-[270px] h-[27px] rounded-sm" />

                            </div>

                            <div class="flex justify-between mt-4">
                                <label for="banner2">
                                    <img id="saveBanner2" src="../resources/img/banner/defaultImg.jpg" class=" h-[30px] w-[40px] mr-2" alt="">

                                </label>
                                <span>Banner 2 from Product Page</span>
                                <label for="banner2" class="custom-file-upload text-black ml-2">
                                    Choose File
                                </label>

                                <input accept=".png,.jpg" type="file" id="banner2" class="bg-[black] w-[270px] h-[27px] rounded-sm" />

                            </div>
                            <div class="flex justify-between mt-4">
                                <label for="banner3">
                                    <img id="saveBanner3" src="../resources/img/banner/defaultImg.jpg" class=" h-[30px] w-[40px] mr-2" alt="">

                                </label>
                                <span>Banner 1 from Category Page</span>
                                <label for="banner3" class="custom-file-upload text-black ml-2">
                                    Choose File
                                </label>

                                <input accept=".png,.jpg" type="file" id="banner3" class="bg-[black] w-[270px] h-[27px] rounded-sm" />

                            </div>
                            <div class="flex justify-between mt-4">
                                <label for="banner4">
                                    <img id="saveBanner4" src="../resources/img/banner/defaultImg.jpg" class=" h-[30px] w-[40px] mr-2" alt="">

                                </label>
                                <span>Banner 2 from Category Page</span>
                                <label for="banner4" class="custom-file-upload text-black ml-2">
                                    Choose File
                                </label>

                                <input accept=".png,.jpg" type="file" id="banner4" class="bg-[black] w-[270px] h-[27px] rounded-sm" />

                            </div>

                            <div class="flex justify-between mt-4">
                                <label for="banner5">
                                    <img id="saveBanner5" src="../resources/img/banner/defaultImg.jpg" class=" h-[30px] w-[40px] mr-2" alt="">

                                </label>
                                <span>Banner 3 from Category Page</span>
                                <label for="banner5" class="custom-file-upload text-black ml-2">
                                    Choose File
                                </label>

                                <input accept=".png,.jpg" type="file" id="banner5" class="bg-[black] w-[270px] h-[27px] rounded-sm" />

                            </div>
                            <button class="px-[15px] mt-4 rounded-sm text-[black] ml-[289px] bg-[white]">Save</button>
                        </form>
                    </div>



                </div>

                <hr class="mt-10 h-[2px] mx-auto">

                <div class="text-white flex  justify-between mt-10">
                    <div>
                        <span class="text-xl">Point Exchange Rate</span>
                        <span class="text-md mt-4 block">Current point : 10000Ks To 1Pts.</span>
                        <form action="../../Controller/uiElements/pointEdit/updatePointController.php" method="post">


                            <div class="flex space-x-32 ">
                                <div class="flex space-x-5 mt-4">
                                    <span>Money Amount:</span>
                                    <input name="moneyAmt" value="<?= $editPoint[0]["money_amout"] ?>" class=" w-[100px] rounded-sm text-black text-center" type="text">
                                </div>

                                <span class="block mt-4">TO</span>

                                <div class="flex space-x-5 mt-4">
                                    <span>Point Amount:</span>
                                    <input name="pointAmt" value="<?= $editPoint[0]["point_amount"] ?>" class=" w-[100px] rounded-sm text-black text-center" type="text">
                                </div>
                                <button type="submit" class="px-[15px] mt-4 rounded-sm text-[black]   bg-[white]">Save</button>

                            </div>




                        </form>



                    </div>




                </div>

                <hr class="mt-10 h-[2px] mx-auto">

                <div class="text-white flex  justify-between mt-10">


                    <div>
                        <span class="text-xl">Image Slider1</span>
                        <form action="../../Controller/uiElements/imgSlider1/updateController.php" method="post">
                            <div class="flex mt-4">
                                <span>Image</span>
                                <label for="file-upload" class="custom-file-upload text-black ml-2">
                                    Choose File
                                </label>
                                <input type="file" id="file-upload" class="bg-[black] w-[270px] h-[27px] rounded-sm" />

                            </div>

                            <div class="flex  mt-4">
                                <span>Title</span>
                                <textarea class="resize-none text-black outline-none rounded-sm ml-[27px]" name="imgTitleOne" id="" cols="30" rows="3">
                                    <?= $editSlide1[0]["image_silder_title1"] ?>
                                </textarea>

                            </div>

                            <div class="flex  mt-4">
                                <span>Des</span>
                                <textarea class="resize-none text-black outline-none rounded-sm ml-[27px]" name="imgDscOne" id="" cols="30" rows="5">
                                <?= $editSlide1[0]["image_silder_dsc1"] ?>
                                </textarea>

                            </div>




                            <button class="px-[15px] mt-4 rounded-sm text-[black] ml-[277px] bg-[white]">Save</button>
                        </form>


                    </div>

                    <div>
                        <span class="text-xl">Image Slider2</span>
                        <form action="../../Controller/uiElements/imgSlider2/updateController.php" method="post">
                            <div class="flex mt-4">
                                <span>Image</span>
                                <label for="file-upload" class="custom-file-upload text-black ml-2">
                                    Choose File
                                </label>
                                <input type="file" id="file-upload" class="bg-[black] w-[270px] h-[27px] rounded-sm" />

                            </div>

                            <div class="flex  mt-4">
                                <span>Title</span>
                                <textarea class="resize-none text-black outline-none rounded-sm ml-[27px]" name="imgTitleTwo" id="" cols="30" rows="3">
                                <?= $editSlide2[0]["image_silder_title2"] ?>
                                </textarea>

                            </div>

                            <div class="flex  mt-4">
                                <span>Des</span>
                                <textarea class="resize-none text-black outline-none rounded-sm ml-[27px]" name="imgDscTwo" id="" cols="30" rows="5">
                                <?= $editSlide2[0]["image_silder_dsc2"] ?>
                                </textarea>

                            </div>




                            <button class="px-[15px] mt-4 rounded-sm text-[black] ml-[277px] bg-[white]">Save</button>
                        </form>


                    </div>

                    <div>
                        <span class="text-xl">Image Slider3</span>
                        <form action="../../Controller/uiElements/imgSlider3/updateController.php" method="post">

                            <div class="flex mt-4">
                                <span>Image</span>
                                <label for="file-upload" class="custom-file-upload text-black ml-2">
                                    Choose File
                                </label>
                                <input type="file" id="file-upload" class="bg-[black] w-[270px] h-[27px] rounded-sm" />

                            </div>

                            <div class="flex  mt-4">
                                <span>Title</span>
                                <textarea class="resize-none text-black outline-none rounded-sm ml-[27px]" name="imgTitleThree" id="" cols="30" rows="3">
                                <?= $editSlide3[0]["image_silder_title3"] ?>
                                </textarea>

                            </div>

                            <div class="flex  mt-4">
                                <span>Des</span>
                                <textarea class="resize-none text-black outline-none rounded-sm ml-[27px]" name="imgDscThree" id="" cols="30" rows="5">
                                <?= $editSlide3[0]["image_silder_dsc3"] ?>

                                </textarea>

                            </div>




                            <button class="px-[15px] mt-4 rounded-sm text-[black] ml-[277px] bg-[white]">Save</button>
                        </form>


                    </div>






                </div>

                <hr class="mt-10 h-[2px] mx-auto">

                <select class="w-[70px] text-black h-[25px] outline-none mt-10 rounded-sm ml-[64px]" id="faq-select">
                    <option value="faq1">FAQ1</option>
                    <option value="faq2">FAQ2</option>
                    <option value="faq3">FAQ3</option>
                </select>


                <div class="text-white flex  mt-5">
                    <div class="faq text-black" id="faq1">

                        <form action="../../Controller/uiElements/faq1/updatefaqController.php" method="post">

                            <div class="flex justify-between w-[1040px]">
                                <span class="block text-white ">Ques:</span>
                                <textarea name="questionOne" cols="120" rows="2" class=" resize-none text-black" type="text" placeholder="Question 1">
                                <?= $editFaq1[0]["question1"] ?>
                                </textarea>
                            </div>
                            <div class="flex  mt-4 justify-between">
                                <span class="block text-white">Ans:</span>
                                <textarea cols="120" rows="4" name="answerOne" class="resize-none  text-black" type="text" placeholder="Answer 1">
                                <?= $editFaq1[0]["answer1"] ?>
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
    <?= $editFaq1[0]["question2"] ?>
    </textarea>
                            </div>
                            <div class="flex  mt-4 justify-between">
                                <span class="block text-white">Ans:</span>
                                <textarea cols="120" rows="4" name="answerTwo" class="resize-none  text-black" type="text" placeholder="Answer 1">
    <?= $editFaq1[0]["answer2"] ?>
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
    <?= $editFaq1[0]["question3"] ?>
    </textarea>
                            </div>
                            <div class="flex  mt-4 justify-between">
                                <span class="block text-white">Ans:</span>
                                <textarea cols="120" rows="4" name="answerThree" class="resize-none  text-black" type="text" placeholder="Answer 1">
    <?= $editFaq1[0]["answer3"] ?>
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