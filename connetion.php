<?php
    $serverName = "localhost";
    $userName = "root";
    $userPassword = "";
    $dbName = "education_service";
    $conn = new PDO("mysql:host=$serverName;dbname=$dbName",$userName,$userPassword);
?>