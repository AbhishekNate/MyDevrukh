<?php
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["user_name"]);
$url = "index.php";
if(isset($_GET["session_expired"])) {
	$url .= "?session_expired=" . $_GET["session_expired"];
}

session_unset(); 
// destroy the session 
session_destroy();
header("Location:$url");
?>