<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css">
    <script src="../resources/js/userInfo/userprofile.js" defer></script>
</head>

<body class="bg-secondary">
    <!-- start header  -->
    <div class="fixed top-0 right-0 left-0  z-40">
        <!-- start first navbar -->
        <nav class="py-2 px-4  md:flex md:items-center md:justify-between">
            <div class="flex justify-between items-center ">

                <!-- desktop logo -->
                <img class="md:block hidden" src="../img/header/logo.svg" alt="">

                <!-- mobile logo -->
                <img class="md:hidden w-[90px] order-2" src="./img/header/headerLogo.svg " alt="">

                <!-- mobile login -->
                <button class="bg-tertiary text-textWhite py-1 px-2 rounded md:hidden order-3">Login</button>

                <!-- mobile menu -->
                <span class=" text-3xl order-1 cursor-pointer mx-2 md:hidden block">
                    <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
                </span>
            </div>

            <ul class="md:flex md:items-center z-50  md:z-auto md:static absolute  w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
                <li class="mx-4 my-6 md:my-0">
                    <a href="#" class="text-md hover:text-tertiary  duration-500">Home</a>
                </li>
                <li class="mx-4 my-6 md:my-0">
                    <a href="#" class="text-md hover:text-tertiary  duration-500">About</a>
                </li>
                <li class="mx-4 my-6 md:my-0">
                    <a href="#" class="text-md hover:text-tertiary  duration-500">Service</a>
                </li>
                <li class="mx-4 my-6 md:my-0">
                    <a href="#" class="text-md hover:text-tertiary  duration-500">Help</a>
                </li>
                <li class="mx-4 my-6 md:my-0">
                    <a href="#" class="text-md hover:text-tertiary duration-500">Contact</a>
                </li>

                <button class="bg-tertiary text-textWhite  duration-500 py-2 px-6 hidden md:block mx-4 hover:bg-tertiary rounded ">
                    Login
                </button>
                <h2 class=""></h2>
            </ul>
        </nav>
        <!-- end first navbar -->

    </div>
    <!-- end header -->



    <div class="bg-primary w-full h-1/3 rounded-br-full flex items-center absolute top-0"></div>
    <div class="flex justify-center items-center flex-col px-5 w-full  h-2/3  ">
        <div class="bg-primary relative w-5/6  h-full flex flex-col mt-12  shadow-2xl ">
            <p class="text-textWhite p-2 px-4 font-bold w-full bg-tertiary relative ">User Profile</p>
            <div class="flex">
                <!-- Left Sidebar -->
                <div class="w-1/4 bg-secondary px-4 py-8">

                    <ul class="space-y-4">
                        <li>
                            <a href="#" class="flex items-center hover:bg-red-500 hover:text-white p-2 rounded-md" id="menu-user-info">
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
                        <!-- Add more menu items as needed -->
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
                    </ul>
                </div>

                <!-- Profile Form Card -->
                <div class="flex-1 p-8" id="profile-form-card">
                    <!-- Content will be dynamically changed here -->
                    

                </div>

            </div>
        </div>
    </div>

</body>

</html>