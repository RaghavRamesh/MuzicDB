<html>
<?php
    include 'header.html';
    include 'adminNavbar.html';
    include 'useradded.php';
?>
<body>
    
    <div class="container">
      <div class="row" style="margin-top:130px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
          <form role="form" method="post">
            <fieldset>
              <h2>Add User</h2>
              <hr class="colorgraph">
                <div class="form-group">
                <input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name">
              </div>
              <div class="form-group">
              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
              </div>
              <hr class="colorgraph">
              <div>
                    <label><h4 style="color:white"><?php echo $message; ?></h4></label>                
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <input type="submit" class="btn btn-lg btn-success btn-block" value="Add User" name="SubmitAddUser">
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>

    </div>

</body>
<?php include 'footer.html'; ?>
</html>