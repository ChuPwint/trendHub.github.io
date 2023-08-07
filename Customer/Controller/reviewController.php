<?php

if(!isset($_POST["submitReview"])){
    header("Location: ../View/Error/error.php");
}else{
    include "../Model/model.php";
    $rating = $_POST["rating"];
    $title = $_POST["reviewTitle"];
    $text = $_POST["reviewText"];
    $productID = $_POST["reviewProductID"];
    $customerID = $_POST["reviewCustomerID"];

    $sql = $pdo->prepare(
        "INSERT INTO t_review_details
        (
            product_id,
            customer_id,
            review_title,
            review_text,
            rating,
            create_date
        )
        VALUES
        (
            :productID,
            :customerID,
            :reviewTitle,
            :reviewText,
            :rating,
            :reviewDate
        )
        "
    );
    $sql->bindValue(":productID", $productID);
    $sql->bindValue(":customerID", $customerID);
    $sql->bindValue(":reviewTitle", $title);
    $sql->bindValue(":reviewText", $text);
    $sql->bindValue(":rating", $rating);
    $sql->bindValue(":reviewDate", date("Y-m-d"));

    $sql->execute();
}





?>