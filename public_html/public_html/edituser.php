<?php
    session_start();
    if (!(isset($_SESSION['CurrentUser']) && $_SESSION['CurrentUser'] == 'admin@admin.com')) {
        session_destroy();
        header("location:login.php");
    }
  	include_once('config.php');	
        
    if(isset($_GET['editEmail'])) {
        $useremail = $_GET['editEmail'];
        $query1 = "SELECT * FROM user u WHERE u.email='" . $useremail . "';";
        $result = $mysqli->query($query1);
        $row = $result->fetch_array();
    }

?>

<html>
<?php include 'header.html'; ?>
<?php include 'adminNavbar.html'; ?> 
<div class="container">

    <div class="row" style="margin-top:80px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
          <form role="form" method="post" action="userslist.php">
            <fieldset>
              <h2>Edit User</h2>
              <hr class="colorgraph">
              <div class="form-group">
                <label for="name" style="color:white">Name</label>
                <?php
                    echo "<input type=\"text\" name=\"newUsername\" id=\"username\" class=\"form-control input-lg\" value=\"" .
                         $row['name'] . "\">";
                ?>
              </div>
              <div class="form-group">
                <label for="email" style="color:white">Email</label>
                <?php
                    echo "<input type=\"email\" name=\"newEmail\" id=\"email\" class=\"form-control input-lg\" value=\"" .
                         $row['email'] . "\">";
                    //Post the old email too
                    echo "<input type=\"hidden\" name=\"oldEmail\" id=\"oldEmail\" value=\"" .
                         $row['email'] . "\">";
                ?>
              </div>
              <div class="form-group">
                <label for="password" style="color:white">Password</label>
                <?php
                    echo "<input type=\"text\" name=\"newPassword\" id=\"password\" class=\"form-control input-lg\" value=\"" .
                         $row['password'] . "\">";
                ?>
              <hr class="colorgraph">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <input type="submit" class="btn btn-lg btn-success btn-block" value="Confirm Changes" name="confChanges">
                </div>
              </div>
            </fieldset>
          </form>
        </div>

</div>
<?php include 'footer.html'; ?>
</html>
