var minusBtn = document.getElementsByClassName("minusBtn");
var plusBtn = document.getElementsByClassName("plusBtn");
var quantity = document.getElementsByClassName("quantityInput");
// var wishListAdd = document.getElementsByClassName("wishListAdd");
// var heartIcon = document.getElementById("heartIcon");

var stock = 10;

for (let index = 0; index < minusBtn.length; index++) {
    minusBtn[index].addEventListener("click", () => {
        if (Number(quantity[index].value) - 1 == 1) {
            quantity[index].value = 1;
            disableQtyBtn(minusBtn[index]);
        } else {
            enableQtyBtn(plusBtn[index]);
            quantity[index].value = Number(quantity[index].value) - 1;
        }
    });

    plusBtn[index].addEventListener("click", () => {
        if (Number(quantity[index].value) + 1 == stock) {
            quantity[index].value = stock;
            disableQtyBtn(plusBtn[index]);
        } else {
            enableQtyBtn(minusBtn[index]);
            quantity[index].value = Number(quantity[index].value) + 1;
        }
    });
}

// for (let index = 0; index < wishListAdd.length; index++) {
    
//     wishListAdd[index].addEventListener("click", () => {
//         console.log(wishListAdd.length);
//         console.log("inside index " + index);
//         wishListTextAndIconToggle();
//     });
// }

/*
*Create:Choo Pwint Chal(2023/07/23)
*Update:Choo Pwint Chal(2023/07/23)
*disable a button and change style of button
*Parameter: button to disable and change style
*No Return
*/
function disableQtyBtn(disabledBtn) {
    disabledBtn.disabled = true;
    disabledBtn.classList.add("bg-opacity-50");
    disabledBtn.classList.add("text-gray-200");
    disabledBtn.classList.remove("font-semibold");
}

/*
*Create:Choo Pwint Chal(2023/07/23)
*Update:Choo Pwint Chal(2023/07/23)
*enable a button and change button style
*Parameter: button to enable and change style
*No Return
*/
function enableQtyBtn(enabledBtn) {
    enabledBtn.disabled = false;
    enabledBtn.classList.remove("bg-opacity-50");
    enabledBtn.classList.remove("text-gray-200");
    enabledBtn.classList.add("font-semibold");
}

/*
*Create:Choo Pwint Chal(2023/07/24)
*Update:Choo Pwint Chal(2023/07/24)
* toggle wish list color and text
*Parameter: no parameter
*No Return
*/
// function wishListTextAndIconToggle() {
//     console.log("inside");
//     (wishListAdd[0].classList.contains("text-textOrange")) ? "" : wishListAdd[0].classList.add("text-textOrange");
//     if (wishListAdd[1].innerText == "Add to Wishlist") {
//         wishListAdd[1].innerText = "Added to Wishlist";
//         wishListAdd[1].classList.add("text-textOrange");
//     } else {
//         wishListAdd[1].innerText = "Add to Wishlist";
//         wishListAdd[1].classList.remove("text-textOrange");
//     }
// }