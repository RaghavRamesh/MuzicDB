<?php
     // Connect to server and select DB
    include_once('./config.php');
    $message = "";
    
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (!($_POST['email'] == "" && $_POST['password'] == "")) {
            $query = "INSERT INTO user(name, email, password) VALUES('" . $username . "', '" . $email . "', '" . $password . "');";
            $status = $mysqli->query($query);

            if ($status == 1) {
                $message = "User Created";
            } else {
                $message = "User already exists with email";
            }
        }

        if(!isset($_POST['SubmitAddUser'])) {
            $message = "";
        }
    }

?>