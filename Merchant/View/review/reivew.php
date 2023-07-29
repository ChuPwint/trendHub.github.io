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




    <!-- start review -->
    <div id="modalReview" class="modal  fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
        <div class="modal-content bg-[#FEFEFE] w-[1000px] h-[650px] rounded shadow-md relative">
            <span class=" font-semibold text-lg px-5 block mt-3 ">Item's Reviews</span>
            <button onclick="hideReview(),hideDetail()" class="absolute top-4 right-4 text-gray-700 hover:text-gray-900">
                <svg class="h-6 w-6 text-[#F36823] " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <div class="w-[950px] h-[180px] mt-[25px] mx-auto flex justify-between">
                <div class="flex">
                    <div class="w-32">
                        <img src="../resources/img/reviewProduct/download 2.png" alt="">
                    </div>
                    <div class="text-md font-semibold ml-2 ">
                        <span>Name : T-shirt</span><br>
                        <span>Stock : 20</span><br>
                        <span>Price : $750.00</span>
                    </div>
                </div>

                <div class="rating pr-10 w-[230px]">
                    <h1 class="text-xl font-semibold underline tracking-wider ">Rating & Reviews</h1>
                    <div class="flex">
                        <div>
                            <span class="text-2xl font-semibold">4.0/</span>
                            <span>5</span>
                            <span class="text-md  block">20 ratings</span>
                        </div>

                        <div class="flex flex-col">
                            <div class="rating text">
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="">15</span>


                            </div>

                            <div class="rating text">
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="">&#9733;</span>
                                <span class="">5</span>


                            </div>

                            <div class="rating text">
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="">&#9733;</span>
                                <span class="">&#9733;</span>
                                <span></span>
                            </div>

                            <div class="rating text">
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="">&#9733;</span>
                                <span class="">&#9733;</span>
                                <span class="">&#9733;</span>
                                <span></span>
                            </div>


                            <div class="rating text">
                                <span class="starColor">&#9733;</span>
                                <span class="">&#9733;</span>
                                <span class="">&#9733;</span>
                                <span class="">&#9733;</span>
                                <span class="">&#9733;</span>
                                <span></span>
                            </div>
                        </div>

                    </div>
                </div>


            </div>


            <div class="w-[900px] h-[100px] mx-auto bg-[#F7F7F7] shadow-sm">
                <div class="w-[900px] h-[30px] relative px-4 py-4">
                    <div class="profile flex ">
                        <div class="w-[30px] h-[30px] rounded-full mt-1">
                            <img class="leading-[30px]" src="../resources/img/reviewProduct/c2 3.png" alt="">
                            <div class="rating text flex ">
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="">&#9733;</span>



                            </div>
                        </div>

                        <span class=" font-semibold text-lg p-2">User A</span>


                        <div>
                            <span class="absolute right-0">2023/07/12</span>
                            <button class="replyBtn px-5 rounded-sm py-1 bg-[#304547] text-white absolute right-0 top-10" >Reply</button>
                        </div>
                    </div>
                    <span class="mt-3 block">Lorem ipsum dolor sit amet consectetur. Eu dictumst orci egestas vitae donec. </span>
                </div>


            </div>

            <!-- reply review -->
            <div class="w-[850px] h-[100px]  ml-[100px] bg-[#F7F7F7] mt-2 shadow-sm px-4 py-4 hidden" id="reply">

                <div>
                    <span class="text-md font-semibold">
                        <img class="inline" src="../resources/img/reviewProduct/arrow.svg" alt="">
                        Reply to UserA</span>
                </div>
                <div class="mt-1">
                    <input type="text" placeholder="Message" class="w-[320px] h-[40px] border border-black rounded-sm ml-5 pl-4">
                    <button class="replySend px-5 rounded-sm py-1 bg-[#304547] text-white">Reply</button>
                </div>

            </div>

            <div class="w-[900px] h-[100px] mx-auto bg-[#F7F7F7] mt-2 shadow-sm">
                <div class="w-[900px] h-[30px] relative px-4 py-4">
                    <div class="profile flex ">
                        <div class="w-[30px] h-[30px] rounded-full mt-1">
                            <img class="leading-[30px]" src="../resources/img/reviewProduct/c2 3.png" alt="">
                            <div class="rating text flex">
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="">&#9733;</span>



                            </div>
                        </div>

                        <span class=" font-semibold text-lg ">User A</span>


                        <div>
                            <span class="absolute right-0">2023/07/12</span>
                            <button class=" px-5 rounded-sm py-1 bg-[#304547] text-white absolute right-0 top-10">Reply</button>
                        </div>
                    </div>
                    <span class="mt-3 block">Lorem ipsum dolor sit amet consectetur. Eu dictumst orci egestas vitae donec. </span>
                </div>


            </div>



        </div>
    </div>


    <!-- end review -->
    <script>
         $(document).ready(function() {
            $(".replyBtn").click(function() {
                // Hide all other screens and show screenOne

                $("#reply").removeClass("hidden");
                


            });
            $(".replySend").click(function() {
                // Hide all other screens and show screenOne

                $("#reply").addClass("hidden");
                $(".replyBtn").removeClass("hidden");
            
                


            });
        });
    </script>
</body>

</html>