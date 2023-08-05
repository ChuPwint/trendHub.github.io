<?php
session_start();
if (!isset($_SESSION["reqDetails"])) {
    header("Location: ../../View/Error/error.php");
} else {
    $bname = $_SESSION["bname"];
    $name = $_SESSION["mname"];
    $email = $_SESSION["email"];
    $reqDetails = $_SESSION["reqDetails"];
    $total = $_SESSION["total"];
    $category = $_SESSION["allCategories"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Requests</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <script src="../resources/lib/jquery3.6.0.js"></script>

    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        /* For IE, Edge and Firefox */
        .scrollbar-hide {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        .table {
            border-spacing: 0 10px;
        }
    </style>
</head>

<body class="font-roboto">
    <section class="w-full bg-[#12141B] max-w-[1600px] mx-auto flex">
        <!-- Import side bar  -->
        <?php $menu = "productRequest" ?>
        <?php include "../resources/common/adminSideBar.php" ?>

        <!-- Right-side Start -->
        <div class="h-screen overflow-hidden w-full">
            <!-- Search Start-->
            <div class="bg-[#262B3A] flex justify-between items-center py-3 px-10">
                <div class="text-white">
                    <p class="text-2xl font-semibold">Product Requests</p>
                    <?php
                    $timestamp = time();
                    date_default_timezone_set('Asia/Yangon');
                    $day = date('D');
                    $month = date('F');
                    $date = date('j');
                    $year = date('Y', $timestamp);
                    ?>
                    <p><?php echo "Date : $day, $month $date, $year" ?></p>
                </div>
            </div>
            <!-- Search End-->

            <!-- All Customers Data Start -->
            <div class="px-[53px] py-8">
                <!-- Sort Start  -->
                <div class="flex items-center justify-between space-x-2 mb-2">
                    <div class="text-white">
                        <h1 class="font-semibold text-3xl"><?= $bname ?></h1>
                        <span><?= $total[0]["total"]; ?> Product Requests</span>
                    </div>
                    <div>
                        <span class="text-white">Sort by:</span>
                        <select name="" id="dropDownReqDetail" class="outline-none rounded py-1 px-3">
                            <option value="p_name">Product Name</option>
                            <option value="category_name">Category Name</option>
                            <option value="sell_price">Product Price</option>
                        </select>
                    </div>
                </div>
                <!-- Sort END  -->

                <!-- Table Start  -->
                <div class="flex justify-center min-h-screen">
                    <div class="col-span-12">
                        <div class="h-[500px] overflow-y-scroll scrollbar-hide">
                            <table class="table text-textBlack border-separate space-y-6 text-sm w-[1200px] overflow-y-scroll">
                                <thead class="bg-[#fffafa] text-textBlack ">
                                    <tr>
                                        <th class="px-3 py-6 text-center">No.</th>
                                        <th class="px-3 py-6 text-center">Category</th>
                                        <th class="px-3 py-6 text-center">Name</th>
                                        <th class="px-3 py-6 text-center">Qty</th>
                                        <th class="px-3 py-6 text-center">Sell Price</th>
                                        <th class="px-3 py-6 text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $num = 1; ?>
                                    <?php foreach ($reqDetails as $detail) { ?>
                                        <tr class="bg-[#fffafa]">
                                            <td class="p-3 text-center"><?= $num++; ?></td>
                                            <td class="p-3 text-center"><?= $detail["category_name"] ?></td>
                                            <td class="p-3 text-center"><?= $detail["p_name"] ?></td>
                                            <td class="p-3 text-center"><?= $detail["p_stock"] ?></td>
                                            <td class="p-3 text-center"><?= $detail["sell_price"] ?></td>
                                            <td class="p-3 text-center ">
                                                <span id="<?= $detail["id"] ?>" class="checkDetail underline font-semibold cursor-pointer">Check</span>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Table End  -->
            </div>
            <!-- All Customers Data End  -->
        </div>
        <!-- Right-side End -->
    </section>

    <!-- Start Modal box to create product-->
    <div id="showDetailModal" class="modal fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
        <!-- start of container box -->
        <div class="bg-white m-auto p-2 border rounded-sm w-[80%] relative">
            <button id="closeModalButton" class="absolute top-4 right-4 text-gray-700 hover:text-gray-900">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <h2 class="text-2xl font-bold px-6 py-3">Product Details</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <!-- start of upper row -->
                <div class="px-6 py-4 grid grid-cols-2 gap-4">
                    <!-- start of add product text fields -->
                    <div class="col-span-1">
                        <div class="bg-[#456265] p-4">
                            <div class="mb-4 relative">
                                <label for="category" class="z-0 absolute top-0 left-0 pr-16 bg-white text-darkGreenColor border border-darkGreenColor font-semibold py-2 pl-3 rounded-md">Category:</label>
                                <select id="category" name="category" class="h-[42px] py-2 pl-40 w-full font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" disabled>
                                    <!-- Add options for categories here -->
                                    <option value="<?= $detail["category_id"] ?>"><?= $detail["category_name"] ?></option>
                                    <!-- Add more options if needed -->
                                </select>
                                <input type="hidden" name="reqId" value="<?= $request["id"] ?>">
                            </div>
                            <div class="mb-4 relative">
                                <label for="productName" class="z-0 absolute top-0 left-0 pr-6 bg-white text-darkGreenColor border border-darkGreenColor font-semibold py-2 pl-3 rounded-md">Product Name:</label>
                                <input type="text" id="productName" name="productName" class="h-[42px] py-2 pl-40 w-full font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" readonly>
                            </div>
                            <div class="mb-4 relative">
                                <label for="brand" class="z-0 absolute top-0 left-0 pr-[86px] bg-white text-darkGreenColor border border-darkGreenColor font-semibold py-2 pl-3 rounded-md">Brand:</label>
                                <input type="text" id="brand" name="brand" class="h-[42px] py-2 pl-40 w-full font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" readonly>
                            </div>
                            <div class="mb-4 relative">
                                <label for="sellPrice" class="z-0 absolute top-0 left-0 pr-16 bg-white text-darkGreenColor border border-darkGreenColor font-semibold py-2 pl-3 rounded-md">Sell Price:</label>
                                <input type="text" id="sellPrice" name="sellPrice" class="h-[42px] py-2 pl-40 w-full font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" readonly>
                            </div>
                            <div class="mb-4 relative">
                                <label for="buyPrice" class="z-0 absolute top-0 left-0 pr-16 bg-white text-darkGreenColor border border-darkGreenColor font-semibold py-2 pl-3 rounded-md">Buy Price:</label>
                                <input type="text" id="buyPrice" name="buyPrice" class="h-[42px] py-2 pl-40 w-full font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" readonly>
                            </div>
                            <div class="relative">
                                <label for="quantity" class="z-0 absolute top-0 left-0 pr-[68px] bg-white text-darkGreenColor border border-darkGreenColor font-semibold py-2 pl-3 rounded-md">Quantity:</label>
                                <input type="number" id="quantity" name="quantity" class="h-[42px] py-2 pl-40 w-full font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" readonly>
                            </div>
                        </div>
                    </div>
                    <!-- end of add product text fields -->
                    <!-- start of upload photo -->
                    <div class="col-span-1">
                        <div class="h-full flex justify-center items-center rounded-lg border border-dashed border-gray-600 px-6 py-10">
                            <div class="text-center">
                                <div class="mt-4">
                                    <div class="flex justify-center"><img class="p_Image max-w-xs max-h-60" id="photoimg" src="" alt=""></div>
                                    <label for="file_upload" class="mt-2 cursor-pointer rounded-md bg-white font-semibold text-darkGreenColor">
                                        <span class="font-bold underline">Upload a file: </span>
                                    </label>
                                    <!-- <input id="file_upload" name="productImg" type="file" class="hidden mt-2 text-center" accept=".png, .jpg" required> -->
                                </div>
                                <!-- <p>PNG, JPG up to 10MB</p> -->
                            </div>
                        </div>
                    </div>
                    <!-- end of upload photo -->
                </div>
                <!-- end of upper row -->

                <!-- start of bottom row -->
                <div class="px-6 py-2">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-4">
                            <label for="productDetail" class="block font-medium">Product Detail:</label>
                            <textarea id="productDetail" name="productDetail" class="block w-full mt-1 p-2 border border-secondary rounded-md shadow-md outline-none" rows="3" readonly></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="productDescription" class="block font-medium">Product Description:</label>
                            <textarea id="productDescription" name="productDescription" class="block w-full mt-1 p-2 border border-secondary rounded-md shadow-md outline-none" rows="3" readonly></textarea>
                        </div>
                    </div>
                    <div class="flex justify-end items-center">
                        <button id="reject" class="px-8 mr-10 mt-7 shadow-md block py-2 bg-[#AC2E2E] text-white rounded-md outline-none ">Reject</button>
                        <button id="approve" class="px-5 mt-7 shadow-md block py-2 bg-[#456265] text-white rounded-md outline-none ">Approve</button>
                    </div>
                </div>
                <!-- end of bottom row -->
            </form>
        </div>
        <!-- end of container box -->
    </div>
    <!-- End Modal box to create product-->

    <!-- Start Modal box to edit product-->
    <div id="myModalEdit" class="hidden">
        <div class="modal fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
            <div class="modal-content bg-[#FEFEFE] w-[1000px] h-[700px] rounded shadow-md relative">
                <button id="closeModalButton" class="absolute top-4 right-4 text-gray-700 hover:text-gray-900">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                <div class="w-[800px] h-[650px] mt-[30px] mx-auto">

                    <!-- start top -->
                    <div class="h-[425px] w-[800px] mx-auto flex space-x-5 ">

                        <!-- start input data -->
                        <div class=" w-[400px] h-[420px] bg-[#456265] rounded-md">
                            <input class=" mt-8 block w-52  mx-auto h-[36px] pl-3 rounded-sm" type="text" placeholder="Product Name"> <br>
                            <input class="block  w-52  mx-auto h-[36px] pl-3 rounded-sm" type="text" placeholder="Brand"> <br>



                            <select id="dropdown" class="block  w-52  mx-auto bg-white border border-gray-300 px-4 py-2 rounded-sm">
                                <option value="" disabled selected>Category</option>
                                <option value="option1">Men's & Boy's Fashion</option>
                                <option value="option2">Women's & Girl's Fashion</option>
                                <option value="option3">Sports & Outdoors</option>
                                <option value="option3">Health & Beauty</option>
                                <option value="option3">Jewelry</option>
                                <option value="option3">Watches</option>
                                <option value="option3">Home & Lifestyle</option>
                                <option value="option3">Mother & Baby</option>
                                <option value="option3">Bags</option>
                                <option value="option3">Groceries</option>
                                <option value="option3">TV & Home Appliances</option>
                                <option value="option3">Electronics Devices</option>
                                <option value="option3">Others</option>
                            </select>

                            <br>

                            <input class="  w-52 block mx-auto h-[36px] pl-3 rounded-sm" type="text" placeholder="Buy Price"> <br>
                            <input class="  w-52 block mx-auto h-[36px] pl-3 rounded-sm" type="text" placeholder="Sell Price"> <br>
                            <input class="  w-52 block mx-auto h-[36px] pl-3 rounded-sm" type="text" placeholder="Quantity"> <br>
                        </div>
                        <!-- end input data -->

                        <!-- start upload  -->
                        <div class="w-[400px]">

                            <label class="w-full h-[420px]  flex flex-col items-center bg-white rounded-lg shadow-lg tracking-wide">
                                <img class="mt-[170px] block" src="../resources/img/Admin Product/upload.png" alt="">
                                <span class="mt-2 text-[#959595] text-lg font-semibold">Upload Your Product Here</span>
                                <input type='file' class="hidden" />
                            </label>
                        </div>
                        <!-- end upload  -->


                    </div>
                    <!-- end top -->


                    <!-- start bottom -->
                    <div class="w-[800px] h-[200px] mt-5 flex space-x-5">

                        <!-- start product description -->
                        <div>
                            <input placeholder="Product Description" type="text" class="w-[390px] h-[200px] shadow-md bg-[#EDCFCF] rounded-md pl-2 pb-[130px] break-all outline-none  ">
                        </div>
                        <!-- end product description -->

                        <!-- start product details -->
                        <div>
                            <input placeholder="Product Details" type="text" class="w-[390px] h-[130px] bg-[#EDCFCF] shadow-md rounded-md pb-[60px] pl-2 ">
                            <div class="flex">
                                <button id="reject" class="px-8 mt-7 shadow-md block mx-auto py-2 bg-[#AC2E2E] text-white rounded-md outline-none ">Reject</button>
                                <button id="approve" class="px-5 mt-7 shadow-md block mx-auto py-2 bg-[#456265] text-white rounded-md outline-none ">Approve</button>
                            </div>
                        </div>
                        <!-- end product details -->

                    </div>
                    <!-- end bottoom -->

                </div>

            </div>
        </div>
    </div>
    <!-- End Modal box to edit product-->
    <script>
        //Admin Product Edit Model Box
        $(document).on("click", ".checkDetail", function() {
            $("#showDetailModal").removeClass("hidden");
            $.ajax({
                url: "../../Controller/manageProducts/adminEditProductShowController.php",
                type: "POST",
                data: {
                    id: this.id,
                },
                success: function(result) {
                    let products = JSON.parse(result);
                    $("#editID").val(products[0].id);
                    $("#editCategory").val(products[0].category_name);
                    $("#editProductName").val(products[0].p_name);
                    $("#editBrand").val(products[0].brand_name);
                    $("#editSellPrice").val(products[0].sell_price);
                    $("#editBuyPrice").val(products[0].buy_price);
                    $("#editQuantity").val(products[0].p_stock);
                    $("#editImage").attr("src", "../../.." + products[0].p_path);
                    $("#previousPath").val(products[0].p_path);
                    $("#editProductDetail").val(products[0].p_detail);
                    $("#editProductDescription").val(products[0].p_description);
                },
                error: function(error) {
                    console.log(error);
                },
            });
        });
    </script>
</body>

</html>