
<?php

include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_customers ;"
);

$sql->execute(); //real sql run

$userData = $sql->fetchAll(PDO::FETCH_ASSOC);

//db connection
print_r($userData);


?>