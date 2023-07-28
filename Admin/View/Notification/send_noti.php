<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
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
        <div class="h-screen w-full overflow-hidden">
            <!-- Search Start-->
            <div class="bg-[#262B3A] flex justify-between items-center py-3 px-10">
                <div class="text-white">
                    <p class="text-2xl font-semibold">Notifications</p>
                    <p>Date : Sun, Jul 16, 2023</p>
                </div>

                <input type="text" name="" id="" class="w-[800px] py-2 px-5 rounded outline-none" placeholder="Search...">
            </div>
            <!-- Search End-->


            <!-- Send Notifications Data Start -->
            <div class="px-10 py-10 flex flex-col space-y-10">
                <div class="flex space-x-8 items-center justify-between w-80">
                    <span class="text-white">To :</span>
                    <select name="" id="" class="py-1 px-[42px] rounded outline-none border-black border-2">
                        <option value="">Customer</option>
                        <option value="">All Customers</option>
                        <option value="">Merchant</option>
                        <option value="">All Merchants</option>
                    </select>
                </div>


                <div class="flex space-x-2 items-center justify-between w-80">
                    <span class="text-white">Name :</span>
                    <input type="text" name="" id="" class="py-1 px-3 rounded outline-none border-black border">
                </div>

                <div class="flex space-x-2 items-center justify-between w-80">
                    <span class="text-white">Title :</span>
                    <input type="text" name="" id="" class="py-1 px-3 rounded outline-none border-black border">
                </div>

                <div class="flex flex-col space-y-5 w-[80%]">
                    <span class="text-white">Message:</span>
                    <textarea name="" id="" cols="30" rows="10" class="rounded outline-none p-5"></textarea>
                    <div class="text-right">
                        <button type="submit" class="px-10 py-1 bg-white rounded">Send</button>
                    </div>
                </div>

                

            </div>





            <!-- Send Notifications Data End  -->

        </div>
        <!-- Right-side End -->

    </section>

</body>

</html>