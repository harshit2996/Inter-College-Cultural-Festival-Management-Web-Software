<?php
session_start();

if(isset($_SESSION['usr_id'])) {
	session_destroy();
	
	$_SESSION['login']=false;
	unset($_SESSION['usr_id']);
	unset($_SESSION['usr_name']);
	//header("Location: index.php");
} else {
	//header("Location: index.php");
}
header("Location:index.php");
?>