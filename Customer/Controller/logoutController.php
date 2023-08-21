<?php
session_start(); 

$_SESSION['currentLoginUser'] = ""; 


header("Location: ../View/index.php");


exit;
?>