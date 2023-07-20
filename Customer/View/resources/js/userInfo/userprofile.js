// JavaScript to handle menu choice changes
const profileFormCard = document.getElementById("profile-form-card");

// Function to display the User Info content
function showUserInfo() {
  profileFormCard.innerHTML = `
            <div class="rounded-lg p-12 shadow-lg">
                <img src="../resources/img/profile/profile.png" alt="Profile Picture" class="w-32 h-32 rounded-full mx-auto mb-4">
                <p class="mb-4 text-center font-bold">User Name</p>

                <div class="space-y-10">
                    <div class="flex flex-row items-center justify-between space-x-4">
                        <div class="w-1/2">
                            <label for="email" class="block text-textWhite mb-2">Email:</label>
                            <input type="text" id="email" class="w-full p-2 border rounded" placeholder="Email">
                        </div>
                        <div class="w-1/2">
                            <label for="age" class="block text-textWhite mb-2">Age:</label>
                            <input type="text" id="age" class="w-full p-2 border rounded" placeholder="Age">
                        </div>
                    </div>

                    <div class="flex flex-row items-center justify-between space-x-4">
                        <div class="w-1/2">
                            <label for="location" class="block text-textWhite mb-2">Location:</label>
                            <input type="text" id="location" class="w-full p-2 border rounded" placeholder="Location">
                        </div>
                        <div class="w-1/2">
                            <label for="hobbies" class="block text-textWhite mb-2">Hobbies:</label>
                            <input type="text" id="hobbies" class="w-full p-2 border rounded" placeholder="Hobbies">
                        </div>
                    </div>

                    <div class="flex flex-row items-center justify-between space-x-4">
                        <div class="w-1/2">
                            <label for="occupation" class="block text-textWhite mb-2">Occupation:</label>
                            <input type="text" id="occupation" class="w-full p-2 border rounded" placeholder="Occupation">
                        </div>
                        <div class="w-1/2">
                            <label for="name" class="block text-textWhite mb-2">Name:</label>
                            <input type="text" id="name" class="w-full p-2 border rounded" placeholder="Name">
                        </div>
                    </div>

                </div>

                <button class="w-1/2 p-2 bg-tertiary text-white rounded mt-4">Save Profile</button>
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
