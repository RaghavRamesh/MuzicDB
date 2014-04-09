<?php
    require_once('./config.php');
    
    $result = mysqli_query($con, "SELECT * FROM song_tester");
    
    while($row = mysqli_fetch_array($result))
    {
        echo $row['title'] . " " . $row['artist'];
        echo "<br>";
    }

?>