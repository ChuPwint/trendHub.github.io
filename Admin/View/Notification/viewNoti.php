<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
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
    <section class=" w-full bg-[#12141B] max-w-[1600px] mx-auto flex">
        <!-- Import side bar  -->
        <?php $menu = "notifications" ?>
        <?php include "../resources/common/adminSideBar.php" ?>

        <!-- Right-side Start -->
        <div class="h-screen w-full overflow-hidden">
            <!-- Search Start-->
            <div class="bg-[#262B3A] flex justify-between items-center py-3 px-10">
                <div class="text-white">
                    <p class="text-2xl font-semibold">Notifications</p>
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

                <!-- Noti Start  -->
                <div class="flex space-x-5 mt-3">
                    <!-- Left-side start  -->
                    <div>
                        <!-- Noti card 1 start  -->
                        <div class="noti h-30 bg-white shadow-lg px-4 py-3 border hover:bg-pink-100 hover:border-secondary rounded cursor-pointer">
                            <div class="flex justify-between">
                                <div class="flex items-center">
                                    <img src="../resources/img/profile/notifyProfile.png" alt="">
                                    <p class="px-2">William (Merchant)</p>
                                </div>
                                <p class="ml-56">Today</p>
                            </div>
                            <div class="px-6">
                                <p class="font-bold">New Feature Announcement</p>
                                <p class="text-sm">Exciting news! We are thrilled to announce the launch of a new feature on our platform. This feature will...</p>
                            </div>
                        </div>
                        <!-- Noti card 1 end  -->

                        <!-- Noti card 2 start  -->
                        <div class="noti h-30 bg-white shadow-lg px-4 py-3 mt-3 border hover:bg-pink-100 hover:border-secondary rounded cursor-pointer">
                            <div class="flex justify-between">
                                <div class="flex items-center">
                                    <img src="../resources/img/profile/notifyProfile.png" alt="">
                                    <p class="px-2">Casper (Customer)</p>
                                </div>
                                <p class="ml-56">Today</p>
                            </div>
                            <div class="px-6">
                                <p class="font-bold">New Feature Announcement</p>
                                <p class="text-sm">Exciting news! We are thrilled to announce the launch of a new feature on our platform. This feature will...</p>
                            </div>
                        </div>
                        <!-- Noti card 2 end  -->


                    </div>
                    <!-- Left-side end  -->

                    <!-- Right-side start  -->
                    <div class="h-[70vh] overflow-y-scroll scrollbar-hide w-[900px]">
                        <!-- message 1    -->
                        <div class="message bg-white shadow-lg px-4 py-3 border rounded">
                            <div class="flex flex-row">
                                <div class="flex flex-row justify-start">
                                    <img src="../resources/img/profile/notifyProfile.png" alt="">
                                    <p class="px-2">Admin</p>
                                </div>
                                <p class="">May 02</p>
                            </div>
                            <div class="px-6">
                                <p class="font-bold">Exciting New Offers - Don't Miss Out!</p>
                                <p class="text-sm">Dear Merchant,<br><br>

                                    We are thrilled to bring you some exciting news! At ABC Shop,<br> we've introduced a range of fantastic new offers and deals that<br> you won't want to miss.<br><br>

                                    Discover our latest collection of trendy fashion, stylish accessories,<br> and must-have gadgets - all at unbeatable prices! Whether you're looking to upgrade<br> your wardrobe or find the perfect gift for a loved one, we've got something for everyone.

                                    Explore Our New Offers:

                                    Fashion Frenzy: Get up to 50% off on selected <br>clothing items. From chic dresses to comfortable loungewear, it's time <br>to revamp your style effortlessly.<br><br>

                                    Tech Bonanza: Upgrade your gadgets with our exclusive tech deals. <br>Save big on the latest smartphones, smartwatches, and more!<br><br>

                                    Accessory Extravaganza: Complete your look with our stunning range of accessories.<br> Enjoy 2 for 1 offers on jewelry, bags, and sunglasses.<br><br>

                                    Home Essentials: Spruce up your living space with our discounted home decor<br> and kitchen essentials.<br><br>


                                    Thank you for being a valued customer at ABC Shop. We can't wait to help you <br>find incredible deals and make your shopping experience truly delightful.<br><br>

                                    Happy shopping!<br>

                                    Best regards,<br>
                                    John Smith<br>
                                    Customer Support Manager<br>
                                    ABC Shop<br>
                                    john.smith@example.com<br>
                                    +1 (555) 123-4567<br>
                                    www.abcshop.com<br>

                                </p>
                            </div>
                        </div>
                        <!-- message 1 end  -->


                        <!-- message 2    -->
                        <div class="message bg-white shadow-lg px-4 py-3 border rounded hidden">
                            <div class="flex flex-row">
                                <div class="flex flex-row justify-start">
                                    <img src="../resources/img/profile/notifyProfile.png" alt="">
                                    <p class="px-2">Admin</p>
                                </div>
                                <p class="">May 02</p>
                            </div>
                            <div class="px-6">
                                <p class="font-bold">Exciting New Offers - Don't Miss Out!</p>
                                <p class="text-sm">Dear Customer,<br><br>

                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nisi consectetur sequi quae eaque
                                    illum rerum dolorum, voluptate odit provident, numquam, asperiores quasi quisquam minima.
                                    Veniam ratione cupiditate similique omnis quas ad ex obcaecati dicta. Provident commodi labore,
                                    alias aspernatur voluptate dolore quaerat perspiciatis, dolorum, et aperiam exercitationem atque quasi
                                    sapiente amet quae omnis praesentium consequuntur ullam magni maxime! Autem, dolor libero possimus magnam nisi
                                    accusamus officiis alias consectetur repellendus quos ducimus at, recusandae dolores molestias dolorem et voluptas eius minima rerum. Soluta modi voluptatibus porro quasi dolore eum fugiat atque animi esse incidunt unde ipsum, enim itaque, illo obcaecati.

                                    Best regards,<br>
                                    John Smith<br>
                                    Customer Support Manager<br>
                                    ABC Shop<br>
                                    john.smith@example.com<br>
                                    +1 (555) 123-4567<br>
                                    www.abcshop.com<br>

                                </p>
                            </div>
                        </div>
                        <!-- message 2 end  -->
                    </div>
                    <!-- Right-side end  -->
                </div>
                <!-- Noti End  -->

                <div class="text-right mt-5">
                    <a href="./sendNoti.php"><button class="py-1 bg-white px-5 rounded">Send New Noti</button></a>
                </div>

            </div>
            <!-- All Customers Data End  -->

        </div>
        <!-- Right-side End -->

    </section>




    <script>
        $(document).ready(function() {

            $('.flex').on('click', '.noti', function() {
                const index = $(this).index(); 
                $('.message').hide(); 
                $('.message').eq(index).show(); 
            });

        })
    </script>
</body>

</html>