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
            background-color: #3d4654;
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
                    <img class="img-fluid" src="https://perfecto-web.com/uploads/blog/2017/seo-tips-for-web-programmer-2-en.jpg" alt="Card image cap">
                </div>
                <div class="card-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Wat is HTML? (Hyper Text Markup Language)</h4>
                        <p class="card-text">HTML staat voor Hyper Text Markup Language. HTML is een opmaaktaal.
                            Met opmaaktaal kan je al een beetje raden wat ermee bedoeld wordt.
                            HTML beschrijft de opmaak/structuur van een webpagina. Een mooi voorbeeld is deze website.
                            Op de homepage van ProgrammeerPlaats zie je al duidelijk de verschillende elementen binnen de pagina.
                            Deze elementen zijn opgezet met HTML.<br><br>
                        <h4 class="card-title">Wat is CSS? (Cascading Style Sheets)</h4>
                        <p class="card-text">CSS staat voor Cascading Style Sheets.
                            CSS beschrijft hoe HTML elementen moeten worden weergegeven op het scherm. Met HTML kan je elementen
                            (HTML tags) van een website structureren, zoals het invoegen van hoofdstukken, paragrafen,
                            video’s en afbeeldingen. Met CSS kan je bijvoorbeeld bepalen waar deze elementen moeten komen op het scherm,
                            hoe groot het moet zijn en wat de kleur is. HTML kan je zien als de fundering van een huis en
                            CSS zorgt voor het uiterlijk en de inrichting.<br>
                        <div class="card-footer">
                            <small class="text-muted">Vishay Boedhoe, 2091155</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('img/challenge1.png') }}" alt="Card image cap">
                    <div class="carousel-caption d-none d-md-block text-dark">
                        <h5>Challenge 1</h5>
                        <p>Ik moest al opdracht een grafiek maken.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/challenge2.png') }}" alt="Card image cap">
                    <div class="carousel-caption d-none d-md-block text-dark">
                        <h5>Challenge 2</h5>
                        <p>Hier moest ik een kalender maken.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/challenge3.png') }}" alt="Card image cap">
                    <div class="carousel-caption d-none d-md-block text-dark">
                        <h5>Challenge 3</h5>
                        <p>Hier moest ik ervoor zorgen dat als je een kleur intypt, dat de achtergrond veranderd in de opgegeven kleur.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/challenge4.png') }}" alt="Card image cap">
                    <div class="carousel-caption d-none d-md-block text-dark">
                        <h5>Challenge 4</h5>
                        <p>Hier moest ik een website maken, Wilkens Installatietechniek.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/challenge6.png') }}" alt="Card image cap">
                    <div class="carousel-caption d-none d-md-block text-dark">
                        <h5>Challenge 6</h5>
                        <p>Hier moest ik positioneren.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/challenge8.png') }}" alt="Card image cap">
                    <div class="carousel-caption d-none d-md-block text-dark">
                        <h5>Challenge 8</h5>
                        <p>Hier moest ik een website maken met boerenkool recepten.</p>
                    </div>
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
    </div>

</body>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
