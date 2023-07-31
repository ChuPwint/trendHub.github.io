<?php
session_start();

if (!isset($_POST["login"])) {
    header("Location: ../View/Error/error.php");
} else {
    include "../Model/model.php";
    $email = $_POST["email"];
    echo $username;
    $sql = $pdo->prepare("SELECT * FROM m_customers WHERE c_email = :email;");
    $sql->bindValue(":email", $email);
    $sql->execute();

    $_SESSION["edit"] = $sql->fetchAll(PDO::FETCH_ASSOC);
    header("Location: ../View/Profile/user_profile.php");
    print_r( $_SESSION["edit"]);
}
?>