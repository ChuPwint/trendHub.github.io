<?php
// profile_controller.php
session_start();
if(!isset($_POST["saveChange"])){
    header("Location: ../View/Error/error.php");
}else{
   
    include "../Model/model.php";
    $id =  $_SESSION["currentLoginUser"];
    $username = $_POST["username"];
  
    $phone = $_POST["phone"];
    $regionID = $_POST["region"];
    $townshipID = $_POST["township"];
    $email = $_POST["email"];
    $address = $_POST["address"];

   
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
   $sql->bindValue(":id",$id);
   
 
   $sql->execute();
   header("Location: ../View/Profile/user_profile.php");
 
 
 
}
