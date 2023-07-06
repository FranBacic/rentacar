<?php
include("connect.php");
$id = $_REQUEST['id'];
$query = "SELECT * FROM clients WHERE id='" . $id . "'";
$result = mysqli_query($con, $query) or die(mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Users</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Edit Users</h1>
    <?php
    $status = "";
    if (isset($_POST['new']) && $_POST['new'] == 1) {
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $update = "UPDATE clients SET name='" . $name . "', email='" . $email . "' WHERE id='" . $id . "'";
        mysqli_query($con, $update) or die(mysqli_error());
        $status = "Users Updated Successfully. </br></br><a href='view.php'>View Updated List</a>";
        echo '<p style="color:#FF0000;">' . $status . '</p>';
    } else {
        ?>
        <div class="form">
            <form name="form" method="post" action="">
                <input type="hidden" name="new" value="1" />
                <input name="id" type="hidden" value="<?php echo $row['id']; ?>" />
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" required value="<?php echo $row['name']; ?>" />
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email" required value="<?php echo $row['email']; ?>" />
                </div>
                <input class="btn btn-primary" name="submit" type="submit" value="Update" />
            </form>
        </div>
    <?php } ?>
</div>
</body>
</html>
