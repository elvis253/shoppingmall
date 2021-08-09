<?php
//define('DB_SERVER','localhost');
//define('DB_USER','root');
//define('DB_NAME', 'shoppingmall');
$server='localhost';
$user='root';
$pass="";
$database='shoppingmall';
$con = new mysqli($server,$user,$pass,$database);
// Check connection
if ($con->connect_error)
{
 die("Failed to connect to MySQL: ".$con->connect_error);
}
?>
