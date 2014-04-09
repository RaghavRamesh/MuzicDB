<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>MuzicDB Login</title>
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    
    <style>
    html {
      background: url('http://www.muzicdb.hostei.com/images/welcomebackground.jpg') no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }

    body {
      background: transparent;
    }
    </style>
  </head>
 
  <?php include "checkLogin.php"; ?>  

  <body>
      
    <div class="container">
      <div class="row" style="margin-top:130px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
          <form role="form" action="" method="post">
            <fieldset>
              <h2>MuzicDB Sign In</h2>
              <hr class="colorgraph">
              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
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
                  <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
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
      

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>