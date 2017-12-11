<?php
//connect to mysql database
$con = mysqli_connect("localhost", "root", "", "testdb") or die("Error " . mysqli_error($con));

$sql="SELECT type FROM users WHERE username = 'harshit2996@gmail.com' and password='password'";
$eventsql="SELECT event_name FROM event WHERE event_name='Event'";


?>