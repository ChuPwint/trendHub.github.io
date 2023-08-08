<?php

// if (!isset($_GET["to"])) {
//     header("Location: ../../View/Error/error.php");
// } else {
 
    // $merchantId =  $_SESSION["currentLoginUser"];
    $merchantId = 10;
    include "../../Model/model.php";

    $sql = $pdo->prepare(
        "SELECT * FROM t_notify_to_merchant WHERE merchant_id = :id");
    $sql->bindValue(":id", $merchantId);
  
    $sql->execute();
    $notifications = $sql->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($notifications);

    // function sortByCreateDateDesc($a, $b)
    // {
    //     $timestampA = strtotime($a["create_date"]);
    //     $timestampB = strtotime($b["create_date"]);

    //     return $timestampB - $timestampA;
    // }

    // usort($mergedArray, 'sortByCreateDateDesc');
   


