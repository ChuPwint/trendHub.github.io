<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>review</title>

    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <link rel="stylesheet" href="../resources/css/background/background.css">
    <script src="../resources/lib/jquery3.6.0.js"></script>
</head>

<body class="merchantBg w-screen h-screen">
    <!--Start of detail card-->

    <div class="bg-white flex flex-col justify-center rounded-md items-center shadow-md w-3/4 ">

        <div class="bg-tertiary w-full p-8 m-4 rounded-md flex flex-row justify-between">

            <!-- Product Details -->
            <div class=" flex flex-row">
                <div id="productDetail" class="flex-shrink-0">
                    <img class="w-24 mt-8" src="../resources/img/reviewProduct/download 2.png" alt="T-shirt">
                </div>
                <div class="flex flex-col justify-center ml-4">
                    <div class="font-bold text-xl mb-2">T-shirt</div>
                    <div class="text-gray-700">
                        <p>
                            <span class="font-semibold">Stock:</span> 20
                        </p>
                        <p>
                            <span class="font-semibold">Price:</span> $750.00
                        </p>
                    </div>
                </div>
            </div>

            <!-- Review Summary -->
            <div class=" ml-4">
                <p class="text-xl font-bold underline">Rating & Reviews</p>
                <div class="mt-3 flex justify-between items-center">
                    <!-- Summary of review of the item -->
                    <div class="md:flex-none md:mr-5">
                        <p class="font-bold text-lg"><span class="rating text-4xl">4.0</span> / 5.0</p>
                        <p><span class="total_rating">20</span> ratings</p>
                    </div>

                    <!-- Stars and how many stars given -->
                    <div class="md:flex-grow md:border-r md:border-gray-500">
                        <!-- ... Review stars HTML here ... -->
                        <div class="flex justify-start items-center mb-3">
                            <img class="w-24" src="../resources/img/reviewProduct/5stars.svg" alt="">
                            <div class="rating_five text-lg mx-3"></div>
                        </div>
                        <div class="flex justify-start items-center mb-3">
                            <img class="w-24" src="../resources/img/reviewProduct/4stars.svg" alt="">
                            <div class="rating_four text-lg mx-3">15</div>
                        </div>
                        <div class="flex justify-start items-center mb-3">
                            <img class="w-24" src="../resources/img/reviewProduct/3stars.svg" alt="">
                            <div class="rating_three text-lg mx-3">5</div>
                        </div>
                        <div class="flex justify-start items-center mb-3">
                            <img class="w-24" src="../resources/img/reviewProduct/2stars.svg" alt="">
                            <div class="rating_two text-lg mx-3"></div>
                        </div>
                        <div class="flex justify-start items-center">
                            <img class="w-24" src="../resources/img/reviewProduct/1star.svg" alt="">
                            <div class="rating_one text-lg mx-3"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div>
            <!-- Start of user reviews -->
            <div class="mt-5">
                <div class="bg-productCardBgColor py-5 px-5 shadow-md">
                    <div class="flex justify-between items-center">
                        <!-- user img and rating star img -->
                        <div class="flex justify-start items-center">
                            <img class="w-10" src="../resources/img/reviewProduct/c2 3.png" alt="">
                            <img class="ml-2 w-24 review_userRatingImg" src="../resources/img/reviewProduct/4stars.svg" alt="">
                        </div>
                        <!-- Date review written -->
                        <div>
                            <p class="review_createDate text-lg">2023/07/20</p>
                        </div>
                    </div>
                    <p class="review_title font-bold text-lg pl-12">Nice graphics</p>
                    <img class="review_photo mt-3 pl-12" src="../resources/img/reviewProduct/images 5.png" alt="">
                    <p class="review_text mt-3">Lorem ipsum dolor sit amet consectetur. Eu dictumst orci egestas vitae donec. Pretium quis duis aliquam feugiat. Arcu commodo faucibus facilisis ut amet duis nullam tincidunt egestas. Senectus elit dignissim in cras nibh.</p>
                </div>
                <div class="replies mt-2 pl-10">
                    <div class="bg-productCardBgColor py-5 px-5 shadow-md">
                        <div class="font-bold text-lg mb-3"><ion-icon class="mr-2" name="arrow-undo-sharp"></ion-icon>Replied</div>
                        <div class="flex justify-between items-center">
                            <!-- user img and rating star img -->
                            <div class="flex justify-start items-center">
                                <img class="w-10" src="../resources/img/reviewProduct/c2 3.png" alt="">
                                <img class="ml-2 w-24 review_userRatingImg" src="../resources/img/reviewProduct/4stars.svg" alt="">
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
        </div>
        <!-- End of user reviews -->
    </div>

</body>

</html>