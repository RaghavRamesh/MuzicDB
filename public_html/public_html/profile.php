<?php
    session_start();
    if (!(isset($_SESSION['CurrentUser']) && $_SESSION['CurrentUser'] != 'admin@admin.com')) {
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
	<div class="row">
		<div class="col-md-12">
			<div class="well well-sm">
				<h4>Songs purchased: 
          		<?php
					$query = "SELECT count(*) FROM song_purchase WHERE email = '" . $_SESSION['CurrentUser'] . "'";
					$result = $mysqli->query($query);
					$row = $result->fetch_array();
					echo $row['count(*)'];
				?>  
          		</h4>
				<h3><center>My Songs</center></h3>
				<table class="table table-hover table-striped table-bordered table-condensed">
					<tr>
						<th>Song</th>
						<th>Album</th>
						<th>Price</th>
					</tr>  
					<?php
						$query = "SELECT * FROM song_purchase WHERE email = '" . $_SESSION['CurrentUser'] . "'";
						$result = $mysqli->query($query);

						while($row = $result->fetch_array())
						{
						    echo "<tr>";
						    echo "<td>" . $row['name'] . "</td>";
						    echo "<td>" . $row['title'] . "</td>";
						    echo "<td>" . $row['price'] . "</td>";
						    echo "</tr>";
						}
					?>
				</table>
			</div>
		</div>
		<div class="col-md-12">
			<div class="well well-sm">
				<h4>Albums purchased: 
				<?php
					$query = "SELECT count(*) FROM album_purchase WHERE email = '" . $_SESSION['CurrentUser'] . "'";
					$result = $mysqli->query($query);
					$row = $result->fetch_array();
					echo $row['count(*)'];
				?>
				</h4>
		    	<h3><center>My Albums</center></h3>

				<table class="table table-hover table-striped table-bordered table-condensed">
					<tr>
						<th>Title</th>
						<th>Artist</th>
						<th>Price</th>
					</tr>  
					<?php
						$query = "SELECT ap.title, ar.artistName, ap.price FROM album_purchase ap, artist ar WHERE email = '" . $_SESSION['CurrentUser'] . "' AND ap.artistID=ar.id;";
						$result = $mysqli->query($query);

						while($row = $result->fetch_array())
						{
						    echo "<tr>";
						    echo "<td>" . $row['title'] . "</td>";
						    echo "<td>" . $row['artistName'] . "</td>";
						    echo "<td>" . $row['price'] . "</td>";
						    echo "</tr>";
						}
					?>
        		</table>
			</div>
		</div>
	</div>
</div> <!-- //container -->
</body>
<?php include 'footer.html'; ?>
</html>
