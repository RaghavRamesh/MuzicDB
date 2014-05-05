<?php
    session_start();
    if (!(isset($_SESSION['CurrentUser']) && $_SESSION['CurrentUser'] != 'admin@admin.com')) {
        // session_destroy();
        // header("location:login.php");
    }
?>
<html>
  <?php include 'header.html'; ?>
  <?php include 'navbar.html'; ?>
  <body>
    <!-- Home page after logging in -->
    <div class="container"> 
      <div class="jumbotron">
        <h2><center>Welcome to MuzicDB!</center></h2>
        <p><center>Explore. Listen. Relax.</center></p>
        <p>
          <center><a class="btn btn-lg btn-primary" href="songs.php" role="button">Browse music &raquo;</a></center>
        </p>
        </div>
      </div>
    </div>   
    <!-- end of block -->
    <?php include 'footer.html'; ?>
  </body>
</html>