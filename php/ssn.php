<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CPSC332 - Project 1 Professors</title>
	<link href="project2.css" rel="stylesheet" type="text/css">
	</head>

<?php	
$SSN = $_POST['SSN'];
$dbServername = "mariadb";
$dbUsername = "cs332z7";
$dbPassword = "rih9eiHe";
$dbName = "cs332z7";

// set connection
$con= new mysqli($dbServername,$dbUsername,$dbPassword, $dbName);

//check connection
if($con->connect_error){
die("Could not connect: " . $con->connect_error);
}
?>
	
	
<?php
$sql = "SELECT CTITLE, CLASSROOM, MEETING_DAYS, BEGINNING_TIME, ENDING_TIME
		FROM  COURSE C, SECTION S
		WHERE S.PSSN = $SSN AND S.CNO = C.CNO";
$result = $con->query($sql);
?>
<body>
	<div class="container">
	  <header> <a href="http://ecs.fullerton.edu/~cs332z7">
    <h4 class="logo">Home</h4>
	  </a>
  </header>
	<section class="title" id="title">
    <h2 class="title_header">Result<font color="#717070">Output</font></h2>
    <p class="tagline">professors</p>
  </section>
	<section class="input" id="input">
	  
    <div class="input_data1">
		<div class="container2">
		
<?php
if ($result->num_rows > 0) {
	echo "<table calss=\"table\">"; // start a table tag in the HTML

	echo "<thead>
	<tr><th scope=\"col\">CTITLE</th>	<th scope=\"col\">CLASSROOM</th>	
			  <th scope=\"col\">MEETING_DAYS</th>	<th scope=\"col\">TIME</th></tr>
		</thead>";
	 while($row = $result->fetch_assoc()) {
        echo "<tbody>
		<tr><td>" . $row["CTITLE"] . "</td>" 
			."<td>" . $row["CLASSROOM"] . "</td>"
			."<td>" . $row["MEETING_DAYS"] . "</td>"
			."<td>" . $row["BEGINNING_TIME"] 
			. ' - '. $row["ENDING_TIME"] .  "</td></tr>
			</tbody>";	
    }
	echo "</table>"; //Close the table in HTML  
} else {
    echo "0 results";
}
$con->close();
?>
			
		</div>
	</div>
	  
  	</section>
		 <!-- Copyrights Section -->
  <div class="copyright">
    <p> CPSC 332 Database</p>
    <p>yifei feng - lambert liu - shijie feng </p>
  </div>
		</div>
	</body>
</html>


