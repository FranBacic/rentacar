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
        <?php include 'nav.php'?>

<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="https://www.autozubak.hr/wp-content/uploads/2022/07/audi-a4.jpg" alt="Audi A4" style="width:100%;">
            </div>

            <div class="item">
                <img src="https://media.peugeot.hr/image/82/7/all-new-208-gt-line-front.561827.17.jpg" alt="Peugeot 208" style="width:100%;">
            </div>

            <div class="item">
                <img src="https://hyundai.hr/wp-content/uploads/2020/09/PDPE_HB_TopTrim_DG03-01_EXT_3-4-front_rgb_v01_w4b-CL_16x9-1255x705.jpg" alt="Hyundai i30" style="width:100%;">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<div class="container-fluid text-center">

        <div class="col-sm-8 text-left">
            <h1>Dobrodošli</h1>
            <p>
            Dobrodošli u našu rent-a-car firmu! Nudimo vam širok izbor vozila i visokokvalitetnu uslugu koja će zadovoljiti sve vaše potrebe za najamom automobila.

            Neovisno o tome jeste li u gradu ili na putovanju, naša rent-a-car usluga pruža vam fleksibilnost i slobodu kretanja. Bez obzira trebate li automobil za poslovna putovanja, obiteljski odmor ili samo kratki izlet, ovdje ćete pronaći vozilo koje odgovara vašim zahtjevima.

            Naš vozni park obuhvaća najnovije modele automobila različitih marki, od kompaktnih automobila do luksuznih limuzina. Sva vozila redovito se održavaju kako bismo osigurali sigurnost i udobnost tijekom vašeg najma. Naša stručna i prijateljska ekipa bit će vam na raspolaganju za bilo kakve upite i pomoć pri odabiru vozila koje najbolje odgovara vašim potrebama.

            Uz našu rent-a-car uslugu, možete uživati ​​u nevjerojatnoj slobodi istraživanja i otkrivanja novih destinacija. Putujte bez ograničenja, prilagodite svoj raspored i iskusite pravu neovisnost na cestama. Naš cilj je pružiti vam izvrsno iskustvo najma automobila, pouzdane usluge i konkurentne cijene.

            Bilo da ste turist koji istražuje nova područja ili poslovni putnik koji treba pouzdan način prijevoza, tu smo da vam pružimo najam vozila koji će zadovoljiti vaše potrebe. Vaše zadovoljstvo našom uslugom naša je najveća nagrada.

            Obratite nam se danas i rezervirajte vozilo koje će vam omogućiti da započnete svoje putovanje s povjerenjem i udobnošću. Uživajte u glatkom i bezbrižnom najmu automobila s našom rent-a-car firmom.</p>
            <hr>
            <h3>Brzi i pouzdani</h3>
            <p>Obratite nam se danas i rezervirajte vozilo koje će vam omogućiti da započnete svoje putovanje s povjerenjem i udobnošću. Uživajte u glatkom i bezbrižnom najmu automobila s našom rent-a-car firmom.</p>
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
</body>