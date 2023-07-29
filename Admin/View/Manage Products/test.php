<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin's Product</title>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css?id=<?= time() ?>">
    <script src="../resources/lib/jquery3.6.0.js"></script>
    <!-- google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- flowBite link -->
    <script src="../path/to/flowbite/dist/datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/datepicker.min.js"></script>


    <link href="../resources/css/pending_merchant.css">
</head>
<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .table {
        border-spacing: 0 10px;
    }
</style>

<body class="bg-[#12141B] font-roboto ">
    <section class="container w-full mx-auto flex">
        <!-- Import side bar  -->
        <?php include "../resources/common/adminSideBar.php" ?>

        <!-- Right-side Start -->
        <div class="h-screen overflow-hidden w-full">
            <!-- Search Start-->
            <div class="bg-[#262B3A] flex justify-between items-center py-3 px-10">
                <div class="text-white">
                    <p class="text-2xl font-semibold  tracking-wider">Admin's Product</p>
                    <p>Date : Sun, Jul 16, 2023</p>
                </div>

                <input type="text" name="" id="" class="w-[800px] py-2 px-5 rounded outline-none" placeholder="Search...">
            </div>
            <!-- Search End-->


            <!-- Analytics Data Start -->
            <div class="px-20 data-output">


                <!-- start Date -->
                <div date-rangepicker class="flex items-center space-x-5 -ml-[32px] py-[20px] pb-[30px] relative">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input name="start" type="text" class=" border-gray-300 text-black text-sm rounded-lg  block w-full pl-10 p-2.5" placeholder="Date From">
                    </div>

                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input name="end" type="text" class=" border-gray-300 text-black text-sm rounded-lg  block w-full pl-10 p-2.5" placeholder="Date To">
                    </div>
                    <div class="absolute -right-[30px]">
                        <label class="inline-flex text-white" for="">Sort By:</label>
                        <select id="dropdown" class="inline-block mt-1  w-[150px] px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none">
                            <option selected value="personal">Personal Name</option>
                            <option value="business">Business Name</option>
                            <option value="address">Address</option>
                            <option value="date">Date</option>
                        </select>
                    </div>
                </div>
                <!-- end Date -->




                <div class="flex justify-center min-h-screen relative">
                    <div class="col-span-12">
                        <div class="h-[500px] overflow-y-scroll scrollbar-hide">
                            <table class="table text-textBlack border-separate space-y-6 text-sm w-[1200px] overflow-y-scroll">
                                <thead class="bg-[#fffafa] text-textBlack ">
                                    <tr>
                                        <th class="px-3 py-6 text-center">No.</th>
                                        <th class="px-3 py-6 text-center">Product Name</th>
                                        <th class="px-3 py-6 text-center">Category</th>
                                        <th class="px-3 py-6 text-center">Stock</th>
                                        <th class="px-3 py-6 text-center">Buy Price</th>
                                        <th class="px-3 py-6 text-center">Sell Price</th>
                                        <th class="px-3 py-6 text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            MSI Summit E13 Flip Evo

                                        </td>
                                        <td class="p-3 text-center">
                                            Electronics Devices
                                        </td>

                                        <td class="p-3 text-center ">
                                            10

                                        </td>
                                        <td class="p-3 text-center ">
                                            2,090,000
                                        </td>
                                        <td class="p-3 text-center ">
                                            2,100,000
                                        </td>

                                        <td class="p-3 text-center  space-x-2 ">
                                            <span data-modal-id="modalcreate" class=" px-4 py-2 cursor-pointer bg-[#396C21] text-white rounded-md">EDIT</span>
                                            <span data-modal-id="modal1" class="open-modal px-4 py-2 cursor-pointer bg-[#AC2E2E] text-white rounded-md">DELETE</span>
                                        </td>
                                    </tr>


                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            MSI Summit E13 Flip Evo

                                        </td>
                                        <td class="p-3 text-center">
                                            Electronics Devices
                                        </td>

                                        <td class="p-3 text-center ">
                                            10

                                        </td>
                                        <td class="p-3 text-center ">
                                            2,090,000
                                        </td>
                                        <td class="p-3 text-center ">
                                            2,100,000
                                        </td>

                                        <td class="p-3 text-center space-x-2 ">
                                            <span data-modal-id="modalcreate" class=" px-4 py-2 cursor-pointer bg-[#396C21] text-white rounded-md">EDIT</span>
                                            <span data-modal-id="modal1" class="open-modal px-4 py-2 cursor-pointer bg-[#AC2E2E] text-white rounded-md">DELETE</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            MSI Summit E13 Flip Evo

                                        </td>
                                        <td class="p-3 text-center">
                                            Electronics Devices
                                        </td>

                                        <td class="p-3 text-center ">
                                            10

                                        </td>
                                        <td class="p-3 text-center ">
                                            2,090,000
                                        </td>
                                        <td class="p-3 text-center ">
                                            2,100,000
                                        </td>

                                        <td class="p-3 text-center space-x-2 ">
                                            <span data-modal-id="modalcreate" class=" px-4 py-2 cursor-pointer bg-[#396C21] text-white rounded-md">EDIT</span>
                                            <span data-modal-id="modal1" class="open-modal px-4 py-2 cursor-pointer bg-[#AC2E2E] text-white rounded-md">DELETE</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            MSI Summit E13 Flip Evo

                                        </td>
                                        <td class="p-3 text-center">
                                            Electronics Devices
                                        </td>

                                        <td class="p-3 text-center ">
                                            10

                                        </td>
                                        <td class="p-3 text-center ">
                                            2,090,000
                                        </td>
                                        <td class="p-3 text-center ">
                                            2,100,000
                                        </td>

                                        <td class="p-3 text-center space-x-2 ">
                                            <span data-modal-id="modalcreate" class=" px-4 py-2 cursor-pointer bg-[#396C21] text-white rounded-md">EDIT</span>
                                            <span data-modal-id="modal1" class="open-modal px-4 py-2 cursor-pointer bg-[#AC2E2E] text-white rounded-md">DELETE</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            MSI Summit E13 Flip Evo

                                        </td>
                                        <td class="p-3 text-center">
                                            Electronics Devices
                                        </td>

                                        <td class="p-3 text-center ">
                                            10

                                        </td>
                                        <td class="p-3 text-center ">
                                            2,090,000
                                        </td>
                                        <td class="p-3 text-center ">
                                            2,100,000
                                        </td>

                                        <td class="p-3 text-center space-x-2 ">
                                            <span data-modal-id="modalcreate" class=" px-4 py-2 cursor-pointer bg-[#396C21] text-white rounded-md">EDIT</span>
                                            <span data-modal-id="modal1" class="open-modal px-4 py-2 cursor-pointer bg-[#AC2E2E] text-white rounded-md">DELETE</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            MSI Summit E13 Flip Evo

                                        </td>
                                        <td class="p-3 text-center">
                                            Electronics Devices
                                        </td>

                                        <td class="p-3 text-center ">
                                            10

                                        </td>
                                        <td class="p-3 text-center ">
                                            2,090,000
                                        </td>
                                        <td class="p-3 text-center ">
                                            2,100,000
                                        </td>

                                        <td class="p-3 text-center space-x-2 ">
                                            <span data-modal-id="modalcreate" class=" px-4 py-2 cursor-pointer bg-[#396C21] text-white rounded-md">EDIT</span>
                                            <span data-modal-id="modal1" class="open-modal px-4 py-2 cursor-pointer bg-[#AC2E2E] text-white rounded-md">DELETE</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            MSI Summit E13 Flip Evo

                                        </td>
                                        <td class="p-3 text-center">
                                            Electronics Devices
                                        </td>

                                        <td class="p-3 text-center ">
                                            10

                                        </td>
                                        <td class="p-3 text-center ">
                                            2,090,000
                                        </td>
                                        <td class="p-3 text-center ">
                                            2,100,000
                                        </td>

                                        <td class="p-3 text-center space-x-2 ">
                                            <span data-modal-id="modalcreate" class=" px-4 py-2 cursor-pointer bg-[#396C21] text-white rounded-md">EDIT</span>
                                            <span data-modal-id="modal1" class="open-modal px-4 py-2 cursor-pointer bg-[#AC2E2E] text-white rounded-md">DELETE</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            MSI Summit E13 Flip Evo

                                        </td>
                                        <td class="p-3 text-center">
                                            Electronics Devices
                                        </td>

                                        <td class="p-3 text-center ">
                                            10

                                        </td>
                                        <td class="p-3 text-center ">
                                            2,090,000
                                        </td>
                                        <td class="p-3 text-center ">
                                            2,100,000
                                        </td>

                                        <td class="p-3 text-center space-x-2 ">
                                            <span  id="openModalButton" class=" px-4 py-2 cursor-pointer bg-[#396C21] text-white rounded-md">343343</span>
                                            <span data-modal-id="modal1" class="open-modal px-4 py-2 cursor-pointer bg-[#AC2E2E] text-white rounded-md">DELETE</span>
                                        </td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>
                  




                </div>

            </div>
            <!-- Analytics Data End  -->

        </div>
        <!-- Right-side End -->

    </section>




    <!-- Start modal box for delete-->
    <div id="modals-container">
        <div id="modal1" class="hidden fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <!-- Start Modal Content -->
                <div class="relative w-[400px]  mx-auto mt-[120px]  bg-primary rounded-lg text-left overflow-hidden shadow-xl transform transition-all ">
                    <div class="bg-white px-4 pt-5 pb-4">
                        <div class="">
                            <div class="mx-auto  h-12 w-12 absolute right-0 top-4 ">
                                <!-- Cross Sign -->
                                <svg id="closeModal1" class="h-6 w-6 text-black cursor-pointer" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </div>
                            <div class="mt-3  ml-4 text-left">
                                <span class="text-center block pb-4 mt-7">You are about to Delete the following item:</span>
                                <h1 class=" font-semibold mt-2  text-center "> MSI Summit E13 Flip Evo</h1>
                               <img src="../../../Customer/View/resources/img/homePage/slider/msi.svg" class=" h-[100px] mx-auto mt-4 mb-4" alt="">
                               

                            </div>
                        </div>
                        <div class="flex justify-center space-x-4 mt-6">

                            <button id="closeModalButton1" class="rounded-[5px] px-3 py-1 text-white   bg-[#AC2E2E]">Cancel</button>
                            <button id="closeModalButton1" class="bg-[#456265] rounded-[5px] px-3 py-1 text-white">Confirm</button>

                        </div>
                    </div>

                </div>
                <!-- End Modal Content -->

            </div>
        </div>
    </div>
    <!-- end modal box  delete-->




    









    <!-- Start Modal box to create product-->
    <div id="myModalEdit" class="modal hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
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
                    <input class=" mt-8 block w-60  mx-auto h-[36px] pl-3 rounded-sm" type="text" placeholder="Product Name"> <br>
                    <input class="block  w-60  mx-auto h-[36px] pl-3 rounded-sm" type="text" placeholder="Brand"> <br>



                    <select id="dropdown" class="block  w-60  mx-auto bg-white border border-gray-300 px-4 py-2 rounded-sm">
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

                    <input class="  w-60 block mx-auto h-[36px] pl-3 rounded-sm" type="text" placeholder="Buy Price"> <br>
                    <input class="  w-60 block mx-auto h-[36px] pl-3 rounded-sm" type="text" placeholder="Sell Price"> <br>
                    <input class="  w-60 block mx-auto h-[36px] pl-3 rounded-sm" type="text" placeholder="Quantity"> <br>
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
<button id="addToListButton" class="px-[100px] mt-7 shadow-md block mx-auto py-2 bg-[#456265] text-white rounded-md outline-none ">Add to List</button>

