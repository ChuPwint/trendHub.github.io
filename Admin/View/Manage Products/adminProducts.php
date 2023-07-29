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

    .starColor {
        color: #F36823;
    }
</style>

<body class="bg-[#12141B] font-roboto ">
    <section class="container w-full mx-auto flex">
        <!-- Import side bar  -->
        <?php $menu = "manageProducts" ?>
        <?php $subMenu = "adminProducts" ?>
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
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            1
                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            MSI Summit E13 Flip Evo

                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            Electronics Devices
                                        </td>

                                        <td class="p-3 text-center cursor-pointer " onclick="showDetail()">
                                            10

                                        </td>
                                        <td class="p-3 text-center cursor-pointer " onclick="showDetail()">
                                            2,090,000
                                        </td>
                                        <td class="p-3 text-center cursor-pointer " onclick="showDetail()">
                                            2,100,000
                                        </td>

                                        <td class="p-3 text-center  space-x-2 ">
                                            <span onclick="showEdit()" class=" px-4 py-2 cursor-pointer bg-[#396C21] text-white rounded-md">EDIT</span>
                                            <span data-modal-id="modal1" class="open-modal px-4 py-2 cursor-pointer bg-[#AC2E2E] text-white rounded-md">DELETE</span>
                                        </td>
                                    </tr>


                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            1
                                        </td>
                                        <td class="p-3 text-center  cursor-pointer" onclick="showDetail()">
                                            MSI Summit E13 Flip Evo

                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            Electronics Devices
                                        </td>

                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            10

                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            2,090,000
                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            2,100,000
                                        </td>

                                        <td class="p-3 text-center space-x-2 ">
                                            <span onclick="showEdit()" class=" px-4 py-2 cursor-pointer bg-[#396C21] text-white rounded-md">EDIT</span>
                                            <span data-modal-id="modal1" class="open-modal px-4 py-2 cursor-pointer bg-[#AC2E2E] text-white rounded-md">DELETE</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            1
                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            MSI Summit E13 Flip Evo

                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            Electronics Devices
                                        </td>

                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            10

                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            2,090,000
                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            2,100,000
                                        </td>

                                        <td class="p-3 text-center space-x-2 ">
                                            <span onclick="showEdit()" class=" px-4 py-2 cursor-pointer bg-[#396C21] text-white rounded-md">EDIT</span>
                                            <span data-modal-id="modal1" class="open-modal px-4 py-2 cursor-pointer bg-[#AC2E2E] text-white rounded-md">DELETE</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            1
                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            MSI Summit E13 Flip Evo

                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            Electronics Devices
                                        </td>

                                        <td class="p-3 text-center  cursor-pointer" onclick="showDetail()">
                                            10

                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail() ">
                                            2,090,000
                                        </td>
                                        <td class="p-3 text-center  cursor-pointer" onclick="showDetail()">
                                            2,100,000
                                        </td>

                                        <td class="p-3 text-center space-x-2 ">
                                            <span onclick="showEdit()" class=" px-4 py-2 cursor-pointer bg-[#396C21] text-white rounded-md">EDIT</span>
                                            <span data-modal-id="modal1" class="open-modal px-4 py-2 cursor-pointer bg-[#AC2E2E] text-white rounded-md">DELETE</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            1
                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            MSI Summit E13 Flip Evo

                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            Electronics Devices
                                        </td>

                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            10

                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            2,090,000
                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            2,100,000
                                        </td>

                                        <td class="p-3 text-center space-x-2 ">
                                            <span onclick="showEdit()" class=" px-4 py-2 cursor-pointer bg-[#396C21] text-white rounded-md">EDIT</span>
                                            <span data-modal-id="modal1" class="open-modal px-4 py-2 cursor-pointer bg-[#AC2E2E] text-white rounded-md">DELETE</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            1
                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            MSI Summit E13 Flip Evo

                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            Electronics Devices
                                        </td>

                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            10

                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            2,090,000
                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            2,100,000
                                        </td>

                                        <td class="p-3 text-center space-x-2 ">
                                            <span onclick="showEdit()" class=" px-4 py-2 cursor-pointer bg-[#396C21] text-white rounded-md">EDIT</span>
                                            <span data-modal-id="modal1" class="open-modal px-4 py-2 cursor-pointer bg-[#AC2E2E] text-white rounded-md">DELETE</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            1
                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            MSI Summit E13 Flip Evo

                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            Electronics Devices
                                        </td>

                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            10

                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            2,090,000
                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            2,100,000
                                        </td>

                                        <td class="p-3 text-center space-x-2 ">
                                            <span onclick="showEdit()" class=" px-4 py-2 cursor-pointer bg-[#396C21] text-white rounded-md">EDIT</span>
                                            <span data-modal-id="modal1" class="open-modal px-4 py-2 cursor-pointer bg-[#AC2E2E] text-white rounded-md">DELETE</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            1
                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            MSI Summit E13 Flip Evo

                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            Electronics Devices
                                        </td>

                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            10

                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            2,090,000
                                        </td>
                                        <td class="p-3 text-center cursor-pointer" onclick="showDetail()">
                                            2,100,000errerwer
                                        </td>

                                        <td class="p-3 text-center space-x-2 ">
                                            <span onclick="showEdit()" class=" px-4 py-2 cursor-pointer bg-[#396C21] text-white rounded-md">EDIT</span>
                                            <span data-modal-id="modal1" class="open-modal px-4 py-2 cursor-pointer bg-[#AC2E2E] text-white rounded-md">DELETE</span>
                                        </td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>
                        <span id="openModalButton" class="text-white py-2 px-7 bg-[#456265] rounded-md absolute right-0 mt-4 cursor-pointer -mr-5 ">Add New Product</span>
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
                                <svg id="closeModal1" class="h-6 w-6 text-[#F36823]  cursor-pointer" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
    <div id="myModal" class="modal hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
        <div class="modal-content bg-[#FEFEFE] w-[1000px] h-[700px] rounded shadow-md relative">
            <button id="closeModalButton" class="absolute top-4 right-4 text-gray-700 hover:text-gray-900">
                <svg class="h-6 w-6 text-[#F36823] " fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                        <button id="addToListButton" class="px-[100px] mt-7 shadow-md block mx-auto py-2 bg-[#456265] text-white rounded-md outline-none ">Add to List</button>

                    </div>
                    <!-- end product details -->

                </div>
                <!-- end bottoom -->

            </div>

        </div>
    </div>

    <!-- End Modal box to create product-->




















    <!-- Start Product Details -->

    <div id="modalDetail" class="modal hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
        <div class="modal-content bg-[#FEFEFE] w-[1000px] h-[650px] rounded shadow-md relative">
            <span class=" font-semibold text-lg px-5 block mt-3 ">Item's Dtails</span>
            <button onclick="hideDetail()" class="absolute top-4 right-4 text-gray-700 hover:text-gray-900">
                <svg class="h-6 w-6 text-[#F36823] " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <div class="w-[950px] h-[600px] mt-[25px] mx-auto">

                <div class="w-[950px] h-[250px] bg-[#E4E4D2]">
                    <div class=" flex">

                        <div class="w-[300px]">
                            <img class="w-[200px] mx-auto pt-[40px] " src="../resources/img/Admin Product/msi.svg" alt="">
                        </div>

                        <div class="w-[650px] h-[150px] p-5">
                            MSI Summit E13 Flip Evo 13.4" FHD+ 120hz Touch 2 in 1 Business Laptop: Intel Core i7-1260P Iris Xe 32GB LPDDR5 1TB NVMe SSD, 360-Degree Flip, Thunderbolt 4, MSI Pen, Win 11
                        </div>


                    </div>
                    <div class="flex -mt-[53px]">
                        <div class="w-[300px]"></div>
                        <div class="w-[650px] h-[100px] flex justify-between">
                            <div class="p-5"><span class=" font-semibold text-lg ">Brand:</span> <span class="underline font-semibold text-[#F36823] cursor-pointer ">MSI</span></div>
                            <div class="p-5"><span class=" font-semibold text-lg ">From:</span> <span class="underline font-semibold text-[#F36823] cursor-pointer ">Trend Hub</span></div>

                        </div>
                    </div>

                </div>

                <div class="">
                    <h1 class="underline font-semibold text-lg p-5">Product Description</h1>
                    <span class="w-[820px] mx-auto block">Engineered to deliver devastation in and out of the arena, the Legion 5 Pro deploys Intel Core processing and NVIDIA GeForce RTX graphics to dish out high-resolution gaming. The world’s first 16" QHD gaming laptop with up to 165Hz refresh sets up a “winning zone” that gives you an extra edge and ups your peripheral vision. Combined with Nahimic 3D audio that pinpoints footsteps in space.</span>

                </div>

                <button onclick="showReview()" class="rounded-md shadow-md font-semibold block px-4 py-1 bg-[#456265] mx-auto text-white mt-[90px]">View Customer's Review</button>



            </div>


        </div>
    </div>

    <!-- End Product Details -->

















    <!-- start review -->
    <div id="modalReview" class="modal hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
        <div class="modal-content bg-[#FEFEFE] w-[1000px] h-[650px] rounded shadow-md relative">
            <span class=" font-semibold text-lg px-5 block mt-3 ">Item's Reviews</span>
            <button onclick="hideReview(),hideDetail()"  class="absolute top-4 right-4 text-gray-700 hover:text-gray-900">
                <svg class="h-6 w-6 text-[#F36823] " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <div class="w-[950px] h-[180px] mt-[25px] mx-auto flex justify-between">
                <div class="flex">
                    <div>
                        <img src="../resources/img/Admin Product/tshirt.png" alt="">
                    </div>
                    <div class="text-md font-semibold ml-2 ">
                        <span>Name : T-shirt</span><br>
                        <span>Stock : 20</span><br>
                        <span>Price : $750.00</span>
                    </div>
                </div>

                <div class="rating pr-10 w-[230px]">
                    <h1 class="text-xl font-semibold underline tracking-wider ">Rating & Reviews</h1>
                    <div class="flex">
                        <div>
                            <span class="text-2xl font-semibold">4.0/</span>
                            <span>5</span>
                            <span class="text-md  block">20 ratings</span>
                        </div>

                        <div class="flex flex-col">
                            <div class="rating text">
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="">15</span>


                            </div>

                            <div class="rating text">
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="">&#9733;</span>
                                <span class="">5</span>


                            </div>

                            <div class="rating text">
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="">&#9733;</span>
                                <span class="">&#9733;</span>
                                <span></span>
                            </div>

                            <div class="rating text">
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="">&#9733;</span>
                                <span class="">&#9733;</span>
                                <span class="">&#9733;</span>
                                <span></span>
                            </div>


                            <div class="rating text">
                                <span class="starColor">&#9733;</span>
                                <span class="">&#9733;</span>
                                <span class="">&#9733;</span>
                                <span class="">&#9733;</span>
                                <span class="">&#9733;</span>
                                <span></span>
                            </div>
                        </div>

                    </div>
                </div>


            </div>


            <div class="w-[900px] h-[100px] mx-auto bg-[#F7F7F7]">
                <div class="w-[900px] h-[30px] relative">
                    <div class="profile flex ">
                        <div class="w-[30px] h-[30px] rounded-full mt-1">
                            <img class="leading-[30px]" src="../resources/img/Admin Product/profile.png" alt="">
                            <div class="rating text flex">
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="">&#9733;</span>



                            </div>
                        </div>

                        <span class=" font-semibold text-lg ">User A</span>


                        <div>
                            <span class="absolute right-0">2023/07/12</span>
                        </div>
                    </div>
                    <span class="mt-3 block">Lorem ipsum dolor sit amet consectetur. Eu dictumst orci egestas vitae donec. </span>
                </div>


            </div>


            <div class="w-[850px] h-[100px]  ml-[100px] bg-[#F7F7F7] mt-2">

                <div>
                    <span class="text-md font-semibold">
                        <img class="inline" src="../resources/img/Admin Product/arrow.svg" alt="">
                        Reply to UserA</span>
                </div>
                <div class="mt-1">
                    <input type="text" placeholder="Message" class="w-[320px] h-[40px] border border-black rounded-sm ml-5 pl-4">
                    <button class="px-5 rounded-sm py-1 bg-[#304547] text-white">Reply</button>
                </div>

            </div>

            <div class="w-[900px] h-[100px] mx-auto bg-[#F7F7F7] mt-2">
                <div class="w-[900px] h-[30px] relative">
                    <div class="profile flex ">
                        <div class="w-[30px] h-[30px] rounded-full mt-1">
                            <img class="leading-[30px]" src="../resources/img/Admin Product/profile.png" alt="">
                            <div class="rating text flex">
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="starColor">&#9733;</span>
                                <span class="">&#9733;</span>



                            </div>
                        </div>

                        <span class=" font-semibold text-lg ">User A</span>


                        <div>
                            <span class="absolute right-0">2023/07/12</span>
                            <button class="px-5 rounded-sm py-1 bg-[#304547] text-white absolute right-0 top-10">Reply</button>
                        </div>
                    </div>
                    <span class="mt-3 block">Lorem ipsum dolor sit amet consectetur. Eu dictumst orci egestas vitae donec. </span>
                </div>


            </div>



        </div>
    </div>


    <!-- end review -->



































    <!-- Start Modal box to Edit product-->

    <div id="modalEdit" class="modal hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
        <div class="modal-content bg-[#FEFEFE] w-[1000px] h-[700px] rounded shadow-md relative">
            <button onclick="hideEdit()" class="absolute top-4 right-4 text-gray-700 hover:text-gray-900">
                <svg class="h-6 w-6 text-[#F36823] " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <div class="w-[800px] h-[650px] mt-[30px] mx-auto">

                <!-- start top -->
                <div class="h-[425px] w-[800px] mx-auto flex space-x-5 ">

                    <!-- start input data -->
                    <div class=" w-[400px] h-[420px] bg-[#456265] rounded-md">
                        <input value="MSI Summit E13 Flip Evo" class=" mt-8 block w-52  mx-auto h-[36px] pl-3 rounded-sm" type="text" placeholder="Product Name"> <br>
                        <input value="MSI" class="block  w-52  mx-auto h-[36px] pl-3 rounded-sm" type="text" placeholder="Brand"> <br>



                        <select id="dropdown" class="block  w-52  mx-auto bg-white border border-gray-300 px-4 py-2 rounded-sm">
                            <option value="" disabled>Category</option>
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
                            <option selected value="option3">Electronics Devices</option>
                            <option value="option3">Others</option>
                        </select>

                        <br>

                        <input value="2,100,000" class="  w-52 block mx-auto h-[36px] pl-3 rounded-sm" type="text" placeholder="Buy Price"> <br>
                        <input value="2,150,000" class="  w-52 block mx-auto h-[36px] pl-3 rounded-sm" type="text" placeholder="Sell Price"> <br>
                        <input value="10" class="  w-52 block mx-auto h-[36px] pl-3 rounded-sm" type="text" placeholder="Quantity"> <br>
                    </div>
                    <!-- end input data -->

                    <!-- start upload  -->
                    <div class="w-[400px]">

                        <label class="w-full h-[420px]  flex flex-col items-center bg-white rounded-lg shadow-lg tracking-wide">
                            <img class="mt-[170px] block" src="../resources/img/msi.png" alt="">
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
                        <input placeholder="Product Description" value="Lorem ipsum dolor sit amet consectetur. Quis leo est aliquet fringilla nibh venenatis." type="text" class="w-[390px] h-[200px] shadow-md bg-[#EDCFCF] rounded-md pl-2 pb-[130px] break-all outline-none overflow-x-scroll">
                    </div>
                    <!-- end product description -->

                    <!-- start product details -->
                    <div>
                        <input value="Lorem ipsum dolor sit amet consectetur. Quis leo est aliquet fringilla nibh venenatis." placeholder="Product Details" type="text" class="w-[390px] h-[130px] bg-[#EDCFCF] shadow-md rounded-md pb-[60px] pl-2 ">
                        <button onclick="hideEdit()" class="px-[100px] mt-7 shadow-md block mx-auto py-2 bg-[#456265] text-white rounded-md outline-none ">Update</button>

                    </div>
                    <!-- end product details -->

                </div>
                <!-- end bottoom -->

            </div>

        </div>
    </div>

    <!-- End Modal box to Edit product-->









    <script src="../resources/lib/jquery3.6.0.js"></script>
    <script src="../resources/js/modal_box.js"></script>
    <script src="../resources/js/editModal.js"></script>
    <script src="../resources/js/drop_down.js"></script>

</body>

</html>