<?php
include "../../Model/model.php";
// $merchantId =  $_SESSION["currentLoginUser"];
$merchantId = 10;
$sql = $pdo->prepare("
    SELECT * FROM m_product_temp WHERE merchant_id = :id AND del_flg = 0 AND submitted = 0");
$sql->bindValue(":id", $merchantId);
$sql->execute();
$submittedProducts = $sql->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($submittedProducts);


//search the last id+1 to get product submit id 
$sql = $pdo->prepare("SELECT * FROM t_product_submits");
$sql->execute();
$getSubmitId = $sql->fetchAll(PDO::FETCH_ASSOC);

$maxId = 0;
foreach ($getSubmitId as $row) {
    if ($row['id'] > $maxId) {
        $maxId = $row['id'];
    }
}
$nextId = $maxId + 1;

foreach ($submittedProducts as $product) {
    // Prepare the INSERT statement
    $insertSql = $pdo->prepare("
        INSERT INTO t_product_submit_details
        (product_submit_id,merchant_id, p_name, category_id, brand_name, p_path, p_stock, p_description, p_detail, buy_price, sell_price,create_date)
        VALUES
        (:product_submit_id,:merchant_id,:p_name, :category_id, :brand_name, :p_path, :p_stock, :p_description, :p_detail, :buy_price, :sell_price,:create_date)
    ");
    
    // Bind values from the product array to the parameters
    $insertSql->bindValue(":product_submit_id", $nextId);
    $insertSql->bindValue(":merchant_id", $product['merchant_id']);
    $insertSql->bindValue(":p_name", $product['p_name']);
    $insertSql->bindValue(":category_id", $product['category_id']);
    $insertSql->bindValue(":brand_name", $product['brand_name']);
    $insertSql->bindValue(":p_path", $product['p_path']);
    $insertSql->bindValue(":p_stock", $product['p_stock']);
    $insertSql->bindValue(":p_description", $product['p_description']);
    $insertSql->bindValue(":p_detail", $product['p_detail']);
    $insertSql->bindValue(":buy_price", $product['buy_price']);
    $insertSql->bindValue(":sell_price", $product['sell_price']);
    $insertSql->bindValue(":create_date", $product['create_date']);
    $insertSql->execute();
}
$sql = $pdo->prepare(" INSERT INTO  t_product_submits (merchant_id)  VALUES (:merchantId)");
$sql->bindValue(":merchantId", $merchantId);
$sql->execute();



$sql = $pdo->prepare("UPDATE m_product_temp SET submitted = 1 WHERE del_flg = 0");
$sql->execute();

 header("Location: ./merchantProductController.php");
// include "./merchantProductController.php"


?>
