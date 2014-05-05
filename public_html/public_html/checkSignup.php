<?php
	include_once("config.php");
	$message = "";

	if ($_POST['password'] != $_POST['passwordconf']) {
		$message = "Passwords don't match.";
	} else if ($_POST['email'] != "" && $_POST['password'] != "" && $_POST['name'] != "") {
		$query = "INSERT INTO user (name, email, password) VALUES ('" . $_POST['name'] . "','" . $_POST['email']."', '".$_POST['password']."');"; 
		$status = $mysqli->query($query);
		if ($status == 1) {
			$message = "User successfully created. You may proceed to the <a href='login.php'>login page</a>.";
		} else {
			$message = "Sign up unsuccessful. Try again.";
		}
	} else {
		$message = "Username/password is empty.";
	}

	if(!isset($_POST['SubmitSignup'])) {
        $message = "";
    }
?>