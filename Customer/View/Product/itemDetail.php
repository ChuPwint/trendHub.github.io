<?php
session_start();
$currentDetailProductID = $_SESSION["currentDetailPrdocutID"];
$currentLoginUserID = (isset($_SESSION["currentLoginUser"])) ? $_SESSION["currentLoginUser"] : false; //session
(isset($_SESSION["productDetail"])) ? $productDetail = $_SESSION["productDetail"] : header("Location: ../Error/error.php");
if (isset($_SESSION["averageRating"])) $averageRating = $_SESSION["averageRating"];
if (isset($_SESSION["totalRatedCustomer"])) $totalRatedCustomer = $_SESSION["totalRatedCustomer"];
if (isset($_SESSION["totalFivestarRating"])) $totalFivestarRating = $_SESSION["totalFivestarRating"];
if (isset($_SESSION["totalFourstarRating"])) $totalFourstarRating = $_SESSION["totalFourstarRating"];
if (isset($_SESSION["totalThreestarRating"])) $totalThreestarRating = $_SESSION["totalThreestarRating"];
if (isset($_SESSION["totalTwostarRating"])) $totalTwostarRating = $_SESSION["totalTwostarRating"];
if (isset($_SESSION["totalOnestarRating"])) $totalOnestarRating = $_SESSION["totalOnestarRating"];
if (isset($_SESSION["reviews"])) $totalReviews =  $_SESSION["reviews"];

