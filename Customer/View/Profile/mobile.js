// Get the necessary elements
const menuBtn = document.getElementById("menuBtn");
const sidebarMenu = document.getElementById("sidebarMenu");

// Function to toggle the visibility of the sidebar menu for mobile
function toggleSidebarMenu() {
    sidebarMenu.classList.toggle("show");
}

// Event listener for the menu button
menuBtn.addEventListener("click", toggleSidebarMenu);
