<?php
    session_start();
    // Connect to server and select DB
    include_once('./config.php');

    // Username and Password sent from login form
    $myusername = $_POST['email'];
    $mypassword = $_POST['password'];
    
    // To prevent MySQL injection
    $myusername = stripslashes($myusername);
    $mypassword = stripslashes($mypassword);
    $myusername = $mysqli->real_escape_string($myusername);
    $mypassword = $mysqli->real_escape_string($mypassword);

    // encrypt password 
    // $encrypted_mypassword=md5($mypassword);
    // $sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$encrypted_mypassword'";
    // $result=mysql_query($sql);
    
    $query = "SELECT * FROM secure_login WHERE username = '$myusername' AND password = '$mypassword'";
    $result = $mysqli->query($query);
    $count = $result->num_rows;

    // Error message for invalid login
    $message = "";
    if(!isset($_POST['SubmitLogin'])) {
        $message = "";
    }
    
    // If the result is matched, register the session of the user and redirect to admin/user page based on credentials
    if ($count == 1) {

        $_SESSION['CurrentUser'] = $myusername;
        echo $_SESSION['CurrentUser'];
        if ($myusername == 'admin@admin.com') {
            header("location:adminSuccessful.html");    
        } else {
            header("location:home.php");
        }
    } else {
        if ($_POST) {
            $message = "Username or Password incorrect!";    
        }
    }
?> 