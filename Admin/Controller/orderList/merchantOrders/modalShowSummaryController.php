<?php
include "../../../Model/model.php";
$orderId = $_POST["id"];

$sql = $pdo->prepare(
    "SELECT t_order_details.*, m_townships.delivery_fee, t_orders.total_amt AS totalOrderAmount, m_products.p_name 
    FROM t_order_details
    JOIN m_products ON t_order_details.product_id = m_products.id
    JOIN t_orders ON t_order_details.order_id = t_orders.id
    JOIN m_townships ON t_orders.township_id = m_townships.id
    WHERE t_order_details.order_id = :id"
);
$sql->bindValue(":id", $orderId);
$sql->execute();
$orderSummaryList = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($orderSummaryList);
?>