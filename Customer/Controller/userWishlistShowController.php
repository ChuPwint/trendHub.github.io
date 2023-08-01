<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
include "../Model/model.php";
// $id =  $_SESSION["currentLoginUser"];
// $id =  $_SESSION["currentLoginUser"];


$sql = $pdo->prepare("SELECT p_name,sell_price FROM m_products;");
$sql->execute();
$wishlist = $sql->fetchAll(PDO::FETCH_ASSOC);


echo "<pre>";
print_r($wishlist);



$id = 1;
$sql = $pdo->prepare("SELECT * FROM t_wishlist_details WHERE wishlist_id = :id;");
$sql1->bindValue(":id", $id);
$sql->execute();
$wishlistDetail = $sql->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($wishlistDetail);
?> 
