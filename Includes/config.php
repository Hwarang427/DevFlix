<?php
ob_start(); //Turns on Output Buffering
session_start();

date_default_timezone_set("America/Denver");

try {
    $con = new PDO("mysql:dbname=DevFlix;host=localhost","root","");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOException $e){
    exit("Connection Failed: " . $e->getMessage());

}

?>