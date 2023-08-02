<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finacial</title>
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
        <?php $menu = "financialReview" ?>
        <?php include "../resources/common/adminSideBar.php" ?>

        <!-- Right-side Start -->
        <div class="h-screen overflow-hidden w-full">
            <!-- Search Start-->
            <div class="bg-[#262B3A] flex justify-between items-center py-3 px-10">
                <div class="text-white">
                    <p class="text-2xl font-semibold">July Payment History</p>
                    <p>Date : Sun, Jul 16, 2023</p>
                </div>

                <input type="text" name="" id="" class="w-[800px] py-2 px-5 rounded outline-none" placeholder="Search...">
            </div>
            <!-- Search End-->


            <!-- All Customers Data Start -->
            <div class="px-[53px] py-8 data-output">
                <!-- Sort Start  -->

                <!-- start Date -->
                <div date-rangepicker class="flex items-center space-x-5 -ml-[32px] py-[30px] pb-[20px] relative">
                    <span class="text-white ml-8">Payment History from Customer</span>

                </div>
                <!-- end Date -->

                <!-- Sort END  -->

                <!-- Table Start  -->
                <div class="flex justify-center min-h-screen relative">
                    <div class="col-span-12">
                        <div class="h-[420px] overflow-y-scroll scrollbar-hide">
                            <table class="table text-textBlack border-separate space-y-6 text-sm w-[1200px] overflow-y-scroll">
                                <thead class="bg-[#fffafa] text-textBlack ">
                                    <tr>
                                        <th class="px-3 py-6 text-center">No.</th>
                                        <th class="px-3 py-6 text-center">Order Id</th>
                                        <th class="px-3 py-6 text-center">Customer</th>
                                        <th class="px-3 py-6 text-center">Payment Date</th>
                                        <th class="px-3 py-6 text-center">Payment Via</th>
                                        <th class="px-3 py-6 text-center">Amount</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            12347
                                        </td>
                                        <td class="p-3 text-center">
                                            <div>

                                                <div class="flex justify-center space-x-3">
                                                    <img class="block w-[40px] h-[40px] rounded-full" src="../resources/img/Admin Product/marry.png" alt="">
                                                    <span class="block mt-2">Merry</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-3 text-center ">
                                            2023/07/12
                                        </td>
                                        <td class="p-3 text-center ">
                                            card
                                        </td>
                                        <td class="p-3 text-center ">
                                            $15,000.00
                                        </td>

                                    </tr>


                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            12347
                                        </td>
                                        <td class="p-3 text-center">
                                            <div>

                                                <div class="flex justify-center space-x-3">
                                                    <img class="block w-[40px] h-[40px] rounded-full" src="../resources/img/Admin Product/marry.png" alt="">
                                                    <span class="block mt-2">Merry</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-3 text-center ">
                                            2023/07/12
                                        </td>
                                        <td class="p-3 text-center ">
                                          wave pay
                                        </td>
                                        <td class="p-3 text-center ">
                                            $15,000.00
                                        </td>

                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            12347
                                        </td>
                                        <td class="p-3 text-center">
                                            <div>

                                                <div class="flex justify-center space-x-3">
                                                    <img class="block w-[40px] h-[40px] rounded-full" src="../resources/img/Admin Product/marry.png" alt="">
                                                    <span class="block mt-2">Merry</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-3 text-center ">
                                            2023/07/12
                                        </td>
                                        <td class="p-3 text-center ">
                                            card
                                        </td>
                                        <td class="p-3 text-center ">
                                            $15,000.00
                                        </td>

                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            12347
                                        </td>
                                        <td class="p-3 text-center">
                                            <div>

                                                <div class="flex justify-center space-x-3">
                                                    <img class="block w-[40px] h-[40px] rounded-full" src="../resources/img/Admin Product/marry.png" alt="">
                                                    <span class="block mt-2">Merry</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-3 text-center ">
                                            2023/07/12
                                        </td>
                                        <td class="p-3 text-center ">
                                          cash on deli
                                        </td>
                                        <td class="p-3 text-center ">
                                            $15,000.00
                                        </td>

                                    </tr>


                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            12347
                                        </td>
                                        <td class="p-3 text-center">
                                            <div>

                                                <div class="flex justify-center space-x-3">
                                                    <img class="block w-[40px] h-[40px] rounded-full" src="../resources/img/Admin Product/marry.png" alt="">
                                                    <span class="block mt-2">Merry</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-3 text-center ">
                                            2023/07/12
                                        </td>
                                        <td class="p-3 text-center ">
                                            card
                                        </td>
                                        <td class="p-3 text-center ">
                                            $15,000.00
                                        </td>

                                    </tr>


                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            12347
                                        </td>
                                        <td class="p-3 text-center">
                                            <div>

                                                <div class="flex justify-center space-x-3">
                                                    <img class="block w-[40px] h-[40px] rounded-full" src="../resources/img/Admin Product/marry.png" alt="">
                                                    <span class="block mt-2">Merry</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-3 text-center ">
                                            2023/07/12
                                        </td>
                                        <td class="p-3 text-center ">
                                            card
                                        </td>
                                        <td class="p-3 text-center ">
                                            $15,000.00
                                        </td>

                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            12347
                                        </td>
                                        <td class="p-3 text-center">
                                            <div>

                                                <div class="flex justify-center space-x-3">
                                                    <img class="block w-[40px] h-[40px] rounded-full" src="../resources/img/Admin Product/marry.png" alt="">
                                                    <span class="block mt-2">Merry</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-3 text-center ">
                                            2023/07/12
                                        </td>
                                        <td class="p-3 text-center ">
                                            card
                                        </td>
                                        <td class="p-3 text-center ">
                                            $15,000.00
                                        </td>

                                    </tr>


                                </tbody>
                            </table>
                        
                        </div>
                        <div class="text-white text-xl font-semibold text-right mt-5">
<span>Total Earnings<span class="ml-5">1400</span></span><br>
<span>Total Profit<span class="ml-14">400</span></span><br>
<span>Total Capital<span class=" ml-9 ">1000</span></span>
                         </div>
                    </div>

                </div>
                <!-- Table End  -->

            </div>
            <!-- All Customers Data End  -->

        </div>
        <!-- Right-side End -->

    </section>



    </div>


    <script src="../resources/js/modal_box.js"></script>
</body>

</html>