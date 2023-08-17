<?php
if (!isset($_POST["searchHome"])) {
    header("Location: ../../View/Error/error.php");
} else {
    $searchInput = $_POST["searchHome"];
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    } else {
        $page = 1;
    }

    $rowLimit = 5;
    $pageStart = ($page - 1) * $rowLimit;
    $pageStart = ($pageStart < 0) ? 1 : $pageStart;

    include "../../Model/model.php";
    $sql = $pdo->prepare(
        "SELECT p.*
        FROM m_products p
        WHERE p.p_name LIKE :search
        ORDER BY p.p_name
        LIMIT $pageStart, $rowLimit
        "
    );
    $sql->bindValue(":search", '%' . $searchInput . '%');
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    $sql = $pdo->prepare(
        "SELECT p.*
        FROM m_products p
        WHERE p.p_name LIKE :search
        ORDER BY p.p_name
        "
    );
    $sql->bindValue(":search", '%' . $searchInput . '%');
    $sql->execute();
    $productList = $sql->fetchAll(PDO::FETCH_ASSOC);
    $pageTotal = ceil(count($productList) / $rowLimit);

    $_SESSION["categoryResult"] = $result;
    $_SESSION["searchPageTotal"] = $pageTotal;
    $_SESSION["currentSearchPage"] = $page;
    $sql = $pdo->prepare(
        "SELECT p
    FROM t_orders
    JOIN t_payment_method ON t_orders.payment_method_id = t_payment_method.id
    JOIN m_customers ON t_orders.customer_id = m_customers.id
    WHERE t_orders.merchant_id = :id AND c_name LIKE :search
    ORDER BY order_status, t_orders.id;
    "
    );

    $sql->bindValue(":id", 1);
    $sql->bindValue(":search", '%' . $searchName . '%');
    $sql->execute();
    $adminOrderList = $sql->fetchAll(PDO::FETCH_ASSOC);
}
