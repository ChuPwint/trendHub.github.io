<?php
session_start();

if (!isset($_POST["addProduct"])) {
    header("Location: ../../../../View/Error/error.php");
} else {
    // $merchantId =  $_SESSION["currentLoginUser"];
    $merchantId  = 10;
    $category = $_POST["category"];
    $productName = $_POST["productName"];
    $brand = (isset($_POST["brand"])) ? $_POST["brand"] : null;
    $sellPrice = $_POST["sellPrice"];
    $buyPrice = $_POST["buyPrice"];
    $qty = $_POST["quantity"];
    $detail = $_POST["productDetail"];
    $description = $_POST["productDescription"];
    // get photo
    $image = $_FILES["productImg"]["name"];
    $imageTmp = $_FILES["productImg"]["tmp_name"];


    include "../../Model/model.php";

    if (move_uploaded_file($imageTmp, "../../../Storage/marchentProductSubmit/" . $image)) {


        // Check if a submission from the same merchant already exists
        $sqlCheckSubmission = $pdo->prepare("SELECT * FROM t_product_submits WHERE merchant_id = :merId");
        $sqlCheckSubmission->bindValue(":merId", $merchantId);
        $sqlCheckSubmission->execute();
        $existingSubmission = $sqlCheckSubmission->fetch(PDO::FETCH_ASSOC);

        if ($existingSubmission) {

            $productSubmitId = $existingSubmission['id'];
        } else {

            $sqlInsertSubmission = $pdo->prepare("INSERT INTO t_product_submits (merchant_id) VALUES (:merId)");
            $sqlInsertSubmission->bindValue(":merId", $merchantId);
            $sqlInsertSubmission->execute();


            $productSubmitId = $pdo->lastInsertId();
        }

        $sql = $pdo->prepare(
            "INSERT INTO t_product_submit_details
    (
        product_submit_id,
        p_name,
        category_id,
        brand_name,
        p_path,
        p_stock,
        p_description,
        p_detail,
        buy_price,
        sell_price,
        approved,
        create_date
    )
    VALUES
    (
        :pId,
        :pName,
        :pCategory,
        :pBrand,
        :pPath,
        :pStock,
        :pDescription,
        :pDetail,
        :buyPrice,
        :sellPrice,
        :approve,
        :createDate
    )"
        );


        $sql->bindValue(":pId", $productSubmitId);
        $sql->bindValue(":pName", $productName);
        $sql->bindValue(":pCategory", $category);
        $sql->bindValue(":pBrand", $brand);
        $sql->bindValue(":pPath", "/Storage/marchentProductSubmit/" . $image);
        $sql->bindValue(":pStock", $qty);
        $sql->bindValue(":pDescription", $description);
        $sql->bindValue(":pDetail", $detail);
        $sql->bindValue(":buyPrice", $buyPrice);
        $sql->bindValue(":sellPrice", $sellPrice);
        $sql->bindValue(":approve", 0);
        $sql->bindValue(":createDate", date("Y-m-d"));

        $sql->execute();
        header("Location: ./merchantProductController.php");
      
    } else {
        header("Location: ../../View/Error/error.php");
    }
}
