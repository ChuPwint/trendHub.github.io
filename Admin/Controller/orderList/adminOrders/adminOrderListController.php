<?php

include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT t_orders.*, t_payment_method.payment_method, m_customers.c_name 
    FROM t_orders
    JOIN t_payment_method ON t_orders.payment_method_id = t_payment_method.id
    JOIN m_customers ON t_orders.customer_id = m_customers.id
    WHERE t_orders.merchant_id = :id
    ORDER BY order_status;
    "
);
$sql->bindValue(":id", 1);
$sql->execute();
$adminOrderList = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare(
    "SELECT t_order_details.*, m_products.* 
    FROM t_order_details
    JOIN m_products ON t_order_details.product_id = m_products.id
    WHERE t_order_details.order_id IN (
        SELECT id FROM t_orders WHERE merchant_id = :id
    )"
);
$sql->bindValue(":id", 1);
$sql->execute();
$adminOrderDetail = $sql->fetchAll(PDO::FETCH_ASSOC);
//header("Location: ../../View/manageProduct/adminProducts.php");

?>