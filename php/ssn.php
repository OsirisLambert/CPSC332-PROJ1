<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CPSC332 - Project 1 Professors</title>
	<link href="project2.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
if ($result->num_rows > 0) {?>
		<table class="table"> 
	<thead>	
      <tr> 
          <th scope="col">Course Title </th> 
          <th scope="col">Classroom </th> 
	  <th scope="col">Meeting_date </th> 
          <th scope="col">Time</th>
      </tr>
	</thead>
	<tbody>
	 <?php while($row = $result->fetch_assoc()) { ?>
				<tr>
				<td><?php echo  $row["CTITLE"] ; ?></td>
			 <td> <?php echo  $row["CLASSROOM"] ;?></td>
			 <td><?php echo $row["MEETING_DAYS"] ;?></td>
			 <td><?php echo $row["BEGINNING_TIME"] 
			 . ' - '. $row["ENDING_TIME"] ;?></td>
			 </tr>
			 <?php } ?>
			</tbody>	
	</table>
<?php }
else {
    echo "0 results";
} ?>
<?php
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


		 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>


