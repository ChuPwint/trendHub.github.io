<?php

$name = $_POST["m_Name"];
$email = $_POST["m_Email"];
include "../../Model/model.php";
$sql = $pdo->prepare(
    "SELECT * FROM m_marchents WHERE m_email = :email"
);
$sql->bindValue(":email", $email);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
print_r($result);
