<?php

session_start();

include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM ui_setting WHERE id =0"
);

$sql->execute();
$editInfo = $sql->fetchAll(PDO::FETCH_ASSOC);





?>