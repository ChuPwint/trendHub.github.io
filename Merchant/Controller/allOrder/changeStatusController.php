<?php

session_start();
$id = $_GET["id"];
print_r($id);
if(!isset($id)){
    header("Location: ../../View/Error/error.php");
  
   
}
else{
    include "../../Model/model.php";
    $sql = $pdo->prepare(
        "SELECT t_orders.*, t_payment_method.payment_method, m_customers.c_name,c_phone 
        FROM t_orders
        JOIN t_payment_method ON t_orders.payment_method_id = t_payment_method.id
        JOIN m_customers ON t_orders.customer_id = m_customers.id
        WHERE t_orders.id = :id"
    );
    $sql->bindValue(":id", $id);
    $sql->execute();
    $_SESSION["selectedOrder"] = $sql->fetchAll(PDO::FETCH_ASSOC);
  
    

    $sql2 = $pdo->prepare(
        "SELECT t_order_details.*, m_products.* 
        FROM t_order_details
        JOIN m_products ON t_order_details.product_id = m_products.id
        WHERE t_order_details.order_id = :id;
        )"
    );
    $sql2->bindValue(":id", $id);
    $sql2->execute();
    $_SESSION["orderDetails"]= $sql2->fetchAll(PDO::FETCH_ASSOC);
    
 $_SESSION["changeStatusController"] = true;
 $_SESSION["detailView"] = 1;
// include "../../View/allOrder/orderDetail.php"
    
header("Location: ../../View/allOrder/allOrder.php");
}
