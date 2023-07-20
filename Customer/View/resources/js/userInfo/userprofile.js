// JavaScript to handle menu choice changes
const profileFormCard = document.getElementById("profile-form-card");

// Function to display the User Info content
function showUserInfo() {
  profileFormCard.innerHTML = `
  <div class="rounded-lg p-12 shadow-lg">
  <div class="flex flex-row justify-start items-center mb-4">
      <img src="../resources/img/profile/profile.png" alt="Profile Picture" class="w-16 h-16 rounded-full mr-4">
      <div class="flex flex-col">
          <span class="font-bold">Merry James</span>
          <span class="text-xs font-bold">New York, USA</span>
      </div>
  </div>

  <div class="space-y-6">
      <div class="flex flex-row items-center justify-between space-x-4">
          <div class="w-1/2 ">

              <input type="text" id="username" class="w-full p-2 border rounded" placeholder="Username">
          </div>
          <div class="w-1/2 ">

              <input type="tel" id="phone" class="w-full p-2 border rounded" placeholder="Phone Number">
          </div>
      </div>

      <div class="flex flex-row items-center justify-between space-x-4">
          <div class="w-1/2 ">

              <select id="region" class="w-full p-2 border rounded">
                  <option value="">Select Region</option>
                  <!-- Add region options here -->
              </select>
          </div>
          <div class="w-1/2">

              <select id="city" class="w-full p-2 border rounded">
                  <option value="">Select City</option>
                  <!-- Add city options here -->
              </select>
          </div>
      </div>

      <div class="flex flex-row items-center justify-between space-x-4">
          <div class="w-1/2 ">

              <input type="email" id="email" class="w-full p-2 border rounded" placeholder="Email Address">
          </div>
          <div class="w-1/2">

              <input type="text" id="address" class="w-full p-2 border rounded" placeholder="Address">
          </div>
      </div>

  </div>

  <button class="px-6 py-1 mx-auto flex text-center align-middle justify-end  bg-tertiary text-white rounded mt-10 ">Save Changes</button>
</div>`;
}

// Function to display the Wishlist content
function showWishlist() {
  profileFormCard.innerHTML = `
                <div class="rounded-lg p-12 shadow-lg">
                    <!-- Wishlist content goes here -->
                    Hello world It is your wishlist
                    <div>
                    <img src="../resources/img/login/forgot_password.png" alt="">
                    </div>
    
                </div>`;
}
// Function to display the Order History
function showOderHistory() {
  profileFormCard.innerHTML = `
                <div class="rounded-lg p-12 shadow-lg">
                    <!-- Order History content goes here -->
                    Hello world It is your Order history
                    <div>
                    <img src="../resources/img/login/reset_password.png" alt="">
                     </div>
    
                </div>`;
}
// Function to display the Wishlist content
function showNotification() {
  profileFormCard.innerHTML = `
                <div class="rounded-lg p-12 shadow-lg">
                    <!--Notification content goes here -->
                    Hello world It is your Notification
                    <div>
                    <img src="../resources/img/login/login.png" alt="">
                </div>
        </div>`;
}

// Event listeners for menu choices
const menuUserInfo = document.getElementById("menu-user-info");
const menuWishlist = document.getElementById("menu-wishlist");
const menuOrderHistory = document.getElementById("menu-order-history");
const menuNotification = document.getElementById("menu-notification");

menuUserInfo.addEventListener("click", showUserInfo);
menuWishlist.addEventListener("click", showWishlist);
menuOrderHistory.addEventListener("click",showOderHistory);
menuNotification.addEventListener("click", showNotification);

// Add event listeners for other menu choices here as needed
