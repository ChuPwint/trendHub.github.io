// function canPlaceOrder() {
//     console.log("Testing");
//     document.getElementById("placeOrderBtn").classList.remove("bg-opacity-50");
//     document.getElementById("saveDeliInfoBtn").classList.add("bg-opacity-50");
// }

var saveDeliInfoBtn = document.getElementById("saveDeliInfoBtn");
var placeOrderBtn = document.getElementById("placeOrderBtn");

saveDeliInfoBtn.addEventListener("click", enablePlaceOrderBtn());

function enablePlaceOrderBtn() {
    saveDeliInfoBtn.classList.add("disabled");
}