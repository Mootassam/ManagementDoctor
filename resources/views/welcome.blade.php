<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <img  href=" {{asset('hopital.jpg')}}">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                background-image: url("img/doctor.jpg");
                background-repeat:no-repeat;
                background-position:center center;
                background-size: cover;
                color: #636b6f;
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
                color: #636b6f;
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
    </head >
    <body  >
        <div class="flex-center position-ref full-height">

            @if (Route::has('login'))
                <div class="top-right links">
                       <a href="{{ url('/home') }}">Home</a>
              <a href="{{ url('/About') }}">Services</a>
                 <a href="{{ url('/Departments') }}">Home</a>

                    @auth
                        <a  href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">



            </div>
        </div>
    </body>
</html>
