<!DOCTYPE html>
<?php
	session_start();
    //$_SESSION['logged_in']="true";
    if(isset($_SESSION['logged_in']))
        unset($_SESSION['logged_in']);
?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Search Results</title>
    <?php
		include './header.html';
	?>
<body>

    
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>
            <?php
				mysql_connect("mysql10.000webhost.com", "a8392387_muzicdb", "cs2102")or die("cannot connect"); 
    			mysql_select_db("a8392387_music") or die("Cannot select DB");

                $query = $_POST["query"];
                echo "You searched for " . htmlspecialchars($query) . "!";
				$sqlquery = "SELECT * FROM album";


		   		$result = mysql_query($sqlquery);

				while($row = mysql_fetch_array($result))
				{
					echo $row['title'] . " " . $row['artist'];
					echo "<br>";
				}
            ?>
          
        </h1>
      </div>

    </div> <!-- /container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
