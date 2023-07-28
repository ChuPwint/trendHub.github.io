<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchant Product Submission</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <script src="../resources/js/sideBar/sideBar.js" defer></script>
    <script src="../resources/js/productSubmission/productSubmission.js" defer></script>
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
                    <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-darkGreenColor text-white rounded-md cursor-pointer">
                        <img id="productSubmitHover" src="../resources/img/sideBarImg/product submission hover.png" alt="">
                        <span class="sideFull hidden ml-2">Product Submission</span>
                    </p>
                </a>
                <a href="../allOrder/allOrder.php">
                    <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                        <img id="allOrderHover" src="../resources/img/sideBarImg/all order.png" alt="">
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

        <!-- Star of Logo Add Modal Pop Up -->
        <!-- Modal background -->
        <div class="addLogoModal hidden fixed w-full h-full pt-16 bg-black bg-opacity-50 z-20">
            <div class="bg-white m-auto p-5 border rounded-sm w-[80%] ">
                <!-- Modal Content -->
                <p class="font-semibold md:text-2xl">Add Your Logo</p>
                <hr class="border-black mt-4 mb-4">
                <label class="block mb-2 font-medium" for="file_input">Upload file</label>
                <input class="block ml-10 text-sm rounded-lg cursor-pointer " id="file_input" type="file">
                <!-- Modal Close Button -->
                <div class="flex justify-center md:mt-6">
                    <button class="closeLogoAddModal mt-5 bg-secondary text-white text-center px-8 py-1 rounded-md md:px-10 md:text-lg">Close</button>
                </div>
                <!-- End of Modal Content -->
            </div>
        </div>
        <!-- End of Logo Add Modal Pop Up -->

        <!-- start of product submit finish modal box -->
        <div class="productSubmitFinishModal hidden fixed w-full h-full pt-16 bg-black bg-opacity-50 z-20">
            <div class="bg-white m-auto p-5 border rounded-sm w-[50%]">
                <h2 class="text-xl font-bold mb-4">Product Submission is complete.</h2>
                <hr>
                <p class="mt-6 text-center">Your Product Submission is complete. We will verify the information details and notify you about your products approval. Check your notifications for any updates.</p>
                <div class="flex mt-5 justify-center">
                    <button id="closeProductSubmitFinishModal" class="mt-4 bg-secondary text-white font-semibold py-2 px-4 rounded">Close</button>
                </div>
            </div>
        </div>
        <!-- end of product submit finish modal box -->

        <!-- start of add product modal box -->
        <div class="addProductModal hidden fixed w-full h-full pt-12 bg-black bg-opacity-50 z-20">
            <!-- start of container box -->
            <div class="bg-white m-auto p-2 border rounded-sm w-[80%] relative">
                <div class="closeAddProductModal text-4xl font-bold absolute right-8 top-5 cursor-pointer"><ion-icon name="close-outline"></ion-icon></div>
                <h2 class="text-2xl font-bold px-6 py-3">New Product Details</h2>
                <!-- start of upper row -->
                <div class="px-6 py-4 grid grid-cols-2 gap-4">
                    <!-- start of add product text fields -->
                    <div class="col-span-1">
                        <div class="bg-secondary p-4">
                            <div class="mb-4 relative">
                                <label for="category" class="z-0 absolute top-0 left-0 pr-16 bg-white text-darkGreenColor border border-darkGreenColor font-semibold py-2 pl-3 rounded-md">Category:</label>
                                <select id="category" name="category" class="h-[42px] py-2 pl-40 w-full font-semibold rounded-md shadow-md outline-none border border-darkGreenColor">
                                    <!-- Add options for categories here -->
                                    <option value="category1">Category 1</option>
                                    <option value="category2">Category 2</option>
                                    <!-- Add more options if needed -->
                                </select>
                            </div>
                            <div class="mb-4 relative">
                                <label for="productName" class="z-0 absolute top-0 left-0 pr-6 bg-white text-darkGreenColor border border-darkGreenColor font-semibold py-2 pl-3 rounded-md">Product Name:</label>
                                <input type="text" id="productName" name="productName" class="h-[42px] py-2 pl-40 w-full font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" required>
                            </div>
                            <div class="mb-4 relative">
                                <label for="brand" class="z-0 absolute top-0 left-0 pr-[86px] bg-white text-darkGreenColor border border-darkGreenColor font-semibold py-2 pl-3 rounded-md">Brand:</label>
                                <input type="text" id="brand" name="brand" class="h-[42px] py-2 pl-40 w-full font-semibold rounded-md shadow-md outline-none border border-darkGreenColor">
                            </div>
                            <div class="mb-4 relative">
                                <label for="sellPrice" class="z-0 absolute top-0 left-0 pr-16 bg-white text-darkGreenColor border border-darkGreenColor font-semibold py-2 pl-3 rounded-md">Sell Price:</label>
                                <input type="number" id="sellPrice" name="sellPrice" class="h-[42px] py-2 pl-40 w-full font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" required>
                            </div>
                            <div class="mb-4 relative">
                                <label for="buyPrice" class="z-0 absolute top-0 left-0 pr-16 bg-white text-darkGreenColor border border-darkGreenColor font-semibold py-2 pl-3 rounded-md">Buy Price:</label>
                                <input type="number" id="buyPrice" name="buyPrice" class="h-[42px] py-2 pl-40 w-full font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" required>
                            </div>
                            <div class="relative">
                                <label for="quantity" class="z-0 absolute top-0 left-0 pr-[68px] bg-white text-darkGreenColor border border-darkGreenColor font-semibold py-2 pl-3 rounded-md">Quantity:</label>
                                <input type="number" id="quantity" name="quantity" class="h-[42px] py-2 pl-40 w-full font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" required>
                            </div>
                        </div>
                    </div>
                    <!-- end of add product text fields -->
                    <!-- start of upload photo -->
                    <div class="col-span-1">
                        <div class="h-full flex justify-center items-center rounded-lg border border-dashed border-gray-600 px-6 py-10">
                            <div class="text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                </svg>
                                <div class="mt-4 flex">
                                    <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-darkGreenColor">
                                        <span class="font-bold">Upload a file</span>
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p>PNG, JPG up to 10MB</p>
                            </div>
                        </div>
                    </div>
                    <!-- end of upload photo -->
                </div>
                <!-- end of upper row -->

                <!-- start of bottom row -->
                <div class="px-6 py-2">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-4">
                            <label for="productDetail" class="block font-medium">Product Detail:</label>
                            <textarea id="productDetail" name="productDetail" class="block w-full mt-1 p-2 border border-secondary rounded-md shadow-md outline-none" rows="3" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="productDescription" class="block font-medium">Product Description:</label>
                            <textarea id="productDescription" name="productDescription" class="block w-full mt-1 p-2 border border-secondary rounded-md shadow-md outline-none" rows="3" required></textarea>
                        </div>

                    </div>
                    <div class="text-right"><button type="submit" class="closeAddProductModal py-2 px-4 mt-4 bg-secondary text-white font-semibold rounded-md shadow-md">Add Product</button></div>
                </div>
                <!-- end of bottom row -->
            </div>
            <!-- end of container box -->
        </div>
        <!-- end of add product modal box -->

        <!-- Right-side Start -->
        <div class="mainPage h-screen overflow-hidden w-full p-3">
            <div>
                <h1 id="addLogo" class="text-secondary font-bold text-4xl cursor-pointer underline">Your Logo Here</h1>
                <img class="logoPhoto hidden w-44 h-20" src="" alt="">
            </div>
            <hr class="mt-5 mb-3 border border-black">
            <div>
                <p class="font-bold text-xl mb-2">Whole Teams: </p>
                <textarea class="border p-2 text-lg border-darkGreenColor" name="merchantTeam" cols="160" rows="3" placeholder="Text Here"></textarea>
            </div>

            <!-- Start of input text fields and add product button -->
            <div class="mt-8 flex justify-around items-center z-0">
                <div>
                    <div class="mb-4 relative">
                        <label for="name" class="z-0 absolute top-0 left-0 pr-16 text-white bg-darkGreenColor font-semibold py-2 pl-3 rounded-md">Name</label>
                        <input id="name" type="text" class="h-10 py-2 pl-32 font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" name="name" required>
                    </div>
                    <div class="mb-4 relative">
                        <label for="storeName" class="z-0 absolute top-0 left-0 pr-5 text-white bg-darkGreenColor font-semibold py-2 pl-3 rounded-md">Store Name</label>
                        <input id="storeName" type="text" class="h-10 py-2 pl-32 font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" name="storeName" required>
                    </div>
                    <div class="relative">
                        <label for="license" class="z-0 absolute top-0 left-0 pr-[52px] text-white bg-darkGreenColor font-semibold py-2 pl-3 rounded-md">License</label>
                        <input id="license" type="text" class="h-10 py-2 pl-32 font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" name="license">
                    </div>
                </div>
                <div>
                    <div class="mb-4 relative">
                        <label for="email" class="absolute top-0 left-0 pr-16 text-white bg-darkGreenColor font-semibold py-2 pl-3 rounded-md">Email</label>
                        <input id="email" type="email" class="h-10 py-2 pl-32 font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" name="email" required>
                    </div>
                    <div class="mb-4 relative">
                        <label for="phone" class="absolute top-0 left-0 pr-[58px] text-white bg-darkGreenColor font-semibold py-2 pl-3 rounded-md">Phone</label>
                        <input id="phone" type="text" class="h-10 py-2 pl-32 font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" name="phone" required>
                    </div>
                    <div class="relative">
                        <label for="address" class="absolute top-0 left-0 pr-[46px] text-white bg-darkGreenColor font-semibold py-2 pl-3 rounded-md">Address</label>
                        <input id="address" type="text" class="h-10 py-2 pl-32 font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" name="address" required>
                    </div>
                </div>
                <div>
                    <button id="addProductBtn" class="px-3 py-5 text-xl bg-darkGreenColor text-white rounded-lg h-32 ">Add Your Product Here</button>
                </div>
            </div>
            <!-- End of input text fields and add product button -->

            <!-- Start of product table -->
            <table class="table-fixed mt-10 w-full">
                <thead class="bg-darkGreenColor text-white font-semibold text-lg">
                    <tr>
                        <th class="p-2 w-10">No.</th>
                        <th class="p-2 w-40">Category</th>
                        <th class="p-2 w-40">Product Name</th>
                        <th class="p-2 w-28">Quantity</th>
                        <th class="p-2 w-32">Buy Price</th>
                        <th class="p-2 w-32">Sell Price</th>
                        <th class="p-2 w-32">Total Sell Price</th>
                        <th class="p-2 w-32">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="productSubmitData">
                        <td class="p-2 text-center ">1</td>
                        <td class="p-2 text-center">electronic device</td>
                        <td class="p-2 text-center">phone</td>
                        <td class="p-2 text-center">20</td>
                        <td class="p-2 text-center">400,000 kyat</td>
                        <td class="p-2 text-center">450,000 kyat</td>
                        <td class="p-2 text-center">7,000,000 kyat</td>
                        <td class="p-2 text-center underline">Delete</td>
                    </tr>
                    <tr class="productSubmitData bg-[#C4C9C9]">
                        <td class="p-2 text-center">1</td>
                        <td class="p-2 text-center">electronic device</td>
                        <td class="p-2 text-center">phone</td>
                        <td class="p-2 text-center">20</td>
                        <td class="p-2 text-center">400,000 kyat</td>
                        <td class="p-2 text-center">450,000 kyat</td>
                        <td class="p-2 text-center">7,000,000 kyat</td>
                        <td class="p-2 text-center underline">Delete</td>
                    </tr>
                    <tr class="productSubmitData">
                        <td class="p-2 text-center">1</td>
                        <td class="p-2 text-center">electronic device</td>
                        <td class="p-2 text-center">phone</td>
                        <td class="p-2 text-center">20</td>
                        <td class="p-2 text-center">400,000 kyat</td>
                        <td class="p-2 text-center">450,000 kyat</td>
                        <td class="p-2 text-center">7,000,000 kyat</td>
                        <td class="p-2 text-center underline">Delete</td>
                    </tr>
                    <tr class="productSubmitData bg-[#C4C9C9]">
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
                <button type="submit" id="submitProductBtn" class="px-3 py-2 bg-darkGreenColor text-white rounded-md">Submit Products</button>
            </div>
        </div>
        <!-- Right-side End -->
    </section>
</body>

</html>