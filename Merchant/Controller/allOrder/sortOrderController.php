<?php
session_start();
if (!isset($_POST["sortText"])) {
    header("Location: ../../View/Error/error.php");
} else {
    $sortOrder = $_POST["sortText"];
    print_r($sortOrder);
    include "../../Model/model.php";
    $merchantId = $_SESSION["currentMerchantLogin"];

    $sql = $pdo->prepare(
        "SELECT t_orders.*, t_payment_method.payment_method, m_customers.c_name 
        FROM t_orders
        JOIN t_payment_method ON t_orders.payment_method_id = t_payment_method.id
        JOIN m_customers ON t_orders.customer_id = m_customers.id
        WHERE t_orders.merchant_id = :id  AND t_orders.order_status = :sortOrder"
    );
    $sql->bindValue(":id", $merchantId);
    $sql->bindValue(":sortOrder", $sortOrder); // Bind the sortOrder parameter
    $sql->execute();
    $orderPaymentInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

    // Encode and output the JSON response
    echo json_encode($orderPaymentInfo);
}
?>
