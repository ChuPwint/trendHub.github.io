<?php
session_start();
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}
$searchInput =$_SESSION["searchInput"];
$rowLimit = 5;
$pageStart = ($page - 1) * $rowLimit;
$pageStart = ($pageStart < 0) ? 1 : $pageStart;

include "../Model/model.php";
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
$totalProducts = count($productList);
$pageTotal = ceil(count($productList) / $rowLimit);

$_SESSION["homeSearchResult"] = $result;
$_SESSION["homeSearchPageTotal"] = $pageTotal;
$_SESSION["homeSearchCurrentPage"] = $page;
$_SESSION["totalProducts"] = $totalProducts;

header("Location: ../View/Product/products.php");
?>