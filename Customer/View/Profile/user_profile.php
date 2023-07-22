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
                        <li>
                    <a href="#" class="flex items-center w-32 bg-primary hover:bg-secondary border border-borderOrange hover:text-textWhite p-2 rounded-md" id="logoutBtn">
                        <img src="../resources/img/login/logout.png" alt="log out Icon" class="w-4 mr-2">
                        <span class="font-medium text-textOrange">Log Out</span>
                    </a>
                </li>
                    </ul>
                </div>

                <!-- Profile Form Card -->
                <div class="flex-1 p-8 relative" id="profile-form-card">
                    <!-- Content will be dynamically changed here -->
                    <div class="rounded-lg p-12 shadow-lg flex-1 ">
  <div class="flex flex-row justify-start items-center mb-4">
      <img src="../resources/img/profile/profile.png" alt="Profile Picture" class="w-16 h-16 rounded-full mr-4 ">
      <div class="flex flex-col">
          <span class="font-bold">Merry James</span>
          <span class="text-xs font-bold">New York, USA</span>
      </div>
  </div>

  <div class="space-y-6">
      <div class="flex flex-row items-center justify-between space-x-4 ">
          <div class="w-1/2 ">

              <input type="text" id="username" class="w-full p-2  rounded border border-borderOrange" placeholder="Username">
          </div>
          <div class="w-1/2 ">

              <input type="tel" id="phone" class="w-full p-2 rounded border border-borderOrange" placeholder="Phone Number">
          </div>
      </div>

      <div class="flex flex-row items-center justify-between space-x-4 ">
          <div class="w-1/2 ">

              <select id="region" class="w-full p-2 border border-borderOrange rounded">
                  <option value="">Select Region</option>
                  <!-- Add region options here -->
              </select>
          </div>
          <div class="w-1/2">

              <select id="city" class="w-full p-2 border rounded border-borderOrange">
                  <option value="">Select City</option>
                  <!-- Add city options here -->
              </select>
          </div>
      </div>

      <div class="flex flex-row items-center justify-between space-x-4">
          <div class="w-1/2 ">

              <input type="email" id="email" class="w-full p-2 border border-borderOrange rounded" placeholder="Email Address">
          </div>
          <div class="w-1/2">

              <input type="text" id="address" class="w-full p-2 border border-borderOrange rounded" placeholder="Address">
          </div>
      </div>

  </div>

  <button class="px-6 py-1 mx-auto flex text-center align-middle justify-end hover:text-textBlack bg-tertiary text-white rounded mt-10" id="save-profile-btn">Save Changes</button>
</div> 
  

                </div>
                <!-- Modal Box for log out -->
                <div class="fixed inset-0 flex items-center justify-center hidden" id="logoutModal">
                    <div class="bg-white p-8 rounded-md shadow-lg">
                        <p class="text-lg font-medium mb-4">Are you sure you want to log out?</p>
                        <div class="flex justify-end">
                           
                            <button class="bg-gray-200 hover:bg-gray-300 font-medium px-4 py-1 rounded-md ml-4" id="cancelLogout">Cancle</button>
                            <button class="bg-tertiary hover:bg-red-600 text-white font-medium px-4 py-1 rounded-md mr-2" id="confirmLogout">Logout</button>
                        </div>
                    </div>
                </div>
                <!-- Modal for save change-->
                <div class="fixed inset-1/2 w-64 h-96 justify-center items-center hidden " id="modal">
                    <div class="bg-white rounded-lg p-6 shadow-xl">
                        <p class="text-center font-bold">Your profile change is complete!</p>
                        <button class="block w-full mt-4 bg-tertiary text-white rounded" id="close-modal-btn">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>