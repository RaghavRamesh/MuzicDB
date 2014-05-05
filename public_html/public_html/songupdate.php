<?php
    if (isset($_POST['songtitle'])) {
        $newSongTitle = $_POST['songtitle'];
        $newAlbumTitle = $_POST['albumtitle'];
        $newArtistID = $_POST['artistID'];
        $newComposer = $_POST['composer'];
        $newGenre = $_POST['genre'];
        $newLength = intval($_POST['length']);
        $newPrice = $_POST['price'];
        
        $oldSongTitle = $_POST['oldsongtitle'];
        $oldAlbumTitle = $_POST['oldalbumtitle'];
        $oldArtistID = $_POST['oldartistID'];
        
        if ($newSongTitle != "" && $newAlbumTitle != "" && $newArtistID != "" && $newComposer != "" && $newGenre != ""
                && $newPrice != "") {
            $query = "UPDATE song SET name='" . $newSongTitle . "', title='" . $newAlbumTitle . "', artistID='" . $newArtistID .
                    "', composer='" . $newComposer . "', genre='" . $newGenre . "', length=" . $newLength . ", price='" . $newPrice . "'
                        WHERE name='" . $oldSongTitle . "' AND title='" . $oldAlbumTitle . "' AND artistID='" . $oldArtistID . "';";
            
            $status = $mysqli->query($query);
            
            if ($status == 1) {
                $message = "Song successfully updated!";
            } else {
                $message = "Database error - please try again.";
            }
            
        } else {
            $message = "Empty credentials not allowed.";
        }
        
        
    }

?>