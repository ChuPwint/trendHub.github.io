<?php
// session_start();
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT p.*, COUNT(wd.product_id) AS frequency
    FROM m_products p
    JOIN t_wishlist_details wd ON p.id = wd.product_id
    WHERE p.p_stock >= 1
    GROUP BY p.id, p.p_name
    ORDER BY frequency DESC LIMIT 4"
);
$sql->execute();
$trendingProductsList = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare(
    "SELECT p.*, SUM(od.qty) AS total_quantity_sold
    FROM m_products p
    JOIN t_order_details od ON p.id = od.product_id
    WHERE p.p_stock >= 1
    GROUP BY p.id, p.p_name
    ORDER BY total_quantity_sold DESC LIMIT 4"
);
$sql->execute();
$bestSellerProductsList = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare(
    "SELECT *
    FROM m_products
    WHERE (create_date >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND p_stock >= 1
    ORDER BY create_date DESC LIMIT 4"
);
$sql->execute();
$newProductsList = $sql->fetchAll(PDO::FETCH_ASSOC);
