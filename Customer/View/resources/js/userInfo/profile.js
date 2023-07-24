// Function to display the User Info content
// Event listeners for menu choices destop
const menuUserInfo = document.getElementById("menu-user-info");
const menuWishlist = document.getElementById("menu-wishlist");
const menuOrderHistory = document.getElementById("menu-order-history");
const menuNotification = document.getElementById("menu-notification");

menuUserInfo.addEventListener("click", showUserInfo);
menuWishlist.addEventListener("click", showWishlist);
menuOrderHistory.addEventListener("click", showOderHistory);
menuNotification.addEventListener("click", showNotification);



function showUserInfo() {
  document.getElementById("profileEdit").classList.remove("hidden");
  document.getElementById("wishlistDestop").classList.add("hidden");
  document.getElementById("orderHistoryDestop").classList.add("hidden");
  document.getElementById("notification").classList.add("hidden");
}

function showWishlist() {
  document.getElementById("profileEdit").classList.add("hidden");
  document.getElementById("wishlistDestop").classList.remove("hidden");
  document.getElementById("orderHistoryDestop").classList.add("hidden");
  document.getElementById("notification").classList.add("hidden");
}

function showOderHistory() {
  document.getElementById("profileEdit").classList.add("hidden");
  document.getElementById("wishlistDestop").classList.add("hidden");
  document.getElementById("orderHistoryDestop").classList.remove("hidden");
  document.getElementById("notification").classList.add("hidden");
}

function showNotification() {
  document.getElementById("profileEdit").classList.add("hidden");
  document.getElementById("wishlistDestop").classList.add("hidden");
  document.getElementById("orderHistoryDestop").classList.add("hidden");
  document.getElementById("notification").classList.remove("hidden");
}

// Event listeners for menu choices mobile
const mobileUserInfo = document.getElementById("mobile-user");
const mobileWishlist = document.getElementById("mobile-wishlist");
const mobileOrderHistory = document.getElementById("mobile-order");
const mobileNotification = document.getElementById("mobile-notify");

mobileUserInfo.addEventListener("click", showUserInfo);
mobileWishlist.addEventListener("click",showMobileWishlist);
mobileOrderHistory.addEventListener("click",showMobileOrder);
mobileNotification.addEventListener("click", showNotification);

function showMobileWishlist() {
  document.getElementById("wishlistMobile").classList.remove("hidden");

    document.getElementById("orderHistoryMobile").classList.add("hidden");


   document.getElementById("profileEdit").classList.add("hidden");
  document.getElementById("notification").classList.add("hidden");
  // document.getElementById("orderHistoryMobile").classList.add("hidden");
 

}
function showMobileOrder() {
  // document.getElementById("wishlistMobile").classList.add("hidden");
  document.getElementById("orderHistoryMobile").classList.remove("hidden");
 
    document.getElementById("wishlistMobile").classList.add("hidden");

  
   document.getElementById("profileEdit").classList.add("hidden");
  document.getElementById("notification").classList.add("hidden");
 
}

// Get the necessary elements
const logoutLink = document.getElementById("logoutBtn");
const logoutModal = document.getElementById("logoutModal");
const confirmLogoutBtn = document.getElementById("confirmLogout");
const cancelLogoutBtn = document.getElementById("cancelLogout");

// Function to show the modal box
function showModalLogOut() {
  logoutModal.classList.remove("hidden");
}

// Function to hide the modal box
function hideModalLogOut() {
  logoutModal.classList.add("hidden");
}

// Event listener for the "Log Out" link
logoutLink.addEventListener("click", showModalLogOut);

// Event listeners for the confirm and cancel buttons in the modal box
confirmLogoutBtn.addEventListener("click", function () {
  // Add your log out logic here
  // For example, redirect to the log out page or perform a log out action

  // Hide the modal box after log out
  hideModalLogOut();
});

cancelLogoutBtn.addEventListener("click", hideModalLogOut);

// JavaScript to handle the modal dialog
const modal = document.getElementById("modal");
const closeModalBtn = document.getElementById("close-modal-btn");

// Function to show the modal
function showModal() {
  modal.classList.remove("hidden");
}

// Function to hide the modal
function hideModal() {
  modal.classList.add("hidden");
}
// Event listener for the Close button in the modal
closeModalBtn.addEventListener("click", function () {
  hideModal();
});

// Add event listener to the "Save Changes" button
const saveProfileBtn = document.getElementById("save-profile-btn");
saveProfileBtn.addEventListener("click", function () {
  showModal();
  // Add your logic to save the changes or perform any other actions here
});
