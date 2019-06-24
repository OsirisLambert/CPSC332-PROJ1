<?php

	
$CNO = $_POST['CNO'];
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

$sql = "SELECT *, COUNT(*)
		FROM  ENROLLMENT E, SECTION S
		WHERE S.CNO = $CNO AND S.CNO = E.CNO AND S.SNO = E.SNO ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
	echo "<table border = 1>"; // start a table tag in the HTML
	echo "<tr><td>SNO</td>	<td>CLASSROOM</td>	
			  <td>MEETING_DAYS</td>	<td>TIME</td> <td># OF STUDENT ENROLLED</td></tr>";
	 while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["SNO"] . "</td>" 
			."<td>" . $row["CLASSROOM"] . "</td>"
			."<td>" . $row["MEETING_DAYS"] . "</td>"
			."<td>" . $row["BEGINNING_TIME"] 
			. ' - '. $row["ENDING_TIME"] .  "</td>"
			."<td>" . $row["COUNT(*)"] . "</td></tr>";	
    }
	echo "</table>"; //Close the table in HTML  
} else {
    echo "0 results";
}
$con->close();
?>
