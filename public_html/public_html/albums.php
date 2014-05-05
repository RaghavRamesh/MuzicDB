<?php
    session_start();
    if (!(isset($_SESSION['CurrentUser']) && $_SESSION['CurrentUser'] != 'admin@admin.com')) {
        $isLoggedIn = false;
        // session_destroy();
        // header("location:login.php");
    } else {
        $isLoggedIn = true;
    }
	  include_once('config.php');
?>
<html>
  <?php include 'header.html'; ?>
  <?php include 'navbar.html'; ?>
  <body>
    <div class = "container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Albums</h3>
			</div>
		  <!-- Main component for a primary marketing message or call to action -->
		  <table class="table table-hover table-striped table-bordered table-condensed">
		    <tr>
		      <th>Album</th>
		      <th>Artist</th>
		      <th>Price</th>
			  <th>Purchase</th>
		    </tr>
		
			  <?php
					$query = "SELECT * FROM album";
					$result = $mysqli->query($query);

					while($row = $result->fetch_array())
					{
						echo "<tr>";
						echo "<td>" . $row['title'] . "</td>";
						$query = "SELECT artistName FROM artist WHERE id =" . $row['artistID'] ;
						$artist_result = $mysqli->query($query);
						$artist_data = $artist_result->fetch_array();
						echo "<td>" . $artist_data['artistName'] . "</td>";
		        		echo "<td> $" . $row['price'] . "</td>";
		           		echo "<td><a href=\"bought.php?type=album&name=" . $row['title'] . "&artistID=" . $row['artistID'] . "&price=" . $row['price'] . "\"><button class=\"btn btn-md btn-success\">Buy</button></a></td>";   
						echo "</tr>";
					}
		  ?>    
		  </table>
		</div>
	</div> 
  </body>
  <?php include 'footer.html'; ?>
</html>
