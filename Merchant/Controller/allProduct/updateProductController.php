<?php
session_start();
if (isset($_POST['deleteProduct'])) {
    echo "yes";
    $idToDelete = $_POST['product_id'];
   
    include "../../Model/model.php";
    $sql = $pdo->prepare("UPDATE m_products SET del_flg = 1 WHERE id = :id");
    $sql->bindValue(":id", $idToDelete);
    $sql->execute();
    header("Location: ../../View/allProduct/allProduct.php");
}elseif (isset($_POST['editProduct'])) {
    // Handle edit operation
    $idToUpdate = $_POST['product_id'];
    $sellPrice = $_POST['sellPrice'];
    $buyPrice = $_POST['buyPrice'];
    $quantity = $_POST['quantity'];

    include "../../Model/model.php";
    $sql = $pdo->prepare("UPDATE m_products SET 
    sell_price = :sell_price,
    buy_price = :buy_price,
    p_stock = :p_stock 
    WHERE id = :id");
    $sql->bindValue(":id", $idToUpdate);
    $sql->bindValue(":sell_price", $sellPrice);
    $sql->bindValue(":buy_price", $buyPrice);
    $sql->bindValue(":p_stock", $quantity);
    $sql->execute();
    

    header("Location: ../../View/allProduct/allProduct.php");
   
}
?>

