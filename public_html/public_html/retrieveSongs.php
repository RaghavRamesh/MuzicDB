<html>
<body>
<?php
	// Connect to server and db
	mysql_connect("mysql10.000webhost.com", "a8392387_muzicdb", "cs2102")or die("cannot connect"); 
    mysql_select_db("a8392387_music") or die("Cannot select DB");

    $query = "SELECT * FROM song_tester";
    $result = mysql_query($query);

    while($row = mysql_fetch_array($result))
    {
        echo $row['title'] . " " . $row['artist'];
        echo "<br>";
    }
?>
</body>
</html>