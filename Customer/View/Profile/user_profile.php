<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">

    <!-- Start Navbar -->
    <!-- google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- font awesome icon css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- end navbar -->
    <script src="../resources/lib/jquery3.6.0.js"></script>
</head>

<body class="bg-secondary">
    <?php  $view = 1 ?>
    <?php include "../resources/common/navbar.php" ?>
    <div class="bg-primary w-full h-1/3 rounded-br-full flex items-center absolute top-0"></div>
    <!--Start  profile menu nav bar -->
    <nav class="p-5  md:items-center md:justify-between block md:hidden ">
        <div class="flex justify-between items-center ">
            <span class="text-3xl cursor-pointer mx-2 md:hidden block">
                <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
            </span>
        </div>

        <ul class="md:flex md:items-center z-50 md:z-auto absolute md:static  bg-tertiary  w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-sm  hover:bg-tertiary hover:text-white p-2 rounded-md duration-500 flex flex-row" id="mobile-user"><img src="../resources/img/profile/user.png" alt="" srcset="" class="w-4 mr-2"> User Info</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-sm  hover:bg-tertiary hover:text-white p-2 rounded-md duration-500  flex flex-row" id="mobile-wishlist"><img src="../resources/img/profile/wishlist.png" alt="" srcset="" class="w-4 mr-2 "> Wishlist</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-sm  hover:bg-tertiary hover:text-white p-2 rounded-md duration-500  flex flex-row" id="mobile-order"><img src="../resources/img/profile/orderhistory.png" alt="" srcset="" class="w-4 mr-2">Order History</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-sm  hover:bg-tertiary hover:text-white p-2 rounded-md duration-500  flex flex-row" id="mobile-notify"><img src="../resources/img/profile/notify.png" alt="" srcset="" class="w-4 mr-2">Notifications</a>
            </li>
            <li class="mx-4 my-6 md:my-0 ">
                <a href="#" class=" text-sm  hover:bg-tertiary hover:text-white p-2 rounded-md duration-500  flex flex-row" id="mobile-logout"><img src="../resources/img/login/logout.png" alt="" srcset="" class="w-4 mr-2">Log Out</a>
            </li>
            <h2 class=""></h2>
        </ul>
    </nav>
    <script>
        function Menu(e) {
            let list = document.querySelector('ul');
            e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]'), list.classList.add('opacity-100')) : (e.name = "menu", list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'))
        }
    </script>
    <!--End  profile menu nav bar -->

    <div class="flex justify-center items-center flex-col w-full  h-2/3  ">
        <div class="bg-primary relative w-5/6  h-full flex flex-col mt-12  shadow-2xl ">
            <p class="text-textWhite p-2 px-4 font-bold w-full bg-tertiary relative md:block hidden">User Profile</p>
            <div class="flex">
                <!--Start Left Side menu bar -->
                <div class="w-1/4 bg-secondary px-4 py-8 hidden md:block">
                    <ul class="space-y-4">
                        <li>
                            <a href="#" class="flex items-center hover:bg-tertiary hover:text-white p-2 rounded-md" id="menu-user-info">
                                <img src="../resources/img/profile/user.png" alt="user info" class="w-4 mr-2">
                                <span class="font-medium">User Info</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center hover:bg-tertiary hover:text-white p-2 rounded-md" id="menu-wishlist">
                                <img src="../resources/img/profile/wishlist.png" alt="Wishlist Icon" class="w-4 mr-2">
                                <span class="font-medium">Wishlist</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="flex items-center hover:bg-tertiary hover:text-white p-2 rounded-md " id="menu-order-history">
                                <img src="../resources/img/profile/orderhistory.png" alt="Order history Icon" class="w-4 mr-2">
                                <span class="font-medium">Order History</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center  hover:bg-tertiary hover:text-white p-2 rounded-md " id="menu-notification">
                                <img src="../resources/img/profile/notify.png" alt="Notification Icon" class="w-4 mr-2">
                                <span class="font-medium">Notifications</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-32 bg-primary hover:bg-secondary border border-borderOrange hover:text-textWhite p-2 rounded-md" id="logoutBtn">
                                <img src="../resources/img/login/logout.png" alt="log out Icon" class="w-4 mr-2">
                                <span class="font-medium text-textOrange">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--End Left Side menu bar -->


                <!-- Profile Form Card -->
                <div class="flex-1  relative " id="profileEdit">
                    <!-- Start Profile Edit Card -->
                    <div id="profile-edit" class="p-8">
                        <div class="flex md:flex-row flex-col justify-start items-center mb-4">
                            <img src="../resources/img/profile/profile.png" alt="Profile Picture" class="w-16 h-16 rounded-full mr-4 ">
                            <div class="flex flex-col">
                                <span class="font-bold">Merry James</span>
                                <span class="text-xs font-bold">New York, USA</span>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col md:flex-row items-center justify-between  ">
                                <div class="md:w-1/2 w-full p-2">

                                    <input type="text" id="username" class="w-full p-2  rounded border border-borderOrange" placeholder="Username">
                                </div>
                                <div class="md:w-1/2 w-full p-2 ">

                                    <input type="tel" id="phone" class="w-full p-2 rounded border border-borderOrange" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="flex flex-col md:flex-row items-center justify-between  ">
                                <div class="md:w-1/2 w-full p-2 ">

                                    <select id="region" class="w-full p-2 border border-borderOrange rounded">
                                        <option value="">Select Region</option>
                                        <!-- Add region options here -->
                                    </select>
                                </div>
                                <div class="md:w-1/2 w-full p-2">

                                    <select id="city" class="w-full p-2 border rounded border-borderOrange">
                                        <option value="">Select City</option>
                                        <!-- Add city options here -->
                                    </select>
                                </div>
                            </div>

                            <div class="flex flex-col md:flex-row  items-center justify-between ">
                                <div class="md:w-1/2 w-full p-2 ">

                                    <input type="email" id="email" class="w-full p-2 border border-borderOrange rounded" placeholder="Email Address">
                                </div>
                                <div class="md:w-1/2 w-full p-2">

                                    <input type="text" id="address" class="w-full p-2 border border-borderOrange rounded" placeholder="Address">
                                </div>
                            </div>

                        </div>

                        <button class="px-6 py-1 mx-auto flex text-center align-middle justify-end hover:text-textBlack bg-tertiary text-white rounded mt-10" id="save-profile-btn">Save Changes</button>
                    </div>
                </div>
                <!-- End Profile Edit Card -->

                <!-- start Wishlist card -->
                <!-- wishlist destop view  -->
                <div class="container mx-auto mt-8 hidden" id="wishlistDestop">
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h2 class="text-2xl font-semibold mb-4">Wishlist</h2>
                        <table class="w-full border-collapse">
                            <thead>
                                <tr class="bg-secondary">
                                    <th class="px-4 py-2 border">Thumbnail</th>
                                    <th class="px-4 py-2 border">Product</th>
                                    <th class="px-4 py-2 border">Price</th>
                                    <th class="px-4 py-2 border">Add to Cart</th>
                                    <th class="px-4 py-2 border">Remove</th>
                                    <th class="px-4 py-2 border">Share</th>

                                </tr>
                            </thead>
                            <tbody>
                                <!-- Sample Wishlist Entries -->
                                <tr>
                                    <td class="px-4 py-2"><img src="../resources/img/orderHistory/product1.png" alt="Product Thumbnail" class="w-16 h-16 object-contain"></td>
                                    <td class="px-4 py-2">Product A</td>
                                    <td class="px-4 py-2">$49.99</td>
                                    <td class="px-4 py-2">
                                        <button class="bg-tertiary text-white text-xs px-4 py-2 rounded">Add to card</button>
                                    </td>
                                    <td class="px-4 py-2">
                                        <img src="../resources/img/orderHistory/trash.png" alt="delete" class="w-5">
                                    </td>
                                    <td class="px-4 py-2">
                                        <img src="../resources/img/orderHistory/share.svg" alt="share">
                                    </td>

                                </tr>
                                <tr>
                                    <td class="px-4 py-2"><img src="../resources/img/orderHistory/product2.png" alt="Product Thumbnail" class="w-16 h-16 object-contain"></td>
                                    <td class="px-4 py-2">Product B</td>
                                    <td class="px-4 py-2">$29.99</td>
                                    <td class="px-4 py-2">
                                        <button class="bg-tertiary text-white text-xs px-4 py-2 rounded">Add to card</button>
                                    </td>
                                    <td class="px-4 py-2">
                                        <img src="../resources/img/orderHistory/trash.png" alt="delete" class="w-5">
                                    </td>
                                    <td class="px-4 py-2">
                                        <img src="../resources/img/orderHistory/share.svg" alt="share">
                                    </td>

                                </tr>
                                <tr>
                                    <td class="px-4 py-2"><img src="../resources/img/orderHistory/product3.png" alt="Product Thumbnail" class="w-16 h-16 object-contain"></td>
                                    <td class="px-4 py-2">Product C</td>
                                    <td class="px-4 py-2">$19.99</td>
                                    <td class="px-4 py-2">
                                        <button class="bg-tertiary text-white text-xs px-4 py-2 rounded">Add to card</button>
                                    </td>
                                    <td class="px-4 py-2">
                                        <img src="../resources/img/orderHistory/trash.png" alt="delete" class="w-5">
                                    </td>
                                    <td class="px-4 py-2">
                                        <img src="../resources/img/orderHistory/share.svg" alt="share">
                                    </td>

                                </tr>
                                <tr>
                                    <td class="px-4 py-2"><img src="../resources/img/orderHistory/product4.png" alt="Product Thumbnail" class="w-16 h-16 object-contain"></td>
                                    <td class="px-4 py-2">Product D</td>
                                    <td class="px-4 py-2">$59.99</td>
                                    <td class="px-4 py-2">
                                        <button class="bg-tertiary text-white text-xs px-4 py-2 rounded">Add to card</button>
                                    </td>
                                    <td class="px-4 py-2">
                                        <img src="../resources/img/orderHistory/trash.png" alt="delete" class="w-5">
                                    </td>
                                    <td class="px-4 py-2">
                                        <img src="../resources/img/orderHistory/share.svg" alt="share">
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- wishlist mobile view -->
                <div class="wishlistMobile container mt-2 hidden relative">

                    <p class="flex justify-center items-center mt-4 text-lg font-bold">My Wishlists</p>
                    <div class="bg-secondary shadow-lg m-4 p-4 flex">
                        <img src="../resources/img/orderHistory/product1.png" alt="">
                        <div class="p-4">
                            <div>Product 1</div>
                            <div>$250</div>
                            <button class="bg-tertiary text-sm text-white px-2 py-1">Add</button>
                        </div>
                        <div class="py-8">
                            <img src="../resources/img/orderHistory/share.svg" alt="share" class="flex top-2 right-2 ">
                            <img src="../resources/img/orderHistory/trash.png" alt="delete" class="w-5 flex button-2 right-2 ">
                        </div>
                    </div>

                    <div class="bg-secondary shadow-lg m-4 p-4 flex">
                        <img src="../resources/img/orderHistory/product2.png" alt="">
                        <div class="p-4">
                            <div>Product 1</div>
                            <div>$250</div>
                            <button class="bg-tertiary  text-white text-sm px-2 py-1">Add</button>
                        </div>
                        <div class="py-8">
                            <img src="../resources/img/orderHistory/share.svg" alt="share" class="flex top-2 right-2 ">
                            <img src="../resources/img/orderHistory/trash.png" alt="delete" class="w-5 flex button-2 right-2 ">
                        </div>
                    </div>

                    <div class="bg-secondary shadow-lg m-4 p-4 flex">
                        <img src="../resources/img/orderHistory/product3.png" alt="">
                        <div class="p-4">
                            <div>Product 1</div>
                            <div>$250</div>
                            <button class="bg-tertiary text-sm text-white px-2 py-1">Add</button>
                        </div>
                        <div class="py-8">
                            <img src="../resources/img/orderHistory/share.svg" alt="share" class="flex top-2 right-2 ">
                            <img src="../resources/img/orderHistory/trash.png" alt="delete" class="w-5 flex button-2 right-2 ">
                        </div>
                    </div>

                    <div class="bg-secondary shadow-lg m-4 p-4 flex">
                        <img src="../resources/img/orderHistory/product4.png" alt="">
                        <div class="p-4">
                            <div>Product 1</div>
                            <div>$250</div>
                            <button class="bg-tertiary text-sm text-white px-2 py-1">Add</button>
                        </div>
                        <div class="py-8">
                            <img src="../resources/img/orderHistory/share.svg" alt="share" class="flex top-2 right-2 ">
                            <img src="../resources/img/orderHistory/trash.png" alt="delete" class="w-5 flex button-2 right-2 ">
                        </div>
                    </div>
                </div>

                <!-- End Wishlist card -->

                <!-- Start Order History Card -->
                <!-- Destop View: order history-->
                <div class="container mx-auto mt-2 hidden" id="orderHistoryDestop">
                    <div class="bg-primary shadow-md rounded-lg p-6 ">
                        <h2 class="text-2xl font-semibold mb-4">Order History</h2>
                        <table class="w-full border-separate border-spacing-y-3 ">
                            <thead class="bg-secondary">
                                <tr>
                                    <th class="px-4 py-2 border">Order ID</th>
                                    <th class="px-4 py-2 border">Items</th>
                                    <th class="px-4 py-2 border">Quantity</th>
                                    <th class="px-4 py-2 border">Payment</th>
                                    <th class="px-4 py-2 border">Total</th>
                                    <th class="px-4 py-2 border">Status</th>
                                    <th class="px-4 py-2 border"></th>
                                </tr>
                            </thead>
                            <tbody class="col space-y-4">
                                <!-- Sample Order History Entries -->
                                <tr class=" bg-slate-100  ">
                                    <td class="px-4 py-2">2023001</td>
                                    <td class="px-4 py-2 ">Product A, Product B</td>
                                    <td class="px-4 py-2 ">2, 1</td>
                                    <td class="px-4 py-2 ">Credit Card</td>
                                    <td class="px-4 py-2 ">$150.00</td>
                                    <td class="px-4 py-2 ">Delivered</td>
                                    <td class="px-4 py-2 "><img src="../resources/img/orderHistory//carbon_review.svg" alt=""></td>
                                </tr>
                                <tr class="mt-4 bg-slate-100  ">
                                    <td class="px-4 py-2 ">2023002</td>
                                    <td class="px-4 py-2 ">Product C</td>
                                    <td class="px-4 py-2 ">3</td>
                                    <td class="px-4 py-2 ">PayPal</td>
                                    <td class="px-4 py-2 ">$75.99</td>
                                    <td class="px-4 py-2 ">Shipped</td>
                                    <td class="px-4 py-2 "><img src="../resources/img/orderHistory//carbon_review.svg" alt=""></td>
                                </tr>
                                <tr class="mt-4 bg-slate-100 ">
                                    <td class="px-4 py-2 ">2023003</td>
                                    <td class="px-4 py-2 ">Product D, Product E, Product F</td>
                                    <td class="px-4 py-2 ">1, 2, 2</td>
                                    <td class="px-4 py-2 ">Google Pay</td>
                                    <td class="px-4 py-2 ">$225.50</td>
                                    <td class="px-4 py-2 ">Delivered </td>
                                    <td class="px-4 py-2 "><img src="../resources/img/orderHistory//carbon_review.svg" alt=""></td>
                                </tr>
                                <tr class="py-4 bg-slate-100 ">
                                    <td class="px-4 py-2 ">2023004</td>
                                    <td class="px-4 py-2 ">Product G</td>
                                    <td class="px-4 py-2 ">5</td>
                                    <td class="px-4 py-2 ">Apple Pay</td>
                                    <td class="px-4 py-2 ">$42.00</td>
                                    <td class="px-4 py-2 ">Cancelled </td>
                                    <td class="px-4 py-2 "><img src="../resources/img/orderHistory//carbon_review.svg" alt=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--Mobile View: order history -->
                <div class="orderHistoryMobile container mx-auto mt-2 hidden relative">
                    <!-- Start Order History Card -->

                    <h2 class="text-2xl font-semibold mb-4 text-center ">Order History</h2>
                    <!-- Mobile View: Each row in a separate card -->
                    <div class="space-y-4 px-4">
                        <!-- Sample Order History Entry 1 -->
                        <div class="bg-primary shadow-md rounded-lg p-4 border-spacing ">
                            <div class="bg-secondary p-4 rounded-lg ">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Order ID:</span>
                                    <span class="text-sm">2023001</span>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Items:</span>
                                    <span class="text-sm">Product A, Product B</span>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Quantity:</span>
                                    <span class="text-sm">2, 1</span>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Payment:</span>
                                    <span class="text-sm">Credit Card</span>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Total:</span>
                                    <span class="text-sm">$150.00</span>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Status:</span>
                                    <span class="text-sm">Delivered</span>
                                </div>
                                <div class="flex justify-end">
                                    <img class="h-6 w-6" src="../resources/img/orderHistory//carbon_review.svg" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Sample Order History Entry 2 -->
                        <div class="bg-primary shadow-md rounded-lg p-4 border-spacing ">
                            <div class="bg-secondary p-4 rounded-lg">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Order ID:</span>
                                    <span class="text-sm">2023002</span>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Items:</span>
                                    <span class="text-sm">Product C</span>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Quantity:</span>
                                    <span class="text-sm">3</span>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Payment:</span>
                                    <span class="text-sm">PayPal</span>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Total:</span>
                                    <span class="text-sm">$75.99</span>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Status:</span>
                                    <span class="text-sm">Shipped</span>
                                </div>
                                <div class="flex justify-end">
                                    <img class="h-6 w-6" src="../resources/img/orderHistory//carbon_review.svg" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Sample Order History Entry 3 -->
                        <div class="bg-primary shadow-md rounded-lg p-4 border-spacing ">
                            <div class="bg-secondary p-4 rounded-lg">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Order ID:</span>
                                    <span class="text-sm">2023003</span>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Items:</span>
                                    <span class="text-sm">Product D, Product E, Product F</span>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Quantity:</span>
                                    <span class="text-sm">1, 2, 2</span>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Payment:</span>
                                    <span class="text-sm">Google Pay</span>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Total:</span>
                                    <span class="text-sm">$225.50</span>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Status:</span>
                                    <span class="text-sm">Delivered</span>
                                </div>
                                <div class="flex justify-end">
                                    <img class="h-6 w-6" src="../resources/img/orderHistory//carbon_review.svg" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Sample Order History Entry 4 -->
                        <div class="bg-primary shadow-md rounded-lg p-4 border-spacing ">
                            <div class="bg-secondary p-4 rounded-lg">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Order ID:</span>
                                    <span class="text-sm">2023004</span>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Items:</span>
                                    <span class="text-sm">Product G</span>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Quantity:</span>
                                    <span class="text-sm">5</span>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Payment:</span>
                                    <span class="text-sm">Apple Pay</span>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Total:</span>
                                    <span class="text-sm">$42.00</span>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-lg font-semibold">Status:</span>
                                    <span class="text-sm">Cancelled</span>
                                </div>
                                <div class="flex justify-end">
                                    <img class="h-6 w-6" src="../resources/img/orderHistory//carbon_review.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Order History Card -->


                <!-- Start Notifications Card -->
                <div class="container mx-auto mt-8 p-4 hidden" id="notification">
                    <h2 class="text-2xl font-semibold mb-4  flex justify-center ">Notifications</h2>
                    <!-- Notification Card 1 - Success -->
                    <div class="w-full mx-auto mt-8">
                        <div class="bg-white shadow-lg rounded-lg px-6 py-4 mb-4">
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded-lg">
                                Your order has been successfully processed.
                            </div>
                            <div class="text-gray-500 text-sm mt-2">
                                From: Sales Team, Date: 2023-07-21
                            </div>
                        </div>
                    </div>

                    <!-- Notification Card 2 - Warning -->
                    <div class="w-full mx-auto">
                        <div class="bg-white shadow-lg rounded-lg px-6 py-4 mb-4">
                            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-2 rounded-lg">
                                Low stock for some products in your wishlist.
                            </div>
                            <div class="text-gray-500 text-sm mt-2">
                                From: Inventory Team, Date: 2023-07-20
                            </div>
                        </div>
                    </div>

                    <!-- Notification Card 3 - Error -->
                    <div class="w-full mx-auto">
                        <div class="bg-white shadow-lg rounded-lg px-6 py-4 mb-4">
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded-lg">
                                Oops! Something went wrong while processing your payment.
                            </div>
                            <div class="text-gray-500 text-sm mt-2">
                                From: Finance Team, Date: 2023-07-19
                            </div>
                        </div>
                    </div>


                    <!-- End Notifications Card -->

                </div>
                
                <!-- Modal for save change-->
                <div class="flex justify-center items-center">
                <div class="fixed w-full mr-52  flex items-center justify-center hidden" id="modal">
                    <div class="bg-white rounded-lg p-6 shadow-xl w-2/3 md:w-1/4">
                        <p class="text-center font-bold">Your profile change is complete!</p>
                        <button class="block w-full mt-4 bg-tertiary text-white rounded px-2 py-1" id="close-modal-btn">Close</button>
                    </div>
                </div>
                </div>
                <!-- Modal Box for log out -->
                <div class="flex justify-center items-center ">
                <div class="fixed  w-full  mr-52 flex items-center justify-center hidden" id="logoutModal">
                    <div class="bg-white p-6 rounded-md shadow-lg w-2/3 md:w-1/4 ">
                        <p class="text-lg text-center font-medium mb-4">Are you sure you want to log out?</p>
                        <div class="flex justify-around">

                            <button class="bg-gray-200 hover:bg-gray-300 font-medium px-4 py-1 rounded-md ml-4" id="cancelLogout">Cancle</button>
                            <button class="bg-tertiary hover:bg-red-600 text-white font-medium px-4 py-1 rounded-md mr-2" id="confirmLogout">Logout</button>
                        </div>
                    </div>
                </div>
                </div>


            </div>
        </div>
    </div>
    <script>
        // for mobile view
        $(document).ready(function() {
            $("#mobile-user").click(function() {
                $("#profileEdit").removeClass("hidden");
                $(".wishlistMobile").addClass("hidden");
                $(".orderHistoryMobile").addClass("hidden");
                $("#notification").addClass("hidden");
            });

            $("#mobile-wishlist").click(function() {
                $("#profileEdit").addClass("hidden");
                $(".wishlistMobile").removeClass("hidden");
                $("#wishlistDestop").addClass("hidden");
                $(".orderHistoryMobile").addClass("hidden");
                $("#notification").addClass("hidden");
            });

            $("#mobile-order").click(function() {
                $("#profileEdit").addClass("hidden");
                $(".wishlistMobile").addClass("hidden");
                $(".orderHistoryMobile").removeClass("hidden");
                $("#orderHistoryDestop").addClass("hidden");
                $("#notification").addClass("hidden");
            });
            $("#mobile-notify").click(function() {
                $("#profileEdit").addClass("hidden");
                $(".wishlistMobile").addClass("hidden");
                $(".orderHistoryMobile").addClass("hidden");
                $("#notification").removeClass("hidden");
            });


        });
    </script>
    <script>
        // for destop view
        $(document).ready(function() {
            $("#menu-user-info").click(function() {
                $("#profileEdit").removeClass("hidden");
                $("#wishlistDestop").addClass("hidden");
                $("#orderHistoryDestop").addClass("hidden");
                $("#notification").addClass("hidden");
            });
            $("#menu-wishlist").click(function() {
                $("#profileEdit").addClass("hidden");
                $("#wishlistDestop").removeClass("hidden");
                $(".wishlistMobile").addClass("hidden");

                $("#orderHistoryDestop").addClass("hidden");
                $("#notification").addClass("hidden");
            });
            $("#menu-order-history").click(function() {
                $("#profileEdit").addClass("hidden");
                $("#wishlistDestop").addClass("hidden");
                $("#orderHistoryDestop").removeClass("hidden");
                $(".orderHistoryMobile").addClass("hidden");
                $("#notification").addClass("hidden");
            });
            $("#menu-notification").click(function() {
                $("#profileEdit").addClass("hidden");
                $("#wishlistDestop").addClass("hidden");
                $("#orderHistoryDestop").addClass("hidden");
                $("#notification").removeClass("hidden");
            });
        });


        // for log out model
        $(document).ready(function() {
            $("#logoutBtn").click(function() {
                $("#logoutModal").toggle();
            });
            
            $("#mobile-logout").click(function() {
                $("#logoutModal").toggle();
            });

            $("#confirmLogout").click(function() {
                $("#logoutModal").toggle();
            });
            $("#cancelLogout").click(function() {
                $("#logoutModal").toggle();
            });
        });

        // for save change model
        $(document).ready(function() {
            $("#save-profile-btn").click(function() {
                $("#modal").toggle();
            });

            $("#close-modal-btn").click(function() {
                $("#modal").toggle();
            });

        });
    </script>








</body>

</html>