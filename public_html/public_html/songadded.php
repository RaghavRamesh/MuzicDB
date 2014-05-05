<?php
    include_once('./config.php');

    if(isset($_POST['songtitle'])) {
        $songtitle = $_POST['songtitle'];
        $albumtitle = $_POST['albumtitle'];
        $artistID = $_POST['artistID'];
        $composer = $_POST['composer'];
        $genre = $_POST['genre'];
        $length = intval($_POST['length']);
        $price = $_POST['price'];
        
        $query = "INSERT INTO song(name, title, artistID, composer, genre, length)
                    VALUES('" . $songtitle . "', '" . $albumtitle . "', '" . $artistID . "', '" . $composer . "', '" . $genre . "'," .                          $length . ");";
        
        $status = $mysqli->query($query);
        
        if($status == 1) {
            $message = "Song successfully added!";
        } else {
            $message = "Database error - please try again";
        }
    }

?>
