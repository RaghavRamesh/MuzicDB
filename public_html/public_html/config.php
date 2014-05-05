<?php
	
	// $con = mysqli_connect("mysql10.000webhost.com","a8392387_muzicdb","cs2102","a8392387_music");

	
	// if (mysqli_connect_errno()) {
	// 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	// }
	// Create connection
	$mysqli = new mysqli("mysql10.000webhost.com", "a8392387_muzicdb", "cs2102", "a8392387_music");

	// Check connection
    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }
?>