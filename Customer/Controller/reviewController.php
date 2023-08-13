<?php

session_start();

if (!isset($_POST["submitReview"])) {
    header("Location: ../View/Error/error.php");
} else {
    include "../Model/model.php";
    $rating = $_POST["rating"];
    $title = $_POST["reviewTitle"];
    $text = $_POST["reviewText"];
    $productID = $_POST["reviewProductID"];
    $customerID = $_POST["reviewCustomerID"];

    // reviewed or not
    $sql = $pdo->prepare(
        "SELECT * FROM t_review_details
        WHERE customer_id = :customerID
        AND product_id = :productID
        "
    );
    $sql->bindValue("customerID",$customerID);
    $sql->bindValue("productID",$productID);
    $sql->execute();
    $alreadyReviewd = $sql->fetchAll(PDO::FETCH_ASSOC);

    $sql = $pdo->prepare(
        "SELECT id FROM t_orders WHERE customer_id = :id"
    );
    $sql->bindValue(":id", $customerID);
    $sql->execute();
    $searchOrderIDs = $sql->fetchAll(PDO::FETCH_ASSOC);

    if(count($alreadyReviewd) > 0) {
        $_SESSION["alreadyReview"] = "You already reviewed this product!";
        header("Location: ./itemDetailController.php");
    }elseif (count($searchOrderIDs) == 0) {
        // have not ordered this product
        $_SESSION["cannotReview"] = "You haven't not buy this product yet!";
        header("Location: ./itemDetailController.php");
    } else {
        $productIDFound = false;
        foreach ($searchOrderIDs as $orderID) {
            $sql = $pdo->prepare(
                "SELECT product_id FROM t_order_details WHERE order_id = :id"
            );
            $sql->bindValue(":id", $orderID["id"]);
            $sql->execute();
            $productIDsResult = $sql->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($productIDsResult as $productIDResult) {
                if ($productIDResult["product_id"] == $productID) {
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
                    $productIDFound = true;
                    break;
                }

            }

            if ($productIDFound) {
                break;
            }           
        }

        if (!$productIDFound) {
            // Have ordered, but not this product
            $_SESSION["cannotReview"] = "You haven't not bought this product yet!";
            header("Location: ./itemDetailController.php");
        } else {
            // Successfully inserted review, redirect to item detail page
            $_SESSION["success"] = "Success";
            header("Location: ./itemDetailController.php");
        }
    }


}
