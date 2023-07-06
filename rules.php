<?php

session_start();

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


            html,
    body {
        height: 100%;
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

    </style>
</head>

<body>
    <div class="wrapper">
        <?php include 'nav.php'?>

        <div class="content">
            <div class="container-fluid text-center">
                <div class="col-sm-8 text-left">
                     <h1>Pravilnik</h1>
            <ol>
                <li>

Prilikom rezervacije vozila, molimo vas da pružite točne informacije o datumu, vremenu i trajanju najma.
Potrebno je predočiti važeću vozačku dozvolu i identifikacijski dokument prilikom preuzimanja vozila.
Minimalna dob za najam vozila je 18 godina (uz moguće ograničenje za određene kategorije vozila).</li>
                <li>Vozilo se mora koristiti isključivo u skladu s prometnim propisima i zakonima.
Vozilo ne smije biti korišteno za ilegalne ili nedozvoljene aktivnosti.
Zabranjeno je pušenje u vozilu. Dodatno čišćenje troškova može biti primijenjeno u slučaju nepoštivanja ove odredbe.</li>
                <li>Molimo vas da održavate vozilo u čistom stanju i vratite ga u istom stanju kao što je bilo prilikom preuzimanja.
Redovito provjeravajte razinu goriva i vodu te pravovremeno obavljajte potrebno održavanje vozila.
U slučaju kvara ili neispravnosti vozila, odmah nas obavijestite kako bismo vam pružili potrebnu podršku.</li>
                <li>Vozilo je osigurano, ali u slučaju nesreće ili oštećenja vozila, molimo vas da nas odmah obavijestite i slijedite upute koje dobijete.
Klijenti su odgovorni za bilo kakve troškove popravka ili gubitka opreme unutar vozila.</li>
                <li>Vozilo treba biti vraćeno na dogovoreno mjesto i vrijeme završetka najma.
Ako postoji potreba za produženjem najma, molimo vas da nas obavijestite unaprijed kako bismo provjerili dostupnost i dogovorili dodatne uvjete.</li>
            </ol>
            <hr>
            <h3>Kompletan pravilnik možete zatražiti u poslovnici</h3>


        <h3>FAQ</h3>
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"> Koje dokumente trebam dostaviti prilikom rezervacije vozila?</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">
                         Prilikom rezervacije vozila, potrebno je dostaviti važeću vozačku dozvolu i identifikacijski dokument (npr. osobnu iskaznicu ili putovnicu).


                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Koji je minimalni dobni limit za najam vozila?</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                         Minimalna dob za najam vozila je 18 godina. Međutim, za određene kategorije vozila može postojati drugačije ograničenje dobne granice.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Što trebam učiniti u slučaju kvara ili neispravnosti vozila?</a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                        U slučaju kvara ili neispravnosti vozila, molimo vas da nas odmah obavijestite kako bismo vam pružili potrebnu podršku. Pratit ćemo upute za postupanje u takvim situacijama.
                    </div>
                </div>
            </div>

                </div>
            </div>
        </div>



    <footer class="fixed-bottom">
        <div class="container-fluid text-center">
            <a href="https://www.instagram.com/europcar/" target="_blank" class="btn btn-primary">Instagram</a>
            &emsp;
            <a href="https://www.facebook.com/europcar/" target="_blank" class="btn btn-primary">Facebook</a>
        </div>
    </footer>
    </div>
</body>