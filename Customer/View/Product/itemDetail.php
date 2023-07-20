<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Detail</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css">
    <link rel="stylesheet" href="../resources/css/itemDetail.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="bg-primary font-roboto">
    <!--Start of detail card-->
    <div class="py-10 px-5 md:px-28 md:py-6">
        <div class="bg-productCardBgColor flex flex-col justify-center items-center md:flex-row md:w-99">
            <!-- image half -->
            <div class="p-5 mb-3 flex justify-center items-center">
                <img class="p_detail_img w-[80%] md:w-full" src="../resources/img/item_detail/cpu-nb 384.png" alt="">
            </div>

            <!-- detail info -->
            <div class="p-5 bg-secondary">
                <!-- product detail text -->
                <p class="font-semibold mb-5">MSI Summit E13 Flip Evo 13.4" FHD+ 120hz Touch 2 in 1 Business Laptop: Intel Core i7-1260P Iris Xe 32GB LPDDR5 1TB NVMe SSD, 360-Degree Flip, Thunderbolt 4, MSI Pen, Win 11</p>
                
                <!-- brand and seller -->
                <div class="md:flex md:flex-row md:justify-between md:items-center">
                    <p class="font-semibold mb-5 md:mb-0">Brand: <span class="brand text-tertiary underline">MSI</span></p>
                    <p class="font-semibold">From: <span class="seller text-tertiary underline">Merchant</span></p>
                </div>
                <hr class="mt-4 mb-4 border-black border-opacity-50">

                <!-- price and (quantity increase button or stars) -->
                <div class="flex justify-between items-center">
                    <p class="font-bold text-xl text-tertiary">Ks <span class="price">4,750,000</span></p>
                    <div class="hidden text-tertiary text-xl md:block">
                        <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star-outline" class="text-gray-500"></ion-icon>
                    </div>
                    <p class="font-semibold md:hidden">
                        Qty: 
                        <button class="cursor-pointer ml-2 px-2 font-semibold bg-productCardBgColor rounded-lg">-</button>
                        <input type="number" name="qty" value="1" class="text-xl text-center w-10 h-10 rounded-md bg-[#F7F7F7]">
                        <button class="cursor-pointer px-2 font-semibold text-center bg-productCardBgColor rounded-lg">+</button>
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
                        <ion-icon name="heart-circle" class="cursor-pointer text-4xl mr-10 text-gray-400"></ion-icon>
                        <ion-icon name="share-social" class="cursor-pointer text-4xl"></ion-icon>
                    </div>
                    <button class="md:block md:mb-5 md:w-72 hidden cursor-pointer font-bold text-lg px-5 py-2 rounded-md bg-white border border-borderOrange">Add to Wishlist</button>
                    <button class="cursor-pointer font-bold text-lg px-5 py-2 rounded-md bg-tertiary text-white md:w-72">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
    <!--End of detail card-->

    <!-- Start of product description -->
    <div class="px-5 md:px-28">
        <div class="bg-productCardBgColor py-5 px-5">
            <p class="text-xl font-bold underline mb-5">Product Description</p>
            <p class="p_descript md:pl-8">Engineered to deliver devastation in and out of the arena, the Legion 5 Pro deploys Intel Core processing and NVIDIA GeForce RTX graphics to dish out high-resolution gaming.</p>
        </div>
    </div>
    <!-- End of product description -->

    <!-- Start of reviews summary -->
    <div class="px-5 mt-8 md:px-28 bg-productCardBgColor">
        <p class="text-xl px-5 py-5 font-bold underline">Rating & Reviews</p>

        <div class="mt-3 px-10 flex justify-between items-center">
            <!-- summary of review of the item -->
            <div>
                <p class="font-bold text-lg"><span class="rating text-4xl">4.0</span> / 5.0</p>
                <p><span class="total_rating">20</span> ratings</p>
            </div>

            <!-- stars and how many stars given -->
            <div class="text-xl text-tertiary">
                <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                <span class="rating_five text-black"></span>
                <br>
                <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star-outline" class="text-gray-500"></ion-icon>
                <span class="rating_four text-black">15</span>
                <br>               
                <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star-outline" class="text-gray-500"></ion-icon><ion-icon name="star-outline" class="text-gray-500"></ion-icon>
                <span class="rating_three text-black">5</span>
                <br>                
                <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star-outline" class="text-gray-500"></ion-icon><ion-icon name="star-outline" class="text-gray-500"></ion-icon><ion-icon name="star-outline" class="text-gray-500"></ion-icon>
                <span class="rating_two text-black"></span>
                <br>     
                <ion-icon name="star"></ion-icon><ion-icon name="star-outline" class="text-gray-500"></ion-icon><ion-icon name="star-outline" class="text-gray-500"></ion-icon><ion-icon name="star-outline" class="text-gray-500"></ion-icon><ion-icon name="star-outline" class="text-gray-500"></ion-icon>
                <span class="rating_one text-black"></span>
            </div>
        </div>

        <div class="mt-6 text-center">
            <p class="font-semibold text-lg">Review this product after buying</p>
            <p>Share your thoughts with other customers!</p>
        </div>
        <hr class="mt-6 mb-4 border-black border-opacity-50">
    </div>
    <!-- End of reviews summary -->
    <!-- Start of user reviews -->
    <div class="py-10 px-5 md:px-28 bg-productCardBgColor">
        <div>
            
        </div>
    </div>
    <!-- End of user reviews -->
</body>

</html>