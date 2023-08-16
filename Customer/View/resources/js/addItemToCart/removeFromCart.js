$(document).ready(() => {
  const totalProductCount = $(".itemCard").length;

  $(".plusBtn").on("click", function () {
    var pricePerItem = Number($(this).attr("pricePerItem"));
    var inputElement = $(this).parent().find("input[name='qty']");
    var inputValue = Number(inputElement.val());
    var pPriceElement = $(this).parent().parent().find(".desktopPrice");
    var mobilePriceElement = $(this).parent().parent().find(".mobilePrice");
    var total = pricePerItem * inputValue;
    pPriceElement.text(total.toLocaleString("en-US") + " Ks");
    mobilePriceElement.text(total.toLocaleString("en-US") + " Ks");
  });

  $(".minusBtn").on("click", function () {
    var pricePerItem = Number($(this).attr("pricePerItem"));
    var inputElement = $(this).parent().find("input[name='qty']");
    var inputValue = Number(inputElement.val());
    var pPriceElement = $(this).parent().parent().find(".desktopPrice");
    var mobilePriceElement = $(this).parent().parent().find(".mobilePrice");
    var total = pricePerItem * inputValue;
    pPriceElement.text(total.toLocaleString("en-US") + " Ks");
    mobilePriceElement.text(total.toLocaleString("en-US") + " Ks");
  });

  $(".dTrashImg").on("click", function () {
    let currentItemID = this.id;
    $(this).parent().parent().parent().addClass("hidden");
    const hiddenProductCount = $(".itemCard.hidden").length;
    $(".itemAmount").text(totalProductCount - hiddenProductCount);
    if (hiddenProductCount === totalProductCount) {
        noItem.classList.remove("hidden");
        $("#orderCard").addClass("hidden");
        $("#totalItem").removeClass("md:block");
        $("#totalItem").addClass("hidden");
    };
    removeFromCard(currentItemID);
  });

  $(".mTrashImg").on("click", function () {
    let currentItemID = this.id;
    $(this).parent().addClass("hidden");
    const hiddenProductCount = $(".itemCard.hidden").length;
    $(".itemAmount").text(totalProductCount - hiddenProductCount);
    if (hiddenProductCount === totalProductCount) {
        noItem.classList.remove("hidden");
        $("#orderCard").addClass("hidden");
        $("#totalItem").removeClass("md:block");
        $("#totalItem").addClass("hidden");
    };    
    removeFromCard(currentItemID);
  });

  function removeFromCard(productID) {
    let cartItems = JSON.parse(localStorage.getItem("cartItems"));
    let totalProducts = Number(localStorage.getItem("currentItems"));
    let indexToRemove = cartItems.findIndex((item) => item.productID == productID);
    if (indexToRemove !== -1) {
        const removedQty = cartItems[indexToRemove].qty;
        cartItems.splice(indexToRemove, 1);
        const updatedCartItemsJSON = JSON.stringify(cartItems);
        localStorage.setItem("cartItems", updatedCartItemsJSON);
        totalProducts -= removedQty;
        localStorage.setItem("currentItems", totalProducts);
    }
  }
});
