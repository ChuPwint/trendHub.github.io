$(document).ready(() => {
    $(".heartBtn").click(function () {
        //if logged in can do wishlist
        if ($(".logged_in").length > 0) {
            var productId = $(this).attr("w_productId");
            console.log(productId);
            //console.log($(`.heartBtn[w_productId='${productId}']`).hasClass("text-[#ff6347]"));
            if ($(`.heartBtn[w_productId='${productId}']`).hasClass("text-[#ff6347]")) {
                //remove wishlist
                $.ajax({
                    url: "../Controller/homePage/wishlistRemoveController.php",
                    type: "POST",
                    data: {
                        productID: productId
                    },
                    success: function (result) {
                        $(`.heartBtn[w_productId='${productId}']`).removeClass("text-[#ff6347]");
                        $(`.heartBtn[w_productId='${productId}']`).addClass("text-[#808080]");
                    },
                    error: function (error) {
                        console.log(error);
                    },
                });
            } else if ($(`.heartBtn[w_productId='${productId}']`).hasClass("text-[#808080]")) {
                // //add wishlist
                $.ajax({
                    url: "../Controller/homePage/wishlistAddController.php",
                    type: "POST",
                    data: {
                        productID: productId
                    },
                    success: function (result) {
                        $(`.heartBtn[w_productId='${productId}']`).removeClass("text-[#808080]");
                        $(`.heartBtn[w_productId='${productId}']`).addClass("text-[#ff6347]");
                    },
                    error: function (error) {
                        console.log(error);
                    },
                });
            }
        } else {
            //window alert on log in
            window.alert("You must log in to add");
        }

    });
});