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
            background-color: mediumpurple;
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
                    <img class="img-fluid" src="https://wallpapercave.com/wp/wp6415208.jpg" alt="Card image cap">
                </div>
                <div class="card-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Het bedrijf Duvoor Media</h4>
                        <p class="card-text">Duvoor Media is een online media bedrijf die richt op toeristen en hotels/restautants.
                            Ze vinden het belangrijk dat toeristen op het gebied van reizen en vrije tijd snel en
                            compleet geïnformeerd worden.
                            Ze zoeken de leukste dingen die een stad, gebied en/of dorp the bieden heeft en
                            promoten deze met hun producten. Ze maken producten op het gebied van reizen en
                            vrije tijd die naast praktische info ook de leukste bezienswaardigheden tonen.
                            <br><br>Er worden verschillende producten en diensten geleverd door Duvoor Media zoals,
                            apps voor verschillende bedrijven. Denk aan restaurant en hotels. Ook worden er
                            kaarten ontworpen en geproduceerd voor toeristen. Daarna wordt het geleverd aan
                            hotels om uit te delen aan de toeristen.
                            Er worden verschillende diensten geleverd door Duvoor Media zoals: SEA, SEO,
                            webdesign, online-marketing, klantenservice en maps-productie.
                        <br><br>Ik zat bij de webdesign afdeling. De webdesign afdeling bestaat uit app-ontwikkelaars
                            en webdesigners. De afdeling bestaat uit 2 mensen. 1 van hen doet de front-end
                            gedeelte en de ander back-end. Voor de rest doen de webdesigners hetzelfde.
                            De grootste app die ze tot nu toe hebben gemaakt is Amsterdam: The Map. Het heeft
                            al meer dan 1 miljoen downloads. Alle apps worden gemaakt met Appmachine. Al de
                            apps die zijn gemaakt komen ook overeen met elkaar. Neem een voorbeeld aan,
                            Doen in Almere, Doen in Amersfoort. Daardoor zijn de apps heel makkelijk te
                            gebruiken.
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <img class="img-fluid" src="{{ asset('img/almere.png') }}" alt="Card image cap"><br>
                                    </div>
                                    <div class="col">
                                        <img class="img-fluid" src="{{ asset('img/duvoorapp.png') }}" alt="Card image cap"><br>
                                    </div>
                                </div>
                                <img class="img-fluid" src="{{ asset('img/organigram.png') }}" alt="Card image cap"><br>


                                <h4 class="card-title">Verloop van de BPV</h4>
                        <p class="card-text">Ik heb mijn stageplek gevonden op www.stagemarkt.nl. Ik heb daar de vacature
                            gevonden van Duvoor Media. De vacature voor stagiar paste heel goed bij mijn
                            profiel. Na mijn CV gestuurd te hebben, kreeg ik snel een reactie.
                            Mijn rol binnen Duvoor Media is het desigen en bouwen van apps met mijn
                            stagebegeleider. Ik hielp mee bij het designen van o.a knoppen, layouts en icoontjes
                            in Adobe Photoshop en Illustrator. Daarnaast bouwde ik ook de apps met het
                            programma Appmachine.
                        <br><br>Er zijn veel opties om je app naar je eigen smaak te maken. Appmachine is een
                            CMS-systeem en beschikt over veel plug-ins en content. Je kan een “lego-blok” aanmaken
                            met de content die je wilt.
                            Het is verstandig om kennis te hebben over HTML en CSS zodat je elke “lego-blok” kan
                            aanpassen tot hoe je het wilt. In elke “lego-blok” kan je wat anders doen, denk aan knoppen
                            om te bellen naar een restaurant of een hotel, of een hele nieuwe pagina om alle
                            hotels/restaurant op te weergeven.
                            <br><br>Tijdens het bouwen van deze app ben ik ook bezig geweest met het designen van
                            icoontjes en knoppen. Hiermee kon ik de app een vernieuwende look geven
                            waardoor er meer potentiële gebruikers de app zouden downloaden. Ook heb ik de
                            app laten functioneren zodat het gemakkelijk word voor de gebruiker.
                            Ook heb ik soms geholpen bij het sorteren van de maps. Daar staat alle info in van
                            de stad waar je in verblijft. Het is de app verwerkt op een kaart. De maps moesten
                            gesorteerd worden om verzonden te worden naar hotels.
                            <img class="img-fluid" src="{{ asset('img/appmachine.png') }}" alt="Card image cap"><br>
                           <h4 class="card-title">Eindresultaten met AppMachine</h4>
                        <img class="img-fluid" src="{{ asset('img/dia.png') }}" alt="Card image cap"><br>
                        <h4 class="card-title">Afgetekende uren Duvoor Media</h4>
                        <img class="img-fluid" src="{{ asset('img/uren.png') }}" alt="Card image cap">
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


