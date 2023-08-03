<?php   
include "../../Controller/customerReviewController.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
</head>

<body>
<?php foreach ($allReview as $product) {
    
    ?>
    <tr class="orderList">
        <td class="viewOrderDetailBtn p-2 text-center underline font-semibold cursor-pointer"><?= $product['id'] ?></td>
        <td class="p-2 text-center"><?= $product['p_name'] ?></td>
        <td class="p-2 text-center"><?= $product['category_name'] ?></td>
        <td class="p-2 text-center"><?= $product['p_stock'] ?></td>
        <td class="p-2 text-center"><?= $product['sell_price'] ?></td>
        <td class="p-2 text-center"><?= $product['p_stock'] * $product['sell_price'] ?></td>

        <td class="changeStatusBtn p-2 text-center underline font-semibold cursor-pointer">See Review</td>
    </tr>
    <?php  } ?>
</body>

</html>