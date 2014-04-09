<?php
// Create connection
$con=mysqli_connect("mysql10.000webhost.com","a8392387_muzicdb","cs2102","a8392387_music");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } else {
    echo "Connection Established!";
}
?>