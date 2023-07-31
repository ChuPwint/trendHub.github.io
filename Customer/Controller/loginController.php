<?php

session_start();

if(!isset($_POST["login"])){
    header("Location: ../View/Error/error.php");
} else {
    $loginEmail = $_POST["email"];
    $loginPassword = $_POST["password"];

    include "../Model/model.php";

    $sql = $pdo->prepare(
        "SELECT * FROM m_customers WHERE c_email = :email"
    );
    $sql->bindValue(":email", $loginEmail);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    $passwordCorrect = password_verify($loginPassword, $result[0]["c_password"]);

    if(count($result) == 0){
        $_SESSION["wrongEmail"] = "Wrong email!";
        header("Location: ../View/Login/login.php");
    }elseif(!$passwordCorrect){
        $_SESSION["wrongPassword"] = "Password Incorrect!";
        header("Location: ../View/Login/login.php");
    }else{
        $_SESSION["currentLoginUser"] = $result[0]["id"];
        header("Location: ../View/test.php");
    }
    
}
