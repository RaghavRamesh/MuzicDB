<?php
    session_start();
    if (!(isset($_SESSION['CurrentUser']) && $_SESSION['CurrentUser'] == 'admin@admin.com')) {
        session_destroy();
        header("location:login.php");
    }
  	include_once('config.php');	
    include "deleteartist.php";
    include "artistupdate.php";
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
              <th>Artist Name</th>
              <th>Artist ID Number</th>
              <th>Edit</th>
              <th>Delete</th>
          </tr>  
		  <?php
    			$query = "SELECT * FROM artist;";
    			$result = $mysqli->query($query);

    			while($row = $result->fetch_array())
    			{
      				echo "<tr>";

                    echo "<td>" . $row['artistName'] . "</td>";
                    echo "<td>" . $row['id'] . "</td>";
      				echo "<td><a href=\"editartist.php?artistID=" . urlencode($row['id']) . "\"><span class=\"glyphicon glyphicon-wrench\"></span></a></td>";
                    echo "<td><a href=\"adminartistlist.php?artistID=" . urlencode($row['id']) . "\"><span class=\"glyphicon glyphicon-remove-circle\"></span></a></td>";
      				echo "</tr>";
    			}
      ?>
      </table>

</div>
<?php include 'footer.html'; ?>
</html>