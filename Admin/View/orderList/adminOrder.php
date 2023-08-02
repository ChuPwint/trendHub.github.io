<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin's Orders</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <script src="../resources/lib/jquery3.6.0.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        /* For IE, Edge and Firefox */
        .scrollbar-hide {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        .table {
            border-spacing: 0 10px;
        }
    </style>
</head>

<body class="font-roboto">
    <section class=" w-full bg-[#12141B] max-w-[1600px] mx-auto flex">
        <!-- Import side bar  -->
        <?php $menu = "orderList" ?>
        <?php $subMenu = "adminOrder" ?>
        <?php include "../resources/common/adminSideBar.php" ?>

        <!-- Right-side Start -->
        <div class="h-screen overflow-hidden w-full">
            <!-- Search Start-->
            <div class="bg-[#262B3A] flex justify-between items-center py-3 px-10">
                <div class="text-white">
                    <p class="text-2xl font-semibold">Admin's Orders</p>
                    <p>Date : Sun, Jul 16, 2023</p>
                </div>

                <input type="text" name="" id="" class="w-[800px] py-2 px-5 rounded outline-none" placeholder="Search...">
            </div>
            <!-- Search End-->


            <!-- All Customers Data Start -->
            <div class="px-[53px] py-8 data-output">
                <!-- Sort Start  -->
                <div class="flex items-center justify-between space-x-2 mb-2">
                    <span class="text-white">47 products found.</span>
                    <div>
                        <span class="text-white">Sort by:</span>
                        <select name="" id="" class="outline-none rounded py-1 px-3">
                            <option value="">Merchant Name</option>
                            <option value="">Des Merchant Name</option>
                            <option value="">Date</option>
                            <option value="">Des Date</option>
                        </select>
                    </div>
                </div>
                <!-- Sort END  -->

                <!-- Table Start  -->
                <div class="flex justify-center min-h-screen relative">
                    <div class="col-span-12">
                        <div class="h-[600px] overflow-y-scroll scrollbar-hide">
                            <table class="table text-textBlack border-separate space-y-6 text-sm w-[1200px] overflow-y-scroll">
                                <thead class="bg-[#fffafa] text-textBlack ">
                                    <tr>
                                        <th class="px-3 py-6 text-center">Order ID</th>
                                        <th class="px-3 py-6 text-center">Product Name</th>
                                        <th class="px-3 py-6 text-center">Qty</th>
                                        <th class="px-3 py-6 text-center">Price</th>
                                        <th class="px-3 py-6 text-center">Total Amount</th>
                                        <th class="px-3 py-6 text-center">Payment</th>
                                        <th class="px-3 py-6 text-center">Order Date</th>
                                        <th class="px-3 py-6 text-center">Status</th>
                                        <th class="px-3 py-6 text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1234
                                        </td>
                                        <td class="p-3 text-center">
                                            MSI
                                        </td>
                                        <td class="p-3 text-center">
                                            2
                                        </td>
                                        <td class="p-3 text-center">
                                            $750.00
                                        </td>
                                        <td class="p-3 text-center">
                                            $15,000.00
                                        </td>
                                        <td class="p-3 text-center">
                                            Card
                                        </td>
                                        <td class="p-3 text-center ">
                                            Jul 16, 2023
                                        </td>
                                        <td class="p-3 text-center">
                                            Pending
                                        </td>
                                        <td class="p-3 text-center ">
                                            <button class="bg-[#456265] text-white px-4 py-1 rounded change">Change</button>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1234
                                        </td>
                                        <td class="p-3 text-center">
                                            MSI
                                        </td>
                                        <td class="p-3 text-center">
                                            2
                                        </td>
                                        <td class="p-3 text-center">
                                            $750.00
                                        </td>
                                        <td class="p-3 text-center">
                                            $15,000.00
                                        </td>
                                        <td class="p-3 text-center">
                                            Card
                                        </td>
                                        <td class="p-3 text-center ">
                                            Jul 16, 2023
                                        </td>
                                        <td class="p-3 text-center">
                                            Completed
                                        </td>
                                        <td class="p-3 text-center ">
                                            <button class="bg-[#456265] text-white px-4 py-1 rounded change">Change</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- Table End  -->

            </div>
            <!-- All Customers Data End  -->

        </div>
        <!-- Right-side End -->

    </section>



    <!-- start of order status change modal box -->
    <div class="changeStatusModal hidden fixed top-0 w-full h-full pt-12 bg-black bg-opacity-50 z-20">
        <!-- start of container box -->
        <div class="h-[80vh] flex justify-center items-center">
            <div class="bg-white m-auto py-2 px-8 border rounded">
                <div class="closeChangeStatusModal text-4xl font-bold absolute right-8 top-5 cursor-pointer"><ion-icon name="close-outline"></ion-icon></div>
                <h2 class="text-2xl font-bold px-6 py-3">Change Order Status</h2>
                <div class="px-8 py-3">
                    <p class="mb-2 text-lg font-medium">Order Id: <span>12345</span></p>
                    <p class="mb-2 text-lg font-medium">Order Date: <span>2023/07/26</span></p>
                    <p class="mb-2 text-lg font-medium">Order From: <span>John Doe</span></p>
                    <span class="mr-2 font-bold text-xl">Order Status: </span>
                    <select name="orderStatus" class="border border-black p-1 font-medium rounded">
                        <option value="Pending">Pending</option>
                        <option value="Completed">Completed</option>
                    </select>
                    <div class="flex justify-evenly text-white mt-7">
                        <button id="close" class="bg-[#AC2E2E] px-6 py-1 rounded">Close</button>
                        <button id="confirm" class="bg-[#456265] px-4 py-1 rounded">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of container box -->
    </div>
    <!-- end of order status change modal box -->

    <script>
        $(document).ready(function() {

            $(".change").click(function() {
                $(".changeStatusModal").toggle();
            })

            $("#close,#confirm").click(function() {
                $(".changeStatusModal").toggle();
            })

        })
    </script>

</body>

</html>