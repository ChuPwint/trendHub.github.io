<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?=time() ?>">
</head>

<body class="md:bg-primary bg-secondary font-roboto">
    <div class="absolute bg-white w-full h-[250px] rounded-br-[70%] rounded-tr-none rounded-bl-none md:hidden z-[-1]">
    </div>
    <div class="md:py-12 md:px-10 px-2 z-10">
        <!-- start of receipt container -->
        <div class="px-5 py-5 md:shadow-md md:flex md:justify-center md:items-center">
            <div class="hidden md:block">
                <img src="../resources/img/receipt/undraw_super_thank_you_re_f8bo 1.svg" alt="">
            </div>
            <!-- start of receipt card -->
            <div class="px-3 py-2 bg-productCardBgColor shadow-md md:shadow-none">
                <p class="text-center font-medium mt-2">Thank you, <span>John</span></p>
                <p class="text-center mt-2">You will receive a confirmation email soon.</p>
                <!-- start of order detail card -->
                <div class="bg-secondary md:bg-productCardBgColor mt-10 p-4 rounded-md mb-2">
                    <p class="font-semibold mb-2">Order Details</p>
                    <div class="flex justify-between items-center">
                        <div class="font-medium">
                            <p>Order Number</p>
                            <p>Date</p>
                            <p>Payment Method</p>
                        </div>
                        <div class="text-right">
                            <p>112233</p>
                            <p>10/07/2023</p>
                            <p>Credit Card</p>
                        </div>
                    </div>
                    <hr class="mt-3 mb-3 border border-gray-300">
                    <!-- start of ordered items -->
                    <div class="flex justify-between items-center">
                        <div class="flex justify-start items-center">
                            <div><img src="../resources/img/shoppingCart/images 5.svg" alt=""></div>
                            <div class="ml-5 grow-0">
                                <p class="w-28 h-12 flex-wrap overflow-hidden">The One Bag</p>
                                <p>Quantity: <span>1</span></p>
                            </div>
                        </div>
                        <p>$800</p>
                    </div>
                    <!-- end of ordered items -->
                    <hr class="mt-3 mb-3 border  border-gray-300">
                    <div class="flex justify-end items-center">
                        <div>
                            <p>Subtotal</p>
                            <p>Shipping</p>
                            <p>Grand Total</p>
                        </div>
                        <div class="ml-20 text-right">
                            <p>$800</p>
                            <p>$80</p>
                            <p>$880</p>
                        </div>
                    </div>

                    <!-- start of customer detail -->
                    <p class="mt-5 mb-2 font-bold">Customer Details</p>
                    <div class="md:flex md:justify-evenly">
                        
                        <div>
                            <p class="font-semibold">Contact Info</p>
                            <p>Email: <span>customerEmail@gmail.com</span></p>
                            <p>Phone: <span>09123456</span></p>
                        </div>
                        <div class="mt-5 md:mt-0 md:ml-20">
                            <p class="font-semibold">Billing Address</p=>
                            <p class="w-60">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus, minus.</p>
                        </div>
                    </div>
                    <!-- end of customer detail -->
                </div>
                <!-- end of order detail card -->
            </div>
            <!-- end of receipt card -->
        </div>
        <!-- end of receipt container -->
    </div>
</body>

</html>