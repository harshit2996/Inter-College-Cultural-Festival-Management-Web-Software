<?php
session_start();
include_once 'dbconnect.php';
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

				<a class="" href="login_index.php"><img  src="myPic.jpg" width="auto-scale" height="85" /></a> 
			</div align="centre">
		
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>

				<li><a class="navbar-text navbar-toggle" href="schedule.pdf"><font size="5" >Download</font></a></li>
				<li><a class="navbar-text navbar-toggle"><font size="5" >Signed in as <?php echo $_SESSION['usr_name']; ?></font></a></li>
				<li><a class="navbar-text navbar-toggle" href="logout.php"><font size="5" >Log Out</font></a></li>

				<?php } else { ?>
				
				<li><a class="navbar-text navbar-toggle" href="login1.php"  ><font size="5" >Login</font></a></li>
				<li><a class="navbar-text navbar-toggle" href="register.php"><font size="5" >Register</font></a></li>
				
				<?php } ?>
			</ul>
		
	</div>
</nav>
<body   align="center"  ><img src="myPic.jpg" style='position:relative; top,right,left,bottom:0px;border:0;'  />
<div id= "print">
<?php
	$id=$_SESSION['usr_id'];
	$sqld = "SELECT * FROM users WHERE id=$id";
	$resultd = $con->query($sqld);
	$rowd = $resultd->fetch_assoc();
if(($rowd['type'])=="Participant")
{
	echo "IGNUS ID - IG2017".$_SESSION['usr_id']."<br>";
	echo "Participant name - ". $_SESSION['usr_name']."<br>";
}
else 
{
	echo "ADMINISTRATOR "."<br>";
	echo "Participant name - ". $_SESSION['usr_name']."<br>";
}
$sqls = "SELECT * FROM singing";
$results = $con->query($sqls);
while($rows = $results->fetch_assoc())
	{
  	if($rows['participant_id']==$id)
echo "Registered for Singing"."<br>";
	}

$sqla = "SELECT * FROM dance";
$resulta = $con->query($sqla);
while($rowa = $resulta->fetch_assoc())
	{
  	if($rowa['participant_id']==$id)
echo "Registered for Dance"."<br>";
	}


$sqlc = "SELECT * FROM clash_of_bands";
$resultc = $con->query($sqlc);
while($rowc = $resultc->fetch_assoc())
	{
  	if($rowc['participant_id']==$id)
echo "Registered for Clash of Bands"."<br>";
	}

?>
	
<br>
<br>
<br>
<body   align="center"  ><img src="schedule.jpg" style='position:relative; top,right,left,bottom:0px;border:0;'  />

</div>
<div>	
	<br>	
	<br>	
	<input id="printpagebutton" type="button" value="Print Your IGNUS ID Card" onclick="printpage()"/>
	<br>
	<br>
	<br>
	
	
</div>

</body>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
    }
</script>

</body>
</html>

