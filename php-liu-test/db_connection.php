<? php 

function OpenCon(){
	$dbhost="Mariadb";
	$dbuser="cs332z7";
	$dbpass="rih9eiHe";
	$db = "cs332z7";
	
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: $s\n". $conn -> error);
	
	return $conn;
}

function ColseCon(){
	$conn -> colse();
}

?>