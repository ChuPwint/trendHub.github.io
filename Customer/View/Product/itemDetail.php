<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Detail</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../resources/lib/jquery3.6.0.js"></script>
    <link rel="stylesheet" href="https://cdn.korzh.com/metroui/v4.5.1/css/metro-all.min.css">
    <style>
        #rating-events+ul li {
            width: 50px;
            height: 50px;
            font-size: 50px;
        }
    </style>
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

                <div class="">
                    <p class="text-xl font-bold underline">Rating & Reviews</p>
                    <p class="mt-3 text-gray-500">1072 Global Ratings</p>
                    <div class="mt-3">
                        <div class="flex space-x-3">
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">5 star</span>
                            <div class="flex items-center mb-3">
                                <div class="w-64 bg-gray-200 rounded h-2.5 dark:bg-gray-700 mr-2">
                                    <div class="bg-tertiary h-2.5 rounded dark:bg-blue-500" style="width: 88%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">88%</span>
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

    <!-- Start of Modal Pop Up -->

    <!-- Modal background -->
    <div id="reviewPopup" class="hidden">
        <div class="z-10 fixed top-0 w-full h-screen pt-2 bg-[rgba(0,0,0,0.5)] flex justify-center items-center">
            <div class="bg-white m-auto p-5 md:p-10 border rounded-sm md:rounded-md w-[80%] md:w-[60%]">
                <form class="container mx-auto px-4 py-8" action="../../Controller/reviewController.php" method="post">
                    <input type="hidden" name="reviewProductID" value="51">
                    <input type="hidden" name="reviewCustomerID" value="17">
                    <h1 class="text-3xl font-semibold mb-4">Create Review</h1>
                    <p class="text-lg font-semibold">Overall Rating</p>
                    <input name="rating" id="rating-events" data-role="rating" data-star-color="#F36823" data-stared-color="#F36823" class="mt-3" required>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2" for="message">Review Title</label>
                        <textarea name="reviewTitle" class="w-1/2 px-3 py-3 h-16 resize-none border border-tertiary rounded focus:outline-none " id="message" placeholder="Add a headline review" required></textarea>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2" for="message">Add a written review:</label>
                        <textarea name="reviewText" class="w-full px-3 py-3 h-24 resize-none border border-tertiary rounded focus:outline-none " id="message" placeholder="What do you like or dislike?" required></textarea>

                    </div>
                    <div class="flex justify-end items-center space-x-5">
                        <button type="button" id="cancelReview" class="px-4 py-[6px] border-2 border-tertiary text-tertiary rounded">Cancel</button>
                        <button type="submit" name="submitReview" class="bg-[#F36823] text-white font-semibold px-4 py-2 rounded">
                            Submit Review
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- End of Modal Pop Up -->


    <!-- End of user reviews -->
    <?php
    include "../resources/common/footer.php"
    ?>

    <script src="https://cdn.korzh.com/metroui/v4.5.1/js/metro.min.js"></script>
    <script src="../resources/js/product/itemDetail.js"></script>
    <script>
        $(document).ready(function() {
            $('.reviewNow').click(function() {
                $('#reviewPopup').removeClass("hidden");
            })

            $('#cancelReview').click(function() {
                $('#reviewPopup').addClass("hidden");
            })
        })
    </script>
</body>

</html>