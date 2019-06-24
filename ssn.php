<?php

	
$SSN = $_POST['SSN'];
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

$sql = "SELECT CTITLE, CLASSROOM, MEETING_DAYS, BEGINNING_TIME, ENDING_TIME
		FROM  COURSE C, SECTION S
		WHERE S.PSSN = $SSN AND S.CNO = C.CNO";
$result = $con->query($sql);

if ($result->num_rows > 0) {
	echo "<table border = 1>"; // start a table tag in the HTML
	echo "<tr><td>CTITLE</td>	<td>CLASSROOM</td>	
			  <td>MEETING_DAYS</td>	<td>TIME</td></tr>";
	 while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["CTITLE"] . "</td>" 
			."<td>" . $row["CLASSROOM"] . "</td>"
			."<td>" . $row["MEETING_DAYS"] . "</td>"
			."<td>" . $row["BEGINNING_TIME"] 
			. ' - '. $row["ENDING_TIME"] .  "</td></tr>";	
    }
	echo "</table>"; //Close the table in HTML  
} else {
    echo "0 results";
}
$con->close();
?>
