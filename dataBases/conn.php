<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'SkipLink');
error_reporting(0);
$conn = mysqli_connect(HOST,USER,PASS,DBNAME);
if($conn)
{
	 // echo "Connected";
}
else
{
	 // echo "Not Conection  " . mysqli_connect_error();
}
?>