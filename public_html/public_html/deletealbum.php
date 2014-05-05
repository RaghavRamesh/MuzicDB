<?php
    if (isset($_GET['albumName']) && isset($_GET['artistID'])) {
        $albumName = $_GET['albumName'];
        $artistID = $_GET['artistID'];
        
        $query = "DELETE FROM album
                    WHERE title='" . $albumName . "' AND artistID='" . $artistID . "';";
        
        $status = $mysqli->query($query);
        
        if ($status == 1) {
            $message = $albumName . " has been deleted!";
        } else {
            $message = "Deletion error for the album " . $albumName;
        }
    }

?>