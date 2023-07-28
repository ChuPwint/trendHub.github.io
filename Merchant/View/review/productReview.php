<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchant Profile</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <link rel="stylesheet" href="../resources/css/sideBar/sideBar.css">
    <script src="../resources/js/sideBar/sideBar.js" defer></script>
    <script src="../resources/lib/jquery3.6.0.js"></script>
</head>

<body>
    <section class="sectionContainer w-full flex relative">
        <!-- space for the main page to not move -->
        <div id="space" class="hidden w-20 h-screen p-2"></div>
        <!-- Left-side Categories Start-->
        <div id="sideBarContainer" class="bg-tertiary w-20 h-screen p-2">
            <!-- Merchant  -->
            <div class="flex justify-center mb-2 cursor-pointer"><img id="toggleSideBar" class="w-12 h-12 rounded-full shadow-lg border border-slate-200" src="../resources/img/sideBarImg/TH Logo 6.svg" alt=""></div>
            <h1 class="text-lg font-medium text-center hidden sideFull">Merchant's</h1>
            <h2 class="text-xl font-medium text-center hidden text-darkGreenColor sideFull">DASHBOARD</h2>

            <!-- Categories Start-->
            <div class="px-2 mt-5">
                <a href="../allProduct/allProduct.php">
                    <p class="hoverImg py-2 px-2 shadow-md flex justify-center bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                        <img id="allProductHover" src="../resources/img/sideBarImg/all product.png" alt="">
                        <span class="sideFull hidden ml-2">All Products</span>
                    </p>
                </a>
                <a href="../productSubmission/productSubmission.php">
                    <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                        <img id="productSubmitHover" src="../resources/img/sideBarImg/product submission.png" alt="">
                        <span class="sideFull hidden ml-2">Product Submission</span>
                    </p>
                </a>
                <a href="../allOrder/allOrder.php">
                    <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50  hover:bg-darkGreenColor hover:text-white rounded-md cursor-pointer">
                        <img id="allOrderHover" src="../resources/img/sideBarImg/all order.png" alt="">
                        <span class="sideFull hidden ml-2">All Orders</span>
                    </p>
                </a>
                <a href="../review/productReview.php">
                    <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md  bg-darkGreenColor text-white  cursor-pointer">
                        <img id="reviewHover" src="../resources/img/sideBarImg/review hover.png" alt="">
                        <span class="sideFull hidden ml-2">Customer Reviews</span>
                    </p>
                </a>
                <a href="../contactAdmin/contactAdmin.php">
                    <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                        <img id="contactHover" src="../resources/img/sideBarImg/contact.png" alt="">
                        <span class="sideFull hidden ml-2">Contact Admin</span>
                    </p>
                </a>
                <a href="">
                    <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                        <img id="financialHover" src="../resources/img/sideBarImg/financial.png" alt="">
                        <span class="sideFull hidden ml-2">Financials & Payment</span>
                    </p>
                </a>
                <a href="../Notification/notification.php">
                    <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                        <img id="notiHover" src="../resources/img/sideBarImg/notification.png" alt="">
                        <span class="sideFull hidden ml-2">Notifications</span>
                    </p>
                </a>
                <a href="../ProfileEdit/profile.php">
                    <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md  bg-opacity-50  hover:bg-darkGreenColor hover:text-white rounded-md  cursor-pointer">
                        <img id="editProfileHover" src="../resources/img/sideBarImg/edit profile.png" alt="">
                        <span class="sideFull hidden ml-2">Edit Profile</span>
                    </p>
                </a>

                <p id="logoutBtn" class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                    <img id="logOutHover" src="../resources/img/sideBarImg/logout.png" alt="">
                    <span class="sideFull hidden ml-2">Log Out</span>
                </p>
                </a>
            </div>
            <!-- Categories End-->
        </div>
        <!-- Left-side Categories End-->
        <!-- Logout Confirmation Modal -->
        <div id="logoutModal" class="hidden fixed w-full h-full pt-64 bg-black bg-opacity-50 z-20">
            <div class="bg-white m-auto p-2 border rounded-sm w-[30%]">
                <h2 class="text-xl font-bold mb-4 ">Logout</h2>
                <hr>
                <div class="p-3">
                    <p class="mb-10">Are you sure you want to log out?</p>
                    <div class="mt-4 flex justify-around space-x-4">
                        <button id="confirmLogout" class="bg-secondary text-white font-semibold py-2 px-6 rounded focus:outline-none focus:ring focus:ring-red-300">Confirm</button>
                        <button id="cancelLogout" class="bg-primary border border-secondary text-secondary font-semibold py-2 px-6 rounded focus:outline-none focus:ring focus:ring-blue-300">Cancel</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- start review -->
        <div id="modalReview" class="modal  hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
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
                                <button class="replyBtn px-5 rounded-sm py-1 bg-[#304547] text-white absolute right-0 top-10">Reply</button>
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


        <!-- Right-side Start -->
        <div class="mainPage h-screen overflow-hidden w-full p-3">
            <h1 class="text-darkGreenColor text-3xl font-bold mb-5">Customer Reviews</h1>

            <!-- start of search button and select box -->
            <div class="flex justify-between items-center p-2">
                <!-- start of search button -->
                <div class="relative">
                    <input type="text" class="block w-80 p-2.5 pr-8 rounded-lg border border-darkGreenColor outline-none" placeholder="Search for order" required>
                    <button type="submit" class="absolute top-0 left-[300px] h-full p-2.5 font-medium text-white bg-darkGreenColor rounded-r-lg border border-darkGreenColor">
                        <svg class="w-8 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </button>
                </div>
                <!-- end of search button -->
                <!-- start of select box -->
                <div>
                    <span class="mr-2 font-medium">Sort By</span>
                    <select name="allOrderTableSort" class="border border-darkGreenColor p-2 font-medium">
                        <option class="p-2" value="pending">Category</option>
                        <option class="p-2" value="delivered">Product</option>
                    </select>
                </div>
                <!-- end of select box -->
            </div>
            <!-- end of search button and select box -->

            <!-- Start of order table -->
            <div class="flex justify-between items-center p-2">
                <table class="table-fixed mt-10 w-full">
                    <thead class="bg-darkGreenColor text-white font-semibold text-lg">
                        <tr>
                            <th class="p-2 w-20">Product Id</th>
                            <th class="p-2 w-40">Product Name</th>
                            <th class="p-2 w-20">Category</th>
                            <th class="p-2 w-32">Stocks</th>
                            <th class="p-2 w-32">Price</th>
                            <th class="p-2 w-32">Total amount</th>
                            <th class="p-2 w-32">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="orderList">
                            <td class="viewOrderDetailBtn p-2 text-center underline font-semibold cursor-pointer">123</td>
                            <td class="p-2 text-center">T-shirt</td>
                            <td class="p-2 text-center">Fashion</td>
                            <td class="p-2 text-center">20</td>
                            <td class="p-2 text-center">$750.00</td>
                            <td class="p-2 text-center">$15,000.00</td>

                            <td class="changeStatusBtn p-2 text-center underline font-semibold cursor-pointer">See Review</td>
                        </tr>
                        <tr class="orderList bg-[#C4C9C9]">
                            <td class="viewOrderDetailBtn p-2 text-center underline font-semibold cursor-pointer">1234</td>
                            <td class="p-2 text-center">Skirt</td>
                            <td class="p-2 text-center">Girl's Fashion</td>
                            <td class="p-2 text-center">20</td>
                            <td class="p-2 text-center">$750.00</td>
                            <td class="p-2 text-center">$15,000.00</td>

                            <td class="changeStatusBtn p-2 text-center underline font-semibold cursor-pointer">See Review</td>
                        </tr>
                        <tr class="orderList">
                            <td class="viewOrderDetailBtn p-2 text-center underline font-semibold cursor-pointer">1234</td>
                            <td class="p-2 text-center">Phone</td>
                            <td class="p-2 text-center">Electronic Device</td>
                            <td class="p-2 text-center">20</td>
                            <td class="p-2 text-center">$750.00</td>
                            <td class="p-2 text-center">$15,000.00</td>
                            <td class="changeStatusBtn p-2 text-center underline font-semibold cursor-pointer">See Review</td>
                        </tr>
                        <tr class="orderList bg-[#C4C9C9]">
                            <td class="viewOrderDetailBtn p-2 text-center underline font-semibold cursor-pointer">1234</td>
                            <td class="p-2 text-center">Laptop</td>
                            <td class="p-2 text-center">Electronic Device</td>
                            <td class="p-2 text-center">20</td>
                            <td class="p-2 text-center">$750.00</td>
                            <td class="p-2 text-center">$15,000.00</td>
                            <td class="changeStatusBtn p-2 text-center underline font-semibold cursor-pointer">See Review</td>
                        </tr>
                        <tr class="orderList ">
                            <td class="viewOrderDetailBtn p-2 text-center underline font-semibold cursor-pointer">1234</td>
                            <td class="p-2 text-center">Necklace</td>
                            <td class="p-2 text-center">Accessories</td>
                            <td class="p-2 text-center">20</td>
                            <td class="p-2 text-center">$750.00</td>
                            <td class="p-2 text-center">$15,000.00</td>

                            <td class="changeStatusBtn p-2 text-center underline font-semibold cursor-pointer">See Review</td>
                        </tr>
                    </tbody>
                </table>
                <!-- End of order table -->
            </div>
            <!-- Right-side End -->


    </section>
    <script>
        $(document).ready(function() {
            $("#logoutBtn").click(function() {
                $("#logoutModal").toggle();
            });

            $("#confirmLogout").click(function() {
                $("#logoutModal").toggle();
            });
            $("#cancelLogout").click(function() {
                $("#logoutModal").toggle();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".replyBtn").click(function() {
                // Hide all other screens and show screenOne

                $("#reply").removeClass("hidden");
                $(".replyBtn").addClass("hidden");



            });
            $(".replySend").click(function() {
                // Hide all other screens and show screenOne
                $("#reply").addClass("hidden");
                $(".replyBtn").removeClass("hidden");
            });


            $(".changeStatusBtn").click(function() {
                $("#modalReview").removeClass("hidden");
            });
        });
        // Show Review
        function showReview() {
            document.getElementById('modalReview').classList.remove('hidden');
        }


        function hideReview() {
            document.getElementById('modalReview').classList.add('hidden');


        }
    </script>

</body>

</html>