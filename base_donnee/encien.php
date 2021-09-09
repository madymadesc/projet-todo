<?php 
$sName = "localhost";*
$uName ="root";
$pass = "";

try {
    $conn = new PDO("mysql:host=$db_name",
    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERMODE_EXCEPTION);
} catch(PdoException $e){
    echo "connection failed : ".$e->getMessage();
}
