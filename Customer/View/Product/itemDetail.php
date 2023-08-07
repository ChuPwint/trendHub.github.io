<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Detail</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <link rel="stylesheet" href="../resources/css/itemDetail.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../resources/lib/jquery3.6.0.js"></script>
    <link rel="stylesheet" href="https://cdn.korzh.com/metroui/v4.5.1/css/metro-all.min.css">

</head>

<body class="bg-primary font-roboto">
    <?php
    include "../resources/common/navbar.php";
    ?>

    <div class="mt-36 text-textGray py-2 text-lg md:text-sm md:px-7 px-5">
        <span>Home > </span>
        <span>Search Results ></span>
        <span>Item Details</span>
    </div>

    <!--Start of detail card-->
    <div class="px-5 md:px-28 py-10 md:py-6">
        <div class="bg-productCardBgColor flex flex-col justify-center items-center shadow-md md:flex-row md:w-99">
            <!-- image half -->
            <div class="p-5 mb-3 flex justify-center items-center md:flex-grow md:w-[50%]">
                <img class="p_detail_img w-[80%] md:w-full" src="../resources/img/item_detail/cpu-nb 385.svg" alt="">
            </div>

            <!-- detail info -->
            <div class="p-5 bg-secondary">
                <!-- product detail text -->
                <p class="font-semibold mb-5">MSI Summit E13 Flip Evo 13.4" FHD+ 120hz Touch 2 in 1 Business Laptop: Intel Core i7-1260P Iris Xe 32GB LPDDR5 1TB NVMe SSD, 360-Degree Flip, Thunderbolt 4, MSI Pen, Win 11</p>

                <!-- brand and seller -->
                <div class="md:flex md:flex-row md:justify-between md:items-center">
                    <p class="font-semibold mb-5 md:mb-0">Brand: <span class="brand text-tertiary">MSI</span></p>
                    <p class="font-semibold">From: <span class="seller text-tertiary">Merchant</span></p>
                </div>
                <hr class="mt-4 mb-4 border-black border-opacity-50">

                <!-- price and (quantity increase button or stars) -->
                <div class="flex justify-between items-center">
                    <p class="font-bold text-xl text-tertiary">Ks <span class="price">4,750,000</span></p>
                    <img class="hidden md:block w-24" src="../resources/img/item_detail/4stars.svg" alt="">
                    <p class="font-semibold md:hidden">
                        Qty:
                        <button class="minusBtn cursor-pointer ml-2 px-2 font-semibold bg-productCardBgColor rounded-lg disabled bg-opacity-50 text-gray-200">-</button>
                        <input type="number" name="qty" value="1" class="quantityInput text-xl text-center w-10 h-10 rounded-md bg-productCardBgColor">
                        <button class="plusBtn cursor-pointer px-2 font-semibold text-center bg-productCardBgColor rounded-lg">+</button>
                    </p>
                </div>

                <!-- hidden in desktop view(qty and share icon) -->
                <div class="hidden md:mt-5 md:flex md:justify-between md:items-center">
                    <p class="font-semibold">
                        Qty:
                        <button class="minusBtn cursor-pointer ml-2 px-2 font-semibold bg-productCardBgColor rounded-lg disabled bg-opacity-50 text-gray-200">-</button>
                        <input type="number" name="qty" value="1" class="quantityInput text-xl text-center w-10 h-10 rounded-md bg-productCardBgColor">
                        <button class="plusBtn cursor-pointer px-2 font-semibold text-center bg-productCardBgColor rounded-lg">+</button>
                    </p>
                    <ion-icon name="share-social" class="cursor-pointer text-4xl shareLinkIcon"></ion-icon>
                </div>

                <!-- icons or button for wishlist and add to cart -->
                <div class="mt-6 flex justify-between items-center md:flex-col">
                    <div class="md:hidden">
                        <ion-icon id="heartIcon" name="heart-circle" class="wishlistAdd cursor-pointer text-4xl mr-10 text-gray-400"></ion-icon>
                        <ion-icon name="share-social" class="cursor-pointer text-4xl shareLinkIcon"></ion-icon>
                    </div>
                    <button id="wishListText" class="wishlistAdd md:block md:mb-5 md:w-72 hidden cursor-pointer font-bold text-lg px-5 py-2 rounded-md bg-white border border-borderOrange">Add to Wishlist</button>
                    <button class="cursor-pointer font-bold text-lg px-5 py-2 rounded-md bg-tertiary text-white md:w-72">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
    <!--End of detail card-->

    <!-- Share Link Modal -->
    <div id="shareLinkModal" class="hidden fixed w-full h-full pt-64 bg-black bg-opacity-50 z-20">
        <div class="bg-white m-auto p-2 border rounded-sm w-[30%]">
            <h2 class="text-xl font-bold mb-4">Share Product</h2>
            <hr>
            <div class="p-3">
                <p class="mb-10">Share this product by copying this link and posting it on social media: </p>
                <div class="mt-4 flex justify-around">
                    www.trendhub.com
                </div>
            </div>
            <div>
                <button class="bg-tertiary px-4 py-2">Close Sharing</button>
            </div>
        </div>
    </div>

    <!-- Start of product description -->
    <div class="px-5 md:px-28 ">
        <div class="bg-productCardBgColor py-5 px-5 shadow-md">
            <p class="text-xl font-bold underline mb-5">Product Description</p>
            <p class="p_descript md:pl-8">Engineered to deliver devastation in and out of the arena, the Legion 5 Pro deploys Intel Core processing and NVIDIA GeForce RTX graphics to dish out high-resolution gaming.</p>
        </div>
    </div>
    <!-- End of product description -->

    <!-- Start of reviews summary -->
    <div class="px-5 md:px-28 mt-8">
        <div class="bg-productCardBgColor py-5 px-5 shadow-md">
            

            <div class="flex justify-evenly space-x-[200px] items-center">


                <!-- <div class="flex items-center mb-5">
    <p class="bg-blue-100 text-blue-800 text-sm font-semibold inline-flex items-center p-1.5 rounded dark:bg-blue-200 dark:text-blue-800">8.7</p>
    <p class="ml-2 font-medium text-gray-900 dark:text-white">Excellent</p>
    <span class="w-1 h-1 mx-2 bg-gray-900 rounded-full dark:bg-gray-500"></span>
    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">376 reviews</p>
    <a href="#" class="ml-auto text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Read all reviews</a>
