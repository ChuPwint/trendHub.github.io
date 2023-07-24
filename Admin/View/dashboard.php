<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css?id=<?= time() ?>">
    <script src="./resources/lib/jquery3.6.0.js"></script>
</head>

<body class="bg-[#12141B]">
    <section class="container w-full mx-auto flex">

        <!-- Left-side Categories Start-->
        <aside class="bg-[#191C25] text-white w-[270px]">
            <!-- Admin  -->
            <h1 class="text-[32px] font-medium text-center">Admin</h1>

            <!-- Categories Start-->
            <div class="px-3 mt-5">
                <p class="py-1 px-2 rounded hover:bg-red-400 cursor-pointer categories"><a href="">Analytics</a></p>

                <div id="customers-list" class="flex items-center py-1 px-2 space-x-2 mt-2 cursor-pointer rounded hover:bg-red-400 categories">
                    <p>Customers List</p>
                    <img src="./resources/img/drop_down_arrow.svg" alt="drop_down">
                </div>

                <!-- Customers List Sub Menu  Start-->
                <div id="customers-list-sub-menu" class="cursor-pointer rounded text-sm hidden">
                    <p class="pl-5 py-1 rounded hover:bg-[#31374A] sub-menu">All Customers</p>
                    <p class="pl-5 py-1 rounded hover:bg-[#31374A] sub-menu">New Customers</p>
                    <p class="pl-5 py-1 rounded hover:bg-[#31374A] sub-menu">Total Orders</p>
                    <p class="pl-5 py-1 rounded hover:bg-[#31374A] sub-menu">Banned Customers</p>
                </div>
                <!-- Customers List Sub Menu  End-->

                <div id="merchant-list" class="flex items-center py-1 px-2 space-x-2 mt-2 cursor-pointer rounded hover:bg-red-400 categories">
                    <p>Merchant List</p>
                    <img src="./resources/img/drop_down_arrow.svg" alt="drop_down">
                </div>

                <!-- Merchant List Sub Menu  Start-->
                <div id="merchant-list-sub-menu" class="cursor-pointer rounded text-sm hidden">
                    <p class="pl-5 py-1 rounded hover:bg-[#31374A] sub-menu">All Merchants</p>
                    <p class="pl-5 py-1 rounded hover:bg-[#31374A] sub-menu">New Merchants</p>
                    <p class="pl-5 py-1 rounded hover:bg-[#31374A] sub-menu">Pending Merchants</p>
                    <p class="pl-5 py-1 rounded hover:bg-[#31374A] sub-menu">Banned Merchants</p>
                </div>
                <!-- Merchant List Sub Menu  End-->

                <div id="manage-products" class="flex items-center py-1 px-2 space-x-2 mt-2 cursor-pointer rounded hover:bg-red-400 categories">
                    <p>Manage Products</p>
                    <img src="./resources/img/drop_down_arrow.svg" alt="drop_down">
                </div>

                <!-- Manage Products Sub Menu  Start-->
                <div id="manage-products-sub-menu" class="cursor-pointer rounded text-sm hidden">
                    <p class="pl-5 py-1 rounded hover:bg-[#31374A] sub-menu">Merchant”s Products</p>
                    <p class="pl-5 py-1 rounded hover:bg-[#31374A] sub-menu">Admin’s Products</p>
                </div>
                <!-- Manage Products Sub Menu  End-->

                <p class="py-1 px-2 mt-2 cursor-pointer rounded hover:bg-red-400 categories">Products Request</p>

                <div id="order-list" class="flex items-center py-1 px-2 space-x-2 mt-2 cursor-pointer rounded hover:bg-red-400 categories">
                    <p>Order List</p>
                    <img src="./resources/img/drop_down_arrow.svg" alt="drop_down">
                </div>

                <!-- Order List Sub Menu  Start-->
                <div id="order-list-sub-menu" class="cursor-pointer rounded text-sm hidden">
                    <p class="pl-5 py-1 rounded hover:bg-[#31374A] sub-menu">Admin Order</p>
                    <p class="pl-5 py-1 rounded hover:bg-[#31374A] sub-menu">Merchant Order</p>
                </div>
                <!-- Order List Sub Menu  End-->

                <p class="py-1 px-2 mt-2 cursor-pointer rounded hover:bg-red-400 categories">Financial Reviews</p>

                <p class="py-1 px-2 mt-2 cursor-pointer rounded hover:bg-red-400 categories">UI Elements</p>

                <p class="py-1 px-2 mt-2 cursor-pointer rounded hover:bg-red-400 categories"><a href="./Notification/notification.php">Notifications</a></p>

                <p class="py-1 px-2 mt-2 cursor-pointer rounded hover:bg-red-400 categories">Logout</p>

            </div>
            <!-- Categories End-->
        </aside>
        <!-- Left-side Categories End-->

        <!-- Right-side Start -->
        <div class="h-screen overflow-hidden w-full">
            <!-- Search Start-->
            <div class="bg-[#262B3A] flex justify-between items-center py-3 px-10">
                <div class="text-white">
                    <p class="text-2xl font-semibold">Analytics</p>
                    <p>Date : Sun, Jul 16, 2023</p>
                </div>

                <input type="text" name="" id="" class="w-[800px] py-2 px-5 rounded outline-none" placeholder="Search...">
            </div>
            <!-- Search End-->


            <!-- Analytics Data Start -->
            <div class="px-20 py-16">
                <!-- Total Display -->
                <div class="text-white flex justify-between flex-wrap">
                    <div class="bg-[#FF5500] w-[250px] h-[135px] py-5 text-center rounded flex flex-col justify-between">
                        <p>Total Users</p>
                        <p class="text-4xl">230</p>
                    </div>

                    <div class="bg-[#2F3D40] w-[250px] h-[135px] py-5 text-center rounded flex flex-col justify-between">
                        <p>Total Merchants</p>
                        <p class="text-4xl">20</p>
                    </div>

                    <div class="bg-[#00A1AB] w-[250px] h-[135px] py-5 text-center rounded flex flex-col justify-between">
                        <p>Total Orders</p>
                        <p class="text-4xl">90</p>
                    </div>

                    <div class="bg-[#1F563F] w-[250px] h-[135px] py-5 text-center rounded flex flex-col justify-between">
                        <p>Total Income</p>
                        <p class="text-2xl">Ks 2,503,000</p>
                    </div>
                </div>
            </div>
            <!-- Analytics Data End  -->

        </div>
        <!-- Right-side End -->

    </section>

    <script>
        $(document).ready(function() {

            $("#customers-list").click(function() {
                $("#customers-list-sub-menu").toggle();
            })

            $("#merchant-list").click(function() {
                $("#merchant-list-sub-menu").toggle();
            })

            $("#manage-products").click(function() {
                $("#manage-products-sub-menu").toggle();
            })

            $("#order-list").click(function() {
                $("#order-list-sub-menu").toggle();
            })

        })
    </script>
</body>

</html>




<!--  -->