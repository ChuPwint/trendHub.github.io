<?php
session_start();
$email = $_POST["m_Email"];
include "../../Model/model.php";
$sql = $pdo->prepare(
    "SELECT DISTINCT m_marchents.*, t_orders.order_status 
    FROM m_marchents
    JOIN t_orders ON t_orders.merchant_id = m_marchents.id
    WHERE m_marchents.m_email = :email
    AND t_orders.order_status = 0;
    "
);
$sql->bindValue(":email", $email);
$sql->execute();

$existingOrderResult = $sql->fetchAll(PDO::FETCH_ASSOC);

//no orders left to fulfil
if (count($existingOrderResult) == 0) {
    $sql = $pdo->prepare
    (
        "UPDATE m_marchents SET
        banned = :banned 
        WHERE m_email= :email"
    );
    $sql->bindValue(":banned", 1);
    $sql->bindValue(":email", $email);
    $sql->execute();
    $_SESSION["view"] = 0;
} else { //orders left to fulfil
    echo $existingOrderResult[0]["id"];
    $_SESSION["view"] = 1;
}
$_SESSION["banControllerPassed"] = true;
header("Location: ../../View/merchantList/allMerchant.php");
