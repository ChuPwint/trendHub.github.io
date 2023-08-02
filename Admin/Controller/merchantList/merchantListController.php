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
    header("Location: ../../View/merchantList/allMerchant.php");
}

if(($_GET["name"]) == "newMerchant"){
    $todayDate = date("Y-m-d");
    $sql = $pdo->prepare(
        "SELECT * FROM m_marchents WHERE create_date = :date"
    );
    $sql->bindValue(":date", $todayDate);
    $sql->execute();
    $newMerchantList = $sql->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["newMerchantList"] = $newMerchantList;
    header("Location: ../../View/merchantList/newMerchant.php");
}

if(($_GET["name"]) == "pendingMerchant"){
    $sql = $pdo->prepare(
        "SELECT * FROM m_marchents WHERE approval = 0"
    );
    $sql->execute();
    $pendingMerchantList = $sql->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["pendingMerchantList"] = $pendingMerchantList;
    header("Location: ../../View/merchantList/pendingMerchant.php");
}

if(($_GET["name"]) == "bannedMerchant"){
    $sql = $pdo->prepare(
        "SELECT * FROM m_marchents WHERE banned = 1"
    );
    $sql->execute();
    $bannedMerchantList = $sql->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["bannedMerchantList"] = $bannedMerchantList;
    header("Location: ../../View/merchantList/bannedMerchant.php");
}
