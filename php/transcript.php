<?php

$CWID = $_POST['CWID'];
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

$sql = "SELECT *
		FROM   COURSE C, ENROLLMENT E
		WHERE E.CWID = $CWID AND E.CNO = C.CNO";
$result = $con->query($sql);

if ($result->num_rows > 0) {
	echo "CWID: " . $CWID ."<br>";
		
	echo "<table border = 1>"; // start a table tag in the HTML
	echo "<tr><td>CNO</td>	<td>CTITLE</td>	<td>GRADE</td></tr>";
	 while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["CNO"] . "</td>" 
			."<td>" . $row["CTITLE"] . "</td>"
			."<td>" . $row["GRADE"] . "</td></tr>";	
    }
	echo "</table>"; //Close the table in HTML  
} else {
    echo "0 results";
}
$con->close();
?>
