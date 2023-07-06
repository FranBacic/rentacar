<?php include 'protect.php'?>
<?php include 'connect.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rent a car</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>



    <style>
        .navbar {
            margin-bottom: 50px;
            border-radius: 0;
        }

        .jumbotron {
            margin-bottom: 0;
        }

    .wrapper {
        min-height: 100%;
        display: flex;
        flex-direction: column;
    }

    .content {
        flex: 1;
    }

    footer {
        flex-shrink: 0;
        /* background-color: #f2f2f2; */
        padding: 25px;
    }

        ul {
            list-style-type: none;
        }
    </style>
</head>

<body>
         <?php include 'nav.php'?>
<div class="container">
    <input id="Input" type="text" placeholder="Search.." class="form-control">
</div>

<div>
    
</div>

 <br>


    <br>



<?php
if (isset($_GET["success"]) && $_GET["success"] == "true") {
    $successMessage = "Email je uspješno poslan.";
}
?>

<?php if (isset($successMessage)): ?>
    <div id="success-message" class="alert alert-success text-center"><?php echo $successMessage; ?></div>
<?php endif; ?>

<script>
    setTimeout(function() {
        var successMessage = document.getElementById("success-message");
        if (successMessage) {
            successMessage.style.display = "none";
        }
    }, 3000);
</script>

<?php
// Izvršite upit nad bazom podataka
$query = "SELECT * FROM cars";
$result = mysqli_query($con, $query);
$cars = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>



    <br>
<ul id="myList">
    <div class="container ">
        <div class="row">
            <?php foreach ($cars as $car): ?>
                <li>
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading text-center"><?php echo $car['brand'] . ' ' . $car['model']; ?></div>
                            <div class="panel-body">
                                <a href="#"><img src="<?php echo $car['image_url']; ?>" style="width:100%" alt="Image"></a>
<p>
    <?php $description = $car['description']; ?>
    <span class="short-description"><?php echo substr($description, 0, 150); ?></span>
    <?php if (strlen($description) > 150): ?>
        <span class="full-description" style="display: none;"><?php echo $description; ?></span>
        <button class="show-more-btn btn btn-link">Prikaži više</button>
    <?php endif; ?>
</p>



                            </div>
                            <div class="panel-footer text-center">
<button type="button" class="btn btn-primary btn-lg reserve-btn" data-toggle="modal" data-target="<?php echo '#carModal' . $car['id']; ?>" data-car="<?php echo $car['brand'] . ' ' . $car['model']; ?>">Rezerviraj</button>



                            </div>
                        </div>
                    </div>
                </li>
                    <div class="modal fade" id="<?php echo 'carModal' . $car['id']; ?>" role="dialog">

        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Rezervacija - <?php echo $car['brand'] . ' ' . $car['model']; ?></h4>
                </div>
                <div class="modal-body">
                <form id="carForm" action="save_reservation.php" method="post">

                <div class="mb-3">
                <label class="form-label" for="name">Name</label>
                <input class="form-control" name="car" id="car" type="text" value="<?php echo $car['brand'] . ' ' . $car['model']; ?>" readonly />
                </div>


                <!-- Name input -->
                <div class="mb-3">
                <label class="form-label" for="name">Name</label>
                <input class="form-control" name="name" id="name" type="text" value=<?php echo $_SESSION["name"] ?> />
                </div>

                <!-- Email address input -->
                <div class="mb-3">
                <label class="form-label" for="emailAddress">Email Address</label>
                <input class="form-control" name="emailAddress" id="emailAddress" type="email" value=<?php echo $_SESSION["email"]  ?> readonly />
                </div>

                <!-- Date input 1 -->
                <div class="mb-3">
                    <label class="form-label" for="datepicker1">Od</label>
                    <input class="form-control datepicker1" name="datepicker1"  type="text" autocomplete="off" />
                </div>

                <!-- Date input 2 -->
                <div class="mb-3">
                    <label class="form-label" for="datepicker2">Do</label>
                    <input class="form-control datepicker2" name="datepicker2"  type="text" autocomplete="off" />
                </div>


                <!-- Message input -->
                <div class="mb-3">
                <label class="form-label" for="message">Message</label>
                <textarea class="form-control" name="message" id="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
                </div>

                <!-- Form submit button -->
                <div class="d-grid">
                <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                </div>

            </form>  
                </div>
            </div>

        </div>
    </div>
            <?php endforeach; ?>
        </div>
    </div>
</ul>



<script>
    $(document).ready(function() {
        $(".datepicker1").datepicker({
            onSelect: function(selectedDate) {
                // Postavite odabrani datum iz datepicker1 kao početnu vrijednost za datepicker2
                var datepicker2 = $(".datepicker2");
                datepicker2.datepicker("option", "minDate", selectedDate);
                if (datepicker2.val() === "") {
                    datepicker2.datepicker("setDate", selectedDate);
                }
            }
        });

        $(".datepicker2").datepicker();
    });
</script>



       
    <script> 
        $(document).ready(function () {
            $("#Input").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#myList li").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

<script>
    $(document).ready(function() {
        $(".show-more-btn").click(function() {
            var description = $(this).parent().find(".full-description");
            description.toggle();
            $(this).text(description.is(":visible") ? "Prikaži manje" : "Prikaži više");
        });
    });
</script>

<script>
$(".reserve-btn").click(function() {
    var carBrand = $(this).data("car");
    var carModal = $("#" + carBrand + "Modal");

    // Postavite naslov modala
    carModal.find(".modal-title").text("Rezervacija - " + carBrand);

    // Postavite automobil u formu
    carModal.find("#car").val(carBrand);
});



</script>





<script></script>







    <footer class="fixed-bottom">
        <div class="container-fluid text-center">
            <a href="https://www.instagram.com/europcar/" target="_blank" class="btn btn-primary">Instagram</a>
            &emsp;
            <a href="https://www.facebook.com/europcar/" target="_blank" class="btn btn-primary">Facebook</a>
        </div>
    </footer>
</body>

</html>