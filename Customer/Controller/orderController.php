<?php
session_start();

include "../Model/model.php";
// $id = $_SESSION["currentUserID"];
$id = 18;

$sql = $pdo->prepare("SELECT * FROM t_orders WHERE customer_id = :id ORDER BY create_date DESC;");
$sql->bindValue(":id", $id);
$sql->execute();
$orderHistory = $sql->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
$_SESSION["orderHistory"] = $orderHistory;
print_r($_SESSION["orderHistory"]);



$orderId = array(); 
foreach ($orderHistory as $order) {
    $orderId[] = $order["id"];
}
echo "<pre>";
print_r($orderId);


$allDetails = array();
// Loop through the $orderId array
foreach ($orderId as $orderIdValue) {
    $sql = $pdo->prepare("SELECT * FROM t_order_details WHERE order_id = :orderId;");
    $sql->bindValue(":orderId", $orderIdValue);
    $sql->execute();
    $details = $sql->fetchAll(PDO::FETCH_ASSOC);
    // Store the details for each order in the $allDetails array
    $allDetails[$orderIdValue] = $details;
}


$_SESSION["details"] = $allDetails;
print_r($_SESSION["details"]);


$sql = $pdo->prepare(
    "SELECT * FROM t_payment_method"
);
$sql->execute();
$paymentMethod = $sql->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["payment"] = $paymentMethod;
print_r($paymentMethod);

header ("Location: ../View/Profile/order.php");
?>
