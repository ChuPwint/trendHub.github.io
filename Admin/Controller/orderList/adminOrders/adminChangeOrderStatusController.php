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
echo json_encode($adminOrderList);