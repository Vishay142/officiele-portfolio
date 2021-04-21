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
            background-color: #fff27a;
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
                    <img class="" src="https://coursework.vschool.io/content/images/2017/09/JavaScriptBanner.png" alt="Card image cap">
                </div>
                <div class="card-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Wat is Javascript?</h4>
                        <p class="card-text">JavaScript is een populaire programmeertaal die elke webontwikkelaar of
                            programmeur zeker moet beheersen. Het is dé programmeertaal bij het ontwikkelen van dynamische,
                            interactieve webpagina’s en webapplicaties. Door JavaScript aan HTML pagina's toe te voegen
                            is het mogelijk om pagina's meer interactie mee te geven.<br>
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
                    <img class="d-block w-100" src="{{ asset('img/javascript1.png') }}" alt="Card image cap">
                    <div class="carousel-caption d-none d-md-block text-dark">
                        <h5>Opdracht 1</h5>
                        <p>Hier testte ik Javascript.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/javascript3.png') }}" alt="Card image cap">
                    <div class="carousel-caption d-none d-md-block text-light">
                        <h5>Opdracht 3</h5>
                        <p>Dit was de monkeyshuffle opdracht.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/javascript4.png') }}" alt="Card image cap">
                    <div class="carousel-caption d-none d-md-block text-dark">
                        <h5>Opdracht 4</h5>
                        <p>Hier veranderd de afbeelding als je erop klikt.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/javascript41.png') }}" alt="Card image cap">
                    <div class="carousel-caption d-none d-md-block text-light">
                        <h5>Opdracht 4.1</h5>
                        <p>MonkeyChooser. Hier kan je een aap kiezen en erop drukken.</p>
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
