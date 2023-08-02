<?php
session_start();
include "../../Model/model.php";

if(($_GET["name"]) == "allMerchant"){
    $sql = $pdo->prepare(
        "SELECT * FROM m_marchents WHERE approval = 1 and banned = 0 ORDER BY m_name"
    );
    $sql->execute();
    $allMerchantList = $sql->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["allMerchantList"] = $allMerchantList;
    //print_r($allMerchantList);
    //print_r($_SESSION["allMerchantList"]);
    header("Location: ../../View/merchantList/allMerchant.php");
}


$todayDate = date("Y-m-d");
$sql = $pdo->prepare(
    "SELECT * FROM m_marchents WHERE create_date = :date"
);
$sql->bindValue(":date", $todayDate);
$sql->execute();
$newMerchantList = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare(
    "SELECT * FROM m_marchents WHERE approval = 0"
);
$sql->execute();
$pendingMerchantList = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare(
    "SELECT * FROM m_marchents WHERE banned = 1"
);
$sql->execute();
$bannedMerchantList = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// echo $todayDate;
// print_r($allMerchantList);
// print_r($newMerchantList);
// print_r($pendingMerchantList);
// print_r($bannedMerchantList);

?>