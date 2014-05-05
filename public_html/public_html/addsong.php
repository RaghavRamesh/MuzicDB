<html>
<?php
    include 'header.html';
    include 'adminNavbar.html';
    include 'songadded.php';
?>
<body>
    
    <div class="container">
      <div class="row" style="margin-top:30px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
          <form role="form" method="post">
            <fieldset>
              <h2>Add New Song</h2>
              <hr class="colorgraph">
                <div class="form-group">
                    <input type="text" name="songtitle" id="songtitle" class="form-control input-lg" placeholder="Song Title">
                </div>
                <div class="form-group">
                    <input type="text" name="albumtitle" id="albumtitle" class="form-control input-lg" placeholder="Album Title">
                </div>
                <div class="form-group">
                    <input type="text" name="artistID" id="artistID" class="form-control input-lg" placeholder="Artist ID">
                </div>
                <div class="form-group">
                    <input type="text" name="composer" id="composer" class="form-control input-lg" placeholder="Composer">
                </div>
                <div class="form-group">
                    <input type="text" name="genre" id="genre" class="form-control input-lg" placeholder="Genre">
                </div>
                 <div class="form-group">
                    <input type="text" name="length" id="length" class="form-control input-lg" placeholder="Length (in seconds)">
                </div>
                <div class="form-group">
                    <input type="text" name="price" id="price" class="form-control input-lg" placeholder="Price in $ (e.g. 0.99)">
                </div>
                <hr class="colorgraph">
                <div>
                    <label><h4 style="color:white"><?php echo $message; ?></h4></label>                
                </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <input type="submit" class="btn btn-lg btn-success btn-block" value="Add Song" name="SubmitAddUser">
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