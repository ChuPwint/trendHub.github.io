<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../lib/tailwind/output.css?id=<?= time() ?>">
    <script src="./resources/lib/jquery3.6.0.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- Left-side Categories Start-->
    <aside class="bg-[#191C25] text-white w-[270px]">
        <!-- Admin  -->
        <h1 class="text-[32px] font-medium text-center">Admin</h1>

        <!-- Categories Start-->
        <div class="px-3 mt-5">
            <p class="py-1 px-2 rounded hover:bg-red-400 cursor-pointer categorie"><a href="">Analytics</a></p>

            <div id="customers-list" class="flex items-center py-1 px-2 space-x-2 mt-2 cursor-pointer rounded hover:bg-red-400  categories">
                <p>Customers List</p>
                <img src="../resources/img/drop_down_arrow.svg" alt="drop_down">
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
                <img src="../resources/img/drop_down_arrow.svg" alt="drop_down">
            </div>

            <!-- Merchant List Sub Menu  Start-->
            <div id="merchant-list-sub-menu" class="cursor-pointer rounded text-sm hidden">


            <a href="./all_merchant.php">
            <p class="all_merchant pl-5 py-1 rounded hover:bg-[#31374A] sub-menu">All Merchants</p>

            </a>


                <a href="./new_merchant.php">
                <p class="new_merchant pl-5 py-1 rounded hover:bg-[#31374A] sub-menu">New Merchants</p>
                </a>

                <a href="./pending_merchant.php">
                <p class="pen_merchant pl-5 py-1 rounded hover:bg-[#31374A] sub-menu">Pending Merchants</p>

                </a>


                <a href="./ban_merchant.php">
                <p class="ban_merchant pl-5 py-1 rounded hover:bg-[#31374A] sub-menu">Banned Merchants</p>

                </a>

            </div>
            <!-- Merchant List Sub Menu  End-->

            <div id="manage-products" class="flex items-center py-1 px-2 space-x-2 mt-2 cursor-pointer rounded hover:bg-red-400 categories">
                <p>Manage Products</p>
                <img src="../resources/img/drop_down_arrow.svg" alt="drop_down">
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
                <img src="../resources/img/drop_down_arrow.svg" alt="drop_down">
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

            <p onclick="showLogout()" class="py-1 px-2 mt-2 cursor-pointer rounded hover:bg-red-400 categories">Logout</p>

        </div>
        <!-- Categories End-->
    </aside>
    <!-- Left-side Categories End-->




 




    <div id="modalLogout" class="modal hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
        <div class="modal-content bg-[#FEFEFE] w-[340px] h-[300px] rounded shadow-md relative">
            <button onclick="hideLogout()" class="absolute top-4 right-4 text-gray-700 hover:text-gray-900">
                <svg class="h-6 w-6 text-[grey] " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <div class=" mt-[50px]">
                <span class="block text-center text-xl font-semibold">Oh no! You’re leaving...</span>
                <span class="block text-center text-xl font-semibold mt-3">Are you sure?</span>
            </div>

            <button onclick="hideLogout()" class="block px-4 py-3 rounded-md bg-[#12141B] text-white mx-auto w-[200px] mt-4">Just Kidding</button>
            <button onclick="hideLogout()" class="block px-4 py-3 rounded-md border border-black text-black mx-auto w-[200px] mt-4">Yes, Log Me Out</button>

   

           

          

            </div>

        </div>
    </div>











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






 function showLogout() {
    document.getElementById('modalLogout').classList.remove('hidden');
  }
  
  
  function hideLogout() {
    document.getElementById('modalLogout').classList.add('hidden');
  }









    </script>
</body>
<script src=".../resources/lib/jquery3.6.0.js"></script>
</html>