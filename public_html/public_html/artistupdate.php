<?php
    if (isset($_POST['artistID']) && isset($_POST['artistName'])) {
        $newArtistID = $_POST['artistID'];
        $newArtistName = $_POST['artistName'];
        
        $oldArtistID = $_POST['oldArtistID'];
        
        if ($newArtistID != "" && $newArtistName != "") {
            $query = "UPDATE artist
                        SET id='" . $newArtistID . "', artistName='" . $newArtistName . "'
                        WHERE id='" . $oldArtistID . "';";
            $status = $mysqli->query($query);
            
            if ($status == 1) {
                $message = "User successfully updated!";
            } else {
                $message = "Database error - please try again.";
            }
        } else {
            $message = "Empty credentials not allowed.";
        }
    }


?>