

<?php


require 'C:\xampp\htdocs\PHPMailer-master\src\PHPMailer.php';
require 'C:\xampp\htdocs\PHPMailer-master\src\SMTP.php';
require 'C:\xampp\htdocs\PHPMailer-master\src\Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dohvati podatke iz forme
    $name = $_POST["name"];
    $emailAddress = $_POST["emailAddress"];
    $message = $_POST["message"];
    $car = $_POST["car"];
    // Inicijalizirajte PHPMailer objekt
    $mail = new PHPMailer();

    // Postavi SMTP postavke za Gmail
    $mail->isSMTP();
    $mail->Host = 'smtp-mail.outlook.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = 'ivicivan192@gmail.com'; 
    $mail->Password = 'pittarello55'; 

    // Postavi primatelja emaila
    $mail->setFrom('ivicivan192@gmail.com', 'Ivan'); 
    $mail->addAddress('ivicivan192@gmail.com');

    // Postavi naslov emaila
    $mail->Subject = 'Novi upit iz forme';

    // Postavi sadržaj emaila
    
    $mail->Body = "Ime: " . $name . "\n";
    $mail->Body .= "Email adresa: " . $emailAddress . "\n";
    $mail->Body .= "Automobil: " . $car . "\n";
    $mail->Body .= "Poruka: " . $message;

    // Pošalji email
    if ($mail->send()) {
                header("Location: automobili.php?success=true");
        exit();
    } else {
        echo "Došlo je do pogreške prilikom slanja emaila: " . $mail->ErrorInfo;
    }
}
?>
