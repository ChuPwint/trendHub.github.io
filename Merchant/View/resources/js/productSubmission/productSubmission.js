$(document).ready(function() {
    $("#addLogo").click(function() {
        $(".addLogoModal").toggle();
    });

    $(".closeLogoAddModal").click(function() {
        $(".addLogoModal").toggle();
    });

    $("#addProductBtn").click(function() {
        $(".addProductModal").toggle();
    });

    $(".closeAddProductModal").click(function() {
        $(".addProductModal").toggle();
    });

    $("#submitProductBtn").click(function() {
        $(".productSubmitFinishModal").toggle();
        $("#name").val($("#name").val());
        $("#storeName").val($("#storeName").val());
        $("#license").val($("#license").val());
        $("#email").val($("#email").val());
        $("#phone").val($("#phone").val());
        $("#address").val($("#address").val());
        $(".productSubmitData").remove();

        $("#submitProductBtn").addClass("hidden");
    });

    $("#closeProductSubmitFinishModal").click(function() {
        $(".productSubmitFinishModal").toggle();
    });
});