<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css">
</head>

<body class="bg-primary font-roboto">
    <div class="">
        <p class="px-5 py-4 font-bold text-lg">Items in cart</p>
        <!-- card container -->
        <div class="px-4 py-4 border bg-slate-500">
            <!-- added cards -->
            <div class="relative bg-white shadow-md p-2 flex">
                <div>
                    <img src="../resources/img/shoppingCart/images 5.svg" alt="">
                </div>
                <div class="ml-5">
                    <p class="cart_productName pt-3">The One Bag</p>
                    <div class="flex flex-row items-center mt-8">
                        <span class="cart_productPrice">$100</span>
                        <div class="font-semibold ml-6">
                            <button class="cursor-pointer mr-1 px-1 bg-productCardBgColor font-semibold rounded-md">-</button>
                            <input type="number" name="qty" value="1" class="text-xl text-center w-10 py-1 rounded-md bg-productCardBgColor">
                            <button class="cursor-pointer ml-1 px-1 font-semibold text-center bg-productCardBgColor rounded-md">+</button>
                        </div>
                    </div>

                </div>
                <img class="w-7 absolute right-3 top-1 cursor-pointer" src="../resources/img/shoppingCart/Heart.svg" alt="">
                <img class="w-7 absolute right-3 bottom-3 cursor-pointer" src="../resources/img/shoppingCart/Trash.svg" alt="">
            </div>
        </div>
    </div>
</body>

</html>