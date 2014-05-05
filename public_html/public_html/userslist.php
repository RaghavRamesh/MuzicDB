<?php
    session_start();
    if (!(isset($_SESSION['CurrentUser']) && $_SESSION['CurrentUser'] == 'admin@admin.com')) {
        session_destroy();
        header("location:login.php");
    }
  	include_once('config.php');	
    include "deleteuser.php";
    include "userupdate.php";
?>

<html>
<?php include 'header.html'; ?>
<?php include 'adminNavbar.html'; ?> 
<div class="container">
        <?php
            if(isset($message)) {
                echo "<div class=\"jumbotron\">
                    <h3>" . $message . "<h3>
                    </div>";
            }
        ?>
        <table class="table table-hover table-striped table-condensed" style="background:white">
          <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Edit</th>
              <th>Delete</th>
          </tr>  
		  <?php
    			$query = "SELECT * FROM user;";
    			$result = $mysqli->query($query);

    			while($row = $result->fetch_array())
    			{
                    if($row['email'] == "admin@admin.com") continue;
      				echo "<tr>";
      				echo "<td>" . $row['name'] . "</td>";
      				echo "<td>" . $row['email'] . "</td>";
      				echo "<td><a href=\"edituser.php?editEmail=" . $row['email'] . "\"><span class=\"glyphicon glyphicon-wrench\"></span></a></td>";
                    echo "<td><a href=\"userslist.php?deleteEmail=" . $row['email'] . "\"><span class=\"glyphicon glyphicon-remove-circle\"></span></a></td>";
      				echo "</tr>";
    			}
      ?>
      </table>

</div>
<?php include 'footer.html'; ?>
</html>