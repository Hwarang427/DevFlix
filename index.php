<?php
// login form 
require_once("Includes/config.php");

if(!isset($_SESSION["userLoggedIn"])){
    header("Location:register.php");

}
?>


