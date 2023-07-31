<?php
session_start();

    include "../../Model/model.php";
    // $id = $_SESSION["currentUserID"];
    $id = 18;
  
    $sql = $pdo->prepare("SELECT * FROM m_customers WHERE id = :id;");
    $sql->bindValue(":id", $id);
    $sql->execute();

    $_SESSION["edit"] = $sql->fetchAll(PDO::FETCH_ASSOC);
    header("Location: ../View/Profile/user_profile.php");
  
  

?>
