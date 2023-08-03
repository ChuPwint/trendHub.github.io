<?php
session_start();
include "../../Model/model.php";
$searchName = $_POST["searchText"];

$sql = $pdo->prepare(
    "SELECT * FROM m_marchents 
    WHERE (approval = 1 and banned = 0) and m_name LIKE :search 
    ORDER BY m_name"
);
$sql->bindValue(":search", '%'.$searchName.'%');
$sql->execute();
$allMerchantList = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($allMerchantList);