<?php
include("connect.php");


// Check if the user is already logged in
if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
    $isLoggedIn = true;
     // Check if the user's ID is 1
    if ($_SESSION["id"] == 1) {
        $isEditAllowed = true;
    } else {
        $isEditAllowed = false;
    }

} else {
    $isLoggedIn = false;
    
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ... -->
</head>

<body>
    <div class="jumbotron">
        <div class="container text-center">
            <h1>Rent a car</h1>
        </div>
    </div>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="home.php">Home</a></li>
                    
                    <li><a href="automobili.php">Automobili</a></li>
                    <li><a href="about.php">O nama</a></li>
                    <li><a href="rules.php">Pravilnik</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if ($isLoggedIn) { ?>
                         <?php if ($isEditAllowed) { ?>
                        <li><a href="view.php">Edit</a></li>
                           <?php } ?>  
                           <li><a><strong>Hello, <?php echo $_SESSION["name"]; ?></strong></a></li>
                        <li><a href="logout.php">Logout</a></li>
                        
                    <?php } else { ?>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>
