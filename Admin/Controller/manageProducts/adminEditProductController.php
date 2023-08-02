<?php

if(!isset($_POST["saveEdit"])){
    header("Location: ../../View/Error/error.php");
}else{
    $id = $_POST["editID"];
    $sellPrice = $_POST["editSellPrice"];
    $buyPrice = $_POST["editBuyPrice"];
    $stock = $_POST["editQuantity"];
    $detail = $_POST["editProductDetail"];
    $description = $_POST["editProductDescription"];
    $image = $_FILES["editProductImg"]["name"];
    $imageTmp = $_FILES["editProductImg"]["tmp_name"];

    // echo $id;
    // echo "<br/>";
    // echo $sellPrice;
    // echo "<br/>";
    // echo $buyPrice;
    // echo "<br/>";
    // echo $stock;
    // echo "<br/>";
    // echo $detail;
    // echo "<br/>";
    // echo $description;
    // echo "<br/>";
    // echo $image;
    // echo "<br/>";
    // echo $imageTmp;

    include "../../Model/model.php";

    if(move_uploaded_file($imageTmp,"../../../Storage/adminProducts/".$image)){
        
        $sql = $pdo->prepare(
            "UPDATE m_products SET
            sell_price = :sellPrice,
            buy_price = :buyPrice,
            p_stock = :stock,
            p_detail = :detail,
            p_description = :description,
            p_path = :pPath,
            update_date = :updateDate
            WHERE id = :id
            "
        );

        $sql->bindValue(":sellPrice", $sellPrice);
        $sql->bindValue(":buyPrice", $buyPrice);
        $sql->bindValue(":stock", $stock);
        $sql->bindValue(":detail", $detail);
        $sql->bindValue(":description", $description);
        $sql->bindValue(":pPath", "/Storage/adminProducts/".$image);
        $sql->bindValue(":updateDate", date("Y-m-d"));
        $sql->bindValue(":id", $id);
        $sql->execute();
        header("Location: ./adminProductController.php");

    } else {
        header("Location: ../../View/Error/error.php");
    }
}




?>