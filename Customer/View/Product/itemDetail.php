<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Detail</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?=time() ?>">
    <link rel="stylesheet" href="../resources/css/itemDetail.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../resources/js/product/itemDetail.js" defer></script>
</head>

<body class="bg-primary font-roboto px-5 md:px-28">
    <!--Start of detail card-->
    <div class="py-10 md:py-6">
        <div class="bg-productCardBgColor flex flex-col justify-center items-center shadow-md md:flex-row md:w-99">
            <!-- image half -->
            <div class="p-5 mb-3 flex justify-center items-center md:flex-grow md:w-[60%]">
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
                        <input type="number" name="qty" value="1" class="quantityInput text-xl text-center w-10 h-10 rounded-md bg-[#F7F7F7]">
                        <button class="plusBtn cursor-pointer px-2 font-semibold text-center bg-productCardBgColor rounded-lg">+</button>
                    </p>
                </div>

                <!-- hidden in desktop view(qty and share icon) -->
                <div class="hidden md:mt-5 md:flex md:justify-between md:items-center">
                    <p class="font-semibold">
                        Qty:
                        <button class="cursor-pointer ml-2 px-2 font-semibold bg-productCardBgColor rounded-lg">-</button>
                        <input type="number" name="qty" value="1" class="text-xl text-center w-10 h-10 rounded-md bg-productCardBgColor">
                        <button class="cursor-pointer px-2 font-semibold text-center bg-productCardBgColor rounded-lg">+</button>
                    </p>
                    <ion-icon name="share-social" class="cursor-pointer text-4xl"></ion-icon>
                </div>

                <!-- icons or button for wishlist and add to cart -->
                <div class="mt-6 flex justify-between items-center md:flex-col">
                    <div class="md:hidden">
                        <ion-icon id="heartIcon" name="heart-circle" class="wishlistAdd cursor-pointer text-4xl mr-10 text-gray-400"></ion-icon>
                        <ion-icon name="share-social" class="cursor-pointer text-4xl"></ion-icon>
                    </div>
                    <button class="wishlistAdd md:block md:mb-5 md:w-72 hidden cursor-pointer font-bold text-lg px-5 py-2 rounded-md bg-white border border-borderOrange">Add to Wishlist</button>
                    <button class="cursor-pointer font-bold text-lg px-5 py-2 rounded-md bg-tertiary text-white md:w-72">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
    <!--End of detail card-->

    <!-- Start of product description -->
    <div>
        <div class="bg-productCardBgColor py-5 px-5 shadow-md">
            <p class="text-xl font-bold underline mb-5">Product Description</p>
            <p class="p_descript md:pl-8">Engineered to deliver devastation in and out of the arena, the Legion 5 Pro deploys Intel Core processing and NVIDIA GeForce RTX graphics to dish out high-resolution gaming.</p>
        </div>
    </div>
    <!-- End of product description -->

    <!-- Start of reviews summary -->
    <div class="mt-8">
        <div class="bg-productCardBgColor py-5 px-5 shadow-md">
            <p class="text-xl font-bold underline">Rating & Reviews</p>

            <div class="mt-3 flex justify-between items-center">
                <!-- summary of review of the item -->
                <div class="md:flex-none md:mr-5">
                    <p class="font-bold text-lg"><span class="rating text-4xl">4.0</span> / 5.0</p>
                    <p><span class="total_rating">20</span> ratings</p>
                </div>

                <!-- stars and how many stars given -->
                <div class="md:flex-grow md:border-r md:border-gray-500 ">
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

                </div>

                <!-- desktop view -->
                <div class="hidden text-center md:block md:ml-5 md:flex-none">
                    <p class="font-semibold text-lg">Review this product after buying</p>
                    <p>Share your thoughts with other customers!</p>
                </div>
            </div>

            <!-- mobile view -->
            <div class="mt-6 text-center block md:hidden">
                <p class="font-semibold text-lg">Review this product after buying</p>
                <p>Share your thoughts with other customers!</p>
            </div>
        </div>
    </div>
    <!-- End of reviews summary -->

    <!-- Start of user reviews -->
    <div class="mt-5">
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
            <img class="review_photo mt-3 pl-12" src="../resources/img/item_detail/images 6.svg" alt="">
            <p class="review_text mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum, laborum?</p>
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
                <img class="review_photo mt-3 pl-12" src="../resources/img/item_detail/images 6.svg" alt="">
                <p class="review_text mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum, laborum?</p>
            </div>
        </div>
    </div>

    <div class="mt-5">
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
            <img class="review_photo mt-3 pl-12" src="" alt="">
            <p class="review_text mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quam odio quibusdam nesciunt reprehenderit consequuntur ab, adipisci labore unde commodi.</p>
        </div>
    </div>
    <!-- End of user reviews -->
</body>

</html>