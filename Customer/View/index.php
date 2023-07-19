<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./headerLogo.svg" type="image/icon type">
    <title>Trend Hub</title>

    <!-- google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- tailwind  link -->
    <link href="./assets/tailwind/output.css" rel="stylesheet" />
 
    <!-- flow bite link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

    <!-- icon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>    
</head>

<style>
    .category {
        transition: transform 0.3s ease-out;
    }

    .category.hidden {
        transform: translateX(-100%);
    }
</style>

<body class="bg-primary font-roboto">
    <!-- start first navbar -->
    <nav class="py-1 px-5 bg-white shadow md:flex md:items-center md:justify-between">

        <div class="flex justify-between items-center">

            <!-- logo -->
            <img class="md:block hidden h-[58px]  order-2" src="./logo.svg" />
            <img class="md:hidden h-[58px] inline order-2" src="./headerLogo.svg" />

            <!-- bento menu -->
            <span class="text-3xl cursor-pointer mx-2 md:hidden block order-1">
                <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
            </span>

            <!-- mobile login btn -->
            <button
                class="bg-tertiary text-white duration-200 px-6 py-2 md:mx-4 block md:hidden hover:bg-tertiary rounded order-3">
                Login
            </button>
        </div>

        <!-- menu -->
        <ul
            class="md:flex md:items-center z-[20] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-xl md:text-lg hover:text-tertiary duration-200 font-roboto">Home</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-xl md:text-lg hover:text-tertiary duration-200">About</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-xl md:text-lg hover:text-tertiary duration-200">Services</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-xl md:text-lg hover:text-tertiary duration-200">Help</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-xl md:text-lg hover:text-tertiary duration-200">Contact</a>
            </li>

            <!-- desktop login btn -->
            <button
                class="bg-tertiary md:text-lg rounded-lg text-white duration-500 md:px-6 md:py-1 md:mx-4 hidden md:block hover:bg-[#FF5500]">
                Login
            </button>
        </ul>
    </nav>
    <!-- end first navbar -->


    <!-- start second navbar -->
    <nav class="px-5 py-2  bg-secondary flex justify-between shadow-md ">
        <!-- search mobile -->
        <div class="flex md:hidden">
            <div>
                <img src="./category.svg" alt="Image" class="cursor-pointer h-10" onclick="showCategory()">
                <div id="category" class="absolute bg-white p-4 shadow-lg rounded-md hidden mt-7">
                    <div class="flex justify-between items-center mb-4">

                        <button class="text-gray-500 hover:text-gray-700" onclick="showCategory()">×</button>
                    </div>
                    <div class="flex justify-center flex-wrap max-w-[400px]">
                        <div
                            class="p-2 m-1 bg-primary hover:bg-tertiary hover:text-white cursor-pointer rounded-md duration-300 shadow-md">
                            Womens’s & Girls’s Fashion</div>
                        <div
                            class="p-2 m-1 bg-primary hover:bg-tertiary hover:text-white cursor-pointer rounded-md duration-300 shadow-md">
                            Men’s & Boy’s Fashion</div>
                        <div
                            class="p-2 m-1 bg-primary hover:bg-tertiary hover:text-white cursor-pointer rounded-md duration-300 shadow-md">
                            Sports & Outdoors</div>
                        <div
                            class="p-2 m-1 bg-primary hover:bg-tertiary hover:text-white cursor-pointer rounded-md duration-300 shadow-md">
                            Mother & Baby</div>


                        <div
                            class="p-2 m-1 bg-primary hover:bg-tertiary hover:text-white cursor-pointer rounded-md duration-300 shadow-md">
                            Watches</div>
                        <div
                            class="p-2 m-1 bg-primary hover:bg-tertiary hover:text-white cursor-pointer rounded-md duration-300 shadow-md">
                            Home & Lifestyle</div>
                        <div
                            class="p-2 m-1 bg-primary hover:bg-tertiary hover:text-white cursor-pointer rounded-md duration-300 shadow-md">
                            Electronics Devices</div>

                        <div
                            class="p-2 m-1 bg-primary hover:bg-tertiary hover:text-white cursor-pointer rounded-md duration-300 shadow-md">
                            Groceries </div>

                        <div
                            class="p-2 m-1 bg-primary hover:bg-tertiary hover:text-white cursor-pointer rounded-md duration-300 shadow-md">
                            Tv & Home Appliances </div>
                        <div
                            class="p-2 m-1 bg-primary hover:bg-tertiary hover:text-white cursor-pointer rounded-md duration-300 shadow-md">
                            Bags</div>
                        <div
                            class="p-2 m-1 bg-primary hover:bg-tertiary hover:text-white cursor-pointer rounded-md duration-300 shadow-md">
                            Jewelry</div>



                        <div
                            class="p-2 m-1 bg-primary hover:bg-tertiary hover:text-white cursor-pointer rounded-md duration-300 shadow-md">
                            Others </div>
                    </div>






                </div>
            </div>
            <input placeholder="Search..." type="search" class="rounded-lg border border-gray-300 w-[200px] pl-5">
        </div>

        <form>
            <div class="flex">

                <button style="background-color:#F36823;" id="dropdown-button" data-dropdown-toggle="dropdown"
                    class="hidden md:flex-shrink-0 z-10 md:inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-white border border-gray-300 rounded-l-lg ml-4  "
                    type="button">Categories <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg></button>
                <div id="dropdown" class="z-10 hidden rounded-lg shadow-lg w-120  bg-[#ffffff]">
                    <ul class=" text-sm  text-white" aria-labelledby="dropdown-button">
                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2   hover:bg-tertiary  hover:text-white text-black duration-100">Womens’s
                                & Girls’s Fashion</button>
                        </li>
                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2   hover:bg-tertiary  hover:text-white text-black duration-100">Mens’s
                                & Boys’ Fashion</button>
                        </li>
                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2   hover:bg-tertiary  hover:text-white text-black duration-100">Health
                                & Beauty</button>
                        </li>
                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2   hover:bg-tertiary  hover:text-white text-black duration-100">
                                Sports & Outdoors</button>
                        </li>

                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2   hover:bg-tertiary  hover:text-white text-black duration-100">
                                Jewelry</button>
                        </li>


                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2   hover:bg-tertiary  hover:text-white text-black duration-100">
                                Watches</button>
                        </li>


                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2   hover:bg-tertiary  hover:text-white text-black duration-100">
                                Home & Lifestyle</button>
                        </li>


                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2   hover:bg-tertiary  hover:text-white text-black duration-100">
                                Mother & Baby</button>
                        </li>


                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2   hover:bg-tertiary  hover:text-white text-black duration-100">
                                Bags</button>
                        </li>


                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2   hover:bg-tertiary  hover:text-white text-black duration-100">
                                Groceries</button>
                        </li>



                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2   hover:bg-tertiary  hover:text-white text-black duration-100">
                                Tv & Home Appliances</button>
                        </li>


                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2   hover:bg-tertiary  hover:text-white text-black duration-100">
                                Electronics Devices</button>
                        </li>

                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2   hover:bg-tertiary  hover:text-white text-black duration-100">
                                Others</button>
                        </li>



                    </ul>
                </div>
                <!-- search bar - desktop -->
                <div class="relative md:w-[200px]">
                    <input type="search" id="search-dropdown"
                        class="md:w-[300px] w-[200px] hidden md:block p-2.5  z-20 text-sm text-gray-900  md:rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300  focus:border-tertiary "
                        placeholder="Search..." required>

                </div>


            </div>



        </form>
        <img class="h-7 mt-1 order-3 mr-4 cursor-pointer" src="./cart.svg" alt="">

    </nav>
    <!-- end second navbar navbar -->







