<?php
    session_start();
    if (!isset($_SESSION['CurrentUser'])) { 
        $isLoggedIn = false;
        // session_destroy();
        // header("location:login.php");
    } else {
        $isLoggedIn = true;
    }
    if ($_SESSION['CurrentUser'] == 'admin@admin.com') {
    	session_destroy();
    	header("location:login.php");
    }
  	include_once('config.php');	
?>

<html>
  <?php include 'header.html'; ?>
  <?php include 'navbar.html'; ?>
  <body>    
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Songs</h3>
			</div>
			<div class="panel-body">
				<input type="text" class="form-control" id="song-table-filter" data-action="filter" data-filters="#song-table" placeholder="Filter" />
			</div>
		  <!-- Main component for a primary marketing message or call to action -->
		  <table class="table table-hover table-striped table-bordered table-condensed" id="song-table">
			<thead>
			  <tr>
				  <th>Song</th>
				  <th>Artist</th>
				  <th>Composer</th>
				  <th>Album</th>
				  <th>Genre</th>
				  <th>Length</th>
				  <th>Price</th>
				  <th>Purchase</th>
			  </tr>
			</thead>
			<tbody>  
			 	 <?php
					$query = "SELECT * FROM song";
					$result = $mysqli->query($query);

					while($row = $result->fetch_array())
					{
		  				echo "<tr>";
		  				echo "<td>" . $row['name'] . "</td>";
		  				$query = "SELECT artistName FROM artist WHERE id =" . $row['artistID'] ;
		  				$artist_result = $mysqli->query($query);
		  				$artist_data = $artist_result->fetch_array();
		  				echo "<td>" . $artist_data['artistName'] . "</td>";
		  				echo "<td>" . $row['composer'] . "</td>";
		  				echo "<td>" . $row['title'] . "</td>";
		  				echo "<td>" . $row['genre'] . "</td>";
						$minute = floor($row['length']/60);
						$second = $row['length']%60;
		  				echo "<td>" . $minute.":".$second. "</td>";
				  		echo "<td> $" . $row['price'] . "</td>";
		  				// if ($isLoggedIn) {
				     	echo "<td><a href=\"bought.php?type=song&name=" . $row['name'] . "&artist=".$row['composer']. "&price=" . $row['price']."\"><button class=\"btn btn-md btn-success\">Buy</button></a></td>";  
				  // }
				  
		  				echo "</tr>";
					}
		  		?>
			</tbody>
		  </table>
		</div>
    </div> <!-- /container -->
  </body>
  
  <?php include 'footer.html'; ?>
</html>
