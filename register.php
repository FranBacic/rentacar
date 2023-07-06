<?php
if(isset($_REQUEST["name"]))

{
$name = $_REQUEST["name"];
$email= $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$ID = $_REQUEST["ID"];
$password = $_REQUEST["password"];
$password = password_hash($password, PASSWORD_BCRYPT);
include 'connect.php';
  $checkQuery = "SELECT * FROM `clients` WHERE `id` = '$ID'";
  $checkQuery2 = "SELECT * FROM `clients` WHERE `email` = '$email'";
  $checkQuery3 = "SELECT * FROM `clients` WHERE `phone` = '$phone'";
  $result = mysqli_query($con, $checkQuery);
  $result2 = mysqli_query($con, $checkQuery2);
  $result3 = mysqli_query($con, $checkQuery3);
  if (mysqli_num_rows($result) > 0 || mysqli_num_rows($result2) > 0 || mysqli_num_rows($result3) > 0 ) {
        $errorMessage = "Phone, email or ID are already taken. Please choose a different one.";
    } else {
  $sql = "INSERT INTO `clients`(`id`, `name`, `email`,
`phone`, `password`) VALUES
('$ID','$name','$email','$phone','$password')";
  mysqli_query($con,$sql) or die(mysqli_error($con));
  header("location:home.php");
  }}
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
<?php include 'nav.php'?>
    <div class="container">
        <h2>Register</h2>
        <?php if (isset($errorMessage)) { ?>
            <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
        <?php } ?>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="ime">Ime:</label>
                <input type="text" class="form-control" id="ime" placeholder="Enter name" name="name">
            </div>
                <div class="form-group">
                <label for="id">ID:</label>
                <input type="number" class="form-control" id="ID" placeholder="Enter ID" name="ID">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter phone" name="phone">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>