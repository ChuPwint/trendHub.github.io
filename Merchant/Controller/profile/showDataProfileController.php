<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
    include "../../Model/model.php";
    
    $merchantId =  $_SESSION["currentLoginUser"];
  
    $sql = $pdo->prepare("SELECT * FROM m_marchents WHERE id = :id;");
    $sql->bindValue(":id", $merchantId );
    $sql->execute();

    // $_SESSION["edit"] = $sql->fetchAll(PDO::FETCH_ASSOC);

    $merchant = $sql->fetchAll(PDO::FETCH_ASSOC);
    // print_r($merchant);
  

?>