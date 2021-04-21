<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Portfolio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        nav {
            font-family: 'Josefin Sans', sans-serif;
        }
        body {
            background-color: #f76319;
        }
        .card-horizontal {
            display: flex;
            flex: 1 1 auto;
        }
        .card {
            margin: 0 auto;
            float: none;
            margin-bottom: 10px;
        }

        .divider:first-child{
            margin-top:25px;
        }
        .divider{
            text-align:center;
            padding:30px 0;
            margin:0 30%;
            box-shadow: 0 1em 1em -1em rgba(0, 0, 0, .25);
        }
        .container{
            padding: 20px;
        }
        .btn{
            border-radius: 18px;
            box-shadow: 5px 5px 5px rgba(0,0,0,0.2);
            transition: 0.5s ease;
            cursor: pointer;
        }
        .btn:hover {
            transform: scale(1.05);
            box-shadow: 5px 5px 15px rgba(0,0,0,0.6);
        }
        .card {
            border-radius: 18px;
            background: white;
            box-shadow: 5px 5px 5px rgba(0,0,0,0.5);
            margin: 9px;

        }
        .card:hover {
            transform: scale(1.01);
            box-shadow: 5px 5px 15px rgba(0,0,0,0.6);
        }
        .card {
            transition: 0.5s ease;
            cursor: pointer;
        }
        img {
            border-radius: 18px;
        }
        .divider:first-child{
            margin-top:25px;
        }
        .divider{
            text-align:center;
            padding:30px 0;
            margin:0 30%;
            box-shadow: 0 1em 1em -1em rgba(0, 0, 0, .25);
        }

    </style>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home">Portfolio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon    "></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about">Over mij</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="stage">Stage</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Schoolopdrachten
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="java">Java</a>
                    <a class="dropdown-item" href="html-css">HTML & CSS</a>
                    <a class="dropdown-item" href="javascript">JavaScript</a>
                    <a class="dropdown-item" href="php">PHP</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Beroepsexamen
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="rent-a-car">Rent-a-Car</a>
                    <a class="dropdown-item" href="klantgesprekken">Klantgesprekken</a>
                    <a class="dropdown-item" href="kerntaken">Kerntaken</a>
                    <a class="dropdown-item" href="keuzedelen">Keuzedelen</a>
                </div>
            </li>
        </ul>
    </div>
</nav>


<body>

<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="img-square-wrapper">
                    <img class="" src="https://jazel1.s3.us-east-1.amazonaws.com/LDyqFvwukHbapgqeMj142tdy4rpmfgtAfrhc/CDy2BvBgoiXPo024/Vm3qUg%3D%3D/FjioF%2B1vp2na70m8IWI87MNu4ro1VQde/header.jpg" alt="Card image cap" alt="Card image cap">
                </div>
                <div class="card-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Rent-a-Car</h4>
                        <a class="card-text">&#9745;Voor het beroepsexamen moest ik een website maken. Ik kon zelf kiezen tussen een aantal websites.
                            Ik heb gekozen voor Rent-a-Car. Ik kreeg een lijst met functionaliteiten die ik moest toepassen in de website.
                            Hieronder ga ik elke pagina laten zien.
                            Je kan de website ook <a href="http://agile-sierra-31946.herokuapp.com/welcome">HIER</a> zelf bezoeken!<br><br>
                            &#9745;Rent-a-Car is een autoverhuurbedrijf. Er is een garage van waaruit de auto’s verhuurd en weer
                            ingenomen worden. Verder is er een kantoor waar de administratie gevoerd wordt.
                            Het doel van de website is het huren van een auto makkelijk maken voor klanten. En daarmee dient
                            de service aan klanten te verbeteren.
                            Een doelgroep van de website is iedereen die een auto wil huren. Bedrijven die duurdere auto’s
                            willen huren vormen de belangrijkste doelgroep. Daarnaast zijn er de medewerkers die de auto’s
                            voor de klanten moeten klaarzetten.<br><br>

                        <div class="card-footer">
                            <small class="text-muted">Vishay Boedhoe, 2091155</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="divider"><h2 class="text-white">Voor iedereen te zien</h2></div>
