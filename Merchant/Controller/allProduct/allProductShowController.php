<?php
if (!isset($_SESSION)) {
    session_start();
}
include "../../Model/model.php";
// $merchantId =  $_SESSION["currentLoginUser"];
$merchantId = 10;


$sql = $pdo->prepare("
    SELECT m_products.*, m_categories.*,m_products.id AS pId
    FROM m_products
    JOIN m_categories ON m_products.category_id = m_categories.id
    WHERE m_products.merchant_id = :id
    AND m_products.del_flg = 0;
");

$sql->bindValue(":id", $merchantId);
$sql->execute();
$allProduct= $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($allProduct);


?>
