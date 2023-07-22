<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Out</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css">
</head>

<body class="bg-primary font-roboto">
    <p class="px-5 py-4 md:px-10 md:pt-8 font-bold text-xl">Delivery Information</p>
    <div class="md:p-10">
        <!--start of container -->
        <div class="px-4 py-4 bg-white shadow-md">
            <!-- start of delivery information and order summary container -->
            <div class="md:flex md:justify-between">
                <!-- start of delivery information container -->
                <form>
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="md:text-xl font-semibold">Contact Information</h2>
                            <p class="md:mt-1 text-gray-600">Check your delivery information carefully before proceeding.</p>

                            <div class="md:mt-6">
                                <div>
                                    <label for="name" class="block font-medium">Name</label>
                                    <div>
                                        <input type="text" name="deliverName" class="border border-1 p-2 border-tertiary w-full rounded-md outline-none py-1.5 shadow-md  placeholder:text-gray-400">
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <label for="phone" class="block font-medium">Phone Number</label>
                                    <div>
                                        <input type="text" name="phone" class="border border-1 p-2 border-tertiary w-full rounded-md outline-none py-1.5 shadow-md  placeholder:text-gray-400">
                                    </div>
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                                    <div class="mt-2">
                                        <input id="email" name="email" type="email" autocomplete="email" class="border border-1 p-2 border-tertiary w-full rounded-md outline-none py-1.5 shadow-md  placeholder:text-gray-400">
                                    </div>
                                </div>

                                <div>
                                    <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Region</label>
                                    <div class="mt-2">
                                        <select id="country" name="country" autocomplete="country-name" class="border border-1 p-2 border-tertiary w-full rounded-md outline-none py-1.5 shadow-md  placeholder:text-gray-400">
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">Street address</label>
                                    <div class="mt-2">
                                        <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="border border-1 p-2 border-tertiary w-full rounded-md outline-none py-1.5 shadow-md  placeholder:text-gray-400">
                                    </div>
                                </div>

                                <div>
                                    <label for="city" class="block text-sm font-medium leading-6 text-gray-900">City</label>
                                    <div class="mt-2">
                                        <input type="text" name="city" id="city" autocomplete="address-level2" class="border border-1 p-2 border-tertiary w-full rounded-md outline-none py-1.5 shadow-md  placeholder:text-gray-400">
                                    </div>
                                </div>

                                <div>
                                    <label for="region" class="block text-sm font-medium leading-6 text-gray-900">State / Province</label>
                                    <div class="mt-2">
                                        <input type="text" name="region" id="region" autocomplete="address-level1" class="border border-1 p-2 border-tertiary w-full rounded-md outline-none py-1.5 shadow-md  placeholder:text-gray-400">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="submit" class="rounded-md bg-tertiary md:px-10 md:py-3 md:text-lg font-semibold text-white">Save and Deliver Here</button>
                    </div>
                </form>
                <!-- end of delivery information container -->
                <!-- start of order summary container -->
                <div class="md:w-[28%]">
                    <!-- start of order summary card -->
                    <div class="p-4 m-5 bg-secondary">
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
                            <button class="bg-tertiary rounded-md px-8 py-2 text-white">Place Order</button>
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