</div> -->
                <div class="">
                <p class="text-xl font-bold underline">Rating & Reviews</p>
                    <div class="mt-3">
                        <div class="flex space-x-3">
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">5 star</span>
                            <div class="flex items-center mb-3">
                                <div class="w-64 bg-gray-200 rounded h-2.5 dark:bg-gray-700 mr-2">
                                    <div class="bg-tertiary h-2.5 rounded dark:bg-blue-500" style="width: 88%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.8</span>
                            </div>
                        </div>

                        <div class="flex space-x-3">
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">4 star</span>
                            <div class="flex items-center mb-3">
                                <div class="w-64 bg-gray-200 rounded h-2.5 dark:bg-gray-700 mr-2">
                                    <div class="bg-tertiary h-2.5 rounded dark:bg-blue-500" style="width: 88%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.8</span>
                            </div>
                        </div>

                        <div class="flex space-x-3">
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">3 star</span>
                            <div class="flex items-center mb-3">
                                <div class="w-64 bg-gray-200 rounded h-2.5 dark:bg-gray-700 mr-2">
                                    <div class="bg-tertiary h-2.5 rounded dark:bg-blue-500" style="width: 88%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.8</span>
                            </div>
                        </div>

                        <div class="flex space-x-3">
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">2 star</span>
                            <div class="flex items-center mb-3">
                                <div class="w-64 bg-gray-200 rounded h-2.5 dark:bg-gray-700 mr-2">
                                    <div class="bg-tertiary h-2.5 rounded dark:bg-blue-500" style="width: 88%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.8</span>
                            </div>
                        </div>

                        <div class="flex space-x-3">
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">1 star</span>
                            <div class="flex items-center mb-3">
                                <div class="w-64 bg-gray-200 rounded h-2.5 dark:bg-gray-700 mr-2">
                                    <div class="bg-tertiary h-2.5 rounded dark:bg-blue-500" style="width: 88%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.8</span>
                            </div>
                        </div>
                       
                    </div>
                   
                </div>


                <!-- <div class="md:flex-grow md:border-r md:border-gray-500 ">
                    <div class="flex justify-start items-center mb-3">
                        <img class="w-24" src="../resources/img/item_detail/5stars.svg" alt="">
                        <div class="rating_five text-lg mx-3"></div>
                    </div>
                    <div class="flex justify-start items-center mb-3">
                        <img class="w-24" src="../resources/img/item_detail/4stars.svg" alt="">
                        <div class="rating_four text-lg mx-3">15</div>
                    </div>
                    <div class="flex justify-start items-center mb-3">
                        <img class="w-24" src="../resources/img/item_detail/3stars.svg" alt="">
                        <div class="rating_three text-lg mx-3">5</div>
                    </div>
                    <div class="flex justify-start items-center mb-3">
                        <img class="w-24" src="../resources/img/item_detail/2stars.svg" alt="">
                        <div class="rating_two text-lg mx-3"></div>
                    </div>
                    <div class="flex justify-start items-center">
                        <img class="w-24" src="../resources/img/item_detail/1star.svg" alt="">
                        <div class="rating_one text-lg mx-3"></div>
                    </div>

                </div> -->

                <!-- desktop view -->
                <div class="hidden text-center md:block md:ml-5 md:flex-none">
                    <p class="font-semibold text-lg">Review this product after buying</p>
                    <p>Share your thoughts with other customers!</p>
                    <button class="bg-tertiary text-white px-4 py-1 rounded mt-3 reviewNow">Review Now</button>
                </div>
            </div>

            <!-- mobile view -->
            <div class="mt-6 text-center block md:hidden">
                <p class="font-semibold text-lg">Review this product after buying</p>
                <p>Share your thoughts with other customers!</p>
                <button class="bg-tertiary text-white px-4 py-1 rounded mt-3 reviewNow">Review Now</button>
            </div>
        </div>
    </div>
    <!-- End of reviews summary -->

    <!-- Start of user reviews -->
    <div class="mt-5 px-5 md:px-28">
        <div class="bg-productCardBgColor py-5 px-5 shadow-md">
            <div class="flex justify-between items-center">
                <!-- user img and rating star img -->
                <div class="flex justify-start items-center">
                    <img class="w-10" src="../resources/img/item_detail/c2 4.svg" alt="">
                    <img class="ml-2 w-24 review_userRatingImg" src="../resources/img/item_detail/4stars.svg" alt="">
                </div>
                <!-- Date review written -->
                <div>
                    <p class="review_createDate text-lg">2023/07/20</p>
                </div>
            </div>
            <p class="review_title font-bold text-lg pl-12">Nice graphics</p>
            <p class="review_text mt-3 pl-12">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum, laborum?</p>
        </div>
        <div class="replies mt-2 pl-10">
            <div class="bg-productCardBgColor py-5 px-5 shadow-md">
                <div class="font-bold text-lg mb-3"><ion-icon class="mr-2" name="arrow-undo-sharp"></ion-icon>Replied</div>
                <div class="flex justify-between items-center">
                    <!-- user img and rating star img -->
                    <div class="flex justify-start items-center">
                        <img class="w-10" src="../resources/img/item_detail/c2 4.svg" alt="">
                        <img class="ml-2 w-24 review_userRatingImg" src="../resources/img/item_detail/4stars.svg" alt="">
                    </div>
                    <!-- Date review written -->
                    <div>
                        <p class="review_createDate text-lg">2023/07/20</p>
                    </div>
                </div>
                <p class="review_title font-bold text-lg pl-12">Nice graphics</p>
                <p class="review_text mt-3 pl-12">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum, laborum?</p>
            </div>
        </div>
    </div>

    <div class="mt-5 px-5 md:px-28">
        <div class="bg-productCardBgColor py-5 px-5 shadow-md">
            <div class="flex justify-between items-center">
                <!-- user img and rating star img -->
                <div class="flex justify-start items-center">
                    <img class="w-10" src="../resources/img/item_detail/c2 4.svg" alt="">
                    <img class="ml-2 w-24 review_userRatingImg" src="../resources/img/item_detail/4stars.svg" alt="">
                </div>
                <!-- Date review written -->
                <div>
                    <p class="review_createDate text-lg">2023/07/20</p>
                </div>
            </div>
            <p class="review_title font-bold text-lg pl-12">Nice graphics</p>
            <p class="review_text mt-3 pl-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quam odio quibusdam nesciunt reprehenderit consequuntur ab, adipisci labore unde commodi.</p>
        </div>
    </div>

    <!-- Star of Modal Pop Up -->
    <!-- Modal background -->
    <div id="reviewPopup" class="hidden z-1 fixed w-full h-full pt-2 bg-black bg-opacity-50">
        <div class="bg-white m-auto p-5 md:p-10 border rounded-sm md:rounded-md w-[80%] md:w-[60%]">
            <!-- Modal Content -->
            <p class="font-semibold md:text-2xl">Point History</p>
            <hr class="border-black mt-4 mb-4">

            <!-- if user has no points or not logged in users -->
            <!-- <div class="noPointHistory flex flex-col justify-center items-center">
                <img src="../resources/img/point/Empty state concept 1.svg" alt="">
                <span class="text-center font-light mb-3">There is no data.</span>
            </div> -->

            <!-- if user has points -->
            <!-- each point history -->
            <div class="pointHistory shadow-md">
                <p class="text-sm font-bold p-2 pb-4 md:p-4 md:pb-7 md:text-xl">20,000 phone bill</p>
                <div class="bg-secondary p-2 pb-4 md:p-4 md:pb-7">
                    <div class="flex justify-between items-center">
                        <p class="text-tertiary text-sm font-bold md:text-xl"><span>50</span> points</p>
                        <p class="text-tertiary text-sm font-bold md:text-xl">Claimed at <span class="point_claimedDate">2023/07/18</span></p>
                    </div>
                </div>
            </div>
            <!-- each point history -->
            <div class="pointHistory mt-5 shadow-md">
                <p class="text-sm font-bold p-2 pb-4 md:p-4 md:pb-7 md:text-xl">20,000 phone bill</p>
                <div class="bg-secondary p-2 pb-4 md:p-4 md:pb-7">
                    <div class="flex justify-between items-center">
                        <p class="text-tertiary text-sm font-bold md:text-xl"><span>50</span> points</p>
                        <p class="text-tertiary text-sm font-bold md:text-xl">Claimed at <span class="point_claimedDate">2023/07/18</span></p>
                    </div>
                </div>
            </div>
            <!-- each point history -->
            <div class="pointHistory mt-5 shadow-md">
                <p class="text-sm font-bold p-2 pb-4 md:p-4 md:pb-7 md:text-xl">20,000 phone bill</p>
                <div class="bg-secondary p-2 pb-4 md:p-4 md:pb-7">
                    <div class="flex justify-between items-center">
                        <p class="text-tertiary text-sm font-bold md:text-xl"><span>50</span> points</p>
                        <p class="text-tertiary text-sm font-bold md:text-xl">Claimed at <span class="point_claimedDate">2023/07/18</span></p>
                    </div>
                </div>
            </div>

            <!-- Modal Close Button -->
            <div class="flex justify-center md:mt-6">
                <button class="mt-5 bg-tertiary text-white text-center px-8 py-1 rounded-md md:px-10 md:text-lg" onclick="closePointHistory()">Close</button>
            </div>
            <!-- End of Modal Content -->
        </div>
    </div>
    <!-- End of Modal Pop Up -->


    <!-- End of user reviews -->
    <?php
    include "../resources/common/footer.php"
    ?>

<script src="https://cdn.korzh.com/metroui/v4.5.1/js/metro.min.js"></script>
<script src="../resources/js/product/itemDetail.js"></script>
</body>

</html>