<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchant Product Submission</title>
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
        <div id="sideBarContainer" class="bg-tertiary w-20 h-screen p-2 z-20">
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
                <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-darkGreenColor text-white rounded-md cursor-pointer">
                    <img id="productSubmitHover" src="../resources/img/sideBarImg/product submission hover.png" alt="">
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
                <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                    <img id="notiHover" src="../resources/img/sideBarImg/notification.png" alt="">
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
        <!-- Star of Logo Add Modal Pop Up -->
        <!-- Modal background -->
        <div class="addLogoModal hidden fixed w-full h-full pt-16 bg-black bg-opacity-50 z-20">
            <div class="bg-white m-auto p-5 border rounded-sm w-[80%] ">
                <!-- Modal Content -->
                <p class="font-semibold md:text-2xl">Add Your Logo</p>
                <hr class="border-black mt-4 mb-4">
                <label class="block mb-2 font-medium" for="file_input">Upload file</label>
                <input class="block ml-10 text-sm  rounded-lg cursor-pointer " id="file_input" type="file">
                <!-- Modal Close Button -->
                <div class="flex justify-center md:mt-6">
                    <button class="closeLogoAddModal mt-5 bg-secondary text-white text-center px-8 py-1 rounded-md md:px-10 md:text-lg">Close</button>
                </div>
                <!-- End of Modal Content -->
            </div>
        </div>
        <!-- End of Logo Add Modal Pop Up -->
        <!-- Right-side Start -->
        <div class="mainPage h-screen overflow-hidden w-full p-3">

            <div>
                <h1 id="addLogo" class="text-secondary font-bold text-4xl cursor-pointer">Your Logo Here</h1>
                <img class="logoPhoto hidden w-44 h-20" src="" alt="">
            </div>
            <hr class="mt-5 mb-3 border border-black">
            <div>
                <p class="font-bold text-xl mb-2">Whole Teams: </p>
                <textarea class="border p-2 text-lg border-darkGreenColor" name="merchantTeam" cols="160" rows="3" placeholder="Text Here"></textarea>
            </div>

            <!-- Start of input text fields -->
            <div class="mt-8 flex justify-around items-center z-0">
                <div>
                    <div class="mb-4 relative">
                        <label for="name" class="z-0 absolute top-0 left-0 pr-16 text-white bg-darkGreenColor font-semibold py-2 pl-3 rounded-md">Name</label>
                        <input type="text" class="h-10 py-2 pl-32 font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" name="name">
                    </div>
                    <div class="mb-4 relative">
                        <label for="storeName" class="z-0 absolute top-0 left-0 pr-5 text-white bg-darkGreenColor font-semibold py-2 pl-3 rounded-md">Store Name</label>
                        <input type="text" class="h-10 py-2 pl-32 font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" name="storeName">
                    </div>
                    <div class="relative">
                        <label for="license" class="z-0 absolute top-0 left-0 pr-[52px] text-white bg-darkGreenColor font-semibold py-2 pl-3 rounded-md">License</label>
                        <input type="text" class="h-10 py-2 pl-32 font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" name="license">
                    </div>
                </div>
                <div>
                    <div class="mb-4 relative">
                        <label for="email" class="absolute top-0 left-0 pr-16 text-white bg-darkGreenColor font-semibold py-2 pl-3 rounded-md">Email</label>
                        <input type="email" class="h-10 py-2 pl-32 font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" name="email">
                    </div>
                    <div class="mb-4 relative">
                        <label for="phone" class="absolute top-0 left-0 pr-[58px] text-white bg-darkGreenColor font-semibold py-2 pl-3 rounded-md">Phone</label>
                        <input type="text" class="h-10 py-2 pl-32 font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" name="phone">
                    </div>
                    <div class="relative">
                        <label for="address" class="absolute top-0 left-0 pr-[46px] text-white bg-darkGreenColor font-semibold py-2 pl-3 rounded-md">Address</label>
                        <input type="text" class="h-10 py-2 pl-32 font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" name="address">
                    </div>
                </div>
                <div>
                    <button class="px-3 py-5 text-xl bg-darkGreenColor text-white rounded-lg h-32 ">Add Your Product Here</button>
                </div>
            </div>
            <!-- End of input text fields -->

            <!-- Start of product table -->
            <table class="table-fixed mt-10 w-full">
                <thead class="bg-darkGreenColor text-white font-semibold text-lg">
                    <tr>
                        <th class="p-2 w-10">No.</th>
                        <th class="p-2 w-40">Category</th>
                        <th class="p-2 w-40">Product Name</th>
                        <th class="p-2 w-12">Quantity</th>
                        <th class="p-2 w-32">Buy Price</th>
                        <th class="p-2 w-32">Sell Price</th>
                        <th class="p-2 w-32">Total Sell Price</th>
                        <th class="p-2 w-32">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td class="p-2 text-center ">1</td>
                        <td class="p-2 text-center">electronic device</td>
                        <td class="p-2 text-center">phone</td>
                        <td class="p-2 text-center">20</td>
                        <td class="p-2 text-center">400,000 kyat</td>
                        <td class="p-2 text-center">450,000 kyat</td>
                        <td class="p-2 text-center">7,000,000 kyat</td>
                        <td class="p-2 text-center underline">Delete</td>
                    </tr>
                    <tr class="bg-[#C4C9C9]">
                        <td class="p-2 text-center">1</td>
                        <td class="p-2 text-center">electronic device</td>
                        <td class="p-2 text-center">phone</td>
                        <td class="p-2 text-center">20</td>
                        <td class="p-2 text-center">400,000 kyat</td>
                        <td class="p-2 text-center">450,000 kyat</td>
                        <td class="p-2 text-center">7,000,000 kyat</td>
                        <td class="p-2 text-center underline">Delete</td>
                    </tr>
                    <tr>
                        <td class="p-2 text-center">1</td>
                        <td class="p-2 text-center">electronic device</td>
                        <td class="p-2 text-center">phone</td>
                        <td class="p-2 text-center">20</td>
                        <td class="p-2 text-center">400,000 kyat</td>
                        <td class="p-2 text-center">450,000 kyat</td>
                        <td class="p-2 text-center">7,000,000 kyat</td>
                        <td class="p-2 text-center underline">Delete</td>
                    </tr>
                    <tr class="bg-[#C4C9C9]">
                        <td class="p-2 text-center">1</td>
                        <td class="p-2 text-center">electronic device</td>
                        <td class="p-2 text-center">phone</td>
                        <td class="p-2 text-center">20</td>
                        <td class="p-2 text-center">400,000 kyat</td>
                        <td class="p-2 text-center">450,000 kyat</td>
                        <td class="p-2 text-center">7,000,000 kyat</td>
                        <td class="p-2 text-center underline">Delete</td>
                    </tr>
                </tbody>
            </table>
            <!-- End of product table -->
            <div class="mt-5 mr-2 text-right">
                <button class="px-3 py-2 bg-darkGreenColor text-white rounded-md">Submit Products</button>
            </div>
        </div>
        <!-- Right-side End -->
    </section>
    <script>
        $(document).ready(function() {
            $("#addLogo").click(function() {
                $(".addLogoModal").toggle();
            });

            $(".closeLogoAddModal").click(function() {
                $(".addLogoModal").toggle();
            });
        });
    </script>
</body>

</html>