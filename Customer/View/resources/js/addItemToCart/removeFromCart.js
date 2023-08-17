$(document).ready(() => {
  const totalProductCount = $(".itemCard").length;
  $(".quantityInput").each(function(){
    let value = $(this).val();
    if(value == 1) $(this).parent().find(".minusBtn").attr("disabled", true);
  })

  $(".plusBtn").on("click", function () {
    $(".minusBtn").attr("disabled", false);
    var pricePerItem = Number($(this).attr("pricePerItem"));
    var inputElement = $(this).parent().find("input[name='qty']");
    var inputValue = Number(inputElement.val());
    inputElement.val(++inputValue);
    (inputValue == 10) ? $(".plusBtn").attr("disabled", true) : false;
    var pPriceElement = $(this).parent().parent().find(".desktopPrice");
    var mobilePriceElement = $(this).parent().parent().find(".mobilePrice");
    var total = pricePerItem * inputValue;
    pPriceElement.text(total.toLocaleString("en-US") + " Ks");
    mobilePriceElement.text(total.toLocaleString("en-US") + " Ks");
  });

  $(".minusBtn").on("click", function () {
    $(".plusBtn").attr("disabled", false);
    var pricePerItem = Number($(this).attr("pricePerItem"));
    var inputElement = $(this).parent().find("input[name='qty']");
    var inputValue = Number(inputElement.val());
    inputElement.val(--inputValue);
    (inputValue == 1) ? $(".minusBtn").attr("disabled", true) : false;
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
