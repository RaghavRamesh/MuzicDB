<?php
    session_start();
    if (!(isset($_SESSION['CurrentUser']) && $_SESSION['CurrentUser'] == 'admin@admin.com')) {
        session_destroy();
        header("location:login.php");
    }
  	include_once('config.php');	
    include "deletesong.php";
    include "songupdate.php";
?>

<html>
<?php include 'header.html'; ?>
<?php include 'adminNavbar.html'; ?> 
<div class="container">
        <?php
            if(isset($message)) {
                echo "<div class=\"jumbotron\">
                    <h3>" . $message . "<h3>
                    </div>";
            }
        ?>
        <table class="table table-hover table-striped table-condensed" style="background:white">
          <tr>
              <th>Song name</th>
              <th>Artist</th>
              <th>Album</th>
              <th>Composer</th>
              <th>Genre</th>
              <th>Length</th>
              <th>Price</th>
              <th>Edit</th>
              <th>Delete</th>
          </tr>  
		  <?php
    			$query = "SELECT s.name AS 'Song Title', a.artistName AS 'Artist', s.title AS 'Album Name', s.composer, s.genre, s.length,                               s.price, a.id
                            FROM song s, artist a 
                            WHERE a.id = s.artistID;";
    			$result = $mysqli->query($query);

    			while($row = $result->fetch_array())
    			{
      				echo "<tr>";
      				echo "<td>" . $row['Song Title'] . "</td>";
      				echo "<td>" . $row['Artist'] . "</td>";
                    echo "<td>" . $row['Album Name'] . "</td>";
                    echo "<td>" . $row['composer'] . "</td>";
                    echo "<td>" . $row['genre'] . "</td>";
                    echo "<td>" . $row['length'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
      				echo "<td><a href=\"editsong.php?songTitle=" . urlencode($row['Song Title']) . "&albumName=" . urlencode($row['Album Name']) . "&artistID=" .                           $row['id'] . "\"><span class=\"glyphicon glyphicon-wrench\"></span></a></td>";
                    echo "<td><a href=\"adminsonglist.php?songTitle=" . urlencode($row['Song Title']) . "&albumName=" . urlencode($row['Album Name']) .                                       "&artistID=" . $row['id'] . "\"><span class=\"glyphicon glyphicon-remove-circle\"></span></a></td>";
      				echo "</tr>";
    			}
      ?>
      </table>

</div>
<?php include 'footer.html'; ?>
</html>