<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Out</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="../resources/js/checkout/checkout.js" defer></script>
</head>

<body class="bg-primary font-roboto">
    <?php
    include "../resources/common/navbar.php";
    ?>
    <p class="px-5 mt-36 md:mt-28 md:px-10 md:pt-8 font-bold text-xl">Delivery Information</p>
    <div class="md:p-10">
        <!--start of container -->
        <div class="px-4 py-4 bg-white shadow-md">
            <!-- start of delivery information and order summary container -->
            <div class="md:flex md:justify-between md:p-5">
                <!-- start of delivery information container -->
                <form class="md:py-4 md:px-10 py-4 px-4">
                    <div class="md:space-y-12">
                        <div class="md:pb-3">
                            <h2 class="md:text-xl font-semibold">Contact Information</h2>
                            <p class="md:mt-1 mt-2 text-gray-600">Check your delivery information carefully before proceeding.</p>

                            <div class="md:mt-6 mt-4">
                                <div>
                                    <label for="name" class="block font-medium">Name</label>
                                    <div class="mt-2">
                                        <input type="text" name="deliverName" class="border border-1 p-2 border-tertiary w-full rounded-md outline-none py-1.5 placeholder:text-gray-400" placeholder="John Doe">
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <label for="phone" class="block font-medium">Phone Number</label>
                                    <div class="mt-2">
                                        <input type="text" name="phone" class="border border-1 p-2 border-tertiary w-full rounded-md outline-none py-1.5 placeholder:text-gray-400" placeholder="09123456">
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <label for="email" class="block font-medium">Email address</label>
                                    <div class="mt-2">
                                        <input name="email" type="email" class="border border-1 p-2 border-tertiary w-full rounded-md outline-none py-1.5 placeholder:text-gray-400" placeholder="trendhub123@gmail.com">
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <label for="region" class="block font-medium">Region</label>
                                    <div class="mt-2">
                                        <select name="region" class="border border-1 p-2 border-tertiary w-full rounded-md outline-none py-1.5 placeholder:text-gray-400">
                                            <option value="Yangon" selected>Yangon</option>
                                            <option value="Mandalay">Mandalay</option>
                                            <option value="Naypyitaw">Naypyitaw</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <label for="city" class="block font-medium">City</label>
                                    <div class="mt-2">
                                        <input type="text" name="city" class="border border-1 p-2 border-tertiary w-full rounded-md outline-none py-1.5 placeholder:text-gray-400" placeholder="Yangon">
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <label for="township" class="block font-medium">Township</label>
                                    <div class="mt-2">
                                        <input type="text" name="township" class="border border-1 p-2 border-tertiary w-full rounded-md outline-none py-1.5 placeholder:text-gray-400" placeholder="Dagon">
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <label for="address" class="block font-medium">Address</label>
                                    <div class="mt-2">
                                        <input type="text" name="region" class="border border-1 p-2 border-tertiary w-full rounded-md outline-none py-1.5 placeholder:text-gray-400" placeholder="12/A ABC Street DE Apartment 3rd floor">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex items-center justify-center">
                        <button id="saveDeliInfoBtn" type="submit" class="rounded-md bg-tertiary md:px-6 py-2 px-10 font-semibold text-white">Save and Deliver Here</button>
                    </div>
                </form>
                <!-- end of delivery information container -->
                <!-- start of order summary container -->
                <div class="md:w-[30%]">
                    <!-- start of order summary card -->
                    <div class="p-4 m-5 bg-secondary text-lg">
                        <p class="hidden font-medium mb-5 text-lg md:block">Order Summary</p>
                        <!-- start of prices -->
                        <div class="flex justify-between items-center mb-5">
                            <div>
                                <p class="mb-3">Sub-total</p>
                                <p>Delivery</p>
                            </div>
                            <div>
                                <p class="mb-3">$800</p>
                                <p>$80</p>
                            </div>
                        </div>
                        <hr class="border border-dashed border-gray-400">
                        <div class="flex justify-between items-center mt-5">
                            <p>Grand Total</p>
                            <p>$880</p>
                        </div>
                        <!-- end of prices -->
                        <div class="flex justify-center mt-6 mb-4">
                            <button id="placeOrderBtn" class="bg-tertiary bg-opacity-50 rounded-md px-8 py-2 text-white">Place Order</button>
                        </div>
                    </div>
                    <!-- end of order summary card -->
                </div>
                <!-- end of order summary container -->
            </div>
            <!-- end of delivery information and order summary container -->
        </div>
        <!--end of card container -->
    </div>
</body>

</html>