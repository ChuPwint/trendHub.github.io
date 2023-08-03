document.getElementById("file_upload").onchange = function (evt) {
  var tgt = evt.target || window.event.srcElement,
    files = tgt.files;

  // FileReader support
  if (FileReader && files && files.length) {
    var fr = new FileReader();
    fr.onload = function () {
      document.getElementById("photoimg").src = fr.result;
    };
    fr.readAsDataURL(files[0]);
  }

  // Not supported
  else {
    // fallback -- perhaps submit the input to an iframe and temporarily store
    // them on the server until the user's session ends.
  }
};


document.getElementById("editFile_upload").onchange = function (evt) {
    var tgt = evt.target || window.event.srcElement,
      files = tgt.files;
  
    // FileReader support
    if (FileReader && files && files.length) {
      var fr = new FileReader();
      fr.onload = function () {
        document.getElementById("editImage").src = fr.result;
      };
      fr.readAsDataURL(files[0]);
    }
  
    // Not supported
    else {
      // fallback -- perhaps submit the input to an iframe and temporarily store
      // them on the server until the user's session ends.
    }
  };




$(document).ready(function () {
    //Admin Product Edit Model Box
  $(".editProduct").click(function () {
    $("#modalEdit").removeClass("hidden");

    $.ajax({
      url: "../../Controller/manageProducts/adminEditProductShowController.php",
      type: "POST",
      data: {
        id: this.id,
      },
      success: function (result) {
        let products = JSON.parse(result);
        $("#editID").val(products[0].id);
        $("#editCategory").val(products[0].category_name);
        $("#editProductName").val(products[0].p_name);
        $("#editBrand").val(products[0].brand_name);
        $("#editSellPrice").val(products[0].sell_price);
        $("#editBuyPrice").val(products[0].buy_price);
        $("#editQuantity").val(products[0].p_stock);
        $("#editImage").attr("src", "../../.." + products[0].p_path);
        $("#editProductDetail").val(products[0].p_detail);
        $("#editProductDescription").val(products[0].p_description);
      },
      error: function (error) {
        console.log(error);
      },
    });
  });

  //Admin Product Delete Model Box
  $(".deleteProduct").click(function (){
    $("#modal1").removeClass("hidden");

    $.ajax({
      url: "../../Controller/manageProducts/adminDeleteProductShowController.php",
      type: "POST",
      data: {
        id: $(this).attr("deleteID"),
      },
      success: function (result) {
        let product = JSON.parse(result);
        $("#deleteProductName").text(product[0].p_name);
        $("#deleteProductImg").attr("src", "../../.." + product[0].p_path);
        $("#deleteProductID").val(product[0].id);
      },
      error: function (error) {
        console.log(error);
      },
    });
  })

  //Admin Product Delete
  $("#confirmDeleteProduct").click(function (){
    $("#modal1").addClass("hidden");

    $.ajax({
      url: "../../Controller/manageProducts/adminDeleteProductController.php",
      type: "POST",
      data: {
        id: $("#deleteProductID").val(),
      },
      success: function (result) {
        window.location.href = "../../Controller/manageProducts/adminProductController.php";
      },
      error: function (error) {
        console.log(error);
      },
    });
  })

  $("#closeModal1,#cancelDeleteProduct").click(function (){
    $("#modal1").addClass("hidden");
  })


  $("#save").click(function () {
    $("#modalEdit").addClass("hidden");
  });

  $("#openModalButton").on("click", function () {
    $("#myModal").removeClass("hidden");
  });

  $("#closeModalButton").on("click", function () {
    $('#myModal').addClass('hidden');
  });

  $(".showDetail").click(function (){
    $("#modalDetail").removeClass("hidden");

    $.ajax({
      url: "../../Controller/manageProducts/viewDetailController.php",
      type: "POST",
      data: {
        id: $(this).attr("detailID"),
      },
      success: function (result) {
        let product = JSON.parse(result);
        console.log(product);
        // $("#editID").val(products[0].id);
        // $("#editCategory").val(products[0].category_name);
        // $("#editProductName").val(products[0].p_name);
        // $("#editBrand").val(products[0].brand_name);
        // $("#editSellPrice").val(products[0].sell_price);
        // $("#editBuyPrice").val(products[0].buy_price);
        // $("#editQuantity").val(products[0].p_stock);
        // $("#editImage").attr("src", "../../.." + products[0].p_path);
        // $("#editProductDetail").val(products[0].p_detail);
        // $("#editProductDescription").val(products[0].p_description);
      },
      error: function (error) {
        console.log(error);
      },
    });
  })

  $("#hideDetail").click(function (){
    $("#modalDetail").addClass("hidden");
  })

});
