<html>
  <?php include 'header.html'; ?>
  <?php include 'checkLogin.php'; ?>  

  <body>
      
    <div class="container">
      <div class="row" style="margin-top:130px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
          <form role="form" action="" method="post">
            <fieldset>
              <h2>MuzicDB Sign In</h2>
              <hr class="colorgraph">
              <div class="form-group">
                <input type="text" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
              </div>
              <div>
                <label><?php echo $message; ?></label>
              </div>
              <hr class="colorgraph">
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In" name="SubmitLogin">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <a href="http://www.muzicdb.hostei.com/signup.php" class="btn btn-lg btn-primary btn-block">Register</a>
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