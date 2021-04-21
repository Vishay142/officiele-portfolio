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
            background-color: lightpink;
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

        @media (max-width:991.98px) {
            .padding {
                padding: 1.5rem
            }
        }

        @media (max-width:767.98px) {
            .padding {
                padding: 1rem
            }
        }
        img {
            border-radius: 18px;
        }

    </style>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home">Portfolio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
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
                    <img class="" src="https://wallpapercave.com/wp/wp6415210.jpg" alt="Card image cap">
                </div>
                <div class="card-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Over Mij</h4>
                        <p class="card-text">Mijn naam is Vishay, en ik ben 19 jaar oud.
                            Ik volg momenteel de opleiding Applicatieontwikkelaar.
                            <br><br>Dit is mijn portfolio van wat ik allemaal heb gemaakt de afgelopen 2 jaar. Ik laat al mijn projecten zien waarmee ik begonnen ben, ik en laat ook zien waar ik mee ben geëindigd.<br>
                        <h4 class="card-title">Schoolperiode</h4>
                        <p class="card-text">In de afgelopen 2 jaar heb ik aan veel projecten gewerkt. Zowel front-end als back-end.
                            In het begin vond ik het heel moeilijk om te coderen, maar door steeds meer opdrachten te maken kwam ik er wel uit.
                            Ik kreeg ook goede hulp van mijn docenten. Persoonlijk ligt mijn voorkeur bij frontend.
                            Met back-end werken vind ik ook super leuk. Ik vind het leuk om geavanceerde dingen te maken, denk aan inlogpagina's, met Databases werken.
                            Ik heb vooral gewerkt met de talen HTML, CSS, Javascript, PHP en MySQL.
                            <br><br>Afgelopen jaar heb ik ervoor gekozen om met een PHP Framework te werken voor mijn examen, namelijk Laravel.
                            Ik heb gekozen voor Laravel, omdat ik PHP best ingewikkeld en onoverzichtelijk vond. Ook heeft Laravel een grote community en een goede command line support.
                            Laravel is de meestgebruikte Framework in PHP en is gratis te gebruiken. Ik heb Laravel gevonden op Reddit.<br>
                            <img class="" src="https://www.noardcode.nl/storage/images/800/content/vIMR3yGmXbUv3a8USjeL4GlJhc0JuF2vltZXGV9a.png" alt="Card image cap">
                        <h4 class="card-title">Hobby's</h4>
                        <p class="card-text">In mijn vrije tijd produceer ik veel muziek, zoals ik eerder heb vermeld. Ik kreeg op mijn 12e mijn eerste piano. Ik speelde er heel veel op.
                            Een jaartje later kreeg ik via een vriend een programma om muziek op te maken, namelijk FL Studio 10 (toen de tijd). Na 5 jaar had ik besloten om muziek online te zetten. Het is zo erg opgeblazen dat ik hiervan mijn werk heb gemaakt!
                            <br><br>Ik werk ook veel met foto & video editing. Ik maak veel artworks en designs voor mijn muziek. Ik edit ook mijn eigen videos die uiteindelijk op YouTube terecht komen.
                            Ik gebruik Photoshop voor foto editing, en Sony Vegas 12 Pro voor video editing.
                        </p>
                        <div class="page-content page-container" id="page-content">
                                <div class="row container d-flex justify-content-center">
                                   <a href="https://www.youtube.com/channel/UCamj_BIKauJO-ZQkuFmvH1g" type="button" class="btn btn-social-icon btn-outline-youtube"><i class="fa fa-youtube"></i></a>
                                    <a href="https://www.instagram.com/prodvshy/" type="button" class="btn btn-social-icon btn-outline-instagram"><i class="fa fa-instagram"></i></a>
                                </div>
                        </div>
                        <h4>Behaalde cijfers</h4>
                        <img class="" src="{{ asset('img/cijfers.png') }}" alt="Card image cap">
                <div class="card-footer">
                    <small class="text-muted">Vishay Boedhoe, 2091155</small>
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