<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Homepage</h4>
                        <p class="card-text">&#9745;De Homepage. Ik heb ervoor gezorgd dat de bezoeker gelijk geïnformeerd wordt over
                        de website. De homepage is een openbare pagina van de website. Daarop zie je foto’s van de mooiste auto’s
                            die Rent-a-Car verhuurt. Verder kan je op deze pagina wat informatie over het bedrijf vinden. Op de
                            hoofdpagina vind je ook de telefoonnummers en het adressen waar de auto’s gehuurd kunnen worden.

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('img/homepage.png') }}" alt="Card image cap">
                                    <div class="carousel-caption d-none d-md-block text-light">
                                        <h5>Homepage</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('img/homepage1.png') }}" alt="Card image cap">
                                    <div class="carousel-caption d-none d-md-block text-dark">
                                        <h5>Homepage assortiment</h5>
                                    </div>
                                </div>

                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                                <span class="sr-only">Vorige</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                                <span class="sr-only">Volgende</span>
                            </a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Vishay Boedhoe, 2091155</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Assortiment</h4>
                        <p class="card-text">&#9745;Het Assortiment. Hier kan je alle beschikbare auto's vinden.
                        Ik kreeg als opdracht dat een klant een auto moet kunnen huren. Als je nog geen account heb aangemaakt, dan kan je geen auto huren.
                        Wanneer je ingelogd bent, kan je een auto huren. Je kan de auto's zoeken op datum om te zien welke auto's nog beschikbaar zijn.


                        <div class="row">
                            <div class="col">
                                <img class="" src="{{ asset('img/assortiment.png') }}" alt="Card image cap">
                                <div class="text-dark">
                                    <h5>Voor iedereen te zien</h5>
                                </div>
                            </div>

                            <div class="col">
                                <img class="" src="{{ asset('img/assortiment1.png') }}" alt="Card image cap">
                                <div class="text-dark">
                                    <h5>Na het inloggen</h5>
                                </div>
                            </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Contact</h4>
                        <p class="card-text">&#9745;De Contactpagina. Op de contactpagina kan je andere gegevens
                            vinden zoals het adres van het kantoor en het
                            postadres. Ook op deze pagina’s worden de telefoonnummers vermeld. Niet veel speciaals.

                        <div class="row">
                            <div class="col">
                                <img class="" src="{{ asset('img/contact.png') }}" alt="Card image cap">
                                <div class="text-light">
                                    <h5>Contact</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Registratiepagina</h4>
                        <p class="card-text">&#9745;De Registratiepagina. Hier kan een nieuwe klant een account aanmaken.
                        Dit doe je door je gegevens in te vullen. Je moet je voornaam, achternaam, email, adres, postcode,
                        woonplaats, telefoonnummer en geboortedatum opgeven. Ook moet je een wachtwoord hebben natuurlijk.

                        <div class="row">
                            <div class="col">
                                <img class="" src="{{ asset('img/registreren.png') }}" alt="Card image cap">
                                <div class="text-light">
                                    <h5>Contact</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Inlogpagina</h4>
                        <p class="card-text">&#9745;De Inlogpagina. Hier kunnen de klanten inloggen als ze een account hebben.
                        Door in te loggen krijg je toegang tot je accountgegevens, en kan je een auto naar je keuze huren.
                        Je kan ook je factuur vinden van wat je hebt gereserveerd. Reserveren maar!

                        <div class="row">
                            <div class="col">
                                <img class="" src="{{ asset('img/inloggen.png') }}" alt="Card image cap">
                                <div class="text-light">
                                    <h5>Contact</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="divider"><h2 class="text-white">Na het inloggen (klant)</h2></div>
