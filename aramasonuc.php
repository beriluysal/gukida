<?php 
 
include("config.php");
ob_start();
session_start();
 
if(!isset($_SESSION["login"])){
    header("Location:giris.php");
}

?>


