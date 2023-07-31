<?php


// if (!isset($_POST["login"])) {
//     header("Location: ../View/Error/error.php");
// } else {
include "../../Model/model.php";
// $id = $_SESSION["currentUserID"];
$id = 18;

$sql = $pdo->prepare("SELECT * FROM t_notify_to_customers WHERE customer_id = :id ORDER BY create_date DESC;");
$sql->bindValue(":id", $id);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

session_start();
$_SESSION["notificationMessages"] = $result;

header("Location: ../View/Profile/user_profile.php");

?>



