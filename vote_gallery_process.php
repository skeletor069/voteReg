<?php
	session_start();
	include "db_connect.php";
	echo $_SESSION['user_id'];
	$to_go = "vote_gallery.php";
	if(sizeof($_POST) == 3){
		$ids = [];
		foreach ($_POST as $name => $value) {
			$ids[] = $value;
		}

		$query = "INSERT INTO vote_cat_2(user_id, choice1, choice2, choice3) VALUES(".$_SESSION['user_id'].",'".$ids[0]."', '".$ids[1]."', '".$ids[2]."')";
		mysqli_query($db, $query) or die(mysqli_error($db));
		$to_go = "thank_you.php";

	}else{
		$_SESSION['error'] = "Something went wrong. Please try again.";
		$to_go = "vote_gallery.php";
	}

	header('location:'.$to_go);

	
			
?>