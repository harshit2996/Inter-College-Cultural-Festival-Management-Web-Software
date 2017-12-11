<?php
session_start();
include_once 'dbconnect.php';

 
$eventsql=mysqli_connect("localhost", "root", "", "testdb") or die("Error " . mysqli_error($con));
if($_SESSION['login']==true)
{
	
	$id=$_SESSION['usr_id'];
		//echo $row['participant_id']."<br>";
		//echo $id."<br>";
	
	$sqld = "SELECT * FROM dance";
	$resultd = $con->query($sqld);

	if 	($resultd->num_rows>0)
	{
     // output data of each row
     while($rowd = $resultd->fetch_assoc())
		{
         //echo $rowd["participant_id"] . "<br>";
		 if($id==$rowd['participant_id'])
	{
		echo "<script type='text/javascript'>alert('Already Registered!');</script>";
		die("<script>location.href = 'login_index.php'</script>");
	}
	}
	}
else {
     echo "0 results";
}



}
else{
	header("Location:login1.php");
}	
	
	$sql = "SELECT * FROM events WHERE event_name='dance'";
	$result=$con->query($sql);
	$row=$result->fetch_assoc();
	
	
	



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
				<li><a class="navbar-text navbar-toggle" href="logout.php"><font size="5" >Log Out</font></a></li>
				<?php } else { ?>
				
				<li><a class="navbar-text navbar-toggle" href="login1.php"  ><font size="5" >Login</font></a></li>
				<li><a class="navbar-text navbar-toggle" href="register.php"><font size="5" >Register</font></a></li>
				
				<?php } ?>
			</ul>
		
	</div>
</nav>
<div>
<ul>
		
	
<?php

	
	echo "EVENT	".$row['event_name']."<br>";
	echo "EVENT RULES	".$row['event_rules']."<br>";
	echo "MAXIMUM MEMBERS	".$row['members']; 
//$con=mysqli_connect("localhost", "root", "", "testdb") or die("Error " . mysqli_error($con));


	$eventname=$row['event_name'];
	$rule=$row['event_rules'];
	$mem=$row['members'];

		$name=$_SESSION['usr_name'];
		//echo $name;
		$id=$_SESSION['usr_id'];
		// echo $id;
if (isset($_POST['xsub']))
	{

	$qry="INSERT INTO dance(participant_name,participant_id) VALUES('$name','$id')";

	$res=mysqli_query($con, $qry) or die("Error in registering");
	if($res)
	echo "<script type='text/javascript'>alert('Registered successfully');</script>";
		die("<script>location.href = 'login_index.php'</script>");
	}
	//header("Location:login1.php");
?>
 
 <form method="POST">
		
			<input type="submit" name="xsub" value="register">
			
			
		</form>

	