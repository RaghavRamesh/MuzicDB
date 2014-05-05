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
        <div class="col-md-12 panel panel-default">
          <h3>
          <?php
            
            if ($_GET["type"] == "song") {
              $query = "INSERT INTO song_purchase VALUES ('" . $_GET["name"] . "', '" . $_GET["artist"] . "', " . $_GET['price'] . ", '" . $_SESSION['CurrentUser'] . "');";
              $status = $mysqli->query($query);
              if ($status == 1) {
                echo "You have purchased the " . htmlspecialchars($_GET["type"]) . " <em>" . htmlspecialchars($_GET["name"]) . "</em> by " . htmlspecialchars($_GET["artist"]) . ". Enjoy!";
              } else {
                echo "You have already bought this song!";
              }
              echo "<br><br><p>Click <a href='songs.php'>here</a> to continue shopping. Click <a href='profile.php'>here</a> to check your collection.</p>";
            } else if ($_GET["type"] == "album") {
              $queryA = "INSERT INTO album_purchase VALUES ('" . $_GET["name"] . "', '" . $_GET["artistID"] . "', " . $_GET['price'] . ", '" . $_SESSION['CurrentUser'] . "');";
              $status1 = $mysqli->query($queryA);
                
                $queryB = "INSERT INTO song_purchase(name, title, price, email) SELECT s.name, a.artistName, s.price, '" . $_SESSION['CurrentUser'] . "' FROM song s, artist a WHERE s.title='" . $_GET['name'] . "' AND  s.artistID='" . $_GET['artistID'] . "' AND s.artistID=a.id;";
                $status2 = $mysqli->query($queryB);
                
              if ($status1 == 1 && $status2 == 1) {
                echo "You have purchased the " . htmlspecialchars($_GET["type"]) . " <em>" . htmlspecialchars($_GET["name"]) . "</em>. Enjoy!";
              } else {
                echo "You have already bought this album!";
              }
              echo "<br><br><p>Click <a href='albums.php'>here</a> to continue shopping. Click <a href='profile.php'>here</a> to check your collection.</p>";
            }  
            
            // can check your songs here - link to profile
          ?>
          </h3>
        </div>  
      </div>  
    </div>
    <?php include 'footer.html'; ?>  
  </body>
</html>