<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchant Notification</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <link rel="stylesheet" href="../resources/css/sideBar/sideBar.css">
    <script src="../resources/js/sideBar/sideBar.js" defer></script>
    <script src="../resources/lib/jquery3.6.0.js"></script>
</head>

<body>
    <section class="sectionContainer w-full flex relative">
        <!-- space for the main page to not move -->
        <div id="space" class="hidden w-20 h-screen p-2"></div>
        <!-- Left-side Categories Start-->
        <div id="sideBarContainer" class="bg-tertiary w-20 h-screen p-2">
            <!-- Merchant  -->
            <div class="flex justify-center mb-2 cursor-pointer"><img id="toggleSideBar" class="w-12 h-12 rounded-full shadow-lg border border-slate-200" src="../resources/img/sideBarImg/TH Logo 6.svg" alt=""></div>
            <h1 class="text-lg font-medium text-center hidden sideFull">Merchant's</h1>
            <h2 class="text-xl font-medium text-center hidden text-darkGreenColor sideFull">DASHBOARD</h2>

            <!-- Categories Start-->
            <div class="px-2 mt-5">
                <p class="hoverImg py-2 px-2 shadow-md flex justify-center bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                    <img id="allProductHover" src="../resources/img/sideBarImg/all product.png" alt="">
                    <span class="sideFull hidden ml-2">All Products</span>
                </p>
                <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                    <img id="productSubmitHover" src="../resources/img/sideBarImg/product submission.png" alt="">
                    <span class="sideFull hidden ml-2">Product Submission</span>
                </p>
                <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                    <img id="allOrderHover" src="../resources/img/sideBarImg/all order.png" alt="">
                    <span class="sideFull hidden ml-2">All Orders</span>
                </p>
                <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                    <img id="reviewHover" src="../resources/img/sideBarImg/review.png" alt="">
                    <span class="sideFull hidden ml-2">Customer Reviews</span>
                </p>
                <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                    <img id="contactHover" src="../resources/img/sideBarImg/contact.png" alt="">
                    <span class="sideFull hidden ml-2">Contact Admin</span>
                </p>
                <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                    <img id="financialHover" src="../resources/img/sideBarImg/financial.png" alt="">
                    <span class="sideFull hidden ml-2">Financials & Payment</span>
                </p>
                <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-darkGreenColor  rounded-md text-white cursor-pointer">
                    <img id="notiHover" src="../resources/img/sideBarImg/notification hover.png" alt="">
                    <span class="sideFull hidden ml-2">Notifications</span>
                </p>
                <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                    <img id="editProfileHover" src="../resources/img/sideBarImg/edit profile.png" alt="">
                    <span class="sideFull hidden ml-2">Edit Profile</span>
                </p>
                <p class="hoverImg py-2 px-2 mt-4 flex justify-center shadow-md bg-[#FBFBFB] bg-opacity-50 rounded-md hover:bg-darkGreenColor hover:text-white cursor-pointer">
                    <img id="logOutHover" src="../resources/img/sideBarImg/logout.png" alt="">
                    <span class="sideFull hidden ml-2">Log Out</span>
                </p>
            </div>
            <!-- Categories End-->
        </div>
        <!-- Left-side Categories End-->

        <!-- Right-side Start -->
        <div class="mainPage h-screen overflow-hidden w-full p-6 container ml-20">
            <div class="flex flex-row">
                <div id="leftSide" class="mr-4">
                    <!-- search bar -->
                    <div class="mb-4 relative w-96">
                        <label for="search" class="z-10 absolute top-0 right-0 flex items-center justify-center h-full w-12 bg-secondary text-white text-darkGreenColor border-r border-darkGreenColor font-semibold rounded-r-md">
                            <img src="../resources/img/profile/search.svg" class="w-5" alt="">
                        </label>
                        <input type="text" id="search" name="search" class="h-[42px] p-3 w-full font-semibold rounded-md shadow-md outline-none border border-darkGreenColor" placeholder="Search...">
                    </div>

                    <!-- notify messages -->
                    <!-- First notification card -->
                    <div class="w-96 h-30 bg-white shadow-lg container px-4 py-3 mt-3 border hover:bg-pink-100 hover:border-secondary">
                        <div class="flex flex-row">
                            <div class="flex flex-row justify-start">
                                <img src="../resources/img/profile/notifyProfile.png" alt="">
                                <p class="px-2">Admin</p>
                            </div>
                            <p class="ml-56">Today</p>
                        </div>
                        <div class="px-6">
                            <p class="font-bold">New Feature Announcement</p>
                            <p class="text-sm">Exciting news! We are thrilled to announce the launch of a new feature on our platform. This feature will...</p>
                        </div>
                    </div>
                    <div class="w-96 h-30 bg-white shadow-lg container px-4 py-3 mt-3 border hover:bg-pink-100 hover:border-secondary">
                        <div class="flex flex-row ">
                            <div class="flex flex-row justify-start">
                                <img src="../resources/img/profile/notifyProfile.png" alt="">
                                <p class="px-2">Admin</p>
                            </div>
                            <p class="ml-56">July23</p>
                        </div>
                        <div class="px-6">
                            <p class="font-bold"> Invoice for [your Product]-2023/08/16</p>
                            <p class="text-sm">We hope this message finds you well. This email is to provide you with the invoice for the [product/service] you purchased from us. Kindly review the details below.</p>
                        </div>
                    </div>


                    <div class="w-96 h-30 bg-white shadow-lg container px-4 py-3 mt-3 border hover:bg-pink-100 hover:border-secondary">
                        <div class="flex flex-row ">
                            <div class="flex flex-row justify-start">
                                <img src="../resources/img/profile/notifyProfile.png" alt="">
                                <p class="px-2">Admin</p>
                            </div>
                            <p class="ml-56">April11</p>
                        </div>
                        <div class="px-6">
                            <p class="font-bold">Congratulations on a Successful Quarter!</p>
                            <p class="text-sm">We wanted to take a moment to congratulate you on your exceptional performance this quarter. Your dedication.....</p>
                        </div>
                    </div>

                    <div class="w-96 h-30 bg-white shadow-lg container px-4 py-3 mt-3 border hover:bg-pink-100 hover:border-secondary" id="submitApproved">
                        <div class="flex flex-row ">
                            <div class="flex flex-row justify-start">
                                <img src="../resources/img/profile/notifyProfile.png" alt="">
                                <p class="px-2">Admin</p>
                            </div>
                            <p class="ml-56">May02</p>
                        </div>
                        <div class="px-6">
                            <p class="font-bold"> Product Submission Approved - Action Required</p>
                            <p class="text-sm">We are thrilled to inform you that your product submission has been approved! </p>
                        </div>
                    </div>

                    <!-- Add more notification cards here -->

                </div>
                <div id="rightSide relative">
                    <!-- Notification cards for the right side -->
                    <div class="w-full hidden h-full bg-gray-100 shadow-md border border-secondary container px-4 py-4 mt-3 border hover:bg-pink-100 hover:border-secondary">
                        <div class="flex flex-row">
                            <div class="flex flex-row justify-start">
                                <img src="../resources/img/profile/notifyProfile.png" alt="">
                                <p class="px-2">Admin</p>
                            </div>
                            <p class="absolute right-32">July 02</p>
                        </div>
                        <div class="px-6">
                            <p class="font-bold"> Invoice for [your Product]-2023/08/16</p>
                            <p class="text-sm">Dear XYZ Company, <br><br>

                                We hope this message finds you well. This email is to provide you with the invoice for the widgets you purchased from us. Kindly review the details below:<br><br>

                                Invoice Number: INV-20230716 <br>
                                Date: July 16, 2023 <br>
                                Due Date: August 16, 2023 <br><br>

                                Product/Service Description: Widgets (Model XYZ123) <br>
                                Quantity: 100 <br>
                                Unit Price: $10.00<br>
                                Total Amount: $1,000.00<br><br>

                                Payment Instructions: We accept payment via bank transfer. Please transfer the total amount of $1,000.00 to the following bank account:<br>
                                Bank Name: ABC <br>
                                Bank Account Name: XYZ Company <br>
                                Account Number: 123456789<br>
                                Routing Number: 987654321<br><br>

                                Please include the invoice number (INV-20230716) in the payment reference. Once the payment is made, kindly email the payment confirmation to accounts@yourcompany.com.<br><br>

                                Please ensure that the payment is made by the due date mentioned above. If you have already made the payment or have any questions regarding the invoice, kindly reach out to us at accounts@yourcompany.com or call us at +1 (555) 123-4567.<br>
                                Thank you for your business. We appreciate your timely attention to this matter.<br><br>

                                Best regards,<br>
                                John Doe <br>
                                Account Manager<br>
                                XYZ Company <br>
                                accounts@yourcompany.com <br>
                                +1 (555) 123-4567<br></p>
                        </div>
                    </div>

                    <!-- Add more notification cards here -->

                    <div class="w-full h-full bg-gray-100 shadow-md rounded-lg border border-secondary container px-4 py-4 mt-3 border hover:bg-pink-100 hover:border-secondary">
                        <div class="flex flex-row">
                            <div class="flex flex-row justify-start">
                                <img src="../resources/img/profile/notifyProfile.png" alt="">
                                <p class="px-2">Admin</p>
                            </div>
                            <p class="">May 02</p>
                        </div>
                        <div class="px-6">
                            <p class="font-bold">Product Submission Approved - Action Required</p>
                            <p class="text-sm">Dear Merchant, <br> <br>

                                We are thrilled to inform you that your product submission has been approved! Your product is now live and available for purchase on our platform. <br>
                                Congratulations! <br> <br>

                                To view your product and ensure its accuracy, please visit the following link: [Product List Link] <br> <br>

                                Thank you for adhering to our guidelines and providing a high-quality product. Your dedication to excellence is greatly appreciated. <br> <br>

                                We value our partnership with you and look forward to your continued success on our platform. <br> <br>

                                Best regards, <br>
                                John Doe <br>
                                Platform Administrator <br>
                                TrendHub <br></p>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <!-- Right-side End -->
    </section>
</body>

</html>