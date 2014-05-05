<?php
    session_start();
    if (!(isset($_SESSION['CurrentUser']) && $_SESSION['CurrentUser'] == 'admin@admin.com')) {
        session_destroy();
        header("location:login.php");
    } 
?>

<html>
<?php include 'header.html'; ?>
<?php include 'adminNavbar.html'; ?>
<body>
    <div class="container">
        <div class="jumbotron">
            <h2>
                <a href="addalbum.php">
                    Add an album
                    <span class="glyphicon glyphicon-plus"></span>
                </a>
            
            </h3>
        </div>
        <div class="jumbotron">
            <h2>
                <a href="adminalbumlist.php">
                    Edit an album
                    <span class="glyphicon glyphicon-wrench"></span>
                </a>
            
            </h3>
        </div>
    </div>
</body>
<?php include 'footer.html'; ?>
</html>