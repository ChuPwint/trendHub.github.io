<?php
session_start();
$orderHistorys = $_SESSION["orderHistory"];
$orderDetails = $_SESSION["details"];
$payment = $_SESSION["payment"];
echo "<pre>";
print_r($orderHistorys);
print_r($orderDetails);



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
                    <?php foreach ($orderHistorys as $order) : ?>
                        <tr class="bg-slate-100">
                            <td class="px-4 py-2"><?php echo $order['id']; ?></td>
                            <td class="px-4 py-2">
                                <?php
                                $items = array();
                                foreach ($orderDetails as $detail) {
                                    
                                    if ($detail['order_id'] === $order['id']) {
                                        $productId = $detail['product_id'];
                                        print_r($productId);
                                        // Retrieve the product name from the database based on the product_id
                                        $sql = $pdo->prepare("SELECT p_name FROM m_products WHERE id = :productId;");
                                        $sql->bindValue(":productId", $productId);
                                        $sql->execute();
                                        $product = $sql->fetch(PDO::FETCH_ASSOC);

                                        if ($product) {
                                            $items[] = $product['p_name'];
                                        } else {
                                            // Handle the case when product not found in the database (optional)
                                            $items[] = 'Product ID ' . $productId;
                                        }
                                    }
                                }
                                echo implode(', ', $items);
                                ?>
                            </td>
                            <td class="px-4 py-2">
                                <?php
                                $quantities = array();
                                foreach ($orderDetails as $detail) {
                                    if ($detail['order_id'] === $order['id']) {
                                        $quantities[] = $detail['qty'];
                                    }
                                }
                                echo implode(', ', $quantities);
                                ?>
                            </td>

                            <?php
                            $selectedPaymentId = $order["payment_method_id"];
                            foreach ($payment as $method) {
                                if ($method['id'] == $selectedPaymentId) {
                                    $selectedMethod = $method["payment_method"];
                                    break;
                                }
                            ?>
                            <?php } ?>

                            <td class="px-4 py-2"><?= $selectedMethod ?></td>
                            <td class="px-4 py-2">$<?php echo $order['total_amt']; ?></td>
                            <td class="px-4 py-2">Delivered</td> <!-- Replace with actual order status if available -->
                            <td class="px-4 py-2"><img src="../resources/img/orderHistory/carbon_review.svg" alt=""></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</body>

</html>