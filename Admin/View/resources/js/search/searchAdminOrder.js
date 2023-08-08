$(document).ready(function () {
    //in admin order.php
    $("#searchAdminOrder").keyup(function () {
        ($(this).val() == "") ? $("#dropDownAdminOrder").val("order_status0") : "";
        $.ajax({
            url: "../../Controller/search/orderList/adminOrderSearchController.php",
            type: "POST",
            data: {
                searchText: $(this).val(),
                sortBy: $("#dropDownAdminOrder").val(),
            },
            success: function (res) {
                console.log(res);
                $(".searchResult").empty();
                let adminOrders = JSON.parse(res);
                // for (const order of adminOrders) {
                    
                // }
            },
            error: function (error) {
                console.log(error);
            }
        })
    });
});