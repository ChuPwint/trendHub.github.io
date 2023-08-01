<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
    include "../../Model/model.php";
    $id =  $_SESSION["currentLoginUser"];
    
  
    $sql = $pdo->prepare("SELECT * FROM m_customers WHERE id = :id;");
    $sql->bindValue(":id", $id);
    $sql->execute();

    // $_SESSION["edit"] = $sql->fetchAll(PDO::FETCH_ASSOC);

    $edit = $sql->fetchAll(PDO::FETCH_ASSOC);
  

?>
