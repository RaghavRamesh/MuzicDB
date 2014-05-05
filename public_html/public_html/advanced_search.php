<?php
    session_start();
    if (!(isset($_SESSION['CurrentUser']) && $_SESSION['CurrentUser'] != 'admin@admin.com')) {
        session_destroy();
        header("location:login.php");
    }
  	include_once('config.php');	
?>

<html>
	<?php include 'header.html'; ?>
	<?php include 'navbar.html'; ?> 
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="well well-md">
					<form role="form" method="post" action="search_result.php">
						<div class="row">
							<div class="col-md-12"> <h2> Advanced Search </h2> <div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="Songname">Song name:</label>
									<input type="text" class="form-control" id="songname" name="songname">
								</div>
								<div class="form-group">
									<label for="artist">Artist:</label>
									<input type="text" class="form-control" id="artist" name="artist">
								</div>
								<div class="form-group">
									<label for="album">Album:</label>
									<input type="text" class="form-control" id="album" name="album">
								</div>
								<div class="form-group">
									<label for="subject">Genre:</label>
									<select name="genre" class="form-control">
										<option value="" selected="">Choose One:</option>
										<option value="Dance">Dance</option>
										<option value="Alternative">Alternative</option>
										<option value="Pop">Pop</option>
										<option value="New Age">New Age</option>
										<option value="Rock">Rock</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
				  				<button type="submit" class="btn btn-primary pull-left">Search</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<?php include 'footer.html'; ?>
</html>
