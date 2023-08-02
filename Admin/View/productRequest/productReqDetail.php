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
                    <p>Date : Sun, Jul 16, 2023</p>
                </div>

                <input type="text" name="" id="" class="w-[800px] py-2 px-5 rounded outline-none" placeholder="Search...">
            </div>
            <!-- Search End-->


            <!-- All Customers Data Start -->
            <div class="px-[53px] py-8 data-output">
                <!-- Sort Start  -->
                <div class="flex items-center justify-between space-x-2 mb-2">
                    <div class="text-white">
                        <h1 class="font-semibold text-3xl">MSI</h1>
                        <span>8 Product Submission Request</span>
                    </div>
                    <div>
                        <span class="text-white">Sort by:</span>
                        <select name="" id="" class="outline-none rounded py-1 px-3">
                            <option value="">Merchant Name</option>
                            <option value="">Des Merchant Name</option>
                            <option value="">Date</option>
                            <option value="">Des Date</option>
                        </select>
                    </div>
                </div>
                <!-- Sort END  -->

                <!-- Table Start  -->
                <div class="flex justify-center min-h-screen relative">
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
                                        <th class="px-3 py-6 text-center">Total Sell Price</th>
                                        <th class="px-3 py-6 text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            electronic device
                                        </td>
                                        <td class="p-3 text-center">
                                            MSI
                                        </td>
                                        <td class="p-3 text-center">
                                            20
                                        </td>
                                        <td class="p-3 text-center">
                                            $300
                                        </td>
                                        <td class="p-3 text-center">
                                            $15,000.00
                                        </td>
                                        <td class="p-3 text-center ">
                                            <span class="underline cursor-pointer check">Check</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            electronic device
                                        </td>
                                        <td class="p-3 text-center">
                                            MSI
                                        </td>
                                        <td class="p-3 text-center">
                                            20
                                        </td>
                                        <td class="p-3 text-center">
                                            $300
                                        </td>
                                        <td class="p-3 text-center">
                                            $15,000.00
                                        </td>
                                        <td class="p-3 text-center ">
                                            <span class="underline cursor-pointer check">Check</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            electronic device
                                        </td>
                                        <td class="p-3 text-center">
                                            MSI
                                        </td>
                                        <td class="p-3 text-center">
                                            20
                                        </td>
                                        <td class="p-3 text-center">
                                            $300
                                        </td>
                                        <td class="p-3 text-center">
                                            $15,000.00
                                        </td>
                                        <td class="p-3 text-center ">
                                            <span class="underline cursor-pointer check">Check</span>
                                        </td>
                                    </tr>


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

    <script src="../resources/lib/jquery3.6.0.js"></script>
    <script src="../resources/js/product_req_detail.js"></script>
    <script src="../resources/js/drop_down.js"></script>

    
</body>

</html>