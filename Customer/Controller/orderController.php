<?php

include "../Model/model.php";
// $id = $_SESSION["currentUserID"];
$id = 18;

$sql = $pdo->prepare("SELECT * FROM t_orders WHERE customer_id = :id ORDER BY create_date DESC;");
$sql->bindValue(":id", $id);
$sql->execute();
$orderHistory = $sql->fetchAll(PDO::FETCH_ASSOC);

$orderId = $orderHistory[0]["id"];
echo "<pre>";
print_r($orderId);

$sql = $pdo->prepare("SELECT * FROM t_order_details WHERE order_id = :orderId ;");
$sql->bindValue(":orderId", $orderId);
$sql->execute();
$detail = $sql->fetchAll(PDO::FETCH_ASSOC);




echo "<pre>";
$_SESSION["orderHistory"] = $orderHistory;
$_SESSION["orderDetail"] = $detail;

print_r($_SESSION["orderDetail"]);
// header("Location: ../View/Profile/order.php");

?>