<?php
include 'connect.php';

 if(isset($_REQUEST["password"]))

{

$email = $_REQUEST["email"]; //checking and retrieving email

$password = $_REQUEST["password"];

//retrieve one record that matches the email
//check the password hash
//store data in a session
//preparing the query so that hacking the database becomes difficult

$query = mysqli_prepare($con, "SELECT * FROM `clients` WHERE
email = ?");
mysqli_stmt_bind_param($query, "s", $email);
mysqli_stmt_execute($query);
$result = mysqli_stmt_get_result($query);

//checking number of rows that are stored in the result variable
if(mysqli_num_rows($result) == 1){ //counting number of rows in result
   $client = mysqli_fetch_assoc($result);
   $hash = $client["password"]; //retrieving the encrypted password

  if(password_verify($password, $hash)){ /*compare the password that the user provided and the hash password. If the passwords match then the user
can log in. If they do not match then an error message is displayed using
a cookie*/

//storing user information in a session

    session_start();
    $_SESSION["name"] = $client["name"];
    $_SESSION["id"] = $client["id"];
    $_SESSION["email"] = $client["email"];
    $_SESSION["logged_in"] = true; 
    header("location:home.php");
      //success
  }else{
    //if the number of rows is not one then show this message
    setcookie("error", "Wrong username or password", time()+3);
    header("location:login.php");
  }

}else{
  //if the password provided by user and hash do not match
  setcookie("error", "Wrong username or password", time()+3);
  header("location:login.php");
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rent a car</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>

        .navbar {
            margin-bottom: 50px;
            border-radius: 0;
        }

        .jumbotron {
            margin-bottom: 0;
        }

        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
    </style>
</head>

<body>
   <?php include 'nav.php'?>
    <div class="container">
        <h2>Login</h2>
                <?php if (isset($_COOKIE["error"])) { ?>
            <div class="alert alert-danger"><?php echo $_COOKIE["error"]; ?></div>
        <?php } ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>

</html>