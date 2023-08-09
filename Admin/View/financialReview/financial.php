<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Review</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <script src="../resources/lib/jquery3.6.0.js"></script>
    <!-- google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js" defer></script>
    <script src="../resources/js/financial.js" defer></script>
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
                    <p class="text-2xl font-semibold tracking-wider">Earning Per Year</p>
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

            <div class=" data-output">
                <div class="w-[1200px] bg-[#FFFFFF] mx-auto mt-8 p-4">
                    <div class="w-[1100px] mx-auto border border-black">
                        <div class="h-[300px] w-[1000px] flex justify-center">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div><br>
                    <span class="text-center font-semibold block">
                        Choose month to check particular month payment history: 
                        <select class="ml-4" name="" id="">
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                        <button class="ml-4 px-4 py-2 cursor-pointer bg-[#396C21] text-white rounded-md">Go</button>
                    </span>
                </div>
                <div class="mt-4">
                    <span class="text-xl font-semibold pl-12 text-white">In this year:</span>
                    <div class="w-[1200px] flex justify-evenly mt-5">
                        <div class="w-[340px] h-[150px] bg-[#F36823] rounded-sm">
                            <div class="mt-5">
                                <span class="text-center font-semibold block text-lg text-white">Total Earning From Customer</span>
                                <span class="text-center font-semibold block text-2xl text-white mt-2">300,000,000</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-[850px] flex pl-11 mt-5 justify-evenly">
                        <div class="w-[250px] rounded-sm h-[120px] bg-[#6D3636]">
                            <div class="mt-5">
                                <span class="text-center font-semibold block text-lg text-white">Most Sold Category</span>
                                <span class="text-center font-semibold block text-2xl text-white mt-2">Fashion</span>
                            </div>
                        </div>
                        <div class="w-[250px] rounded-sm h-[120px] bg-[#6D3636]">
                            <div class="mt-5">
                                <span class="text-center font-semibold block text-lg text-white">Most Sold Product</span>
                                <span class="text-center font-semibold block text-2xl text-white mt-2">White Shirt </span>
                            </div>
                        </div>
                        <div class="w-[250px] rounded-sm h-[120px] bg-[#6D3636]">
                            <div class="mt-5">
                                <span class="text-center font-semibold block text-lg text-white">Total Orders</span>
                                <span class="text-center font-semibold block text-2xl text-white mt-2">80</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Analytics Data End  -->
        </div>
        <!-- Right-side End -->
    </section>
</body>
</html>