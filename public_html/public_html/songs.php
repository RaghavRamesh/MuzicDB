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
    <div>
      <!-- Main component for a primary marketing message or call to action -->
      <table class="table table-striped table-bordered table-condensed">
          <tr>
              <th>Song name</th>
              <th>Artist</th>
              <th>Composer</th>
              <th>Album</th>
              <th>Genre</th>
              <th>Length</th>
                
          <?php
              // if(isset($_SESSION['logged_in'])) {
              //     echo "<th>Purchase</th></tr>";
              // }
          ?>
          </tr>  
          <tr>
              <td>Wake me up</td>
              <td>Avicii</td>
              <td>Avicii</td>
              <td>True</td>
              <td>House</td>
              <td>4:32</td>
              <td><a href="bought.php?type=song&name=Wake+Me+Up&artist=Avicii">Buy me!</a></td>
         
          </tr><!-- Darker Table Row -->
      </table>

    </div> <!-- /container -->
  </body>
  
  <?php include 'footer.html'; ?>
</html>