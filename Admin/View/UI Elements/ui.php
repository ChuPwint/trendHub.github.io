<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI Elements</title>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css?id=<?= time() ?>">
    <script src="../resources/lib/jquery3.6.0.js"></script>

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

<body class="bg-[#12141B]">
    <section class="container w-full mx-auto flex">
        <!-- Import side bar  -->
        <?php include "../resources/common/adminSideBar.php" ?>

        <!-- Right-side Start -->
        <div class="h-screen overflow-hidden w-full">
            <!-- Search Start-->
            <div class="bg-[#262B3A] flex justify-between items-center py-3 px-10">
                <div class="text-white">
                    <p class="text-2xl font-semibold">UI Elements</p>
                    <p>Date : Sun, Jul 16, 2023</p>
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
                        <form action="">
                            <div class="flex justify-between space-x-4 mt-4">
                                <span>Phone No</span>
                                <input value="" class="pl-2 rounded-sm" type="text" placeholder="09 xxx xxxx xxx">
                            </div>

                            <div class="flex justify-between mt-4">
                                <span>Email</span>
                                <input class="pl-2 rounded-sm" type="email" placeholder="trend@gmail.com">
                            </div>

                            <div class="flex justify-between mt-4">
                                <span>Address </span>
                                <input class="pl-2 rounded-sm" type="text" placeholder="Yangon">
                            </div>

                            <div class="flex justify-between mt-4">
                                <span>Time </span>
                                <input class="pl-2 rounded-sm" type="text" placeholder="08:00 am - 08:00pm">
                            </div>


                            <button class="px-[15px] mt-4 rounded-sm text-[black] ml-[232px] bg-[white]">Save</button>
                        </form>



                    </div>
                    <div>
                        <span class="text-xl">Banner</span>
                        <form action="">
                            <div class="flex justify-between mt-4">
                                <span>Banner 1 from Product Page</span>
                                <label for="file-upload" class="custom-file-upload text-black ml-2">
                                    Choose File
                                </label>
                                <input type="file" id="file-upload" class="bg-[black] w-[270px] h-[27px] rounded-sm" />

                            </div>

                            <div class="flex justify-between mt-4">
                                <span>Banner 2 from Product Page</span>
                                <label for="file-upload" class="custom-file-upload text-black ml-2">
                                    Choose File
                                </label>
                                <input type="file" id="file-upload" class="bg-[black] w-[270px] h-[27px] rounded-sm" />

                            </div>

                            <div class="flex justify-between mt-4">
                                <span>Banner 1 from Category Page</span>
                                <label for="file-upload" class="custom-file-upload text-black ml-2">
                                    Choose File
                                </label>
                                <input type="file" id="file-upload" class="bg-[black] w-[270px] h-[27px] rounded-sm" />

                            </div>

                            <div class="flex justify-between mt-4">
                                <span>Banner 2 from Category Page</span>
                                <label for="file-upload" class="custom-file-upload text-black ml-2">
                                    Choose File
                                </label>
                                <input type="file" id="file-upload" class="bg-[black] w-[270px] h-[27px] rounded-sm" />

                            </div>

                            <div class="flex justify-between mt-4">
                                <span>Banner 3 from Category Page</span>
                                <label for="file-upload" class="custom-file-upload text-black ml-2">
                                    Choose File
                                </label>
                                <input type="file" id="file-upload" class="bg-[black] w-[270px] h-[27px] rounded-sm" />

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
                        <form action="">
                            <div class="flex space-x-32 ">
                                <div class="flex space-x-5 mt-4">
                                    <span>Money Amount:</span>
                                    <input value="10,000" class=" w-[100px] rounded-sm text-black text-center" type="text">
                                </div>

                                <span class="block mt-4">TO</span>

                                <div class="flex space-x-5 mt-4">
                                    <span>Money Amount:</span>
                                    <input value="1" class=" w-[100px] rounded-sm text-black text-center" type="text">
                                </div>
                                <button class="px-[15px] mt-4 rounded-sm text-[black]   bg-[white]">Save</button>

                            </div>




                        </form>



                    </div>




                </div>

                <hr class="mt-10 h-[2px] mx-auto">

                <div class="text-white flex  justify-between mt-10">


                    <div>
                        <span class="text-xl">Image Slider1</span>
                        <form action="">
                            <div class="flex mt-4">
                                <span>Image</span>
                                <label for="file-upload" class="custom-file-upload text-black ml-2">
                                    Choose File
                                </label>
                                <input type="file" id="file-upload" class="bg-[black] w-[270px] h-[27px] rounded-sm" />

                            </div>

                            <div class="flex  mt-4">
                                <span>Title</span>
                                <textarea class="resize-none text-black outline-none rounded-sm ml-[23px]" name="" id="" cols="30" rows="3"></textarea>

                            </div>

                            <div class="flex  mt-4">
                                <span>Des</span>
                                <textarea class="resize-none text-black outline-none rounded-sm ml-[27px]" name="" id="" cols="30" rows="5"></textarea>

                            </div>




                            <button class="px-[15px] mt-4 rounded-sm text-[black] ml-[277px] bg-[white]">Save</button>
                        </form>


                    </div>

                    <div>
                        <span class="text-xl">Image Slider2</span>
                        <form action="">
                            <div class="flex mt-4">
                                <span>Image</span>
                                <label for="file-upload" class="custom-file-upload text-black ml-2">
                                    Choose File
                                </label>
                                <input type="file" id="file-upload" class="bg-[black] w-[270px] h-[27px] rounded-sm" />

                            </div>

                            <div class="flex  mt-4">
                                <span>Title</span>
                                <textarea class="resize-none text-black outline-none rounded-sm ml-[23px]" name="" id="" cols="30" rows="3"></textarea>

                            </div>

                            <div class="flex  mt-4">
                                <span>Des</span>
                                <textarea class="resize-none text-black outline-none rounded-sm ml-[27px]" name="" id="" cols="30" rows="5"></textarea>

                            </div>




                            <button class="px-[15px] mt-4 rounded-sm text-[black] ml-[277px] bg-[white]">Save</button>
                        </form>


                    </div>

                    <div>
                        <span class="text-xl">Image Slider3</span>
                        <form action="">
                            <div class="flex mt-4">
                                <span>Image</span>
                                <label for="file-upload" class="custom-file-upload text-black ml-2">
                                    Choose File
                                </label>
                                <input type="file" id="file-upload" class="bg-[black] w-[270px] h-[27px] rounded-sm" />

                            </div>

                            <div class="flex  mt-4">
                                <span>Title</span>
                                <textarea class="resize-none text-black outline-none rounded-sm ml-[23px]" name="" id="" cols="30" rows="3"></textarea>

                            </div>

                            <div class="flex  mt-4">
                                <span>Des</span>
                                <textarea class="resize-none text-black outline-none rounded-sm ml-[27px]" name="" id="" cols="30" rows="5"></textarea>

                            </div>




                            <button class="px-[15px] mt-4 rounded-sm text-[black] ml-[277px] bg-[white]">Save</button>
                        </form>


                    </div>






                </div>

                <hr class="mt-10 h-[2px] mx-auto">

                <div class="text-white flex  justify-between mt-10">


                    <div>
                        <select class="text-black w-[70px] rounded-sm ml-[65px] px-2" name="" id="">
                            <option selected value="">FAQ1</option>
                            <option value="">FAQ2</option>
                            <option value="">FAQ3</option>
                        </select>
                        <form action="">


                            <div class="flex  mt-4">
                                <span>Ques:</span>
                                <textarea class="resize-none text-black outline-none rounded-sm ml-[23px]" name="" id="" cols="123" rows="2"></textarea>

                            </div>

                            <div class="flex  mt-4">
                                <span>Ans:</span>
                                <textarea class="resize-none text-black outline-none rounded-sm ml-[34px]" name="" id="" cols="123" rows="3"></textarea>

                            </div>




                            <button class="px-[15px] mt-4 rounded-sm text-[black] ml-[1077px] bg-[white]">Save</button>
                        </form>


                    </div>









                </div>

                <hr class="mt-10 h-[2px] mx-auto">

                <div class="text-white flex  justify-between mt-10 mb-[100px]">


<div>
    <select class="text-black w-[70px] rounded-sm ml-[65px] px-2" name="" id="">
        <option selected value="">T&C1</option>
        <option value="">T&C2</option>
        <option value="">T&Cacute;3</option>
    </select>
    <form action="">


        <div class="flex  mt-4">
            <span>Ques:</span>
            <textarea class="resize-none text-black outline-none rounded-sm ml-[23px]" name="" id="" cols="123" rows="2"></textarea>

        </div>

        <div class="flex  mt-4">
            <span>Ans:</span>
            <textarea class="resize-none text-black outline-none rounded-sm ml-[34px]" name="" id="" cols="123" rows="3"></textarea>

        </div>




        <button class="px-[15px] mt-4 rounded-sm text-[black] ml-[1077px] bg-[white]">Save</button>
    </form>


</div>









</div>













            </div>



        </div>
        <!-- Right-side End -->

    </section>



    </div>



    <script src="../resources/js/modal_box.js"></script>
</body>

</html>