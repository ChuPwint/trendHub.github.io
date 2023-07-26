<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchant Notification</title>
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
                <p class="hoverImg py-2 px-2 shadow-md flex justify-center bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                    <img id="allProductHover" src="../resources/img/sideBarImg/all product.png" alt="">
                    <span class="sideFull hidden ml-2">All Products</span>
                </p>
                <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                    <img id="productSubmitHover" src="../resources/img/sideBarImg/product submission.png" alt="">
                    <span class="sideFull hidden ml-2">Product Submission</span>
                </p>
                <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                    <img id="allOrderHover" src="../resources/img/sideBarImg/all order.png" alt="">
                    <span class="sideFull hidden ml-2">All Orders</span>
                </p>
                <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                    <img id="reviewHover" src="../resources/img/sideBarImg/review.png" alt="">
                    <span class="sideFull hidden ml-2">Customer Reviews</span>
                </p>
                <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                    <img id="contactHover" src="../resources/img/sideBarImg/contact.png" alt="">
                    <span class="sideFull hidden ml-2">Contact Admin</span>
                </p>
                <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                    <img id="financialHover" src="../resources/img/sideBarImg/financial.png" alt="">
                    <span class="sideFull hidden ml-2">Financials & Payment</span>
                </p>
                <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-darkGreenColor  rounded-md text-white cursor-pointer">
                    <img id="notiHover" src="../resources/img/sideBarImg/notification hover.png" alt="">
                    <span class="sideFull hidden ml-2">Notifications</span>
                </p>
                <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                    <img id="editProfileHover" src="../resources/img/sideBarImg/edit profile.png" alt="">
                    <span class="sideFull hidden ml-2">Edit Profile</span>
                </p>
                <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                    <img id="logOutHover" src="../resources/img/sideBarImg/logout.png" alt="">
                    <span class="sideFull hidden ml-2">Log Out</span>
                </p>
            </div>
            <!-- Categories End-->
        </div>
        <!-- Left-side Categories End-->

        <!-- Right-side Start -->
        <div class="mainPage h-screen overflow-hidden w-full p-3">
        </div>
        <!-- Right-side End -->
    </section>
</body>

</html>