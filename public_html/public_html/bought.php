<?php
    session_start();
    if (!isset($_SESSION['CurrentUser'])) {
        header("location:login.php");
    }
?>
<html>
  <?php include 'header.html'; ?>
  <?php include 'navbar.html'; ?>
  <body>
    <div class="jumbotron">
      <h3>
      <?php
        echo "You have purchased the " . htmlspecialchars($_GET["type"]) . " <em>" . htmlspecialchars($_GET["name"]) . "</em> by " . htmlspecialchars($_GET["artist"]) . ". Enjoy!";
      ?>
      </h3>
    </div>
    <?php include 'footer.html'; ?>  
  </body>
</html>