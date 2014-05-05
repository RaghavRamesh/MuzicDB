<?php
    session_start();
    if (!(isset($_SESSION['CurrentUser']) && $_SESSION['CurrentUser'] == 'admin@admin.com')) {
        session_destroy();
        header("location:login.php");
    }
  	include_once('config.php');	
        
    if(isset($_GET['albumName']) && isset($_GET['artistID'])) {
        $albumName = $_GET['albumName'];
        $artistID = $_GET['artistID'];
        
        $query = "SELECT * FROM album a WHERE a.title='" . $albumName . "' AND a.artistID='" . $artistID . "';";

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
          <form role="form" method="post" action="adminalbumlist.php">
            <fieldset>
              <h2>Edit song</h2>
              <hr class="colorgraph">
                <div class="form-group">
                    <label for="albumtitle" style="color:white">Song Title</label>
                    <?php
                        echo "<input type=\"text\" name=\"albumtitle\" id=\"albumtitle\" class=\"form-control input-lg\" value=\"" . 
                                $row['title'] . "\">";
                    ?>
                </div>
                <div class="form-group">
                    <label for="artistID" style="color:white">Artist ID</label>
                    <?php
                        echo "<input type=\"text\" name=\"artistID\" id=\"artistID\" class=\"form-control input-lg\" value=\"" . 
                                $row['artistID'] . "\">";
                    ?>
                </div>
                <div class="form-group">
                    <label for="artistID" style="color:white">Price in Dollars</label>
                    <?php
                        echo "<input type=\"text\" name=\"price\" id=\"price\" class=\"form-control input-lg\" value=\"" . 
                                $row['price'] . "\">";
                    ?>
                </div>
                <div class="form-group">
                    <?php
                        // Invisible inputs to send old primary keys to POST
                        echo "<input type=\"hidden\" name=\"oldalbumtitle\" id=\"oldalbumtitle\" value=\"" . 
                                $row['title'] . "\">";
                        echo "<input type=\"hidden\" name=\"oldartistID\" id=\"oldartistID\" value=\"" . 
                                $row['artistID'] . "\">";

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