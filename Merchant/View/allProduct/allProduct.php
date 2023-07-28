<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchant All Product</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <script src="../resources/js/sideBar/sideBar.js" defer></script>
    <script src="../resources/js/allProduct/allProduct.js" defer></script>
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
                    <p class="hoverImg py-2 px-2 shadow-md flex justify-center bg-darkGreenColor text-white rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                        <img id="allProductHover" src="../resources/img/sideBarImg/all product hover.png" alt="">
                        <span class="sideFull hidden ml-2">All Products</span>
                    </p>
                </a>
                <a href="../productSubmission/productSubmission.php">
                    <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md cursor-pointer">
                        <img id="productSubmitHover" src="../resources/img/sideBarImg/product submission.png" alt="">
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
        <!-- start of product detail modal box -->
        <div class="viewDetailModal hidden fixed w-full h-full pt-12 bg-black bg-opacity-50 z-20">
            <!-- start of container box -->
            <div class="bg-white m-auto p-2 border rounded-sm w-[80%] relative">
                <div class="closeViewDetailModal text-4xl font-bold absolute right-8 top-5 cursor-pointer"><ion-icon name="close-outline"></ion-icon></div>
                <h2 class="text-2xl font-bold px-6 py-3">Product Details</h2>
                <form action="">
                    <!-- start of upper row -->
                    <div class="px-6 py-4 grid grid-cols-2 gap-4">
                        <!-- start of add product text fields -->
                        <div class="col-span-1">
                            <div class="bg-secondary p-4">
                                <div class="mb-4 relative">
                                    <label for="category" class="z-0 absolute top-0 left-0 pr-16 bg-white text-darkGreenColor border border-darkGreenColor font-semibold py-2 pl-3 rounded-md">Category:</label>
                                    <select id="category" name="category" class="h-[42px] py-2 pl-40 w-full font-semibold rounded-md shadow-md outline-none border border-darkGreenColor">
                                        <!-- Add options for categories here -->
                                        <option value="electronic device">Electronic Device</option>
                                        <option value="women's fashion" selected>Women's Fashion</option>
                                        <!-- Add more options if needed -->
                                    </select>
                                </div>
                                <div class="mb-4 relative">
                                    <label for="productName" class="z-0 absolute top-0 left-0 pr-6 bg-white text-darkGreenColor border border-darkGreenColor font-semibold py-2 pl-3 rounded-md">Product Name:</label>
                                    <input type="text" id="productName" name="productName" value="Lenovo 13" class="h-[42px] py-2 pl-40 w-full font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" required>
                                </div>
                                <div class="mb-4 relative">
                                    <label for="brand" class="z-0 absolute top-0 left-0 pr-[86px] bg-white text-darkGreenColor border border-darkGreenColor font-semibold py-2 pl-3 rounded-md">Brand:</label>
                                    <input type="text" id="brand" name="brand" value="Lenovo" class="h-[42px] py-2 pl-40 w-full font-semibold rounded-md shadow-md outline-none border border-darkGreenColor">
                                </div>
                                <div class="mb-4 relative">
                                    <label for="sellPrice" class="z-0 absolute top-0 left-0 pr-16 bg-white text-darkGreenColor border border-darkGreenColor font-semibold py-2 pl-3 rounded-md">Sell Price:</label>
                                    <input type="text" id="sellPrice" name="sellPrice" value="450,000 kyat" class="h-[42px] py-2 pl-40 w-full font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" required>
                                </div>
                                <div class="mb-4 relative">
                                    <label for="buyPrice" class="z-0 absolute top-0 left-0 pr-16 bg-white text-darkGreenColor border border-darkGreenColor font-semibold py-2 pl-3 rounded-md">Buy Price:</label>
                                    <input type="text" id="buyPrice" name="buyPrice" value="400,000 kyat" class="h-[42px] py-2 pl-40 w-full font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" required>
                                </div>
                                <div class="relative">
                                    <label for="quantity" class="z-0 absolute top-0 left-0 pr-[68px] bg-white text-darkGreenColor border border-darkGreenColor font-semibold py-2 pl-3 rounded-md">Quantity:</label>
                                    <input type="number" id="quantity" name="quantity" value="20" class="h-[42px] py-2 pl-40 w-full font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" required>
                                </div>
                            </div>
                        </div>
                        <!-- end of add product text fields -->
                        <!-- start of upload photo -->
                        <div class="col-span-1">
                            <div class="h-full flex justify-center items-center rounded-lg border border-dashed border-gray-600 px-6 py-10">
                                <div class="text-center">
                                    <div class="mt-4">
                                        <div class="flex justify-center"><img class="p_Image" src="../resources/img/allProduct/cpu-nb 385.svg" alt=""></div>
                                        <label for="file_upload" class="mt-2 cursor-pointer rounded-md bg-white font-semibold text-darkGreenColor">
                                            <span class="font-bold underline">Upload a file: </span>
                                        </label>
                                        <input id="file_upload" name="file_upload" type="file" class="hidden mt-2 text-center">
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
                                <textarea id="productDetail" name="productDetail" class="block w-full mt-1 p-2 border border-secondary rounded-md shadow-md outline-none" rows="3" required>Engineered to deliver devastation in and out of the arena, the Legion 5 Pro deploys Intel Core processing and NVIDIA GeForce RTX graphics to dish out high-resolution gaming. The world’s first 16" QHD gaming laptop with up to 165Hz refresh sets up a “winning zone” that gives you an extra edge and ups your peripheral vision. Combined with Nahimic 3D audio that pinpoints footsteps in space.</textarea>
                            </div>
                            <div class="mb-4">
                                <label for="productDescription" class="block font-medium">Product Description:</label>
                                <textarea id="productDescription" name="productDescription" class="block w-full mt-1 p-2 border border-secondary rounded-md shadow-md outline-none" rows="3" required>MSI Summit E13 Flip Evo 13.4" FHD+ 120hz Touch 2 in 1 Business Laptop: Intel Core i7-1260P Iris Xe 32GB LPDDR5 1TB NVMe SSD, 360-Degree Flip, Thunderbolt 4, MSI Pen, Win 11</textarea>
                            </div>
                        </div>
                        <div class="flex justify-end items-center">
                            <button type="submit" class="closeViewDetailModal py-2 px-4 mt-4 mr-10 bg-white text-darkGreenColor border border-darkGreenColor font-semibold rounded-md shadow-md">Delete Product</button>
                            <button type="submit" class="closeViewDetailModal py-2 px-4 mt-4 bg-secondary text-white font-semibold rounded-md shadow-md">Edit Product</button>
                        </div>
                    </div>
                    <!-- end of bottom row -->
                </form>
            </div>
            <!-- end of container box -->
        </div>
        <!-- end of product detail modal box -->

        <!-- Right-side Start -->
        <div class="mainPage h-screen overflow-hidden w-full p-3">
            <h1 class="text-darkGreenColor text-3xl font-bold mb-5">All Products List</h1>
            <!-- start of pie chart -->
            <div class="p-2">
                <div class="p-2 border border-darkGreenColor">
                    <div class="p-2">
                        <p class="text-2xl font-bold text-darkGreenColor">Wishlist</p>
                        <div class="flex justify-between items-center">
                            <div id="lastMonthPie"></div>
                            <div id="thisMonthPie"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of pie chart -->
            <!-- start of search button and select box -->
            <div class="flex justify-between items-center p-2">
                <!-- start of search button -->
                <div class="relative">
                    <input type="text" class="block w-80 p-2.5 pr-8 rounded-lg border border-darkGreenColor outline-none" placeholder="Search for product" required>
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
                    <select name="allProductTableSort" class="border border-darkGreenColor p-2 font-medium">
                        <option class="p-2" value="category">Category</option>
                        <option class="p-2" value="pName">Product Name</option>
                        <option class="p-2" value="sellPrice">Sell Price</option>
                    </select>
                </div>
                <!-- end of select box -->
            </div>
            <!-- end of search button and select box -->

            <!-- Start of product table -->
            <table class="table-fixed mt-10 w-full">
                <thead class="bg-darkGreenColor text-white font-semibold text-lg">
                    <tr>
                        <th class="p-2 w-10">No.</th>
                        <th class="p-2 w-40">Product Name</th>
                        <th class="p-2 w-40">Category</th>
                        <th class="p-2 w-28">Stocks</th>
                        <th class="p-2 w-32">Buy Price</th>
                        <th class="p-2 w-32">Sell Price</th>
                        <th class="p-2 w-32">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="productSubmitData">
                        <td class="p-2 text-center ">1</td>
                        <td class="p-2 text-center">phone</td>
                        <td class="p-2 text-center">electronic device</td>
                        <td class="p-2 text-center">20</td>
                        <td class="p-2 text-center">400,000 kyat</td>
                        <td class="p-2 text-center">450,000 kyat</td>
                        <td class="viewDetailBtn p-2 text-center font-semibold underline cursor-pointer">View Detail</td>
                    </tr>
                    <tr class="productSubmitData bg-[#C4C9C9]">
                        <td class="p-2 text-center">1</td>
                        <td class="p-2 text-center">phone</td>
                        <td class="p-2 text-center">electronic device</td>
                        <td class="p-2 text-center">20</td>
                        <td class="p-2 text-center">400,000 kyat</td>
                        <td class="p-2 text-center">450,000 kyat</td>
                        <td class="viewDetailBtn p-2 text-center font-semibold underline cursor-pointer">View Detail</td>
                    </tr>
                    <tr class="productSubmitData">
                        <td class="p-2 text-center">1</td>
                        <td class="p-2 text-center">phone</td>
                        <td class="p-2 text-center">electronic device</td>
                        <td class="p-2 text-center">20</td>
                        <td class="p-2 text-center">400,000 kyat</td>
                        <td class="p-2 text-center">450,000 kyat</td>
                        <td class="viewDetailBtn p-2 text-center font-semibold underline cursor-pointer">View Detail</td>
                    </tr>
                    <tr class="productSubmitData bg-[#C4C9C9]">
                        <td class="p-2 text-center">1</td>
                        <td class="p-2 text-center">phone</td>
                        <td class="p-2 text-center">electronic device</td>
                        <td class="p-2 text-center">20</td>
                        <td class="p-2 text-center">400,000 kyat</td>
                        <td class="p-2 text-center">450,000 kyat</td>
                        <td class="viewDetailBtn p-2 text-center font-semibold underline cursor-pointer">View Detail</td>
                    </tr>
                </tbody>
            </table>
            <!-- End of product table -->
        </div>
        <!-- Right-side End -->
    </section>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Product', 'Wishlist Added'],
                ['Product 1', 8],
                ['Product 2', 2],
                ['Product 3', 4],
                ['Product 4', 2],
                ['Product 5', 8]
            ]);

            // Optional; add a title and set the width and height of the chart
            var options1 = {
                'title': 'Last Month',
                'width': 350,
                'height': 300
            };
            var options2 = {
                'title': 'This Month',
                'width': 350,
                'height': 300
            };

            // Display the chart inside the <div> element with id="piechart"
            var chart1 = new google.visualization.PieChart(document.getElementById('lastMonthPie'));
            var chart2 = new google.visualization.PieChart(document.getElementById('thisMonthPie'));
            chart1.draw(data, options1);
            chart2.draw(data, options2);
        }
    </script>
</body>

</html>