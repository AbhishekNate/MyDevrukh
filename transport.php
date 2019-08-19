<?php 
 include_once("DBConnection.php"); 
 
 session_start();
 ?>
<html>
	<head>
		<title>Transport</title>
		<link rel="stylesheet" type="text/css" href="../dist/css/insert.css"/>
		
	</head>
	<body>
	<form method="post" action="insert.php" >
		Name <input type ="text" id="t1" name="tb" placeholder="name">&emsp; &emsp; 
		address <input type="text" id="t2" name="location" placeholder="location">&emsp; &emsp; 
		contact <input type="number" id="n1" name="contact" placeholder="contact">&emsp; &emsp; 
		Category <select name="type" >
		  <option value="rikshaw">Rikshaw</option>
		  <option value="privatebus">Private Bus</option>
		</select>
		<input type="submit" id="b1" name="submit" value="submit">
	</form>
	</body>
</html>