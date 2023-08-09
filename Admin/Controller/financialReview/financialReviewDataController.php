<?php
include "../../Model/model.php";
$sql = $pdo->prepare(
    "SELECT SUM( total_amt)
    FROM t_orders
    WHERE payment_status = 1;
    "
);
$sql->execute();
$earningFromCustomer = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare(
    "SELECT c.category_name, COUNT(*) AS order_count
    FROM t_order_details o
    JOIN m_products p ON o.product_id = p.id
    JOIN m_categories c ON p.category_id = c.id
    GROUP BY c.id, c.category_name
    ORDER BY order_count DESC LIMIT 1
    "
);
$sql->execute();
$mostSoldCategory = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare(
    "SELECT p.p_name, COUNT(*) AS product_count
    FROM t_order_details o
    JOIN m_products p ON o.product_id = p.id
    GROUP BY p.id, p.p_name
    ORDER BY product_count DESC LIMIT 1
    "
);
$sql->execute();
$mostSoldProduct = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare(
    "SELECT COUNT(id)
    FROM t_orders
    WHERE merchant_id = 1    
    "
);
$sql->execute();
$totalOrders = $sql->fetchAll(PDO::FETCH_ASSOC);

?>