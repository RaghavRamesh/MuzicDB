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
    <div class="container">
		<div class="well well-md">
			<div class="row">
				<div class="col-md-12">
					<h2> Songs: </h2>
					<table class="table table-hover table-striped table-bordered table-condensed">
						<tr>
						  <th>Song name</th>
						  <th>Artist</th>
						  <th>Album</th>
						  <th>Genre</th>
						  <th>Length</th>
						  <th>Price</th>
						  <th>Purchase</th>
						</tr>  
							<?php
								$songname = $_POST['songname'];
								$artist = $_POST['artist'];
								$album = $_POST['album'];
								$genre = $_POST['genre'];
								$query = "SELECT s.name, a.artistName, s.title, s.genre, s.length, s.price " . 
										 "FROM song s, artist a " . 
										 "WHERE a.id = s.artistID AND s.name like '%" . $songname . "%' " . 
										 "AND a.artistName like '%" . $artist . "%' " . 
										 "AND s.title like '%" . $album . "%' " .
										 "AND s.genre like '%" . $genre . "%'";		
								$result = $mysqli->query($query);
								while($row = $result->fetch_array())
								{
									echo "<tr>";
									echo "<td>" . $row['name'] . "</td>";
									echo "<td>" . $row['artistName'] . "</td>";
									echo "<td>" . $row['title'] . "</td>";
									echo "<td>" . $row['genre'] . "</td>";
									$minute = floor($row['length']/60);
									$second = $row['length']%60;
					  				echo "<td>" . $minute.":".$second. "</td>";
									echo "<td>" . $row['price'] . "</td>";
									echo "<td><a href=\"bought.php?type=song&name=" . $row['name'] . "&artist=".$row['composer']. "&price=" . $row['price']."\">Buy</a></td>";
									echo "</tr>";
								}
					  	?>
					  </table>
				</div>
				<div class="col-md-12">

					<h2> Albums: </h2>
					<table class="table table-hover table-striped table-bordered table-condensed">
						<tr>
							<th>Album</th>
		    				<th>Artist</th>
		 					<th>Price</th>
			  				<th>Purchase</th>
						</tr>  
							<?php
								$artist = $_POST['artist'];
								$album = $_POST['album'];
								$query2 = "SELECT al.title, ar.artistName, al.price " . 
										 "FROM album al, artist ar " . 
										 "WHERE ar.id = al.artistID AND ar.artistName like '%" . $artist . "%' " . 
										 "AND al.title like '%" . $album . "%'";	
								$result2 = $mysqli->query($query2);

								while($row = $result2->fetch_array())
								{
									echo "<tr>";
									echo "<td>" . $row['title'] . "</td>";
									echo "<td>" . $row['artistName'] . "</td>";
									echo "<td> $" . $row['price'] . "</td>";
							   		echo "<td><a href=\"bought.php?type=album&name=" . $row['title'] . "&artistID=" . $row['artistID'] . "&price=" . $row['price'] . "\">Buy</a></td>";   
									echo "</tr>";
								}
					  	?>
					</table>
				</div>
			</div>
		</div>	
      <!-- Main component for a primary marketing message or call to action -->
    </div> 
	<?php include 'footer.html'; ?>
  </body>
</html>
