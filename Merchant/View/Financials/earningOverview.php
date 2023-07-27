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
            <h1 class="text-darkGreenColor text-3xl font-bold mb-5">Earning Overview</h1>
            <!-- Total Display -->
            <div class="text-white flex justify-between p-5 mb-5">
                <div class="bg-secondary w-60 h-20 py-2 text-center rounded flex flex-col justify-between">
                    <p>Total Earning</p>
                    <p class="mt-2 text-xl">Ks 2,503,000</p>
                </div>

                <div class="bg-secondary w-40 h-20 py-2 text-center rounded flex flex-col justify-between">
                    <p>Total Orders</p>
                    <p class="mt-2 text-xl">230</p>
                </div>

                <div class="bg-secondary w-60 h-20 py-2 text-center rounded flex flex-col justify-between">
                    <p>Most Sold Category</p>
                    <p class="mt-2 text-xl">Electronic Device</p>
                </div>

                <div class="bg-secondary w-60 h-20 py-2 text-center rounded flex flex-col justify-between">
                    <p>Most Sold Product </p>
                    <p class="mt-2 text-xl">Laptop</p>
                </div>

                <div class="bg-secondary w-60 h-20 py-2 text-center rounded flex flex-col justify-between">
                    <p>Total Profit</p>
                    <p class="mt-2 text-xl">450,000 kyat</p>
                </div>
            </div>
        </div>
        <!-- Right-side End -->
    </section>
</body>

</html>