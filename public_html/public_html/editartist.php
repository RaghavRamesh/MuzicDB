<?php
    session_start();

    if (!(isset($_SESSION['CurrentUser']) && $_SESSION['CurrentUser'] == 'admin@admin.com')) {
        session_destroy();
        header("location:login.php");
    }
  	include_once('config.php');	
        
    if(isset($_GET['artistID'])) {
        $artistID = $_GET['artistID'];
        
        $query = "SELECT * FROM artist a WHERE a.id='" . $artistID . "';";
        
        $result = $mysqli->query($query);
        $row = $result->fetch_array();
    }

?>

<html>
<?php include 'header.html'; ?>
<?php include 'adminNavbar.html'; ?> 
    
<div class="container">

    <div class="row" style="margin-top:30px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
          <form role="form" method="post" action="adminartistlist.php">
            <fieldset>
              <h2>Edit song</h2>
              <hr class="colorgraph">
                <div class="form-group">
                    <label for="artistName" style="color:white">Song Title</label>
                    <?php
                        echo "<input type=\"text\" name=\"artistName\" id=\"artistName\" class=\"form-control input-lg\" value=\"" . 
                                $row['artistName'] . "\">";
                    ?>
                </div>
                <div class="form-group">
                    <label for="artistID" style="color:white">Artist ID</label>
                    <?php
                        echo "<input type=\"text\" name=\"artistID\" id=\"artistID\" class=\"form-control input-lg\" value=\"" . 
                                $row['id'] . "\">";
                    ?>
                </div>
                <div class="form-group">
                    <?php
                        // Invisible inputs to send old primary keys to POST
                        echo "<input type=\"hidden\" name=\"oldArtistID\" id=\"oldArtistID\" value=\"" . 
                                $row['id'] . "\">";

                    ?>              
                </div>
                <hr class="colorgraph">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <input type="submit" class="btn btn-lg btn-success btn-block" value="Confirm Changes" name="SubmitAddUser">
                </div>
              </div>
            </fieldset>
          </form>
        </div>

</div>
<?php include 'footer.html'; ?>
</html>