<?php
    session_start();
    if (!(isset($_SESSION['CurrentUser']) && $_SESSION['CurrentUser'] == 'admin@admin.com')) {
        session_destroy();
        header("location:login.php");
    } 
?>

<html>
  <?php include 'header.html'; ?>
  <?php include 'adminNavbar.html'; ?>
  <body>
    <div class="container">
        <div class="jumbotron">
              <h1 class="text-center">Manage MuzicDB data</h1>
              <p class="text-center">
                Explore. Listen. Relax.
              </p>
        </div>
    </div> <!-- //container -->
    <!-- <div>
      <div class="col-lg-4">
        <h2>Songs</h2>
        <ul>
          <li><a>Add a song</a></li>
          <li><a>Delete a song</a></li>
          <li><a>Edit a song</a></li>
        </ul>
      </div>
      <div class="col-lg-4">
        <h2>Albums</h2>
        <ul>
          <li><a>Add an album</a></li>
          <li><a>Delete an album</a></li>
          <li><a>Edit an album</a></li>
        </ul>
      </div>
      <div class="col-lg-4">
        <h2>Users</h2>
        <ul>
          <li><a>Add a user</a></li>
          <li><a>Delete a user</a></li>
          <li><a>Edit a user</a></li>
        </ul>
      </div>

    </div> -->
    <?php include 'footer.html'; ?> 
  </body>
</html>