$(document).ready(() => {
  const totalProductCount = $(".itemCard").length;
  calculateTotal();

  $(".plusBtn").on("click", function () {
    $(this).parent().find(".minusBtn").attr("disabled", false);
    var pricePerItem = Number($(this).attr("pricePerItem"));
    var inputElement = $(this).parent().find("input[name='qty']");
    var inputValue = Number(inputElement.val());
    inputElement.val(++inputValue);
    (inputValue == 10) ? $(this).attr("disabled", true) : false;
    var pPriceElement = $(this).parent().parent().find(".desktopPrice");
    var mobilePriceElement = $(this).parent().parent().find(".mobilePrice");
    var total = pricePerItem * inputValue;
    pPriceElement.text(total.toLocaleString("en-US") + " Ks");
    mobilePriceElement.text(total.toLocaleString("en-US") + " Ks");
    calculateTotal();
    addToStorage($(this).attr("productId"));
  });

  $(".minusBtn").on("click", function () {
    $(this).parent().find(".plusBtn").attr("disabled", false);
    var pricePerItem = Number($(this).attr("pricePerItem"));
    var inputElement = $(this).parent().find("input[name='qty']");
    var inputValue = Number(inputElement.val());
    inputElement.val(--inputValue);
    (inputValue == 1) ? $(this).attr("disabled", true) : false;
    var pPriceElement = $(this).parent().parent().find(".desktopPrice");
    var mobilePriceElement = $(this).parent().parent().find(".mobilePrice");
    var total = pricePerItem * inputValue;
    pPriceElement.text(total.toLocaleString("en-US") + " Ks");
    mobilePriceElement.text(total.toLocaleString("en-US") + " Ks");
    calculateTotal();
    removeFromStorage($(this).attr("productId"));
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

  function addToStorage(productID){
    let cartItems = JSON.parse(localStorage.getItem("cartItems"));
    let indexToAdd = cartItems.findIndex((item) => item.productID == productID);
    if (indexToAdd !== -1) {
        cartItems[indexToAdd].qty++;
        const updatedCartItemsJSON = JSON.stringify(cartItems);
        localStorage.setItem("cartItems", updatedCartItemsJSON);
    }
  }

  function removeFromStorage(productID){
    let cartItems = JSON.parse(localStorage.getItem("cartItems"));
    let indexToRemove = cartItems.findIndex((item) => item.productID == productID);
    if (indexToRemove !== -1) {
        cartItems[indexToRemove].qty--;
        const updatedCartItemsJSON = JSON.stringify(cartItems);
        localStorage.setItem("cartItems", updatedCartItemsJSON);
    }
  }

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

  function calculateTotal() {
    const totalDesktopPrice = $("desktopPrice").text();
    let subTotal = 0;
    $(".desktopPrice").each(function(){
      let price = $(this).text();
      var numericPrice = parseFloat(price.replace(/[^\d]/g, ""));
      subTotal += numericPrice;
    })
    $(".subTotal").text(subTotal.toLocaleString("en-US") + " Ks");
    $(".totalPrice").text(subTotal.toLocaleString("en-US") + " Ks");
    $("#hiddenSubTotal").val(subTotal);
  }

  $(".quantityInput").each(function(){
    let value = $(this).val();
    if(value == 1) $(this).parent().find(".minusBtn").attr("disabled", true);
  })

});
