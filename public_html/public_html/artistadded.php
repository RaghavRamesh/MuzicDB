<?php
    include_once('./config.php');

    if(isset($_POST['artistID'])) {
        $artistID = $_POST['artistID'];
        $artistName = $_POST['artistName'];
        
        $query = "INSERT INTO artist(artistName, id) VALUES ('" . $artistName . "', '" . $artistID . "');";
        
        $status = $mysqli->query($query);
        
        if ($status == 1) {
            $message = "Artist successfully added!";
        } else {
            $message = "Database error - please try again";
        }
    }

?>