<?php

session_start();
$id = $_GET["id"];
// print_r($id);
if(!isset($id)){
    header("Location: ../../View/Error/error.php");
  
   
}else{
    include "../../Model/model.php";
    $sql = $pdo->prepare(
        "SELECT * FROM m_products WHERE id = :id;
        "
    );
    $sql->bindValue(":id",$id);
    $sql->execute();
   
   
$_SESSION["viewProduct"] = $sql->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["passDetailController"] = true;
$_SESSION["changeStatusController"] = true;
$_SESSION["orderDetailView"] = 1;
$_SESSION["changeStatus"] = 1;

header("Location: ../../View/allOrder/allOrder.php");
}