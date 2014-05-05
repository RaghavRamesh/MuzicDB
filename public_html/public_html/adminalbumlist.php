<?php
    session_start();
    if (!(isset($_SESSION['CurrentUser']) && $_SESSION['CurrentUser'] == 'admin@admin.com')) {
        session_destroy();
        header("location:login.php");
    }
  	include_once('config.php');	
    include "deletealbum.php";
    include "albumupdate.php";
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
              <th>Album</th>
              <th>Artist</th>
              <th>Price</th>
              <th>Edit</th>
              <th>Delete</th>
          </tr>  
		  <?php
    			$query = "SELECT al.title AS 'Album Name', ar.artistName AS 'Artist', ar.id, al.price
                            FROM album al, artist ar
                            WHERE ar.id = al.artistID
                            GROUP BY al.title, ar.artistName;";
    			$result = $mysqli->query($query);

    			while($row = $result->fetch_array())
    			{
      				echo "<tr>";

                    echo "<td>" . $row['Album Name'] . "</td>";
                    echo "<td>" . $row['Artist'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
      				echo "<td><a href=\"editalbum.php?albumName=" . urlencode($row['Album Name']) . "&artistID=" . urlencode($row['id']) .                            "\"><span class=\"glyphicon glyphicon-wrench\"></span></a></td>";
                    echo "<td><a href=\"adminalbumlist.php?albumName=" . urlencode($row['Album Name']) . "&artistID=" .
                            urlencode($row['id']) . "\"><span class=\"glyphicon glyphicon-remove-circle\"></span></a></td>";
      				echo "</tr>";
    			}
      ?>
      </table>

</div>
<?php include 'footer.html'; ?>
</html>