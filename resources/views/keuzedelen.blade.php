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
            background-color: #88eb7a;
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
        video {
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
                    <img class="" src="https://www.smartphoneclub.com/wp-content/uploads/2018/04/android-1814600_1920-1200x400.jpg" alt="Card image cap" alt="Card image cap">
                </div>
                <div class="card-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Keuzedelen</h4>
                        <p class="card-text">Voor het beroepsexamen moest ik 3 keuzedelen uitkiezen en inleveren.
                        De keuzedelen behoren tot de diploma-eisen. Ik heb gekozen voor Mobile Development, digitale vaardigheden
                        en verdieping software. Hier beneden leg ik elke opdracht uit met de ingeleverde en goedgekeurde opdrachten.

                        <div class="card-footer">
                            <small class="text-muted">Vishay Boedhoe, 2091155</small>
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
                    <div class="img-square-wrapper">
                        <img class="" src="https://1.bp.blogspot.com/-7A4WynwLsMw/XbBpCXG8fHI/AAAAAAAAMt4/uOa1bpLskYgrwGbllhSu2SDj_Mig8SXJQCLcBGAsYHQ/s1600/2000_600px.gif" alt="Card image cap" alt="Card image cap">
                    </div>
                    <div class="card-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Mobile Development (Android)</h4>
                            <p class="card-text">&#9745;Voor Mobile Development heb ik een Android app gemaakt.
                                Ik heb ervoor gekozen omdat ik vaak ook op apps zit. Ik moest eerst
                                een Android cursus volgen op Udacity. De ontwikkelingomgeving die
                                ik heb gebruikt heet Android Studio. Ik heb een muziek-app gemaakt
                                waar je mijn muziek kan afspelen. De screencast van anderhalve minuut kan je hieronder bekijken.<br><br>
                                <video class="video-fluid z-depth-1" autoplay loop controls muted>
                                    <source src="{{ asset('img/android.mp4') }}" type="video/mp4" />
                                </video>

                            <div class="card-footer">
                                <small class="text-muted">Vishay Boedhoe, 2091155</small>
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
                <div class="img-square-wrapper">
                    <img class="" src="https://miro.medium.com/max/3840/1*UYABX3bGRV_ytnAio2ElNw.jpeg" alt="Card image cap" alt="Card image cap">
                </div>
                <div class="card-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Digitale Vaardigheden (Adobe XD)</h4>
                        <p class="card-text">&#9745;In Digitale Vaardigheden moest ik laten zien
                            dat ik digitaal vaardig ben, en een app/website ontwerpen, dus niet coderen.
                            Ik vond het zelf een leuke keuzedeel, omdat ik mijn creativiteit kwijt kon.
                            Ik heb een app ontworpen. Op de app kan je geschiedenis vinden over verschillende
                            muziekstijlen vinden. Ook kan je mijn muziek vinden en afspelen. Ik heb het programma
                            Adobe XD gebruikt, omdat het mij werd aangeraden door de docenten. De screencast
                            van 5 minuten kan je hieronder bekijken.<br><br>

                            <video class="video-fluid z-depth-1" autoplay loop controls muted>
                                <source src="{{ asset('img/dv.mp4') }}" type="video/mp4" />
                            </video>
                        <div class="card-footer">
                            <small class="text-muted">Vishay Boedhoe, 2091155</small>
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
                <div class="img-square-wrapper">
                    <img class="" src="https://481xy61dp22v2uqbx85ez1tw-wpengine.netdna-ssl.com/wp-content/themes/AppMachine2015/interface/images/logo-appmachine-dark@2x.png" alt="Card image cap">
                </div>
                <div class="card-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Verdieping Software (AppMachine)</h4>
                        <p class="card-text">&#9745;Ik heb voor Verdieping Software gekozen, omdat het te combineren
                        was met stage. Bij mijn stage gebruikte we een CMS-systeem, namelijk AppMachine.
                        AppMachine stelt jou in staat om apps te maken. Je kan apps maken voor je bedrijf of gebruikt
                        de software om apps te maken voor klanten. De editor van deze Nederlandse appmaker
                        ziet er heel goed uit. Het is overzichtelijk en gemakkelijk te gebruiken. Ik moest
                        ook alternatieven benoemen. Ik heb Monday.com en AppYourself gebruikt. Ik moest
                        de voor -en nadelen benoemen van de apps. Ten slotte moest ik mijn leerdoelen opschrijven
                        en deze later evalueren. De presentatie van 7 minuten kan je hieronder bekijken.<br><br>

                            <video class="video-fluid z-depth-1" autoplay loop controls muted>
                                <source src="{{ asset('img/vs.mp4') }}" type="video/mp4" />
                            </video>

                        <div class="card-footer">
                            <small class="text-muted">Vishay Boedhoe, 2091155</small>
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
