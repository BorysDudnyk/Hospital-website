<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "test"; //hospital_website

//create connection
try{
    $con = new PDO("mysql:host=$serverName;dbname=$dbname", $userName, $password);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Success";
}
catch (PDOException $e){
    echo "Error in connection" . $e->getMessage();
}

?> 