<?php
session_start();

$productID = 51;
$customerID = 17;

include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT m_products.*, m_marchents.m_name 
    FROM m_products 
    JOIN m_marchents 
    ON m_products.merchant_id = m_marchents.id
    WHERE m_products.id = :id"
);
$sql->bindValue(":id", $productID);
$sql->execute();
$_SESSION["productDetail"] = $sql->fetchAll(PDO::FETCH_ASSOC);
print_r($_SESSION["productDetail"]);

$sql = $pdo->prepare(
    "SELECT SUM(rating) as total_rating  
    FROM t_review_details
    WHERE product_id = :id
    "
);
$sql->bindValue(":id", $productID);
$sql->execute();
$sumRating = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<br>";
// echo "sumRating: ";
// print_r($sumRating);

$sql = $pdo->prepare(
    "SELECT *  FROM t_review_details
    WHERE product_id = :id
    "
);
$sql->bindValue(":id", $productID);
$sql->execute();
$totalReviews = $sql->fetchAll(PDO::FETCH_ASSOC);
$totalRating = count($totalReviews);
$_SESSION["averageRating"] = ($sumRating[0]["total_rating"] > 0) ? $sumRating[0]["total_rating"] / $totalRating : 5;
$_SESSION["totalRatedCustomer"] = ($totalRating > 0) ? $totalRating : "none";

?>