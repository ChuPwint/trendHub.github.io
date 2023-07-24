$(document).ready(() => {
    var stock = 10;
    $(".minusBtn").click(() => {
        if (Number($(".quantityInput").val()) - 1 == 1) {
            $(".quantityInput").val(1);
            disableQtyBtn($(".minusBtn"));
        } else {
            enableQtyBtn($(".plusBtn"));
            $(".quantityInput").val(Number($(".quantityInput").val()) - 1);
        }
    });

    $(".plusBtn").click(() => {
        if (Number($(".quantityInput").val()) + 1 == stock) {
            $(".quantityInput").val(stock);
            disableQtyBtn($(".plusBtn"));
        } else {
            enableQtyBtn($(".minusBtn"));
            $(".quantityInput").val(Number($(".quantityInput").val()) + 1);
        }
    });

    $(".wishlistAdd").click(() => {
        wishListTextAndIconToggle();
    });
});

/*
*Create:Choo Pwint Chal(2023/07/23)
*Update:Choo Pwint Chal(2023/07/23)
*disable a button and change style of button
*Parameter: button to disable and change style
*No Return
*/
function disableQtyBtn(disabledBtn) {
    disabledBtn.attr('disabled', true);
    disabledBtn.addClass("bg-opacity-50");
    disabledBtn.addClass("text-gray-200");
    disabledBtn.removeClass("font-semibold");
}

/*
*Create:Choo Pwint Chal(2023/07/23)
*Update:Choo Pwint Chal(2023/07/23)
*enable a button and change button style
*Parameter: button to enable and change style
*No Return
*/
function enableQtyBtn(enabledBtn) {
    enabledBtn.attr('disabled', false);
    enabledBtn.removeClass("bg-opacity-50");
    enabledBtn.removeClass("text-gray-200");
    enabledBtn.addClass("font-semibold");
}

/*
*Create:Choo Pwint Chal(2023/07/24)
*Update:Choo Pwint Chal(2023/07/24)
* toggle wish list color and text
*Parameter: no parameter
*No Return
*/
function wishListTextAndIconToggle() {
    if ($("#heartIcon").hasClass("text-textOrange") && $("#wishListText").text("Added to Wishlist")) {
        $("#heartIcon").addClass("text-gray-400");
        $("#heartIcon").removeClass("text-textOrange");
        $("#wishListText").text("Add to Wishlist");
        $("#wishListText").removeClass("text-textOrange");
    } else{
        $("#heartIcon").removeClass("text-gray-400");
        $("#heartIcon").addClass("text-textOrange");
        $("#wishListText").text("Added to Wishlist");
        $("#wishListText").addClass("text-textOrange");
    } 
}