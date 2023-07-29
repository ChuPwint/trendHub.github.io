<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css?id=<?= time() ?>">
    <script src="../resources/lib/jquery3.6.0.js"></script>
</head>

<body class="">
    <section class="bg-[#12141B] w-full max-w-[1600px] mx-auto flex">

        <!-- Import side bar  -->
        <?php $menu = "analytics" ?>
        <?php include "../resources/common/adminSideBar.php" ?>

        <!-- Right-side Start -->
        <div class="h-screen overflow-hidden w-full">
            <!-- Search Start-->
            <div class="bg-[#262B3A] flex justify-between items-center py-3 px-10">
                <div class="text-white">
                    <p class="text-2xl font-semibold">Analytics</p>
                    <p>Date : Sun, Jul 16, 2023</p>
                </div>
            </div>
            <!-- Search End-->


            <!-- Analytics Data Start -->
            <div class="px-20 py-16">
                <!-- Total Display -->
                <div class="text-white flex justify-between flex-wrap">
                    <div class="bg-[#FF5500] w-[250px] h-[135px] py-5 text-center rounded flex flex-col justify-between">
                        <p>Total Users</p>
                        <p class="text-4xl">230</p>
                    </div>

                    <div class="bg-[#2F3D40] w-[250px] h-[135px] py-5 text-center rounded flex flex-col justify-between">
                        <p>Total Merchants</p>
                        <p class="text-4xl">20</p>
                    </div>

                    <div class="bg-[#00A1AB] w-[250px] h-[135px] py-5 text-center rounded flex flex-col justify-between">
                        <p>Total Orders</p>
                        <p class="text-4xl">90</p>
                    </div>

                    <div class="bg-[#1F563F] w-[250px] h-[135px] py-5 text-center rounded flex flex-col justify-between">
                        <p>Total Income</p>
                        <p class="text-2xl">Ks 2,503,000</p>
                    </div>
                </div>
            </div>
            <!-- Analytics Data End  -->

        </div>
        <!-- Right-side End -->

    </section>

</body>

</html>




<!--  -->