<?php
    if (isset($_GET['artistID'])) {
        $artistID = $_GET['artistID'];
        
        $query = "DELETE FROM artist
                    WHERE id='" . $artistID . "';";
        
        $status = $mysqli->query($query);
        
        if ($status == 1) {
            $message = $artistID . " has been deleted!";
        } else {
            $message = "Deletion error for the artist " . $artistID;
        }
    }

?>