?>

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

        .navUL {
            display: flex !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        .navUL li {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
            scrollbar-width: none;
        }

        .cart_item {
            top: -2px !important;
            right: -8px !important;
        }

        .secondNav {
            padding-left: 28px !important;
            padding-right: 28px !important;
        }
    </style>
</head>

<body class="bg-primary font-roboto scrollbar-hide">
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
        <div class="bg-productCardBgColor flex flex-col justify-evenly items-center shadow-md md:flex-row md:w-99 md:py-5">
            <!-- image half -->
            <img class="p_detail_img w-[80%] md:max-w-[250px]" src="../../../<?= $productDetail[0]["p_path"] ?>" alt="">

            <!-- detail info -->
            <div class="p-5 bg-secondary">
                <!-- product detail text -->
                <p class="font-semibold mb-5"><?= $productDetail[0]["p_detail"] ?></p>

                <!-- brand and seller -->
                <div class="md:flex md:justify-between md:items-center">
                    <p class="font-semibold">Brand: <span class="brand text-tertiary"><?= $productDetail[0]["brand_name"] ?></span></p>
                    <p class="font-semibold">From: <span class="seller text-tertiary"><?= $productDetail[0]["m_name"] ?></span></p>
                </div>
                <hr class="mt-4 mb-4 border-black border-opacity-50">

                <!-- price and (quantity increase button or stars) -->
                <div class="flex justify-between items-center">
                    <p class="font-bold text-xl text-tertiary">Ks <span class="price"><?= number_format($productDetail[0]["sell_price"]) ?></span></p>
                    <!-- <img class="hidden md:block w-24" src="../resources/img/item_detail/4stars.svg" alt=""> -->
                    <input id="" data-role="rating" data-stared-color="#F36823" data-static="true" data-value="<?= $averageRating ?>">
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
            <p class="p_descript md:pl-8"><?= $productDetail[0]["p_description"] ?></p>
        </div>
    </div>
    <!-- End of product description -->

    <!-- Start of reviews summary -->
    <div class="px-5 md:px-28 mt-8">
        <div class="bg-productCardBgColor py-5 px-5 shadow-md">


            <div class="flex justify-evenly space-x-[200px] items-center">
                <div class="">
                    <p class="text-xl font-bold underline">Rating & Reviews</p>
                    <p class="mt-3 text-gray-500"><?= $totalRatedCustomer ?> Global Ratings</p>
                    <div class="mt-3">
                        <div class="flex space-x-3">
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">5 star</span>
                            <div class="flex items-center mb-3">
                                <div class="w-64 bg-gray-200 rounded h-2.5 dark:bg-gray-700 mr-2">
                                    <?php
                                    $width = ($totalRatedCustomer = "none") ? 0 : (100 * $totalFivestarRating) / $totalRatedCustomer;
                                    ?>
                                    <div class="bg-tertiary h-2.5 rounded dark:bg-blue-500" style="width: <?= $width ?>%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400"><?= round($width) ?>%</span>
                            </div>
                        </div>

                        <div class="flex space-x-3">
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">4 star</span>
                            <div class="flex items-center mb-3">
                                <div class="w-64 bg-gray-200 rounded h-2.5 dark:bg-gray-700 mr-2">
                                    <?php
                                    $width = ($totalRatedCustomer = "none") ? 0 : (100 * $totalFourstarRating) / $totalRatedCustomer;
                                    ?>
                                    <div class="bg-tertiary h-2.5 rounded dark:bg-blue-500" style="width: <?= $width ?>%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400"><?= round($width) ?>%</span>
                            </div>
                        </div>

                        <div class="flex space-x-3">
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">3 star</span>
                            <div class="flex items-center mb-3">
                                <div class="w-64 bg-gray-200 rounded h-2.5 dark:bg-gray-700 mr-2">
                                    <?php
                                    $width = ($totalRatedCustomer = "none") ? 0 : (100 * $totalThreestarRating) / $totalRatedCustomer;
                                    ?>
                                    <div class="bg-tertiary h-2.5 rounded dark:bg-blue-500" style="width: <?= $width ?>%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400"><?= round($width) ?>%</span>
                            </div>
                        </div>

                        <div class="flex space-x-3">
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">2 star</span>
                            <div class="flex items-center mb-3">
                                <div class="w-64 bg-gray-200 rounded h-2.5 dark:bg-gray-700 mr-2">
                                    <?php
                                    $width = ($totalRatedCustomer = "none") ? 0 : (100 * $totalTwostarRating) / $totalRatedCustomer;
                                    ?>
                                    <div class="bg-tertiary h-2.5 rounded dark:bg-blue-500" style="width: <?= $width ?>%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400"><?= round($width) ?>%</span>
                            </div>
                        </div>

                        <div class="flex space-x-3">
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">1 star</span>
                            <div class="flex items-center mb-3">
                                <div class="w-64 bg-gray-200 rounded h-2.5 dark:bg-gray-700 mr-2">
                                    <?php
                                    $width = ($totalRatedCustomer = "none") ? 0 : (100 * $totalOnestarRating) / $totalRatedCustomer;
                                    ?>
                                    <div class="bg-tertiary h-2.5 rounded dark:bg-blue-500" style="width: <?= $width ?>%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400"><?= round($width) ?>%</span>
                            </div>
                        </div>

                    </div>

                </div>


                <!-- desktop view -->
                <div class="hidden text-center md:block md:ml-5 md:flex-none">
                    <p class="font-semibold text-lg">Review this product after buying</p>
                    <p>Share your thoughts with other customers!</p>
                    <small class="text-red-400"><?php
                                                if (isset($_SESSION["cannotReview"])) echo $_SESSION["cannotReview"];
                                                if (isset($_SESSION["alreadyReview"])) echo $_SESSION["alreadyReview"]
                                                ?></small>
                    <div>
                        <button class="bg-tertiary text-white px-4 py-1 rounded mt-3 reviewNow">Review Now</button>
                    </div>
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
        <?php
        foreach ($totalReviews as $review) {
            $firstLetterOfName =  substr($review["c_name"], 0, 1);
        ?>
            <div class="bg-productCardBgColor py-5 px-5 shadow-md mt-5">
                <div class="flex justify-between items-center">
                    <!-- user img and rating star img -->
                    <div class="flex justify-start items-center">
                        <div class="rounded-[50%] bg-tertiary w-10 h-10 flex justify-center items-center text-xl text-white"><?= $firstLetterOfName ?></div>
                        <input class="ml-2" data-role="rating" data-stared-color="#F36823" data-static="true" data-value="<?= $review["rating"] ?>">
                    </div>
                    <!-- Date review written -->
                    <div>
                        <p class="review_createDate text-lg"><?= $review["create_date"] ?></p>
                    </div>
                </div>
                <p class="review_title font-bold text-lg pl-12"><?= $review["review_title"] ?></p>
                <p class="review_text mt-3 pl-12"><?= $review["review_text"] ?></p>
            </div>

            <?php
            if ($review["reply_text"] != null) {
                $repliedMerchant = ($review["m_bname"] != null) ? $review["m_bname"] : $review["m_name"];
            ?>
                <div class="replies mt-2 pl-10">
                    <div class="bg-productCardBgColor py-5 px-5 shadow-md">
                        <div class="font-bold text-lg mb-3"><ion-icon class="mr-2" name="arrow-undo-sharp"></ion-icon>Replied</div>

                        <!-- Date review written -->
                        <div class="flex justify-between items-center">
                            <p class="font-bold text-lg pl-6">From: <span class="text-tertiary"><?= $repliedMerchant ?></span></p>
                            <p class="review_createDate text-lg"><?= $review["update_date"] ?></p>
                        </div>

                        <p class="review_text mt-3 pl-12"><?= $review["reply_text"] ?></p>
                    </div>
                </div>

            <?php } ?>

        <?php } ?>
    </div>
    <!-- Start of Modal Pop Up -->

    <!-- Modal background -->
    <div id="reviewPopup" class="hidden">
        <div class="z-10 fixed top-0 w-full h-screen pt-2 bg-[rgba(0,0,0,0.5)] flex justify-center items-center">
            <div class="bg-white m-auto p-5 md:p-10 border rounded-sm md:rounded-md w-[80%] md:w-[60%]">
                <form class="container mx-auto px-4 py-8" action="../../Controller/reviewController.php" method="post">
                    <input type="hidden" name="reviewProductID" value="<?= $currentDetailProductID ?>">
                    <input type="hidden" name="reviewCustomerID" value="<?= $currentLoginUserID ?>">
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
                    <div class="flex justify-end items-center space-x-5 mt-3">
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

<?php

unset($_SESSION["cannotReview"]);
unset($_SESSION["alreadyReview"]);
?>