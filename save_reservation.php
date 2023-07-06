<?php
// Provjerite je li zahtjev POST metodom
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Dohvatite podatke iz zahtjeva
    $car = $_POST['car'];
    $name = $_POST['name'];
    $emailAddress = $_POST['emailAddress'];
    $datepicker1 = $_POST['datepicker1'];
    $datepicker2 = $_POST['datepicker2'];
    $datepicker1 = date('Y-m-d', strtotime($_POST['datepicker1']));
    $datepicker2 = date('Y-m-d', strtotime($_POST['datepicker2']));

    $message = $_POST['message'];

    // Spajanje na bazu podataka
    include 'connect.php';

    // Provjera dostupnosti datuma
    $query = "SELECT * FROM reservations WHERE car = '$car' AND date BETWEEN '$datepicker1' AND '$datepicker2'";
    $result = mysqli_query($con, $query);

    $query1 = "SELECT * FROM reservations WHERE car = '$car' AND dateTwo BETWEEN '$datepicker1' AND '$datepicker2'";
    $result1 = mysqli_query($con, $query1);

    $query2 = "SELECT * FROM reservations WHERE car = '$car' AND '$datepicker1' BETWEEN date AND dateTwo";
    $result2 = mysqli_query($con, $query2);

    $query3 = "SELECT * FROM reservations WHERE car = '$car' AND '$datepicker2' BETWEEN date AND dateTwo";
    $result3 = mysqli_query($con, $query3);

// Provjeri broj redaka koji su pronađeni za taj datum
// Provjeri broj redaka koji su pronađeni za taj datum
if (mysqli_num_rows($result) > 0 || mysqli_num_rows($result1) > 0 || mysqli_num_rows($result2) > 0 || mysqli_num_rows($result3) > 0) {
    echo "Odabrani datum je već rezerviran. Molimo odaberite drugi datum. <br>"; 

    // Ispis rezerviranih datuma
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Rezervirani datum od " . $row['date']  ;
    }
    while ($row1 = mysqli_fetch_assoc($result1)) {
        echo " do " . $row1['dateTwo'] . "<br>";
    }
    while ($row2 = mysqli_fetch_assoc($result2)) {
        echo "Rezervirani datum od " . $row2['date']  ;
    }
    while ($row3 = mysqli_fetch_assoc($result3)) {
        echo " do " . $row3['dateTwo'] . "<br>";
    }

    header("refresh:50; url=automobili.php");
    exit();
}

    // Priprema SQL upita za spremanje rezervacije
    $query = "INSERT INTO reservations (car, name, email, date, message, dateTwo) VALUES (?, ?, ?, ?, ?, ?)";


    // Priprema SQL izjave
    $statement = mysqli_prepare($con, $query);

    // Povezivanje parametara s izjavom
    mysqli_stmt_bind_param($statement, "ssssss", $car, $name, $emailAddress, $datepicker1, $message, $datepicker2);

    // Izvršavanje SQL izjave
    mysqli_stmt_execute($statement);

    // Provjera je li upit uspješno izvršen
    if (mysqli_stmt_affected_rows($statement) > 0) {
        // Uspješno spremljeno u bazu podataka
        echo "Rezervacija je uspješno spremljena.";
        header("refresh:2; url=automobili.php");
    } else {
        // Greška pri spremanju u bazu podataka
        echo "Došlo je do pogreške pri spremanju rezervacije.";
    }

    // Zatvaranje veze s bazom podataka
    mysqli_close($con);
} else {
    // Ako zahtjev nije POST metodom, preusmjerite korisnika ili prikažite poruku o pogrešci
    echo "Došlo je do pogreške.";
}


?>