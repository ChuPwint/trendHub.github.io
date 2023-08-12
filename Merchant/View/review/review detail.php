<?php
include "../../Controller/allReview/customerReviewController.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../resources/js/review.js" defer></script>

    <script src="../resources/lib/jquery3.6.0.js"></script>
</head>

<body>
    <input type="hide" id="reviewID" value="53">
    <div id="showReview"   class="changeStatusBtn p-2 text-center underline font-semibold cursor-pointer">
       See Review
 
    </div>
    <!-- start review -->
    <div id="modalReview" class="modal hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
        <div class="modal-content bg-[#FEFEFE] w-[1000px] h-[650px] rounded shadow-md relative">
            <span class=" font-semibold text-lg px-5 block mt-3 ">Item's Reviews and Ratings</span>
            <button id="hideReview" class="absolute top-4 right-4 text-gray-700 hover:text-gray-900">
                <svg class="h-6 w-6 text-[#F36823] " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <div class="w-[950px] h-[180px] mt-[25px] mx-auto flex justify-between">
                <div class="flex">
                    <div>
                        <img id="reviewImg" class="w-[100px]" src="" alt="">
                    </div>
                    <div class="text-md font-semibold ml-2 ">
                        <span>Name : <span id="reviewProductName"></span></span><br>
                    </div>
                </div>
            </div>

            <div id="customerReviews" class=" h-[300px] overflow-y-scroll">
                <!-- 1st -->
                <!-- <div class="w-[900px] h-[100px] mx-auto bg-[#F7F7F7] p-2">
                    <div class="w-[900px] h-[30px] relative">
                        <div class="profile flex ">
                            <div class="w-[30px] h-[30px] rounded-full mt-1">
                                <img class="leading-[30px] -mt-1" src="../resources/img/profile/default_pic" alt="">
                                <div class="rating text flex">
                                    <span class="starColor">&#9733;</span>
                                    <span class="starColor">&#9733;</span>
                                    <span class="starColor">&#9733;</span>
                                    <span class="starColor">&#9733;</span>
                                    <span class="">&#9733;</span>
                                </div>
                            </div>
                            <p class=" font-semibold text-lg ml-2">User A</p>
                            <div>
                                <span class="absolute right-4">2023/07/12</span>
                            </div>
                        </div>
                        <span class="mt-3 block">Lorem ipsum dolor sit amet consectetur. Eu dictumst orci egestas vitae donec. </span>
                    </div>
                </div>  -->

                <!-- reply -->
                <!-- <div class="w-[850px] h-[100px]  ml-[100px] bg-[#F7F7F7] mt-2">

                    <div>
                        <span class="text-md font-semibold">
                            <img class="inline" src="../resources/img/Admin Product/arrow.svg" alt="">
                            Reply to UserA</span>
                    </div>
                    <form class="mt-1" action="../../Controller/manageProducts/replyReviewController.php" method="post">
                        <input type="hidden" name="replyCustomerID">
                        <input type="hidden" name="productDetailID">
                        <input type="text" placeholder="Message" class="w-[320px] h-[40px] border border-black rounded-sm ml-5 pl-4">
                        <button type="submit" class="px-5 rounded-sm py-1 bg-[#304547] text-white">Reply</button>
                    </form>

                </div> -->
            </div>




        </div>
    </div>


    <!-- end review -->
</body>

</html>