<?php
$CNO = $_POST['CNO'];
$SNO = $_POST['SNO'];
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

$sql = "SELECT COUNT(*), GRADE
		FROM  ENROLLMENT E
		WHERE E.CNO = $CNO AND E.SNO = $SNO
		GROUP BY GRADE";
$result = $con->query($sql);

if ($result->num_rows > 0) {
	echo "Course #: " . $CNO ."<br>" 
		."Section #: " . $SNO . "<br>";
	echo "<table border = 1>"; // start a table tag in the HTML
	echo "<tr><td>GRADE</td>	<td># OF STUDENTS</td></tr>";
	 while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["GRADE"] . "</td><td>" . $row["COUNT(*)"] . "</td></tr>";	
    }
	echo "</table>"; //Close the table in HTML  
} else {
    echo "0 results";
}
$con->close();
?>
