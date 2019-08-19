<?php
include_once("DBconnection.php");
session_start();
$update=false;
$name='';
$location='';
$contact='';
$type='';

//print_r($_POST);
 
// Escape user inputs for security
 if (isset($_POST['store'])){
	$name = $_POST['name'];
	$location = $_POST['location'];
	$contact = $_POST['contact'];
	$type = $_POST['type'];
	
	// Attempt insert query execution
	$sql="INSERT INTO transport (type, name, contact, route) VALUES ('$type', '$name', $contact, '$location')";
	//echo $sql;
	if(mysqli_query($db, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Record Inserted Successfully");';
	echo "history.go(-1); </script>";
	} 
	else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
	}
 
}

 // For Delete Record
 if (isset($_GET['delete'])){
	 $id=$_GET['delete'];
	$sql="DELETE FROM transport WHERE id=$id";
	if(mysqli_query($db, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Record Deleted Successfully");';
	echo "history.go(-1); </script>";
	} 
	else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
	}
 }
 
 // For Update Record
 if (isset($_GET['edit'])){
	 $id=$_GET['edit'];
	 $update=true;
	$sql="SELECT * FROM transport WHERE id=$id";
	$result=mysqli_query($db, $sql);
	if(count($result)==1){
		$row=$result->fetch_array();
		$type=$row["type"];
		$name=$row["name"];
		$location=$row["route"];
		$contact=$row["contact"];
		}
	 
	else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
	}
	}
 
 // Close connection
mysqli_close($db)
 ?> 