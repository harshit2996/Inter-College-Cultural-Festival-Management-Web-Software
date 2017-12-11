<?php 
$con=mysqli_connect("localhost", "root", "", "testdb") or die("Error " . mysqli_error($con));
session_start();

if($_SESSION['login']!=true)
	header('Location:login1.php');

if (isset($_POST['xsub'])){
	$name=$_POST['xname'];
	$rule=$_POST['xrule'];
	$mem=$_POST['xmem'];

	$qry="INSERT INTO events VALUES('$name','$rule','$mem')";

	$res=mysqli_query($con, $qry) or die("Error in inserting");
	if($res)
	echo "<script type='text/javascript'>alert('Event created successfully');</script>";

}



 ?>

 <html>
 
 <head>
 <title>IGNUS|Event</title>
	
	<link rel="stylesheet" style width="device-width" href="css/bootstrap.min.css"/>
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

				<a class="" href="admin.php"><img  src="myPic.jpg" width="auto-scale" height="85" /></a> 
			</div align="center">
		
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
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>

 
<body>
	
	<div class="container form-group" align="center"><font size="10">Create Event</font> 
		<form method="POST">
			<table class="table table-striped">
				<tr><td>Event Name</td><td><input type="text" class="form-control" required="required" name="xname"></td></tr>
				<tr><td>Rules</td><td><textarea rows="5" class="form-control" required="required" name="xrule"></textarea></td></tr>
				<tr><td>No. of members</td><td><input type="textarea" class="form-control" required="required" name="xmem"></td></tr>
			</table>
			<input type="submit" name="xsub" value="Create">
		</form>
	</div>
</body>
</body>
 </html>