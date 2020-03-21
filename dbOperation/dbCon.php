<?php
$servername = "localhost";
$username = "root";
$password = "";

try{
    $dbCon = new PDO("mysql:host=$servername;dbname=social", $username, $password);
    $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";

}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
    }

session_start();    
?>