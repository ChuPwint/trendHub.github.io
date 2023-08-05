<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
if(count($_POST) == 0){
    echo "ERROR";
    header("Location: ../../View/Error/error.php");
}else{

   $imgTitleOne = $_POST["imgTitleOne"];
   $imgDscOne = $_POST['imgDscOne'];
   
  


   include "../../../Model/model.php";



   $sql = $pdo->prepare(
    " UPDATE ui_setting SET 
    image_silder_title1 = :imgTitleOne,
    image_silder_dsc1  = :imgDscOne


    WHERE id = 0;
    "
   );

   $sql->bindValue(":imgTitleOne",$imgTitleOne);
   $sql->bindValue(":imgDscOne",$imgDscOne);




   $sql->execute();
 
   header("Location: ../../../View/uiElements/ui.php");



}



