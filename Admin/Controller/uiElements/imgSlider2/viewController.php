<?php



include "../../Model/model.php";


$sql = $pdo->prepare(
    "SELECT * FROM ui_setting WHERE id =0"
);

$sql->execute();


$editSlide2 = $sql->fetchAll(PDO::FETCH_ASSOC);











?>