<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Customers</title>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css?id=<?= time() ?>">
    <script src="../resources/lib/jquery3.6.0.js"></script>
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
            <div class="px-10 py-16 data-output">
                <!-- Sort Start  -->
                <div class="flex items-center justify-end space-x-2">
                    <span class="text-white">Sort by:</span>
                    <select name="" id="" class="outline-none rounded py-1 px-3">
                        <option value="">Name</option>
                        <option value="">Address</option>
                        <option value="">Date</option>
                    </select>
                </div>
                <!-- Sort END  -->

                <!-- Table Start  -->
                <div class="">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-separate border-spacing-y-1.5">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-4 p-4 rounded-tl rounded-tr">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-4">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-4">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-4">
                                        Phone No
                                    </th>
                                    <th scope="col" class="px-6 py-4">
                                        Address
                                    </th>
                                    <th scope="col" class="px-6 py-4">
                                        Date
                                    </th>
                                    <th scope="col" class="px-6 py-4 ">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Apple MacBook Pro 17"
                                    </th>
                                    <td class="px-6 py-4">
                                        Silver
                                    </td>
                                    <td class="px-6 py-4">
                                        Laptop
                                    </td>
                                    <td class="px-6 py-4">
                                        $2999
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Microsoft Surface Pro
                                    </th>
                                    <td class="px-6 py-4">
                                        White
                                    </td>
                                    <td class="px-6 py-4">
                                        Laptop PC
                                    </td>
                                    <td class="px-6 py-4">
                                        $1999
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Magic Mouse 2
                                    </th>
                                    <td class="px-6 py-4">
                                        Black
                                    </td>
                                    <td class="px-6 py-4">
                                        Accessories
                                    </td>
                                    <td class="px-6 py-4">
                                        $99
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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