<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Orders</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <script src="../resources/js/sideBar/sideBar.js" defer></script>
    <script src="../resources/js/allOrder/allOrder.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../resources/lib/jquery3.6.0.js"></script>
</head>

<body>
    <section class="sectionContainer w-full flex relative">
        <!-- space for the main page to not move -->
        <div id="space" class="hidden w-20 h-screen p-2"></div>
        <!-- Left-side Categories Start-->
        <div id="sideBarContainer" class="bg-tertiary w-20 h-screen p-2 z-20">
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
                    <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-darkGreenColor text-white rounded-md cursor-pointer">
                        <img id="allOrderHover" src="../resources/img/sideBarImg/all order hover.png" alt="">
                        <span class="sideFull hidden ml-2">All Orders</span>
                    </p>
                </a>
                <a href="../review/productReview.php">
                    <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                        <img id="reviewHover" src="../resources/img/sideBarImg/review.png" alt="">
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
                    <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                        <img id="editProfileHover" src="../resources/img/sideBarImg/edit profile.png" alt="">
                        <span class="sideFull hidden ml-2">Edit Profile</span>
                    </p>
                </a>

                <p id="logoutBtn" class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                    <img id="logOutHover" src="../resources/img/sideBarImg/logout.png" alt="">
                    <span class="sideFull hidden ml-2">Log Out</span>
                </p>

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

        <!-- start of order detail modal box -->
        <div class="viewOrderDetailModal hidden fixed w-full h-full pt-12 bg-black bg-opacity-50 z-20">
            <!-- start of container box -->
            <div class="bg-white m-auto p-2 border rounded-sm w-[80%] relative">
                <div class="closeViewOrderDetailModal text-4xl font-bold absolute right-8 top-5 cursor-pointer"><ion-icon name="close-outline"></ion-icon></div>
                <h2 class="text-2xl font-bold px-6 py-3">Order Details</h2>
                <!-- start of all details -->
                <div class="flex justify-between items-center px-5 py-6">
                    <!-- start of order detail texts -->
                    <div>
                        <p class="mb-2 text-lg font-medium">Order Id: <span>12345</span></p>
                        <p class="mb-2 text-lg font-medium">Order Date: <span>2023/07/26</span></p>
                        <p class="mb-2 text-lg font-medium">Order From: <span>John Doe</span></p>
                        <p class="mb-2 text-lg font-medium">Order Status: <span>Pending</span></p>
                        <p class="mb-2 text-lg font-medium">Payment Type: <span>Card</span></p>
                        <p class="mb-2 text-lg font-medium">Payment Status: <span>Completed</span></p>
                        <p class="mb-2 text-lg font-medium">Delivery Address: <span>123 Street, ABC Condo, Third Floor, Test Township</span></p>
                        <p class="text-lg font-medium">Customer Contact Info: <span>09123456</span></p>
                    </div>
                    <!-- end of order detail texts -->
                    <!-- start of order summary -->
                    <div class="w-[40%] h-60 overflow-y-scroll py-5 px-3 bg-[#E4E4D2]">
                        <p class="font-medium mb-5 text-lg">Order Summary</p>
                        <!-- start of products -->
                        <div class="flex justify-between items-center mb-5 text-lg">
                            <div>
                                <p class="mb-3">T-shirt</p>
                                <p class="mb-3">Shoes</p>
                            </div>
                            <div>
                                <p class="mb-3">5</p>
                                <p class="mb-3">1</p>
                            </div>
                        </div>
                        <hr class="border border-dashed mb-3 border-gray-400">
                        <!-- end of products -->
                        <!-- start of prices -->
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="mb-3">Sub-total</p>
                                <p>Delivery</p>
                            </div>
                            <div>
                                <p class="mb-3">$800</p>
                                <p>$80</p>
                            </div>
                        </div>
                        <hr class="border border-dashed mb-3 mt-3 border-gray-400">
                        <div class="flex justify-between items-center mt-5">
                            <p>Grand Total</p>
                            <p>$880</p>
                        </div>
                        <!-- end of prices -->
                    </div>
                    <!-- end of order summary -->
                </div>
                <!-- end of all details -->
            </div>
            <!-- end of container box -->
        </div>
        <!-- end of order detail modal box -->

        <!-- start of order status change modal box -->
        <div class="changeStatusModal hidden fixed w-full h-full pt-12 bg-black bg-opacity-50 z-20">
            <!-- start of container box -->
            <div class="bg-white m-auto p-2 border rounded-sm w-[80%] relative">
                <div class="closeChangeStatusModal text-4xl font-bold absolute right-8 top-5 cursor-pointer"><ion-icon name="close-outline"></ion-icon></div>
                <h2 class="text-2xl font-bold px-6 py-3">Change Order Status</h2>
                <div class="px-8 py-3">
                    <p class="mb-2 text-lg font-medium">Order Id: <span>12345</span></p>
                    <p class="mb-2 text-lg font-medium">Order Date: <span>2023/07/26</span></p>
                    <p class="mb-2 text-lg font-medium">Order From: <span>John Doe</span></p>
                    <span class="mr-2 font-bold text-xl">Order Status: </span>
                    <select name="orderStatus" class="border border-darkGreenColor p-2 font-medium">
                        <option value="Pending">Pending</option>
                        <option value="Completed">Completed</option>
                    </select>
                </div>
            </div>
            <!-- end of container box -->
        </div>
        <!-- end of order status change modal box -->

        <!-- Right-side Start -->
        <div class="mainPage h-screen overflow-hidden w-full p-3">
            <h1 class="text-darkGreenColor text-3xl font-bold mb-5">All Orders List</h1>
            <!-- Total Display -->
            <div class="text-white flex justify-between p-5 mb-5">
                <div class="bg-secondary w-40 h-20 py-2 text-center rounded flex flex-col justify-between">
                    <p>Total Orders</p>
                    <p class="text-xl">230</p>
                </div>

                <div class="bg-secondary w-40 h-20 py-2 text-center rounded flex flex-col justify-between">
                    <p>Total Revenue</p>
                    <p class="text-xl">Ks 2,503,000</p>
                </div>

                <div class="bg-secondary w-40 h-20 py-2 text-center rounded flex flex-col justify-between">
                    <p>Total Pending</p>
                    <p class="text-xl">20</p>
                </div>

                <div class="bg-secondary w-40 h-20 py-2 text-center rounded flex flex-col justify-between">
                    <p>Total Completed</p>
                    <p class="text-xl">100</p>
                </div>
            </div>

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
                        <option class="p-2" value="pending">Pending</option>
                        <option class="p-2" value="delivered">Delivered</option>
                    </select>
                </div>
                <!-- end of select box -->
            </div>
            <!-- end of search button and select box -->

            <!-- Start of order table -->
            <table class="table-fixed mt-10 w-full">
                <thead class="bg-darkGreenColor text-white font-semibold text-lg">
                    <tr>
                        <th class="p-2 w-20">Order Id</th>
                        <th class="p-2 w-40">Customer</th>
                        <th class="p-2 w-20">Total Items</th>
                        <th class="p-2 w-32">Total Amount</th>
                        <th class="p-2 w-32">Payment Type</th>
                        <th class="p-2 w-32">Order Date</th>
                        <th class="p-2 w-32">Status</th>
                        <th class="p-2 w-32">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="orderList">
                        <td class="viewOrderDetailBtn p-2 text-center underline font-semibold cursor-pointer">1234</td>
                        <td class="p-2 text-center">John Doe</td>
                        <td class="p-2 text-center">8</td>
                        <td class="p-2 text-center">400,000 kyat</td>
                        <td class="p-2 text-center">card</td>
                        <td class="p-2 text-center">2023/07/26</td>
                        <td class="p-2 text-center">Pending</td>
                        <td class="changeStatusBtn p-2 text-center underline font-semibold cursor-pointer">Change Status</td>
                    </tr>
                    <tr class="orderList bg-[#C4C9C9]">
                        <td class="viewOrderDetailBtn p-2 text-center underline font-semibold cursor-pointer">1234</td>
                        <td class="p-2 text-center">John Doe</td>
                        <td class="p-2 text-center">8</td>
                        <td class="p-2 text-center">400,000 kyat</td>
                        <td class="p-2 text-center">card</td>
                        <td class="p-2 text-center">2023/07/26</td>
                        <td class="p-2 text-center">Pending</td>
                        <td class="changeStatusBtn p-2 text-center underline font-semibold cursor-pointer">Change Status</td>
                    </tr>
                    <tr class="orderList">
                        <td class="viewOrderDetailBtn p-2 text-center underline font-semibold cursor-pointer">1234</td>
                        <td class="p-2 text-center">John Doe</td>
                        <td class="p-2 text-center">8</td>
                        <td class="p-2 text-center">400,000 kyat</td>
                        <td class="p-2 text-center">card</td>
                        <td class="p-2 text-center">2023/07/26</td>
                        <td class="p-2 text-center">Pending</td>
                        <td class="changeStatusBtn p-2 text-center underline font-semibold cursor-pointer">Change Status</td>
                    </tr>
                    <tr class="orderList bg-[#C4C9C9]">
                        <td class="viewOrderDetailBtn p-2 text-center underline font-semibold cursor-pointer">1234</td>
                        <td class="p-2 text-center">John Doe</td>
                        <td class="p-2 text-center">8</td>
                        <td class="p-2 text-center">400,000 kyat</td>
                        <td class="p-2 text-center">card</td>
                        <td class="p-2 text-center">2023/07/26</td>
                        <td class="p-2 text-center">Pending</td>
                        <td class="changeStatusBtn p-2 text-center underline font-semibold cursor-pointer">Change Status</td>
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
</body>

</html>