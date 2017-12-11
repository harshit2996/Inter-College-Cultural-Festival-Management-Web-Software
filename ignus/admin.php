<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>IGNUS | Admin</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body background="myPic.jpg" style="background-repeat:no-repeat;background-size:105%;">


     

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
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>

<div>	
	<ul align="center"><button><a href="event.php">Create Event</a></button>
	<button><a href="registrations.php">view regitrations</a></button>
	<button><a href="login_index.php">register for events</a></button></ul>
</div>
</body>
</html>


