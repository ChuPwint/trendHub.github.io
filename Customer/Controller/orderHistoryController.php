<?php

include "../Model/model.php";
// $id = $_SESSION["currentUserID"];
$id = 18;

$sql = $pdo->prepare("SELECT * FROM t_orders WHERE customer_id = :id ORDER BY create_date DESC;");
$sql->bindValue(":id", $id);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

$orderId = $result[0]["order_id"];

$sql = $pdo->prepare("SELECT * FROM t_order_details WHERE order_id = :orderId ;");
$sql->bindValue(":id", $id);
echo "<pre>";
print_r($result);
session_start();
$_SESSION["orderHistory"] = $result;

// header("Location: ../View/Profile/order.php");

?>
