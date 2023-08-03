<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchant's Products</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <script src="../resources/lib/jquery3.6.0.js"></script>
    <!-- google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- flowBite link -->
    <script src="../path/to/flowbite/dist/datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/datepicker.min.js"></script>

    <!-- <link href="../resources/css/all_merchant.css"> -->


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
                    <p><?php  echo "Date : $day, $month $date, $year"?></p>
                </div>

                <input type="text" name="" id="" class="w-[800px] py-2 px-5 rounded outline-none" placeholder="Search...">
            </div>
            <!-- Search End-->



            <div class=" data-output">






                <div class="w-[1200px] h-[800px] bg-[#FFFFFF] mx-auto mt-8 relative">
                    <div class="w-[1100px] mx-auto h-[250px] border  border-black relative inset-x-0 top-5">
                        GRAPH
                    </div><br>
                    <span class="text-center font-semibold block">Click each bar to know the payment history/earning of that particular month.</span>


                    <div>
                        <span class="text-xl font-semibold pl-12">In this year:</span>
                        <div class="w-[1200px] flex justify-evenly mt-5">
                            <div class="w-[340px] h-[150px] bg-[#F36823] rounded-sm">
                                <div class="mt-5">
                                    <span class="text-center font-semibold block text-lg text-white">Total Earning From Merchant</span>
                                    <span class="text-center font-semibold block text-2xl text-white mt-2">300,000,000</span>
                                </div>

                            </div>
                            <div class="w-[340px] h-[150px] bg-[#4EB5EE] rounded-sm">
                            <div  class="mt-5">
                                    <span class="text-center font-semibold block text-lg text-white">Total Earning From Merchant</span>
                                    <span class="text-center font-semibold block text-2xl text-white mt-2">100,000,000</span>
                                </div>
                            </div>
                            <div class="w-[340px] h-[150px] bg-[#FF7373] rounded-sm">
                            <div class="mt-5">
                                    <span class="text-center font-semibold block text-lg text-white">Total Profit</span>
                                    <span class="text-center font-semibold block text-2xl text-white mt-2">330,000,000</span>
                                </div>
                            </div>
                        </div>

                        <div class="w-[850px] flex pl-11 mt-5 justify-evenly">
                            <div class="w-[250px] rounded-sm h-[120px] bg-[#6D3636]">
                            <div class="mt-5">
                                    <span class="text-center font-semibold block text-lg text-white">Most Sold Category</span>
                                    <span class="text-center font-semibold block text-xl text-white mt-2">Fashion</span>
                                </div>
                            </div>
                            <div class="w-[250px] rounded-sm h-[120px] bg-[#6D3636]">
                            <div class="mt-5">
                                    <span class="text-center font-semibold block text-lg text-white">Most Sold Product</span>
                                    <span class="text-center font-semibold block text-xl text-white mt-2">White Shirt   </span>
                                </div>
                            </div>
                            <div class="w-[250px] rounded-sm h-[120px] bg-[#6D3636]">
                            <div class="mt-5">
                                    <span class="text-center font-semibold block text-lg text-white">Total Orders</span>
                                    <span class="text-center font-semibold block text-xl text-white mt-2">80</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <!-- Analytics Data End  -->
        </div>
        <!-- Right-side End -->
    </section>





    <script src="../resources/js/drop_down.js"></script>

</body>

</html>