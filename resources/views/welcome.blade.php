<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Portfolio | Vishay Boedhoe | 2091155</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            nav {
                font-family: 'Josefin Sans', sans-serif;
            }
            body {
                background-color: lightseagreen;
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
                        <img class="" src="https://wallpapercave.com/wp/wp6415171.jpg" alt="Card image cap">
                    </div>
                    <div class="card-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Over Mij</h4>
                            <p class="card-text">Mijn naam is Vishay, en ik ben 19 jaar oud.
                            Op deze website laat ik mijn portfolio zien. Ik laat al mijn projecten zien van afgelopen 2 jaar.

                            <div class="card-footer">
                                <small class="text-muted">Vishay Boedhoe, 2091155</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    <div class="divider"><h2 class="text-white">Schoolopdrachten</h2></div>
    <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="img-square-wrapper">
                            <img class="img" src="https://elearn.lifelearners.ng/demo/wp-content/uploads/2017/11/java-android-banner.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Java</h5>
                            <p class="card-text">&#9745;Alle projecten van Java.</p>
                            <a href="java" class="btn btn-outline-success">Ontdek meer</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="img-square-wrapper">
                            <img class="" src="https://www.bringyourownlaptop.co.nz/images/banner-html5-advertising.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">HTML & CSS</h5>
                            <p class="card-text">&#9745;Alle projecten van HTML & CSS.</p>
                            <a href="html-css" class="btn btn-outline-success">Ontdek meer</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="img-square-wrapper">
                            <img class="" src="https://coursework.vschool.io/content/images/2016/03/javascript-logo-banner.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Javascript</h5>
                            <p class="card-text">&#9745;Alle projecten van Javascript.</p>
                            <a href="javascript" class="btn btn-outline-success">Ontdek meer</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="img-square-wrapper">
                            <img class="" src="https://www.vacker360.com/wp-content/uploads/2020/07/php-development.png" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">PHP</h5>
                            <p class="card-text">&#9745;Alle projecten van PHP.</p>
                            <a href="php" class="btn btn-outline-success">Ontdek meer</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="divider"><h2 class="text-white">Beroepsexamen</h2></div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="img-square-wrapper">
                        <img class="" src="https://jazel1.s3.us-east-1.amazonaws.com/LDyqFvwukHbapgqeMj142tdy4rpmfgtAfrhc/CDy2BvBgoiXPo024/Vm3qUg%3D%3D/FjioF%2B1vp2na70m8IWI87MNu4ro1VQde/header.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Rent-a-Car</h5>
                        <p class="card-text">&#9745;Mijn examenopdracht Rent-a-Car.</p>
                        <a href="rent-a-car" class="btn btn-outline-success">Ontdek meer</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="img-square-wrapper">
                        <img class="" src="https://www.betafence.nl/sites/default/files/styles/news_1_column/public/media_root/betafence-academy-1200x400.jpg?itok=c51sDE0a" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Klantgesprekken</h5>
                        <p class="card-text">&#9745;Alle videos van de klantgesprekken.</p>
                        <a href="klantgesprekken" class="btn btn-outline-success">Ontdek meer</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="img-square-wrapper">
                        <img class="" src="https://www.dicore-incasso.nl/wp-content/uploads/2016/10/vordering.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kerntaken</h5>
                        <p class="card-text">&#9745;Alle benodigde kerntaken voor het beroepsexamen.</p>
                        <a href="kerntaken" class="btn btn-outline-success">Ontdek meer</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="img-square-wrapper">
                        <img class="" src="https://www.smartphoneclub.com/wp-content/uploads/2018/04/android-1814600_1920-1200x400.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Keuzedelen</h5>
                        <p class="card-text">&#9745;Alle keuzedelen. Verdieping software, Mobile Development en digitale vaardigheden.</p>
                        <a href="keuzedelen" class="btn btn-outline-success">Ontdek meer</a>
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
