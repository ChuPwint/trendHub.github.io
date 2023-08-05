<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
if (count($_POST) == 0) {
    echo "ERROR";
    header("Location: ../../View/Error/error.php");
} else {

    $imgTitleThree = $_POST["imgTitleThree"];
    $imgDscThree = $_POST['imgDscThree'];




    include "../../../Model/model.php";



    $sql = $pdo->prepare(
        " UPDATE ui_setting SET 
    image_silder_title3 = :imgTitleThree,
    image_silder_dsc3  = :imgDscThree


    WHERE id = 0;
    "
    );

    $sql->bindValue(":imgTitleThree", $imgTitleThree);
    $sql->bindValue(":imgDscThree", $imgDscThree);




    $sql->execute();

    header("Location: ../../../View/uiElements/ui.php");
}
