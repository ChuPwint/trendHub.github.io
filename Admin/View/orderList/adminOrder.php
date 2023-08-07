<?php
include "../../Controller/orderList/adminOrders/adminOrderListController.php";
// echo "<pre>";
// print_r($adminOrderList);
?>

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
</head>

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
                    <?php
                    $timestamp = time();
                    date_default_timezone_set('Asia/Yangon');
                    $day = date('D');
                    $month = date('F');
                    $date = date('j');
                    $year = date('Y', $timestamp);
                    ?>
                    <p><?php echo "Date : $day, $month $date, $year" ?></p>
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
                            <option value="">Order Pending</option>
                            <option value="">Order Completed</option>
                            <option value="">Order Date</option>
                        </select>
                    </div>
                </div>
                <!-- Sort END  -->

                <!-- Table Start  -->
                <div class="flex justify-center min-h-screen">
                    <div class="col-span-12">
                        <div class="h-[600px] overflow-y-scroll scrollbar-hide">
                            <table class="table text-textBlack border-separate space-y-6 text-sm w-[1200px] overflow-y-scroll">
                                <thead class="bg-[#fffafa] text-textBlack ">
                                    <tr>
                                        <th class="px-3 py-6 text-center">Order ID</th>
                                        <th class="px-3 py-6 text-center">Customer Name</th>
                                        <th class="px-3 py-6 text-center">Total Items</th>
                                        <th class="px-3 py-6 text-center">Total Amount</th>
                                        <th class="px-3 py-6 text-center">Payment Method</th>
                                        <th class="px-3 py-6 text-center">Payment Status</th>
                                        <th class="px-3 py-6 text-center">Order Date</th>
                                        <th class="px-3 py-6 text-center">Order Status</th>
                                        <th class="px-3 py-6 text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($adminOrderList as $order) { ?>
                                        <tr class="bg-[#fffafa] group hover:scale-[0.99] transition-transform">
                                            <td class="p-3 text-center cursor-pointer showDetail" detailID="<?= $order["id"] ?>">
                                                <?= $order["id"] ?>
                                            </td>
                                            <td class="p-3 text-center cursor-pointer showDetail" detailID="<?= $order["id"] ?>">
                                                <?= $order["c_name"] ?>
                                            </td>
                                            <td class="p-3 text-center cursor-pointer showDetail" detailID="<?= $order["id"] ?>">
                                                <?php
                                                $totalQuantity = 0;
                                                foreach ($adminOrderDetail as $detail) {
                                                    if ($detail["order_id"] == $order["id"]) {
                                                        $qtyAsNumber = (int)$detail["qty"];
                                                        $totalQuantity += $qtyAsNumber;
                                                    }
                                                }
                                                echo $totalQuantity;
                                                ?>
                                            </td>
                                            <td class="p-3 text-center cursor-pointer showDetail" detailID="<?= $order["id"] ?>">
                                                <?= number_format($order["total_amt"]) ?>
                                            </td>
                                            <td class="p-3 text-center cursor-pointer showDetail" detailID="<?= $order["id"] ?>">
                                                <?= $order["payment_method"] ?>
                                            </td>
                                            <td class="p-3 text-center cursor-pointer showDetail" detailID="<?= $order["id"] ?>">
                                                <?php
                                                $paymentMethodId = $order["payment_method_id"];
                                                if ($paymentMethodId == 1 || $paymentMethodId == 2) {
                                                    echo "Completed";
                                                } else if ($paymentMethodId == 3) {
                                                    echo "Pending";
                                                }
                                                ?>
                                            </td>
                                            <td class="p-3 text-center cursor-pointer showDetail" detailID="<?= $order["id"] ?>">
                                                <?= $order["create_date"] ?>
                                            </td>
                                            <td class="p-3 text-center font-semibold cursor-pointer showDetail" detailID="<?= $order["id"] ?>">
                                                <?php
                                                if ($order["order_status"] == 0) {
                                                    echo "Pending";
                                                } else if ($order["order_status"] == 1) {
                                                    echo "Completed";
                                                }
                                                ?>
                                            </td>
                                            <td class="p-3 text-center  space-x-2 ">
                                                <span id="<?= $order["id"] ?>" class="changeStatus px-4 py-2 cursor-pointer bg-[#396C21] text-white rounded-md">CHANGE</span>
                                            </td>
                                        </tr>
                                    <?php } ?>
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
                    <p class="mb-2 text-lg font-medium">Order Id: <span id="orderId"></span></p>
                    <p class="mb-2 text-lg font-medium">Order Date: <span id="orderDate"></span></p>
                    <p class="mb-2 text-lg font-medium">Order From: <span id="customerName"></span></p>
                    <span class="mr-2 font-bold text-xl">Order Status: </span>
                    <select name="orderStatus" id="orderStatus" class="border border-black p-1 font-medium rounded">
                        <option value="Pending">Pending</option>
                        <option value="Completed">Completed</option>
                    </select>
                    <span class="mr-2 font-bold text-xl">Payment Status: </span>
                    <select name="paymentStatus" id="paymentStatus" class="border border-black p-1 font-medium rounded">
                        <option value="Pending">Pending</option>
                        <option value="Completed">Completed</option>
                    </select>
                    <div id="buttons" class="flex justify-evenly text-white mt-7">
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
            //Change Status Modal Box
            $(document).on("click", ".changeStatus", function() {
                $(".changeStatusModal").removeClass("hidden");

                $.ajax({
                    url: "../../Controller/orderList/adminOrders/adminChangeOrderStatusController.php",
                    type: "POST",
                    data: {
                        id: this.id,
                    },
                    success: function(result) {
                        let orders = JSON.parse(result);
                        $("#orderId").text(orders[0].id);
                        $("#orderDate").text(orders[0].create_date);
                        $("#customerName").text(orders[0].c_name);

                        if(orders[0].order_status == 0) {
                            $("#orderStatus").val("Pending");
                            $("#orderStatus").prop("disabled", false);
                        }else{
                            $("#orderStatus").val("Completed");
                            $("#orderStatus").prop("disabled", true);
                        }

                        if(orders[0].payment_status == 0) {
                            $("#paymentStatus").val("Pending");
                            $("#paymentStatus").prop("disabled", false);
                        }else{
                            $("#paymentStatus").val("Completed");
                            $("#paymentStatus").prop("disabled", true);
                        }

                        if(($("#orderStatus").val() == "Completed") && ($("#paymentStatus").val() == "Completed")){
                            $("#buttons").addClass("hidden");
                        }else{
                            $("#buttons").removeClass("hidden");
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    },
                });
            });
        });
    </script>

</body>

</html>