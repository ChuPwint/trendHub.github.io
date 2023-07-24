var saveDeliInfoBtn = document.getElementById("saveDeliInfoBtn");
var placeOrderBtn = document.getElementById("placeOrderBtn");

saveDeliInfoBtn.addEventListener("click", enablePlaceOrderBtn);

function enablePlaceOrderBtn() {
    placeOrderBtn.classList.remove("bg-opacity-50");
    placeOrderBtn.disabled = false;
    saveDeliInfoBtn.classList.add("bg-opacity-50");
    saveDeliInfoBtn.disabled = true;
}