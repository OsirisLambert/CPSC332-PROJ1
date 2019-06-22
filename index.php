<?php

$dbServername="localhost";
$dbUsername="cs332z7";
$dbPassword="rih9eiHe";

$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword);
if(!$conn){
	die('Could not connect:'.mysql_error());
}
echo'Connected successfully';
mysql_close($conn);
?>