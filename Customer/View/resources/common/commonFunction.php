<?php


// Token function 
function getToken($length) {
    $character = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $randomString = "";

    for ($i=0; $i < $length; $i++) { 
        $index = rand(0, strlen($character) - 1);
        $randomString .= $character[$index];
    }

    return $randomString;
}







?>