$(document).ready(function () {
    //in admin order.php
    $("#deliRegion").change(function () {
        $.ajax({
            url: "../../Controller/checkout/townshipOptionController.php",
            type: "POST",
            data: {
                regionCheckOutId: $(this).val()
            },
            success: function (res) {
                let totalPending = 0;
                $(".searchResult").empty();
                
            },
            error: function (error) {
                console.log(error);
            }
        })
    });
});