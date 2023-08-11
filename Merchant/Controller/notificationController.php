<?php
 session_start();
   $merchantId =  $_SESSION["currentLoginUser"];
  
    include "../../Model/model.php";

    $sql = $pdo->prepare(
        "SELECT * FROM t_notify_to_merchant WHERE merchant_id = :id");
    $sql->bindValue(":id", $merchantId);
  
    $sql->execute();
    $notifications = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

