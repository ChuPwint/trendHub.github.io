<?php

$hostname = "trendhub-do-user-14558665-0.b.db.ondigitalocean.com";
$port = 25060;
$dbname = "trendhub_db";
$username = "doadmin";
$password = "AVNS_HBDFdjOSHAfqV3IwBDO";


//Initial Connection
$pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$dbname", $username,$password);

//Error Exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>