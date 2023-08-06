<?php

session_start();
include "../../Model/model.php";


$merchantId = 10;

$sql = $pdo->prepare("
    SELECT
        t_product_submits.*,
        t_product_submit_details.*,
        m_categories.category_name
    FROM
        t_product_submits
    JOIN
        t_product_submit_details ON t_product_submits.id = t_product_submit_details.product_submit_id
    JOIN
        m_categories ON m_categories.id = t_product_submit_details.category_id
    WHERE
        t_product_submits.merchant_id = :Id AND
        t_product_submit_details.del_flg = 0
");

$sql->bindValue(":Id", $merchantId);
$sql->execute();

$submitProducts = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($submitProducts);
// header("Location: ../../View/productSubmission/productSubmission.php");


?>