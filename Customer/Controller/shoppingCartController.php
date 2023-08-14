<?php

if (!isset($_GET["cartItems"])) {
    header("Location: ../View/Error/error.php");
}else{
    session_start();
    $cartItemsJson = urldecode($_GET["cartItems"]);
    $cartItems = json_decode($cartItemsJson, true);
    // echo "<pre>";
    // print_r($cartItems);
    $_SESSION["cartItems"] = $cartItems;
    include "../Model/model.php";
    $cartItemsDetails = [];
    foreach($cartItems as $item){
        $id = $item["productID"];
        $sql = $pdo->prepare(
            "SELECT * FROM m_products WHERE id = :id"
        );
        $sql->bindValue(":id", $id);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        $cartItemsDetails = array_merge($cartItemsDetails, $result);
    }
    // echo "<pre>";
    // print_r($cartItemsDetails);
    $_SESSION["cartItemsDetails"] = $cartItemsDetails;
    header("Location: ../View/Checkout/shoppingCart.php");
}







?>