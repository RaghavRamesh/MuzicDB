<?php
    if (isset($_POST['albumtitle']) && isset($_POST['artistID'])) {
        $newAlbumTitle = $_POST['albumtitle'];
        $newArtistID = $_POST['artistID'];
        $newPrice = $_POST['price'];
        
        $oldAlbumTitle = $_POST['oldalbumtitle'];
        $oldArtistID = $_POST['oldartistID'];
        
        if ($newAlbumTitle != "" && $newAlbumTitle != "") {
            $query =    "UPDATE album a
                        SET title='" . $newAlbumTitle . "', artistID='" . $newArtistID . "', price='" . $newPrice . "'
                        WHERE title='" . $oldAlbumTitle . "' AND artistID='" . $oldArtistID . "';";
            $status = $mysqli->query($query);
            
            if ($status == 1) {
                $message = "Album successfully updated!";
            } else {
                $message = "Database error - please try again.";
            }
        } else {
            $message = "Empty credentials not allowed.";
        }
    }

?>