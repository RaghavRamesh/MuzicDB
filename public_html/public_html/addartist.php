<html>
<?php
    include 'header.html';
    include 'adminNavbar.html';
    include 'artistadded.php';
?>
<body>
    
    <div class="container">
      <div class="row" style="margin-top:40px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
          <form role="form" method="post">
            <fieldset>
              <h2>Add New Artist</h2>
              <hr class="colorgraph">
                <div class="form-group">
                    <input type="text" name="artistName" id="artistName" class="form-control input-lg" placeholder="Artist Name">
                </div>
                <div class="form-group">
                    <input type="text" name="artistID" id="artistID" class="form-control input-lg" placeholder="Artist ID">
                </div>
                <hr class="colorgraph">
                <div>
                    <label><h4 style="color:white"><?php echo $message; ?></h4></label>                
                </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <input type="submit" class="btn btn-lg btn-success btn-block" value="Add Artist" name="SubmitAddArtist">
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