<?php 
	include "db_connect.php";
	$username = $_GET['username'];
	$check = $_GET['check'];

	$query = "update users set verified=1 where username='".$username."' and md5(id)='".$check."'";
	$res = mysqli_query($db, $query);
	echo mysqli_affected_rows($db);
	if (mysqli_affected_rows($db) != 1)
		$message = "Sorry. The page you are trying to access does not exist.";
	else
		$message =  "Congratulation. Your email is verified now.";

	
?>