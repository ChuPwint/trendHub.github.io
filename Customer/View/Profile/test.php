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
    <div class="bg-primary w-full h-1/3 rounded-br-full flex items-center absolute top-0"></div>
    <div class="flex justify-center items-center flex-col px-5 w-2/3 h-2/3 ">

        <div class="bg-primary relative w-full md:w-4/5 h-full flex flex-col mt-10  shadow-2xl ">
            <p class="text-textWhite p-2 font-bold w-full bg-tertiary relative ">User Profile</p>
            <div class="flex">
        <!-- Left Sidebar -->
        <div class="w-1/4 bg-secondary px-4 py-8">
            
            <ul class="space-y-4">
                <li>
                    <a href="#" class="flex items-center text-textWhite hover:bg-red-500 hover:text-white p-2 rounded-md" id="menu-user-info">
                        <img src="../resources/img/profile/user.png" alt="user info" class="w-6 mr-2">
                        <span class="font-medium">User Info</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center text-textWhite hover:bg-tertiary hover:text-white p-2 rounded-md" id="menu-wishlist">
                        <img src="../resources/img/profile/wishlist.png" alt="Wishlist Icon" class="w-6 mr-2">
                        <span class="font-medium">Wishlist</span>
                    </a>
                </li>
                <!-- Add more menu items as needed -->
                <li>
                    <a href="#" class="flex items-center text-textWhite hover:bg-tertiary hover:text-white p-2 rounded-md "id="menu-order-history">
                        <img src="../resources/img/profile/orderhistory.png" alt="Order history Icon" class="w-6 mr-2">
                        <span class="font-medium">Order History</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center text-textWhite hover:bg-tertiary hover:text-white p-2 rounded-md "id="menu-notification">
                        <img src="../resources/img/profile/notify.png" alt="Notification Icon" class="w-6 mr-2">
                        <span class="font-medium">Notifications</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Profile Form Card -->
       
        <div class="flex-1 p-8 w-full" id="profile-form-card">
        <!-- Content will be dynamically changed here -->

    <div class="rounded-lg p-12 shadow-lg container">
    <div class="flex flex-row ">
        <img src="../resources/img/profile/profile.png" alt="Profile Picture" class="w-16 h-16 rounded-full mx-auto mb-4">
        <div class="flex flex-col">
        <span class="mb-4 text-center font-bold">Merry James</span>
        <span class="mb-4 text-center text-xs font-bold">New York, USA</span>
     </div>
       
        </div>
    
    <div class="space-x-6">
        <div class="flex flex-row items-center justify-between space-x-4">
            <div class="w-1/2 mr-10">
                <label for="username" class="block text-textWhite mb-2">Username:</label>
                <input type="text" id="username" class="w-full p-2 border rounded" placeholder="Username">
            </div>
            <div class="w-1/2">
                <label for="phone" class="block text-textWhite mb-2">Phone Number:</label>
                <input type="tel" id="phone" class="w-full p-2 border rounded" placeholder="Phone Number">
            </div>
        </div>

        <div class="flex flex-row items-center justify-between space-x-4">
            <div class="w-1/2 mr-10">
                <label for="region" class="block text-textWhite mb-2">Region:</label>
                <select id="region" class="w-full p-2 border rounded">
                    <option value="">Select Region</option>
                    <!-- Add region options here -->
                </select>
            </div>
            <div class="w-1/2">
                <label for="city" class="block text-textWhite mb-2">City:</label>
                <select id="city" class="w-full p-2 border rounded">
                    <option value="">Select City</option>
                    <!-- Add city options here -->
                </select>
            </div>
        </div>

        <div class="flex flex-row items-center justify-between space-x-4">
            <div class="w-1/2 mr-10">
                <label for="email" class="block text-textWhite mb-2">Email Address:</label>
                <input type="email" id="email" class="w-full p-2 border rounded" placeholder="Email Address">
            </div>
            <div class="w-1/2">
                <label for="address" class="block text-textWhite mb-2">Address:</label>
                <input type="text" id="address" class="w-full p-2 border rounded" placeholder="Address">
            </div>
        </div>

    </div>

    <button class="w-1/2 mx-auto ml-20 py-1 bg-tertiary text-white rounded mt-10 ">Save Changes</button>
</div>

</div>
        
</div>


</body>

</html>