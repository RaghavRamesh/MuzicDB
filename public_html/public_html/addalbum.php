<html>
<?php
    include 'header.html';
    include 'adminNavbar.html';
    include 'albumadded.php';
?>
<body>
    
    <div class="container">
      <div class="row" style="margin-top:40px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
          <form role="form" method="post">
            <fieldset>
              <h2>Add New Album</h2>
              <hr class="colorgraph">
                <div class="form-group">
                    <input type="text" name="albumTitle" id="albumTitle" class="form-control input-lg" placeholder="Album Title">
                </div>
                <div class="form-group">
                    <input type="text" name="artistID" id="artistID" class="form-control input-lg" placeholder="Artist ID">
                </div>
                <div class="form-group">
                    <input type="text" name="price" id="price" class="form-control input-lg" placeholder="Price in $ (e.g. 10)">
                </div>
                <hr class="colorgraph">
                <div>
                    <label><h4 style="color:white"><?php echo $message; ?></h4></label>                
                </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <input type="submit" class="btn btn-lg btn-success btn-block" value="Add Album" name="SubmitAddUser">
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