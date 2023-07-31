
<?php

include "../../Model/model.php";


$sql = $pdo->prepare(
    "SELECT * FROM m_customers ;"
);

$sql->execute(); //real sql run

$userData = $sql->fetchAll(PDO::FETCH_ASSOC);
//db connection

$sql = $pdo->prepare(
    "SELECT * FROM m_regions"
);
$sql->execute();
$totalRegions = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare(
    "SELECT * FROM m_townships"
);
$sql->execute();
$totalTsp = $sql->fetchAll(PDO::FETCH_ASSOC);


?>