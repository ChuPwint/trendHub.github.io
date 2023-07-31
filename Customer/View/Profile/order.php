<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <script src="../resources/lib/jquery3.6.0.js"></script>

</head>
<body>
<div class="container mx-auto mt-2 " id="orderHistoryDestop">
                    <div class="bg-primary shadow-md rounded-lg p-6 ">
                        <h2 class="text-2xl font-semibold mb-4">Order History</h2>
                        <table class="w-full border-separate border-spacing-y-3 ">
                            <thead class="bg-secondary">
                                <tr>
                                    <th class="px-4 py-2 border">Order ID</th>
                                    <th class="px-4 py-2 border">Items</th>
                                    <th class="px-4 py-2 border">Quantity</th>
                                    <th class="px-4 py-2 border">Payment</th>
                                    <th class="px-4 py-2 border">Total</th>
                                    <th class="px-4 py-2 border">Status</th>
                                    <th class="px-4 py-2 border"></th>
                                </tr>
                            </thead>
                            <tbody class="col space-y-4">
                                <!-- Sample Order History Entries -->
                                <tr class=" bg-slate-100  ">
                                    <td class="px-4 py-2">2023001</td>
                                    <td class="px-4 py-2 ">Product A, Product B</td>
                                    <td class="px-4 py-2 ">2, 1</td>
                                    <td class="px-4 py-2 ">Credit Card</td>
                                    <td class="px-4 py-2 ">$150.00</td>
                                    <td class="px-4 py-2 ">Delivered</td>
                                    <td class="px-4 py-2 "><img src="../resources/img/orderHistory//carbon_review.svg" alt=""></td>
                                </tr>
                                <tr class="mt-4 bg-slate-100  ">
                                    <td class="px-4 py-2 ">2023002</td>
                                    <td class="px-4 py-2 ">Product C</td>
                                    <td class="px-4 py-2 ">3</td>
                                    <td class="px-4 py-2 ">PayPal</td>
                                    <td class="px-4 py-2 ">$75.99</td>
                                    <td class="px-4 py-2 ">Shipped</td>
                                    <td class="px-4 py-2 "><img src="../resources/img/orderHistory//carbon_review.svg" alt=""></td>
                                </tr>
                                <tr class="mt-4 bg-slate-100 ">
                                    <td class="px-4 py-2 ">2023003</td>
                                    <td class="px-4 py-2 ">Product D, Product E, Product F</td>
                                    <td class="px-4 py-2 ">1, 2, 2</td>
                                    <td class="px-4 py-2 ">Google Pay</td>
                                    <td class="px-4 py-2 ">$225.50</td>
                                    <td class="px-4 py-2 ">Delivered </td>
                                    <td class="px-4 py-2 "><img src="../resources/img/orderHistory//carbon_review.svg" alt=""></td>
                                </tr>
                                <tr class="py-4 bg-slate-100 ">
                                    <td class="px-4 py-2 ">2023004</td>
                                    <td class="px-4 py-2 ">Product G</td>
                                    <td class="px-4 py-2 ">5</td>
                                    <td class="px-4 py-2 ">Apple Pay</td>
                                    <td class="px-4 py-2 ">$42.00</td>
                                    <td class="px-4 py-2 ">Cancelled </td>
                                    <td class="px-4 py-2 "><img src="../resources/img/orderHistory//carbon_review.svg" alt=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
</body>
</html>