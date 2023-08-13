<?php
session_start();
include "../../Controller/regionAndTownshipController.php";

include "../../Controller/profileDataShowController.php";
include "../../Controller/userWishlistShowController.php";
include "../../Controller/orderController.php";
include "../../Controller/notifyController.php";
if (isset($_SESSION["userSaveChangeController"]) && ($_SESSION["userSaveChangeController"] == false)) {
    $_SESSION["userChangeView"] = 0;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <script src="../../View/resources/js/profile.js" defer></script>

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
<style>
    /* For Webkit-based browsers (Chrome, Safari and Opera) */
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    /* For IE, Edge and Firefox */
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>

<body class="bg-secondary">
    <?php $view = 1 ?>
    <?php include "../resources/common/navbar.php" ?>
    <div class="bg-primary w-full h-1/3 rounded-br-full flex items-center absolute top-0"></div>


    <div class="flex justify-center items-center flex-col w-full mt-20  ">
        <div class="bg-primary relative w-[250px]  md:w-2/3  h-full flex flex-col mt-12  shadow-2xl ">
            <p class="text-textWhite p-3 font-bold w-full bg-tertiary relative md:block hidden">User Profile</p>
            <div class="md:flex">
                <!--Start Left Side menu bar -->
                <div class="w-1/4 bg-secondary px-4 py-8 hidden md:block">
                    <ul class="space-y-4">
                        <li>
                            <a href="#" class="flex items-center hover:bg-tertiary hover:text-white p-2 rounded-md cursor-pointer" id="menu-user-info">
                                <img src="../resources/img/profile/user.png" alt="user info" class="w-4 mr-2">
                                <span class="font-medium">User Info</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center hover:bg-tertiary hover:text-white p-2 rounded-md cursor-pointer" id="menu-wishlist">
                                <img src="../resources/img/profile/wishlist.png" alt="Wishlist Icon" class="w-4 mr-2">
                                <span class="font-medium">Wishlist</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="flex items-center hover:bg-tertiary hover:text-white p-2 rounded-md cursor-pointer" id="menu-order-history">
                                <img src="../resources/img/profile/orderhistory.png" alt="Order history Icon" class="w-4 mr-2">
                                <span class="font-medium">Order History</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center  hover:bg-tertiary hover:text-white p-2 rounded-md cursor-pointer" id="menu-notification">
                                <img src="../resources/img/profile/notify.png" alt="Notification Icon" class="w-4 mr-2">
                                <span class="font-medium">Notifications</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-32 bg-primary hover:bg-secondary border border-borderOrange hover:text-textWhite p-2 rounded-md cursor-pointer" id="logoutBtn">
                                <img src="../resources/img/login/logout.png" alt="log out Icon" class="w-4 mr-2">
                                <span class="font-medium text-textOrange">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--End Left Side menu bar -->


                <!-- Profile Form Card -->
                <div class="flex-1 md:p-5 relative md:h-[540px] md:overflow-y-scroll scrollbar-hide" id="profileEdit">
                    <!-- Start Profile Edit Card -->
                    <div id="profile-edit" class="md:p-8 p-3">
                        <form action="../../Controller/profileSaveChangeController.php" method="post" enctype="multipart/form-data">
                            <div class="flex md:flex-row flex-col justify-start items-center mb-4">
                                <?php

                                if (($edit[0]["c_profile"]) == null) {
                                    $setProfile = "../../Storage/profiles/noProfile.jpg";
                                } else {
                                    $setProfile = "../.." . $edit[0]["c_profile"];
                                }

                                ?>

                                <label for="photo">
                                    <img src="<?= $setProfile ?>" id="profile" alt="Profile Picture" class="w-36 h-36  rounded-full ">
                                </label>
                                <input type="file" name="userimg" id="photo" accept=".png,.jpeg" class="hidden">


                                <div class="flex flex-col">
                                    <span class="font-bold"><?= $edit[0]["c_name"]; ?></span>
                                    <span class="text-xs font-bold"><?= $edit[0]["c_address"]; ?></span>
                                </div>
                            </div>

                            <div>
                                <div class="flex flex-col md:flex-row items-center justify-between  ">
                                    <div class="md:w-1/2 w-full p-2">
                                        <input type="text" name="username" value="<?= $edit[0]["c_name"]; ?>" class="w-full p-2 rounded border border-borderOrange" placeholder="Username" required>
                                    </div>
                                    <div class="md:w-1/2 w-full p-2 ">
                                        <input type="tel" name="phone" value="<?= $edit[0]["c_phone"]; ?>" class="w-full p-2 rounded border border-borderOrange" placeholder="Phone Number" required>
                                    </div>
                                </div>

                                <div class="flex flex-col md:flex-row items-center justify-between  mt-4">
                                    <div class="w-full p-2 ">
                                        <select name="region" id="region" required class="w-full mr-2 py-1 md:py-2 px-3 text-md rounded border border-[#FF5500] mb-4 focus:outline-none focus:ring-2">
                                            <?php
                                            $selectedRegionID = $edit[0]["region_id"];

                                            foreach ($totalRegions as $region) {
                                            ?>
                                                <option value="<?= $region["id"] ?>" <?php
                                                                                        if ($region['id'] == $selectedRegionID) {
                                                                                            echo "selected";
                                                                                        }
                                                                                        ?>>
                                                    <?= $region["name"] ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="w-full p-2 ">
                                        <select name="township" id="township" required class="w-full mr-2 py-1 md:py-2 px-3 text-md rounded border border-[#FF5500] mb-4 focus:outline-none focus:ring-2">
                                            <?php
                                            $selectedTownshipID = $edit[0]["township_id"];
                                            foreach ($totalTsp as $township) {
                                            ?>
                                                <option value="<?= $township["id"] ?>" <?php
                                                                                        if ($township['id'] == $selectedTownshipID) {
                                                                                            echo "selected";
                                                                                        }
                                                                                        ?>>
                                                    <?= $township["name"] ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="flex flex-col md:flex-row  items-center justify-between ">
                                    <div class="md:w-1/2 w-full p-2 ">
                                        <input type="email" name="email" value="<?= $edit[0]["c_email"]; ?>" class="w-full p-2 border  border-borderOrange rounded" readonly>
                                    </div>
                                    <div class="md:w-1/2 w-full p-2">
                                        <input type="text" name="address" value="<?= $edit[0]["c_address"]; ?>" class="w-full p-2 border border-borderOrange rounded" placeholder="Address" required>
                                    </div>
                                </div>
                                <button type="submit" name="saveChange" class="px-6 py-2 mx-auto flex text-center align-middle justify-end hover:text-textBlack  bg-orange-500 text-white rounded mt-10" id="save-profile-btn">Save Changes</button>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- End Profile Edit Card -->

                <!-- start Wishlist card -->
                <!-- wishlist destop view  -->
                <div class="container mx-auto mt-8 hidden md:h-[540px] md:overflow-y-scroll scrollbar-hide" id="wishlistDestop">
                    <div class="toggleWishlist  bg-white shadow-md rounded-lg p-6 md:block hidden">
                        <h2 class="text-2xl font-semibold mb-4">Wishlist</h2>
                        <table class="w-full border-collapse">
                            <thead>
                                <tr class="bg-secondary">
                                    <th class="px-4 py-2 border">Thumbnail</th>
                                    <th class="px-4 py-2 border">Product</th>
                                    <th class="px-4 py-2 border">Price</th>
                                    <th class="px-4 py-2 border">Add to Cart</th>
                                    <th class="px-4 py-2 border">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($wishlistProducts as $product) : ?>
                                    <tr>
                                        <td class="px-4 py-2 flex justify-center items-center">
                                            <img src="../../..<?= $product["p_path"] ?>" alt="Product Thumbnail" class="w-16 h-16 object-contain">
                                        </td>
                                        <td class="px-4 py-2 text-center"><?php echo $product['p_name']; ?></td>
                                        <td class="px-4 py-2 text-center"><?php echo number_format($product['sell_price']) . " Ks"; ?></td>
                                        <td class="px-4 py-2 text-center">
                                            <button class="bg-tertiary text-white text-sm px-4 py-2 rounded">Add to cart</button>
                                        </td>
                                        <td class="pl-10 py-2 cursor-pointer">
                                            <img src="../resources/img/orderHistory/trash.png" alt="delete" class="deleteWishlist w-5">
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- wishlist mobile view -->
                <div class="wishlistMobile container mt-2 hidden md:hidden relative ">
                    <div class="block md:hidden">
                        <p class="flex justify-center items-center mt-4 text-lg font-bold">My Wishlists</p>

                        <!-- Loop through the $wishlistProducts array and display each product in a div -->
                        <?php foreach ($wishlistProducts as $product) : ?>
                            <div class="bg-secondary shadow-lg m-4 p-4 rounded-sm">
                                <div class="max-w-sm flex justify-center">
                                    <img src="../../..<?= $product["p_path"] ?>" alt="Product Thumbnail" class="w-18 h-18 object-contain">
                                </div>
                                <div class="p-4">
                                    <div><?php echo $product['p_name']; ?></div>
                                    <div class="mt-3"><?php echo number_format($product['sell_price']) . " Ks" ?></div>
                                </div>
                                <div class="flex justify-around items-center">
                                    <button class="bg-tertiary text-white text-sm px-4 py-2 rounded-sm">Add</button>
                                    <img src="../resources/img/orderHistory/trash.png" alt="delete" class="deleteWishlist w-5 flex button-2 right-2">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- End Wishlist card -->

                <!-- Start Order History Card -->
                <!-- Destop View: order history-->
                <div class="container mx-auto mt-2 hidden md:h-[540px] md:overflow-y-scroll scrollbar-hide" id="orderHistoryDestop">
                    <div class="bg-primary shadow-md rounded-lg p-6  hidden md:block">
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
                                </tr>
                            </thead>
                            <tbody class="col space-y-4">
                                <!-- Loop through $orderHistory and generate rows -->
                                <?php foreach ($orderPaymentInfo as $order) : ?>
                                    <tr class="bg-slate-100">
                                        <td class="px-4 py-2"><?php echo $order['id']; ?></td>
                                        <td class="px-4 py-2">
                                            <?php

                                            foreach ($orderDetailsInfo as $detail) {
                                                if ($detail['order_id'] === $order['id']) {
                                                    echo $detail['p_name'] . ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td class="px-4 py-2">
                                            <?php

                                            foreach ($orderDetailsInfo as $detail) {
                                                if ($detail['order_id'] === $order['id']) {
                                                    echo $detail['qty'] . ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td class="px-4 py-2"><?php echo $order['payment_method']; ?></td>
                                        <td class="px-4 py-2"><?php echo "$" . $order['total_amt']; ?></td>
                                        <td class="px-4 py-2">
                                            <?php

                                            if ($order['order_status'] == 0) {
                                                echo "Pending";
                                            } elseif ($order['order_status'] == 1) {
                                                echo "Delivered";
                                            } else {
                                                // Handle other cases if needed
                                                echo "Unknown";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>

                        </table>
                    </div>
                </div>
                <!--Mobile View: order history -->
                <div class="orderHistoryMobile container mx-auto mt-2 hidden relative">
                    <div class="block md:hidden">
                        <h2 class="text-2xl font-semibold mb-4 text-center ">Order History</h2>
                        <div class="space-y-4 px-4 ">
                            <!-- Loop through $orderPaymentInfo and generate order history entries -->
                            <?php foreach ($orderPaymentInfo as $order) : ?>
                                <div class="bg-primary shadow-md rounded-lg p-4 mb-4">
                                    <div class="bg-secondary p-4 rounded-lg">
                                        <div class="flex justify-between items-center mb-2">
                                            <span class="text-lg font-semibold">Order ID:</span>
                                            <span class="text-sm"><?php echo $order['id']; ?></span>
                                        </div>
                                        <div class="flex justify-between items-center mb-2">
                                            <span class="text-lg font-semibold">Items:</span>
                                            <span class="text-sm">
                                                <?php
                                                foreach ($orderDetailsInfo as $detail) {
                                                    if ($detail['order_id'] === $order['id']) {
                                                        echo $detail['p_name'] . ", ";
                                                    }
                                                }
                                                ?>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-center mb-2">
                                            <span class="text-lg font-semibold">Quantity:</span>
                                            <span class="text-sm">
                                                <?php
                                                foreach ($orderDetailsInfo as $detail) {
                                                    if ($detail['order_id'] === $order['id']) {
                                                        echo $detail['qty'] . ", ";
                                                    }
                                                }
                                                ?>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-center mb-2">
                                            <span class="text-lg font-semibold">Payment:</span>
                                            <span class="text-sm"><?php echo $order['payment_method']; ?></span>
                                        </div>
                                        <div class="flex justify-between items-center mb-2">
                                            <span class="text-lg font-semibold">Total:</span>
                                            <span class="text-sm"><?php echo "$" . $order['total_amt']; ?></span>
                                        </div>
                                        <div class="flex justify-between items-center mb-2">
                                            <span class="text-lg font-semibold">Status:</span>
                                            <span class="text-sm">
                                                <?php
                                                if ($order['order_status'] == 0) {
                                                    echo "Pending";
                                                } elseif ($order['order_status'] == 1) {
                                                    echo "Delivered";
                                                } else {
                                                    echo "Unknown";
                                                }
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- End Order History Card -->

                <!-- Start Notifications Card -->
                <div class="container mx-auto mt-8 p-4 hidden md:h-[540px] md:overflow-y-scroll scrollbar-hide" id="notification">
                    <h2 class="text-2xl font-semibold mb-4  flex justify-center ">Notifications</h2>
                    <?php foreach ($notifications as $notification) { ?>
                        <div class="w-full mx-auto mt-8">
                            <div class="bg-white shadow-lg rounded-lg px-6 py-4 mb-4">
                                <div class="bg-orange-200 border border-green-400 text-green-700 px-4 py-2 rounded-lg">
                                    <?= ($notification['message']); ?>
                                </div>
                                <div class="text-gray-500 text-sm mt-2">
                                    From:Admin, Date: <?= ($notification['create_date']); ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- End Notifications Card -->


                </div>
                <?php if (isset($_SESSION["userChangeView"]) && ($_SESSION["userChangeView"] == 1)) { ?>
                    <!-- Modal for save change-->
                    <div class="flex justify-center items-center">
                        <div class="fixed w-full   flex items-center justify-center " id="modal">
                            <div class="bg-white rounded-lg p-6 shadow-xl w-2/3 md:w-1/4">
                                <p class="text-center font-bold">Your profile change is complete!</p>
                                <button class="block w-full mt-4 bg-tertiary text-white rounded px-2 py-1" id="close-modal-btn">Close</button>
                            </div>
                        </div>
                    </div>
                <?php   } ?>
                <!-- Modal Box for log out -->
                <div class="flex justify-center items-center ">
                    <div class="fixed  w-full flex items-center justify-center hidden" id="logoutModal">
                        <div class="bg-white p-6 rounded-md shadow-lg w-2/3 md:w-1/4 ">
                            <p class="text-lg text-center font-medium mb-4">Are you sure you want to log out?</p>
                            <div class="flex justify-around">
                                <button class="bg-gray-200 hover:bg-gray-300 font-medium px-4 py-1 rounded-md ml-4" id="cancelLogout">Cancel</button>
                                <button class="bg-tertiary hover:bg-red-600 text-white font-medium px-4 py-1 rounded-md mr-2" id="confirmLogout">Logout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu button-->
    <div class="fixed md:hidden w-full bottom-0  flex justify-center bg-tertiary rounded-lg shadow-lg p-2">
        <div class="hover:bg-white hover:text-white p-4 rounded-md cursor-pointer">
            <img id="mobile-user" src="../resources/img/profile/user.png" alt="" class="w-6">
        </div>
        <div class="hover:bg-white hover:text-white p-4 rounded-md cursor-pointer">
            <img id="mobile-wishlist" src="../resources/img/profile/wishlist.png" alt="" class="w-6">
        </div>
        <div class="hover:bg-white hover:text-white p-4 rounded-md cursor-pointer">
            <img id="mobile-order" src="../resources/img/profile/orderhistory.png" alt="" class="w-6">
        </div>

        <div class="hover:bg-white hover:text-white p-4 rounded-md cursor-pointer">
            <img id="mobile-notify" src="../resources/img/profile/notify.png" alt="" class="w-6">
        </div>
        <div class="hover:bg-white hover:text-white p-4 rounded-md cursor-pointer">
            <img id="mobile-logout" src="../resources/img/login/logout1.png" alt="" class="w-6">
        </div>
    </div>
    <!-- Mobile menu button End-->

    <script>
        $(document).ready(function() {
            $(document).on("click", ".deleteWishlist", function() {
                //$(".changeStatusModal").removeClass("hidden");
                $.ajax({
                    url: "../../Controller/orderList/adminOrders/modalShowChangeOrderStatus.php",
                    type: "POST",
                    data: {
                        id: this.id,
                    },
                    success: function(result) {
                        
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
<?php
$_SESSION["userSaveChangeController"] = false;
?>