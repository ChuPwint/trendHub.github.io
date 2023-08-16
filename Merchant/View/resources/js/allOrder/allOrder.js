$(document).ready(function() {
    $(".viewOrderDetailBtn").click(function() {
        $(".viewOrderDetailModal").toggle();
    });

    $(".closeViewOrderDetailModal").click(function() {
        $(".viewOrderDetailModal").toggle();
    });

    $(".changeStatusBtn").click(function() {
        $(".changeStatusModal").toggle();
    });

    $(".closeChangeStatusModal").click(function() {
        $(".changeStatusModal").toggle();
    });
   
        $("#logoutBtn").click(function() {
            $("#logoutModal").toggle();
        });

        $("#confirmLogout").click(function() {
            $("#logoutModal").toggle();
        });

        $("#cancelLogout").click(function() {
            $("#logoutModal").toggle();
        });
        $("#order").change(function() {
            $("#orderInput").val($("#order").val());
            $("#payment").val($("#order").val());
            $("#pay").val($("#payment").val());
        });
        $("#payment").change(function() {
            $("#pay").val($("#payment").val());
            $("#order").val($("#payment").val());
            $("#orderInput").val($("#order").val());
        });
   

  //Sorting
$("#dropdown").change(function () {
    console.log($(this).val());
    $.ajax({
        url: "../../Controller/allOrder/sortOrderController.php",
        type: "POST",
        data: {
            sortText: $(this).val(),
        },
        success: function (result) {
            let orders = JSON.parse(result);
            $("#sortResult").empty();
            
            for (const order of orders) {
                let rowClass = (order.order_status == 0) ? 'bg-gray-200' : 'bg-white';
                let orderStatus = (order.order_status == 0) ? 'Pending' : 'Completed';
                let orderDate = new Date(order.create_date);
                
                $("#sortResult").append(
                    `<tr class="orderList ${rowClass}">
                        <td class="viewOrderDetailBtn p-2 text-xl  text-center underline font-bold cursor-pointer">
                            <a href="../../Controller/allOrder/detailViewController.php?id=${order.id}">
                                ${order.id}
                            </a>
                        </td>
                        <td class="p-2 text-center">${order.c_name}</td>
                        <td class="p-2 text-center">${order.total_quantity}</td>
                        <td class="p-2 text-center">${order.total_amt} Ks</td>
                        <td class="p-2 text-center">${order.payment_method}</td>
                        <td class="p-2 text-center">${orderDate.toDateString()}</td>
                        <td class="p-2 text-center">${orderStatus}</td>
                        <td class="changeStatusBtn p-2 text-center underline font-semibold cursor-pointer">
                            <a href="../../Controller/allOrder/changeStatusController.php?id=${order.id}">
                                Change Status
                            </a>
                        </td>
                    </tr>`
                );
            }
        },
        error: function (error) {
            console.log(error);
        },
    });
});

});