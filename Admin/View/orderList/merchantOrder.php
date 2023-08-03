<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchant Orders</title>
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
        <?php $subMenu = "merchantOrder" ?>
        <?php include "../resources/common/adminSideBar.php" ?>

        <!-- Right-side Start -->
        <div class="h-screen overflow-hidden w-full">
            <!-- Search Start-->
            <div class="bg-[#262B3A] flex justify-between items-center py-3 px-10">
                <div class="text-white">
                    <p class="text-2xl font-semibold">Merchant Orders</p>
                    <?php
                    $timestamp = time();

                    date_default_timezone_set('Asia/Yangon');
                    $day = date('D');
                    $month = date('F');
                    $date = date('j');
                    $year = date('Y', $timestamp); 

                    
                    ?>
                    <p><?php  echo "Date : $day, $month $date, $year"?></p>
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
                                        <th class="px-3 py-6 text-center">Merchnat Name</th>
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
                                            <span class="underline detail cursor-pointer">View Details</span>
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
                                        <span class="underline detail cursor-pointer">View Details</span>
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



    <!-- start of order detail modal box -->
    <div class="viewOrderDetailModal hidden fixed w-full h-full pt-12 bg-black bg-opacity-50 top-0">
        <!-- start of container box -->
        <div class="h-[80vh] flex justify-center items-center">
            <div class="bg-white m-auto p-2 border rounded-sm w-[80%] relative">
                <div class="closeViewOrderDetailModal text-4xl font-bold absolute right-8 top-5 cursor-pointer"><ion-icon name="close-outline"></ion-icon></div>
                <h2 class="text-2xl font-bold px-6 py-3 underline">Order Details</h2>
                <!-- start of all details -->
                <div class="flex justify-between items-start px-6 py-5">
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
                    <div class="w-[40%] h-[350px] overflow-y-scroll py-5 px-3 bg-[#E4E4D2]">
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
        </div>
        <!-- end of container box -->
    </div>
    <!-- end of order detail modal box -->

    <script>
        $(document).ready(function() {

            $(".detail").click(function() {
                $(".viewOrderDetailModal").toggle();
            })

            $(".closeViewOrderDetailModal").click(function() {
                $(".viewOrderDetailModal").toggle();
            })

        })
    </script>

</body>

</html>