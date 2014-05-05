<?php
    include_once('./config.php');

    if(isset($_POST['albumTitle'])) {
        $albumTitle = $_POST['albumTitle'];
        $artistID = $_POST['artistID'];
        $price = $_POST['price'];
        
        $query = "INSERT INTO album(title, artistID, price)
                    VALUES('" . $albumTitle . "', '" . $artistID . "', '" . $price . "');";
        
        $status = $mysqli->query($query);
        
        if($status == 1) {
            $message = "Album successfully added!";
        } else {
            $message = "Database error - please try again";
        }
    }

?>
