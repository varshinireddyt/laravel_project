<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" media="screen and (min-width: 900px)" type="text/css" href="portfolio.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #ffff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #ffff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <div class="bg-image img1">
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Welcome to My Portfolio
                </div>

                <div class="links">
                    <a href="{{ route('login') }}">Home</a>
                    <a href="{{ route('login') }}">MySkills</a>
                    <a href="{{ route('login') }}">Recommendations</a>
                    <a href="{{ route('login') }}">Experience</a>
                    <a href="{{ route('login') }}">Works</a>
                    <a href="{{ route('login') }}">Blog</a>
                    <a href="{{ route('login') }}">Experience</a>
                </div>
                <center>
       <!-- <form action="HomePage.php" method="post" enctype="multipart/form-data" >    -->

       <button class="button" type="submit" name="download"><i class="fa fa-download"></i> <a href="algorand.pdf" download>Download Resume </a></button>
     
    </center>
            </div>
        </div>
        </div>
    </body>
</html>
