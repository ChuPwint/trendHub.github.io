<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Earning Overview</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <script src="../resources/js/sideBar/sideBar.js" defer></script>
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
                <a href="">
                    <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                        <img id="reviewHover" src="../resources/img/sideBarImg/review.png" alt="">
                        <span class="sideFull hidden ml-2">Customer Reviews</span>
                    </p>
                </a>
                <a href="">
                    <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                        <img id="contactHover" src="../resources/img/sideBarImg/contact.png" alt="">
                        <span class="sideFull hidden ml-2">Contact Admin</span>
                    </p>
                </a>
                <a href="../Financials/earningOverview.php">
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
                <a href="">
                    <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                        <img id="editProfileHover" src="../resources/img/sideBarImg/edit profile.png" alt="">
                        <span class="sideFull hidden ml-2">Edit Profile</span>
                    </p>
                </a>
                <a href="">
                    <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                        <img id="logOutHover" src="../resources/img/sideBarImg/logout.png" alt="">
                        <span class="sideFull hidden ml-2">Log Out</span>
                    </p>
                </a>
            </div>
            <!-- Categories End-->
        </div>
        <!-- Left-side Categories End-->

        <!-- Right-side Start -->
        <div class="mainPage h-screen overflow-hidden w-full p-3">
            <h1 class="text-darkGreenColor text-3xl font-bold mb-5"><span>July</span> Payment History</h1>
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
                    <select name="paymentHistoryTable" class="border border-darkGreenColor p-2 font-medium">
                        <option class="p-2" value="paymentDate">Payment Date</option>
                        <option class="p-2" value="paymentType">Payment Type</option>
                    </select>
                </div>
                <!-- end of select box -->
            </div>
            <!-- end of search button and select box -->

            <!-- Start of payment history to customer table -->
            <table class="table-fixed mt-10 w-full">
                <thead class="bg-darkGreenColor text-white font-semibold text-lg">
                    <tr>
                        <th class="p-2 w-20">Payment Id</th>
                        <th class="p-2 w-40">Customer</th>
                        <th class="p-2 w-20">Payment Date</th>
                        <th class="p-2 w-32">Payment Via</th>
                        <th class="p-2 w-32">Payment Amount</th>
                        <th class="p-2 w-32">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="paymentListCustomer">
                        <td class="p-2 text-center">1234</td>
                        <td class="p-2 text-center">John Doe</td>
                        <td class="p-2 text-center">2023/07/27</td>
                        <td class="p-2 text-center">card</td>
                        <td class="p-2 text-center">23,000 kyat</td>
                        <td class="p-2 text-center underline font-semibold cursor-pointer">View Detail</td>
                    </tr>
                    <tr class="paymentListCustomer bg-[#C4C9C9]">
                        <td class="p-2 text-center">1234</td>
                        <td class="p-2 text-center">John Doe</td>
                        <td class="p-2 text-center">2023/07/27</td>
                        <td class="p-2 text-center">card</td>
                        <td class="p-2 text-center">23,000 kyat</td>
                        <td class="p-2 text-center underline font-semibold cursor-pointer">View Detail</td>
                    </tr>
                    <tr class="paymentListCustomer">
                        <td class="p-2 text-center">1234</td>
                        <td class="p-2 text-center">John Doe</td>
                        <td class="p-2 text-center">2023/07/27</td>
                        <td class="p-2 text-center">card</td>
                        <td class="p-2 text-center">23,000 kyat</td>
                        <td class="p-2 text-center underline font-semibold cursor-pointer">View Detail</td>
                    </tr>
                    <tr class="paymentListCustomer bg-[#C4C9C9]">
                        <td class="p-2 text-center">1234</td>
                        <td class="p-2 text-center">John Doe</td>
                        <td class="p-2 text-center">2023/07/27</td>
                        <td class="p-2 text-center">card</td>
                        <td class="p-2 text-center">23,000 kyat</td>
                        <td class="p-2 text-center underline font-semibold cursor-pointer">View Detail</td>
                    </tr>
                </tbody>
            </table>
            <!-- End of payment history to customer table -->
            <div class="text-right font-bold text-xl text-darkGreenColor mt-5 mr-10">
                <p>Total Earning From Customers: <span class="pl-3">800,000 kyat</span></p>
                <p>Payout to Admin: <span class="pl-5">80,000 kyat</span></p>
                <p>Total Earning: <span class="pl-3">720,000 kyat</span></p>
            </div>
            <div class="mt-5">
                <p class="font-bold text-xl text-darkGreenColor">Monthly Payment History to Admin</p>
                <table class="table-fixed mt-10 w-full">
                    <thead class="bg-darkGreenColor text-white font-semibold text-lg">
                        <tr>
                            <th class="p-2 w-20">Payment Id</th>
                            <th class="p-2 w-20">Payment Date</th>
                            <th class="p-2 w-32">Payment Due Date</th>
                            <th class="p-2 w-32">Payment Month</th>
                            <th class="p-2 w-32">Amount</th>
                        </tr>
                    </thead>
                    <tbody class="border-b">
                        <tr class="paymentHistoryToAdmin">
                            <td class="p-2 text-center">1234</td>
                            <td class="p-2 text-center">2023/07/25</td>
                            <td class="p-2 text-center">2023/07/27</td>
                            <td class="p-2 text-center">July</td>
                            <td class="p-2 text-center">23,000 kyat</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Right-side End -->
    </section>
</body>

</html>