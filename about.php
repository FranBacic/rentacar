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

        .map-container-2{
    overflow:hidden;
    padding-bottom:56.25%;
    position:relative;
    height:0;
    }
    .map-container-2 iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
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
                     <h1>O nama</h1>
            <p>Naša rent-a-car firma osnovana je s ciljem pružanja kvalitetne usluge najma automobila i zadovoljavanja potreba naših klijenata. Osnovali smo ovu tvrtku s strašću prema automobilima i željom da omogućimo ljudima jednostavan pristup pouzdanom prijevozu.

            Naša priča započela je s vizijom stvaranja rent-a-car tvrtke koja će biti sinonim za pouzdanost, fleksibilnost i vrhunsku uslugu. Kroz godine rada i iskustva, uspjeli smo izgraditi ime koje se temelji na povjerenju naših klijenata i njihovim pozitivnim iskustvima s našim uslugama.

            Svjesni smo koliko je važno imati pristup pouzdanom i udobnom prijevozu u današnjem svijetu. Stoga smo uložili napore u stvaranje raznolikog voznog parka koji odgovara različitim potrebama naših klijenata. Bez obzira trebate li automobil za posao, odmor ili posebnu prigodu, imamo vozilo koje će vam pružiti sigurnost i udobnost tijekom vožnje.

            Kroz naš rad, kontinuirano poboljšavamo naše usluge kako bismo osigurali da svaki klijent ima izvanredno iskustvo s našom tvrtkom. Sve naše aktivnosti temelje se na profesionalizmu, transparentnosti i brizi o potrebama naših klijenata. Nastojimo pružiti jednostavan i ugodan proces rezervacije, prijateljsku podršku i konkurentne cijene.

            Naš osnivač je postavio temelje za naš uspjeh, a naša posvećena ekipa nastavlja graditi na tom naslijeđu. Ponosni smo na ono što smo postigli do sada, ali istovremeno gledamo prema budućnosti s vizijom da postanemo vodeća rent-a-car tvrtka koja postavlja standarde u industriji.

            Hvala vam što ste dio naše priče. Veselimo se prilici da vam pružimo vrhunsku uslugu i olakšamo vaše putovanje.</p>
            <hr>
<br><br>
            <h1>Gdje se nalazimo</h1>
                </div>
            </div>
        </div>

        <!--Google map-->
<div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 500px; display: flex; justify-content: center; align-items: center;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.750246342373!2d18.69481729999999!3d45.55534950000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475ce7b768a4ad8f%3A0x3ee3cc1d29e927f3!2sEurodom%20Osijek%2C%2031000%2C%20Osijek!5e0!3m2!1shr!2shr!4v1687502492235!5m2!1shr!2shr" frameborder="0"
    style="border:0; height: 80%; width: 80%;" allowfullscreen></iframe>
</div>

<!--Google Maps-->

    <footer class="fixed-bottom">
        <div class="container-fluid text-center">
            <a href="https://www.instagram.com/europcar/" target="_blank" class="btn btn-primary">Instagram</a>
            &emsp;
            <a href="https://www.facebook.com/europcar/" target="_blank" class="btn btn-primary">Facebook</a>
        </div>
    </footer>
    </div>
</body>