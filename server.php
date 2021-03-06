<?php 
	session_start();

	include "db_connect.php";
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {

			$query = "select * from users where email='$email'";
			$res = mysqli_query($db, $query);
			if(mysqli_num_rows($res) == 1){
				array_push($errors, "Email already taken.");
			}else{

				$password = md5($password_1);//encrypt the password before saving in the database
				$query = "INSERT INTO users (username, email, password) 
						  VALUES('$username', '$email', '$password')";
				mysqli_query($db, $query);

				$_SESSION['username'] = $username;
				$_SESSION['user_id'] = mysqli_insert_id($db);
				$_SESSION['success'] = "You are now logged in";

				$msg = "Hello ".$username.".<br/>";
				$msg.= "You have been registered in our server for voting. Please click the link below to verify your email. <br/>";
				$msg.= '<a href="http://localhost/votingReg/verify.php?username='.$username.'&check='.md5($_SESSION['user_id']).'">';
				$msg.= 'http://localhost/votingReg/verify.php?username='.$username.'&check='.md5($_SESSION['user_id']);
				$msg.= '</a>';

				$mail_subject = "Verify your email";
				$mail_sender = "vote@gmail.com";
				$success = mail( $email, $mail_subject, $msg, 'From: ' . $mail_sender );
				// echo $msg;
				// if (!$success) {
	   //  			$errorMessage = error_get_last()['message'];
	   //  			echo $errorMessage;
				// }


				header('location: index.php');
			}
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$row = mysqli_fetch_array($results, MYSQLI_ASSOC);
				$_SESSION['username'] = $username;
				$_SESSION['user_id'] = $row['id'];
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>