<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Reserveren</h4>
                        <p class="card-text">&#9745;Reserveren. Als je een auto wilt gaan reserveren, moet je eerst een auto kiezen.
                        Als je dan op "reserveren" klikt, kom je op de reserveerpagina terecht. Dit is de reserveerpagina.
                            Hier kan je je gewenste reserveerperiode opgeven.
                        Nadat je dit hebt ingevuld, wordt de auto niet meer beschikbaar voor andere, voor die gekozen periode. Je kan hierna je factuur terug vinden.

                        <div class="row">
                            <div class="col">
                                <img class="" src="{{ asset('img/reserveren.png') }}" alt="Card image cap">
                                <div class="text-light">
                                    <h5>Contact</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Factuur</h4>
                        <p class="card-text">&#9745;De Factuur. Hier kan je je reserveer gegevens vinden. Je ziet je normale gegevens,
                        en je ziet ook je gereserveerde periode. Ook vind je de totale prijs, excl. en incl. BTW. Je ziet ook de autogegevens hier.

                        <div class="row">
                            <div class="col">
                                <img class="" src="{{ asset('img/factuur.png') }}" alt="Card image cap">
                                <div class="text-light">
                                    <h5>Contact</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Wijzigen</h4>
                        <p class="card-text">&#9745;Wijzigen. Heb je nou de verkeerde gegevens ingevuld?
                            Dan kan de klant hier zijn gegevens wijzigen. Je kan je voornaam, achternaam, email, adres, postcode,
                            woonplaats en telefoonnummer wijzigen. Nadat je dit allemaal hebt ingevuld, kun je op wijzigen klikken en wordt alles gewijzigd.
                            Je kan ook individueel je gegevens wijzigen, dus bijvoorbeeld alleen je voornaam of email.

                        <div class="row">
                            <div class="col">
                                <img class="" src="{{ asset('img/wijzigen.png') }}" alt="Card image cap">
                                <div class="text-light">
                                    <h5>Contact</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="divider"><h2 class="text-white">Na het inloggen (medewerker)</h2></div>
<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Homepage (Admin)</h4>
                        <p class="card-text">&#9745;Homepage voor de Admin. Wanneer de Admin (medewerker) inlogt, wordt het navigatiesysteem uitgebreider.
                        De Admin heeft extra pagina's en functies om uit te voeren. Hierdoor kunnen klanten niet bij de functies komen. Alleen de Admin kan dat.

                        <div class="row">
                            <div class="col">
                                <img class="" src="{{ asset('img/adminhome.png') }}" alt="Card image cap">
                                <div class="text-light">
                                    <h5>Contact</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Gereserveerd</h4>
                        <p class="card-text">&#9745;Gereserveerd. Hier kan de medewerker zien welke auto's klaargezet moeten worden. De
                        medewerker kan zien welke auto's zijn gereserveerd, en welke klanten hebben gereserveerd. De medewerker ziet alle
                        benodigde klantgegevens. De medewerker kan ook de auto verwijderen als er iets gebeurd. (stuk, annulering etc.)

                        <div class="row">
                            <div class="col">
                                <img class="" src="{{ asset('img/gereserveerd.png') }}" alt="Card image cap">
                                <div class="text-light">
                                    <h5>Contact</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">CRUD (Create, Read, Update, Delete)</h4>
                        <p class="card-text">&#9745;CRUD. Hier kan de medewerker een nieuwe auto aanmaken. De medewerker kan ook
                        de auto's zien die momenteel in het assortiment staan. De medewerker kan ook de auto's wijzigen en verwijderen.
                        CRUD staat voor create, read, update en delete.

                        <div class="row">
                            <div class="col">
                                <img class="" src="{{ asset('img/crud.png') }}" alt="Card image cap">
                                <div class="text-light">
                                    <h5>Contact</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Toevoegen</h4>
                        <p class="card-text">&#9745;Toevoegen. Hier kan de medewerker, na de CRUD, een nieuwe auto toevoegen aan het assortiment.
                            Hier moet je de merk en model toevoegen. Ook moet je de kenteken
                            en prijs toevoegen. Als laatst moet je een afbeelding van de auto toevoegen. De resolutie van de afbeelding is 600x300, zoals aangegeven.
                            Daarna kun je klikken op toevoegen, en komt de auto in het assortiment.


                        <div class="row">
                            <div class="col">
                                <img class="" src="{{ asset('img/toevoegen.png') }}" alt="Card image cap">
                                <div class="text-light">
                                    <h5>Contact</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Auto Wijzigen</h4>
                        <p class="card-text">&#9745;Auto wijzigen. Hier kan je een auto wijzigen, door bij de CRUD op "wijzigen" te klikken.
                        Je kan het merk, model, kenteken, prijs en de afbeelding wijzigen. Als je dit allemaal hebt ingevuld, dan kan je
                        op wijzigen drukken. Nu worden de gegevens van de auto veranderd in het assortiment.

                        <div class="row">
                            <div class="col">
                                <img class="" src="{{ asset('img/autowijzigen.png') }}" alt="Card image cap">
                                <div class="text-light">
                                    <h5>Contact</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</body>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
