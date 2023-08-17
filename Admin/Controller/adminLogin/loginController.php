<?php



session_start();
if(count($_POST) == 0){
if (isset($_POST["login"])) {

    $name = $_POST['username'];
    $passwords = $_POST['password'];
    include "../../Model/model.php";

    $sql = $pdo->prepare(
        "SELECT * FROM m_admin WHERE name=:name"
    );

    $sql->bindValue(":name", $name);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) == 0) {

        $_SESSION["loginError"] = "User not found!";
        header("Location: ../../View/testindex.php");
    } else {
        if (password_verify($passwords, $result[0]["password"])) {
            header("Location: ../../../Admin/View/Analytics/analytics.php");
        
         
        } else {
            $_SESSION["loginError"] = "Email or Password incorrect";
            header("Location: ../../View/testindex.php");
            
        }
    }
} else {

    header("Location: ../../../View/Error/error.php");

}


}



