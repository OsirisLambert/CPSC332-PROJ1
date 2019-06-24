<html>
<head>
<body>
<?php
$dbServername = "localhost";
$dbUsername = "cpsc332";
$dbPassword = "cpsc332";
$dbName = "liu";

// set connection
$con= new mysqli($dbServername,$dbUsername,$dbPassword, $dbName);

//check connection
if($con->connect_error){
die("Could not connect: " . $con->connect_error);
}

$sql = "SELECT * FROM STUDENT";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "CWID: " . $row["CWID"]. " - Name: " . $row["FIRST_NAME"]. " " . $row["LAST_NAME"]
			. "Address: ". $row["ADDRESS"]. "DNO: ". $row["DNO"]
			. "STELEPHONE_NO: ". $row["STELEPHONE_NO"] . "<br>";
    }
} else {
    echo "0 results";
}
$con->close();
?>
</body>
</head>
</html>