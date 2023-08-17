<?php
session_start();
// $orderId = $_GET["order_id"];

// print_r($orderId);
// if(!isset($orderId)){
//     header("Location: ../../View/Error/error.php");
// }
// else{
    $orderId = 1;

    include "../../Model/model.php";
    $sql = $pdo->prepare(
        "SELECT t_orders.*, t_payment_method.payment_method, m_customers.*, m_regions.delivery_fee
        FROM t_orders
        JOIN t_payment_method ON t_orders.payment_method_id = t_payment_method.id
        JOIN m_customers ON t_orders.customer_id = m_customers.id
        JOIN m_regions ON t_orders.region_id = m_regions.id
        WHERE t_orders.id = :id"
    );
    $sql->bindValue(":id", $orderId);
    $sql->execute();
    $selectedOrder = $sql->fetchAll(PDO::FETCH_ASSOC);
  
    

    $sql2 = $pdo->prepare(
        "SELECT t_order_details.*, m_products.* 
        FROM t_order_details
        JOIN m_products ON t_order_details.product_id = m_products.id
        WHERE t_order_details.order_id = :id;
        )"
    );
   
    $sql2->bindValue(":id", $orderId);
    $sql2->execute();
    $orderDetails= $sql2->fetchAll(PDO::FETCH_ASSOC);
    
?>
