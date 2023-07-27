<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Customers</title>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css?id=<?= time() ?>">
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

<body class="bg-[#12141B]">
    <section class="container w-full mx-auto flex">
        <!-- Import side bar  -->
        <?php include "../resources/common/adminSideBar.php" ?>

        <!-- Right-side Start -->
        <div class="h-screen overflow-hidden w-full">
            <!-- Search Start-->
            <div class="bg-[#262B3A] flex justify-between items-center py-3 px-10">
                <div class="text-white">
                    <p class="text-2xl font-semibold">All Customers</p>
                    <p>Date : Sun, Jul 16, 2023</p>
                </div>

                <input type="text" name="" id="" class="w-[800px] py-2 px-5 rounded outline-none" placeholder="Search...">
            </div>
            <!-- Search End-->


            <!-- All Customers Data Start -->
            <div class="px-[53px] py-8 data-output">
                <!-- Sort Start  -->
                <div class="flex items-center justify-end space-x-2 mb-2">
                    <span class="text-white">Sort by:</span>
                    <select name="" id="" class="outline-none rounded py-1 px-3">
                        <option value="">Name</option>
                        <option value="">Des Name</option>
                        <option value="">Address</option>
                        <option value="">Des Address</option>
                        <option value="">Date</option>
                        <option value="">Des Date</option>
                    </select>
                </div>
                <!-- Sort END  -->

                <!-- Table Start  -->
                <div class="flex justify-center min-h-screen relative">
                    <div class="col-span-12">
                        <div class="h-[600px] overflow-y-scroll scrollbar-hide">
                            <table class="table text-textBlack border-separate space-y-6 text-sm w-[1200px] overflow-y-scroll">
                                <thead class="bg-[#fffafa] text-textBlack ">
                                    <tr>
                                        <th class="px-3 py-6 text-center">No.</th>
                                        <th class="px-3 py-6 text-center">Name</th>
                                        <th class="px-3 py-6 text-center">Email</th>
                                        <th class="px-3 py-6 text-center">Phone Number</th>
                                        <th class="px-3 py-6 text-center">Address</th>
                                        <th class="px-3 py-6 text-center">Date</th>
                                        <th class="px-3 py-6 text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            Casper
                                        </td>
                                        <td class="p-3 text-center">
                                            casper@gmail.com
                                        </td>
                                        <td class="p-3 text-center ">
                                            09 769 243 353
                                        </td>
                                        <td class="p-3 text-center ">
                                            Yangon
                                        </td>
                                        <td class="p-3 text-center ">
                                            Jul 16, 2023
                                        </td>
                                        <td class="p-3 text-center ">
                                            <span data-modal-id="modal1" class="open-modal px-4 py-1 cursor-pointer bg-[#AC2E2E] text-white rounded-md">BAN</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            Casper
                                        </td>
                                        <td class="p-3 text-center">
                                            casper@gmail.com
                                        </td>
                                        <td class="p-3 text-center ">
                                            09 769 243 353
                                        </td>
                                        <td class="p-3 text-center ">
                                            Yangon
                                        </td>
                                        <td class="p-3 text-center ">
                                            Jul 16, 2023
                                        </td>
                                        <td class="p-3 text-center ">
                                            <span data-modal-id="modal1" class="open-modal px-4 py-1 cursor-pointer bg-[#AC2E2E] text-white rounded-md">BAN</span>
                                        </td>
                                    </tr>


                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            Casper
                                        </td>
                                        <td class="p-3 text-center">
                                            casper@gmail.com
                                        </td>
                                        <td class="p-3 text-center ">
                                            09 769 243 353
                                        </td>
                                        <td class="p-3 text-center ">
                                            Yangon
                                        </td>
                                        <td class="p-3 text-center ">
                                            Jul 16, 2023
                                        </td>
                                        <td class="p-3 text-center ">
                                            <span data-modal-id="modal1" class="open-modal px-4 py-1 cursor-pointer bg-[#AC2E2E] text-white rounded-md">BAN</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            Casper
                                        </td>
                                        <td class="p-3 text-center">
                                            casper@gmail.com
                                        </td>
                                        <td class="p-3 text-center ">
                                            09 769 243 353
                                        </td>
                                        <td class="p-3 text-center ">
                                            Yangon
                                        </td>
                                        <td class="p-3 text-center ">
                                            Jul 16, 2023
                                        </td>
                                        <td class="p-3 text-center ">
                                            <span data-modal-id="modal1" class="open-modal px-4 py-1 cursor-pointer bg-[#AC2E2E] text-white rounded-md">BAN</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            Casper
                                        </td>
                                        <td class="p-3 text-center">
                                            casper@gmail.com
                                        </td>
                                        <td class="p-3 text-center ">
                                            09 769 243 353
                                        </td>
                                        <td class="p-3 text-center ">
                                            Yangon
                                        </td>
                                        <td class="p-3 text-center ">
                                            Jul 16, 2023
                                        </td>
                                        <td class="p-3 text-center ">
                                            <span data-modal-id="modal1" class="open-modal px-4 py-1 cursor-pointer bg-[#AC2E2E] text-white rounded-md">BAN</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            Casper
                                        </td>
                                        <td class="p-3 text-center">
                                            casper@gmail.com
                                        </td>
                                        <td class="p-3 text-center ">
                                            09 769 243 353
                                        </td>
                                        <td class="p-3 text-center ">
                                            Yangon
                                        </td>
                                        <td class="p-3 text-center ">
                                            Jul 16, 2023
                                        </td>
                                        <td class="p-3 text-center ">
                                            <span data-modal-id="modal1" class="open-modal px-4 py-1 cursor-pointer bg-[#AC2E2E] text-white rounded-md">BAN</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            Casper
                                        </td>
                                        <td class="p-3 text-center">
                                            casper@gmail.com
                                        </td>
                                        <td class="p-3 text-center ">
                                            09 769 243 353
                                        </td>
                                        <td class="p-3 text-center ">
                                            Yangon
                                        </td>
                                        <td class="p-3 text-center ">
                                            Jul 16, 2023
                                        </td>
                                        <td class="p-3 text-center ">
                                            <span data-modal-id="modal1" class="open-modal px-4 py-1 cursor-pointer bg-[#AC2E2E] text-white rounded-md">BAN</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            Casper
                                        </td>
                                        <td class="p-3 text-center">
                                            casper@gmail.com
                                        </td>
                                        <td class="p-3 text-center ">
                                            09 769 243 353
                                        </td>
                                        <td class="p-3 text-center ">
                                            Yangon
                                        </td>
                                        <td class="p-3 text-center ">
                                            Jul 16, 2023
                                        </td>
                                        <td class="p-3 text-center ">
                                            <span data-modal-id="modal1" class="open-modal px-4 py-1 cursor-pointer bg-[#AC2E2E] text-white rounded-md">BAN</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            Casper
                                        </td>
                                        <td class="p-3 text-center">
                                            casper@gmail.com
                                        </td>
                                        <td class="p-3 text-center ">
                                            09 769 243 353
                                        </td>
                                        <td class="p-3 text-center ">
                                            Yangon
                                        </td>
                                        <td class="p-3 text-center ">
                                            Jul 16, 2023
                                        </td>
                                        <td class="p-3 text-center ">
                                            <span data-modal-id="modal1" class="open-modal px-4 py-1 cursor-pointer bg-[#AC2E2E] text-white rounded-md">BAN</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            Casper
                                        </td>
                                        <td class="p-3 text-center">
                                            casper@gmail.com
                                        </td>
                                        <td class="p-3 text-center ">
                                            09 769 243 353
                                        </td>
                                        <td class="p-3 text-center ">
                                            Yangon
                                        </td>
                                        <td class="p-3 text-center ">
                                            Jul 16, 2023
                                        </td>
                                        <td class="p-3 text-center ">
                                            <span data-modal-id="modal1" class="open-modal px-4 py-1 cursor-pointer bg-[#AC2E2E] text-white rounded-md">BAN</span>
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
                <span class="text-center block pb-4 mt-7">You are about to ban the following user:</span>
                <h1 class=" font-semibold mt-2  ">Name: <span class="ml-[9px] font-normal">casper</span></h1>
                <h1 class="font-semibold mt-2 "> Email: <span class="font-normal ml-[13px]">casper@gmail.com</span></h1>
                <h1 class="font-semibold mt-2 ">Reason: <input class="font-normal drop-shadow-lg pl-2 " placeholder="Reason" type="text"></h1>

              </div>
            </div>
            <div class="flex justify-center space-x-4 mt-6">

              <button id="closeModalButton1" class="rounded-[5px] px-4 py-1 text-white   bg-[#AC2E2E]">Cancel</button>
              <button id="closeModalButton1" class="bg-[#396C21] rounded-[5px] px-3 py-1 text-white">Confirm</button>

            </div>
          </div>

        </div>
        <!-- End Modal Content -->
      </div>
    </div>


  </div>


  <script src="../resources/js/modal_box.js"></script>
</body>

</html>