<?php
include "../../Controller/orderController.php";


?>

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
                    <!-- Loop through $orderHistory and generate rows -->
                    <?php foreach ($orderPaymentInfo as $order) : ?>
                        <tr class="bg-slate-100">
                            <td class="px-4 py-2"><?php echo $order['id']; ?></td>
                            <td class="px-4 py-2">
                                <?php

                                foreach ($orderDetailsInfo as $detail) {
                                    if ($detail['order_id'] === $order['id']) {
                                        echo $detail['p_name'] . ", ";
                                    }
                                }
                                ?>
                            </td>
                            <td class="px-4 py-2">
                                <?php

                                foreach ($orderDetailsInfo as $detail) {
                                    if ($detail['order_id'] === $order['id']) {
                                        echo $detail['qty'] . ", ";
                                    }
                                }
                                ?>
                            </td>
                            <td class="px-4 py-2"><?php echo $order['payment_method']; ?></td>
                            <td class="px-4 py-2"><?php echo "$" . $order['total_amt']; ?></td>
                            <td class="px-4 py-2">
                                <?php
                                
                                if ($order['order_status'] == 0) {
                                    echo "Pending";
                                } elseif ($order['order_status'] == 1) {
                                    echo "Delivered";
                                } else {
                                    // Handle other cases if needed
                                    echo "Unknown";
                                }
                                ?>
                            </td>
                            <td class="px-4 py-2"><img src="../resources/img/orderHistory//carbon_review.svg" alt=""></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</body>

</html>