<?php

include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_products 
    JOIN m_categories 
    ON m_products.category_id = m_categories.id 
    WHERE m_products.merchant_id = :id 
    AND m_products.del_flg = 0
    "
);
$sql->bindValue(":id", 1);
$sql->execute();
$adminProducts = $sql->fetchAll(PDO::FETCH_ASSOC);
$totalCount  = count($adminProducts);

$sql = $pdo->prepare(
    "SELECT * FROM m_categories WHERE del_flg = 0"
);
$sql->execute();
$allCategories = $sql->fetchAll(PDO::FETCH_ASSOC);

?>