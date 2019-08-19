<?php
include_once("DBconnection.php");
session_start();

//print_r($_POST);
 
// Escape user inputs for security
$name = $_POST['name'];
$location = $_POST['location'];
$contact = $_POST['contact'];
$type = $_POST['type'];
 
// Attempt insert query execution
$sql = "INSERT INTO transport (type, name, contact, route) VALUES ('rikshaw', '$name', $contact, '$location')";
//echo $sql;
if(mysqli_query($db, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Record Inserted Successfully");';
	echo "document.location='admin.php'; </script>";
	
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 
// Close connection
mysqli_close($db);
?>