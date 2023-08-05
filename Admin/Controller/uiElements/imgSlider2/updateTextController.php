<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
if(count($_POST) == 0){
    echo "ERROR";
    header("Location: ../../View/Error/error.php");
}else{

   $imgTitleTwo = $_POST["imgTitleTwo"];
   $imgDscTwo = $_POST['imgDscTwo'];
   
  


   include "../../../Model/model.php";



   $sql = $pdo->prepare(
    " UPDATE ui_setting SET 
    image_silder_title2 = :imgTitleTwo,
    image_silder_dsc2  = :imgDscTwo


    WHERE id = 0;
    "
   );

   $sql->bindValue(":imgTitleTwo",$imgTitleTwo);
   $sql->bindValue(":imgDscTwo",$imgDscTwo);




   $sql->execute();
 
   header("Location: ../../../View/uiElements/ui.php");



}



