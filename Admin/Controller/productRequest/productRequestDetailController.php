<?php
session_start();
if (!isset($_POST["allReq"])) {
    header("Location: ../../View/Error/error.php");
} else {
    $id = $_POST["reqId"];
    $_SESSION["bname"] = $_POST["bname"];
    $_SESSION["mname"] = $_POST["mname"];
    $_SESSION["email"] = $_POST["email"];

    include "../../Model/model.php";
    $sql = $pdo->prepare(
        "SELECT t_product_submit_details.*, m_categories.category_name
        FROM t_product_submit_details
        JOIN m_categories
        ON t_product_submit_details.category_id = m_categories.id
        WHERE product_submit_id = :id"
    );
    
    $sql->bindValue(":id", $id);
    $sql->execute();
    $reqDetails = $sql->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["reqDetails"] = $reqDetails;

    $sql = $pdo->prepare(
        "SELECT COUNT(t_product_submit_details.id) AS total
        FROM t_product_submit_details
        WHERE product_submit_id = :id"
    );
    $sql->bindValue(":id", $id);
    $sql->execute();
    $eachMerchantTotalReq = $sql->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["total"] = $eachMerchantTotalReq;

    $sql = $pdo->prepare(
        "SELECT * FROM m_categories WHERE del_flg = 0"
    );
    $sql->execute();
    $_SESSION["allCategories"] = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    header("Location: ../../View/productRequest/productReqDetail.php");
}
