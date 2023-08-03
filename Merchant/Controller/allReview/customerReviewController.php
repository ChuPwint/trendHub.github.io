<?php
if (!isset($_SESSION)) {
    session_start();
}
include "../../Model/model.php";
$id = 1;

$sql = $pdo->prepare("
    SELECT m_products.*, m_categories.category_name
    FROM m_products
    JOIN m_categories ON m_products.category_id = m_categories.id
    WHERE m_products.merchant_id = :id;
");

$sql->bindValue(":id", $id);
$sql->execute();
$allReview= $sql->fetchAll(PDO::FETCH_ASSOC);

?>