</div>
<!-- end product details -->

</div>
<!-- end bottoom -->

            </div>

        </div>
    </div>

    <!-- End Modal box to create product-->












    
    <!-- Start Modal box to create product-->
    <div id="modal-contentEditEdit" class="modal hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
        <div class="modal-contentEdit bg-[#FEFEFE] w-[1000px] h-[700px] rounded shadow-md relative">
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
                    <input class=" mt-8 block w-60  mx-auto h-[36px] pl-3 rounded-sm" type="text" placeholder="Product Name"> <br>
                    <input class="block  w-60  mx-auto h-[36px] pl-3 rounded-sm" type="text" placeholder="Brand"> <br>



                    <select id="dropdown" class="block  w-60  mx-auto bg-white border border-gray-300 px-4 py-2 rounded-sm">
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

                    <input class="  w-60 block mx-auto h-[36px] pl-3 rounded-sm" type="text" placeholder="Buy Price"> <br>
                    <input class="  w-60 block mx-auto h-[36px] pl-3 rounded-sm" type="text" placeholder="Sell Price"> <br>
                    <input class="  w-60 block mx-auto h-[36px] pl-3 rounded-sm" type="text" placeholder="Quantity"> <br>
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
<button id="addToListButton" class="px-[100px] mt-7 shadow-md block mx-auto py-2 bg-[#456265] text-white rounded-md outline-none ">Add to List</button>

</div>
<!-- end product details -->

</div>
<!-- end bottoom -->

            </div>

        </div>
    </div>

















    






    <script src="../resources/lib/jquery3.6.0.js"></script>
    <script src="../resources/js/editModal.js"></script>
    <script src="../resources/js/drop_down.js"></script>

</body>

</html>