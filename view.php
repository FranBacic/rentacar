<?php include 'protect.php'?>
<?php
include("connect.php");
?>

<?php
    if ($_SESSION["id"] != 1) {
        header("location:home.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>View Records</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
    <h2>View Users</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th><strong>#</strong></th>
                <th><strong>Id</strong></th>
                <th><strong>Name</strong></th>
                <th><strong>Email</strong></th>
                <th><strong>Phone</strong></th>
                <th><strong>Password</strong></th>
                <th><strong></strong></th>
                <th><strong></strong></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $count=1;
            $sel_query="SELECT * FROM clients ORDER BY id ASC;";
            $result = mysqli_query($con,$sel_query);
            while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["phone"]; ?></td>
                    <td><?php echo $row["password"]; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php $count++; } ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
