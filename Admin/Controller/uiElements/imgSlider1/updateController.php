<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
if(count($_POST) == 0){
    echo "ERROR";
    header("Location: ../../View/Error/error.php");
}else{
    // $imgSlider1 =$_FILES["imgSlider1"]["name"];
    // $imgSlider1tmp = $_FILES["imgSlider1"]["tmp_name"];
    // $ext = pathinfo($imgSlider1)["extension"];

    $imgTitleOne = $_POST["imgTitleOne"];
    $imgDscOne = $_POST['imgDscOne'];

    // echo $imgSlider1;
    // if(move_uploaded_file($imgSlider1tmp,"../../../storage/banner/".$imgSlider1)){

    // }

  


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
