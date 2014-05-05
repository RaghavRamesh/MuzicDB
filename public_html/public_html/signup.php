<html>
  <?php include 'header.html'; ?>
  <?php include 'checkSignup.php'; ?>
  <body>
    <div class="container">
      <div class="row" style="margin-top:130px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
          <form role="form" method="post" action="">
            <fieldset>
              <h2>Sign up for MuzicDB</h2>
              <hr class="colorgraph">
              <div class="form-group">
                <input type="text" name="name" id="name" class="form-control input-lg" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
              </div>
              <div class="form-group">
                <input type="password" name="passwordconf" id="passwordconf" class="form-control input-lg" placeholder="Confirm Password">
              </div>
              <div>
                <label style="color:white"><h4><?php echo $message; ?></h4></label>                
              </div>
              <hr class="colorgraph">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign Up" name="SubmitSignup">
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>

    </div>
    <?php include 'footer.html'; ?>
  </body>
</html>