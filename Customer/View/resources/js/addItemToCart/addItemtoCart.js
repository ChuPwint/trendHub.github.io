$(document).ready(() => {
    var currentItem = $(".cart_item").text();
    $(".cart_item").text(currentItem);
    
    $(".cartBtn").click(() => {
        var currentItem = $(".cart_item").text();
        $(".cart_item").text(Number(currentItem) + 1);
    });
});