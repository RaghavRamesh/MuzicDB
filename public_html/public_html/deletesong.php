<?php
    if(isset($_GET['songTitle']) && isset($_GET['albumName']) && isset($_GET['artistID'])) {
        $songTitle = $_GET['songTitle'];
        $albumTitle = $_GET['albumName'];
        $artistID = $_GET['artistID'];
        $query = "DELETE FROM song
                    WHERE song.title = '" . $albumTitle . "' AND song.artistID = '" . $artistID . "'
                    AND song.name = '" . $songTitle . "';";
        
        $status = $mysqli->query($query);
        
        if ($status == 1){
            $message = $songTitle . " has been deleted!";
        } else {
            $message = "Deletion error for the song " . $songTitle;
        }
    }
?>