<?php 
 define('DB_SERVER', 'localhost'); //database server url and port
 define('DB_USERNAME', 'root');  //database server username
 define('DB_PASSWORD', ''); //database server password
 define('DB_DATABASE', 'mydevrukh'); //where profile is the database 
 
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); 
 try
{
$dbh = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_DATABASE,DB_USERNAME, DB_PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
 
?>