<!-- start slide  -->









<!-- end slide  -->












<!-- start footer -->

<div class=" w-full bg-secondary md:h-[200px] h-auto mt-2 " >
<div class="py-4 flex md:justify-around justify-center flex-wrap text-center md:text-justify">
    <div class="">
        <h3 class="text-md font-bold">Customer Care</h3>
        <span class="block mt-3">FAQs</span>
        <span class="block">Exchange Points</span>
        <span class="block">Privacy & Policy</span>
        <span class="block">Sells on Shop</span>
      
    </div>
    <div class="">
        <h3 class="text-md font-bold">Shop</h3>
        <span class="block mt-3">Trending Products</span>
        <span class="block">Best Sellers Products</span>
        <span class="block">New Products</span>
    </div>

    <div class="">
            <h3 class="text-md font-bold">Contact Us</h3>
            <span class="block mt-3">Email : trendhub2022@gmail.com</span>
            <span class="block">Phone : 09 40-355-9701</span>
            <span class="block">Address : No.1200, room (6B),</span>
            <span class="block">Yadanaar Street, South Oakkalapa</span>
            <span class="block">Yangon, Myanmar</span>
       
       
    </div>
    <div class="">
            <h3 class="text-md font-bold text-center">Follow Us</h3>
           <div class="flex justify-between mt-3">
            <div>
                <img src="./facebook.svg" alt=""> 
             </div>
             <div>
                 <img src="./ig.svg" alt="">
             </div>
             <div>
                 <img src="./twitter.svg" alt="">
             </div>
           </div>
        </div>
</div>
<span class="text-center">Copyright © 2023 TrendHub  | Created by X-Tech</span>
</div>
<!-- end footer -->



    <script>

        // start mobile menu 
        function Menu(e) {
            let list = document.querySelector("ul");
            e.name === "menu"
                ? ((e.name = "close"),
                    list.classList.add("top-[80px]"),
                    list.classList.add("opacity-100"),
                    list.classList.add("bg-[white]"))

                : ((e.name = "menu"),
                    list.classList.remove("top-[80px]"),
                    list.classList.remove("opacity-100"));
        }
        // end mobile menu

     
        function showCategory() {
            const category = document.getElementById('category');
            category.classList.toggle('hidden');
        }

        document.addEventListener('click', function (event) {
            const category = document.getElementById('category');
            const isClickInsideBox = category.contains(event.target);
            const isClickOnImage = event.target.tagName === 'IMG';

            if (!isClickInsideBox && !isClickOnImage) {
                category.classList.add('hidden');
            }
        });


    </script>
</body>

</html>