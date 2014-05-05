<?php
    if(isset($_GET['deleteEmail'])) {
        $useremail = $_GET['deleteEmail'];
        $query = "DELETE FROM user WHERE email = '" . $useremail . "';";
        $status = $mysqli->query($query);

        if ($status == 1) {
            $message = $useremail . " deleted!";
        } else {
            $message = "Deletion error for " . $useremail . "!";
        }
    }
?>
