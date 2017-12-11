<?php
session_start();
include_once 'dbconnect.php';

$eventsql=mysqli_connect("localhost", "root", "", "testdb") or die("Error " . mysqli_error($con));
if($_SESSION['login']==true)
{
	//$eventname=$email = mysqli_real_escape_string($con, $_POST['event_name']);
	//echo $eventname;
	$sqls = "SELECT * FROM singing";
	$results=$con->query($sqls);
	$rows=$results->fetch_assoc();
	
	//$sqld = "SELECT * FROM dance";
	//$resultd=$con->query($sqld);
	//$rowd=$resultd->fetch_assoc();
	
	
	
	
		
}
else{
	header("Location:login1.php");
}


?>



<!DOCTYPE html>
<html>
<head>
	<title>IGNUS|HOME</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default navbar-collapse" role="navigation" >
	<div class="container-fluid">
		<div class="navbar-header" >
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

				<a class="" href="index.php"><img  src="myPic.jpg" width="auto-scale" height="85" /></a> 
			</div align="centre">
		
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><a class="navbar-text navbar-toggle"><font size="5" >Signed in as <?php echo $_SESSION['usr_name']; ?></font></a></li>
				<li><a class="navbar-text navbar-toggle active" href="logout.php"><font size="5" >Log Out</font></a></li>
				<?php } else { ?>
				
				<li><a class="navbar-text navbar-toggle" href="login1.php"  ><font size="5" >Login</font></a></li>
				<li><a class="navbar-text navbar-toggle" href="register.php"><font size="5" >Register</font></a></li>
				
				<?php } ?>
			</ul>
		
	</div>
</nav>


</body>


<div>


</div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>


<?php

echo "<br><br>singing<br>";
$sqls = "SELECT * FROM singing";
$results = $con->query($sqls);

if ($results->num_rows>0) {
     // output data of each row
     while($rows = $results->fetch_assoc()) {
         echo $rows["serial number"]. "  ". $rows["participant_name"]. " " . $rows["participant_id"] . "<br>";
     }
} else {
     echo "0 results";
}

//$con->close();


echo "<br><br>dance<br>";

$sqld = "SELECT * FROM dance";
$resultd = $con->query($sqld);

if ($resultd->num_rows>0) {
     // output data of each row
     while($rowd = $resultd->fetch_assoc()) {
         echo $rowd["serial_number"]. "  ". $rowd["participant_name"]. " " . $rowd["participant_id"] . "<br>";
     }
} else {
     echo "0 results";
}

echo "<br><br>clash of bands<br>";

$sqld = "SELECT * FROM clash_of_bands";
$resultd = $con->query($sqld);

if ($resultd->num_rows>0) {
     // output data of each row
     while($rowd = $resultd->fetch_assoc()) {
         echo $rowd["serial no."]. "  ". $rowd["participant_name"]. " " . $rowd["participant_id"] . "<br>";
     }
} else {
     echo "0 results";
}

$con->close();



?>

