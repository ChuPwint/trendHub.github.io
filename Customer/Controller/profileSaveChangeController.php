<?php
// profile_controller.php

if(!isset($_POST["saveChange"])){
    header("Location: ../View/Error/error.php");
}else{
   
    include "../Model/model.php";
    $username = $_POST["username"];
  
    $phone = $_POST["phone"];
    $regionID = $_POST["region"];
    $townshipID = $_POST["township"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    $sql = $pdo->prepare(
        "SELECT id FROM m_customers WHERE c_email = :email"
    );

    $sql->bindValue(":email", $email);
    $sql->execute();
    $searchId = $sql->fetchAll(PDO::FETCH_ASSOC);
    $userID = $searchId[0]["id"];

    $sql = $pdo->prepare("UPDATE m_customers SET
     c_name = :name, 
     c_phone= :phone,
      region_id= :region, 
      township_id= :township, 
      c_email= :email, 
      c_address= :address 
      WHERE id= :id");
   

   $sql->bindValue(":name",$username);
   $sql->bindValue(":phone",$phone);
   $sql->bindValue(":region",$regionID);
   $sql->bindValue(":township",$townshipID);
   $sql->bindValue(":email",$email);
   $sql->bindValue(":address",$address);
   $sql->bindValue(":id",$userID);
   
 
   $sql->execute();
   include "./profileDataShowController.php";
 
 
}
