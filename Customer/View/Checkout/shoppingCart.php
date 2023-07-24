<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?=time() ?>">
    <link rel="stylesheet" href="../resources/css/itemDetail.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../resources/js/shoppingCart/shoppingCart.js" defer></script>
</head>

<body class="bg-primary font-roboto">
    <p class="px-5 py-4 md:px-10 md:pt-8 font-bold text-xl">Items in cart</p>
    <div class="md:p-10">
        <!--start of container -->
        <div class="px-4 py-4 bg-white shadow-md">
            <div id="noItem" class="hidden text-2xl text-center font-bold">No items yet!</div>
            <!-- start of product and summary container -->
            <div class="md:flex md:justify-between">
                <!--start of products card container -->
                <div class="md:w-[70%]">
                    <!-- start of cards -->
                    <div class="itemCard relative bg-white shadow-md m-5 p-4 flex">
                        <div class="flex items-center">
                            <img src="../resources/img/shoppingCart/images 5.svg" alt="">
                        </div>
                        <div class="ml-5 md:flex md:items-center">
                            <p class="pName pb-3 w-48 break-words md:ml-3">The One Bag Leather Clutch</p>
                            <p class="pPrice pt-3 pb-3 w-48 break-words md:hidden">400,555,000 kyat</p>
                            <div class="font-semibold pt-1 md:ml-3">
                                <button class="minusBtn cursor-pointer mr-1 px-1 bg-productCardBgColor font-semibold rounded-md disabled bg-opacity-50 text-gray-200">-</button>
                                <input type="number" name="qty" value="1" class="quantityInput text-xl text-center w-10 py-1 rounded-md bg-productCardBgColor">
                                <button class="plusBtn cursor-pointer ml-1 px-1 font-semibold text-center bg-productCardBgColor rounded-md">+</button>
                            </div>
                            <p id="desktopPrice" class="pt-3 pb-3 w-48 break-words hidden md:block md:ml-16">400,555,000 kyat</p>
                            <div><ion-icon class="desktopHeart text-gray-400 hidden md:mr-28 ml-5 md:block w-7 md:text-3xl cursor-pointer" name="heart"></ion-icon></div>
                            <div><img class="dTrashImg hidden md:block w-7 cursor-pointer" src="../resources/img/shoppingCart/Trash.svg" alt=""></div>
                        </div>
                        <ion-icon class="mobileHeart text-gray-400 text-2xl md:hidden w-7 absolute right-3 top-3 cursor-pointer" name="heart"></ion-icon>
                        <img class="mTrashImg md:hidden w-7 absolute right-3 bottom-3 cursor-pointer" src="../resources/img/shoppingCart/Trash.svg" alt="">
                    </div>
                    <!-- end of cards -->
                    <!-- start of cards -->
                    <div class="itemCard relative bg-white shadow-md m-5 p-4 flex">
                        <div class="flex items-center">
                            <img src="../resources/img/shoppingCart/images 5.svg" alt="">
                        </div>
                        <div class="ml-5 md:flex md:items-center">
                            <p class="pName pb-3 w-48 break-words md:ml-3">The One Bag Leather Clutch</p>
                            <p class="pPrice pt-3 pb-3 w-48 break-words md:hidden">400,555,000 kyat</p>
                            <div class="font-semibold pt-1 md:ml-3">
                                <button class="minusBtn cursor-pointer mr-1 px-1 bg-productCardBgColor font-semibold rounded-md disabled bg-opacity-50 text-gray-200">-</button>
                                <input type="number" name="qty" value="1" class="quantityInput text-xl text-center w-10 py-1 rounded-md bg-productCardBgColor">
                                <button class="plusBtn cursor-pointer ml-1 px-1 font-semibold text-center bg-productCardBgColor rounded-md">+</button>
                            </div>
                            <p id="desktopPrice" class="pt-3 pb-3 w-48 break-words hidden md:block md:ml-16">400,555,000 kyat</p>
                            <div><ion-icon class="desktopHeart text-gray-400 hidden md:mr-28 ml-5 md:block w-7 md:text-3xl cursor-pointer" name="heart"></ion-icon></div>
                            <div><img class="dTrashImg hidden md:block w-7 cursor-pointer" src="../resources/img/shoppingCart/Trash.svg" alt=""></div>
                        </div>
                        <ion-icon class="mobileHeart text-gray-400 text-2xl md:hidden w-7 absolute right-3 top-3 cursor-pointer" name="heart"></ion-icon>
                        <img class="mTrashImg md:hidden w-7 absolute right-3 bottom-3 cursor-pointer" src="../resources/img/shoppingCart/Trash.svg" alt="">
                    </div>
                    <!-- end of cards -->
                    <!-- start of cards -->
                    <div class="itemCard relative bg-white shadow-md m-5 p-4 flex">
                        <div class="flex items-center">
                            <img src="../resources/img/shoppingCart/images 5.svg" alt="">
                        </div>
                        <div class="ml-5 md:flex md:items-center">
                            <p class="pName pb-3 w-48 break-words md:ml-3">The One Bag Leather Clutch</p>
                            <p class="pPrice pt-3 pb-3 w-48 break-words md:hidden">400,555,000 kyat</p>
                            <div class="font-semibold pt-1 md:ml-3">
                                <button class="minusBtn cursor-pointer mr-1 px-1 bg-productCardBgColor font-semibold rounded-md disabled bg-opacity-50 text-gray-200">-</button>
                                <input type="number" name="qty" value="1" class="quantityInput text-xl text-center w-10 py-1 rounded-md bg-productCardBgColor">
                                <button class="plusBtn cursor-pointer ml-1 px-1 font-semibold text-center bg-productCardBgColor rounded-md">+</button>
                            </div>
                            <p id="desktopPrice" class="pt-3 pb-3 w-48 break-words hidden md:block md:ml-16">400,555,000 kyat</p>
                            <div><ion-icon class="desktopHeart text-gray-400 hidden md:mr-28 ml-5 md:block w-7 md:text-3xl cursor-pointer" name="heart"></ion-icon></div>
                            <div><img class="dTrashImg hidden md:block w-7 cursor-pointer" src="../resources/img/shoppingCart/Trash.svg" alt=""></div>
                        </div>
                        <ion-icon class="mobileHeart text-gray-400 text-2xl md:hidden w-7 absolute right-3 top-3 cursor-pointer" name="heart"></ion-icon>
                        <img class="mTrashImg md:hidden w-7 absolute right-3 bottom-3 cursor-pointer" src="../resources/img/shoppingCart/Trash.svg" alt="">
                    </div>
                    <!-- end of cards -->
                </div>
                <!--end of products card container -->

                <!-- start of order summary container -->
                <div id="orderCard" class="md:w-[28%]">
                    <!-- start of order summary card -->
                    <div class="p-4 m-5 bg-secondary text-lg md:text-xl">
                        <p class="hidden font-medium mb-5 text-lg md:block">Order Summary</p>
                        <!-- start of prices -->
                        <div class="flex justify-between items-center mb-5">
                            <div>
                                <p class="mb-3">Sub-total</p>
                                <p>Delivery</p>
                            </div>
                            <div>
                                <p class="mb-3 subTotal">$800</p>
                                <p class="deliPrice">$80</p>
                            </div>
                        </div>
                        <hr class="border border-dashed border-gray-400">
                        <div class="flex justify-between items-center mt-5">
                            <p>Grand Total</p>
                            <p class="totalPrice">$880</p>
                        </div>
                        <!-- end of prices -->
                        <div class="flex justify-center mt-6 mb-4">
                            <button class="bg-tertiary rounded-md px-8 py-2 text-white">Proceed to Checkout (<span class="itemAmount">3</span>)</button>
                        </div>
                    </div>
                    <!-- end of order summary card -->
                </div>
                <!-- end of order summary container -->
            </div>
            <!-- end of product and summary container -->
            <div id="totalItem" class="hidden md:block md:font-bold md:p-4 md:text-lg md:w-[70%] md:text-right">
                Total: <span class="itemAmount">3</span> items
            </div>
        </div>
        <!--end of container -->
    </div>
</body>

</html>