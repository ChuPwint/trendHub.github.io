<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Requests</title>
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
                    <span class="text-white">8 Product Submission Request</span>
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
                        <div class="h-[600px] overflow-y-scroll scrollbar-hide">
                            <table class="table text-textBlack border-separate space-y-6 text-sm w-[1200px] overflow-y-scroll">
                                <thead class="bg-[#fffafa] text-textBlack ">
                                    <tr>
                                        <th class="px-3 py-6 text-center">No.</th>
                                        <th class="px-3 py-6 text-center">Merchant Logo</th>
                                        <th class="px-3 py-6 text-center">Merchant Name</th>
                                        <th class="px-3 py-6 text-center">Request Date</th>
                                        <th class="px-3 py-6 text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            <div class="w-[50px] h-[50px] rounded-full mx-auto ">
                                                <img src="../resources/img/msi.png" alt="">
                                            </div>
                                        </td>
                                        <td class="p-3 text-center">
                                            MSI
                                        </td>
                                        <td class="p-3 text-center ">
                                            Jul 16, 2023
                                        </td>
                                        <td class="p-3 text-center ">
                                            <span class="underline">View Details</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            <div class="w-[50px] h-[50px] rounded-full mx-auto ">
                                                <img src="../resources/img/msi.png" alt="">
                                            </div>
                                        </td>
                                        <td class="p-3 text-center">
                                            MSI
                                        </td>
                                        <td class="p-3 text-center ">
                                            Jul 16, 2023
                                        </td>
                                        <td class="p-3 text-center ">
                                            <span class="underline">View Details</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-[#fffafa]">
                                        <td class="p-3 text-center">
                                            1
                                        </td>
                                        <td class="p-3 text-center">
                                            <div class="w-[50px] h-[50px] rounded-full mx-auto ">
                                                <img src="../resources/img/msi.png" alt="">
                                            </div>
                                        </td>
                                        <td class="p-3 text-center">
                                            MSI
                                        </td>
                                        <td class="p-3 text-center ">
                                            Jul 16, 2023
                                        </td>
                                        <td class="p-3 text-center ">
                                            <span class="underline">View Details</span>
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

</body>

</html>