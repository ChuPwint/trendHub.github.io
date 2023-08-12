<?php

session_start();
include "../../Model/model.php";
$merchantId =  $_SESSION["currentLoginUser"];
$sql = $pdo->prepare("
    SELECT pt.*, mc.category_name
    FROM m_product_temp pt
    INNER JOIN m_categories mc ON pt.category_id = mc.id
    WHERE pt.merchant_id = :id AND pt.del_flg = 0 AND pt.submitted = 0;
");
$sql->bindValue(":id", $merchantId);
$sql->execute();
$products = $sql->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["totalCount"] = count($products);
$_SESSION["merchantProducts"] = $products;




header("Location: ../../View/productSubmission/productSubmission.php");
?>