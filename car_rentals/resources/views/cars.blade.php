<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Car Rentals</title>
        <link rel="stylesheet" href="/css/style.css">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="head">
            <span>
                <h1><img src="/images/car2.png" width="150"><a style='color:orange' href="{{ url('') }}">Car Rentals</a></h1>
            @if (Route::has('login'))
                <div class="right">
                    @auth
                        <a href="{{ url('logout') }}">Log out</a>
                    @else
                        <a href="{{ route('login') }}">Log in | </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </span>
                </div>
            @endif
            </div>
            <div class="top">
                    <p>
                        <a href="">O nas</a> |
                        <a href="">Nasze auta</a> |
                        <a href="">Zarezerwuj</a> |
                        <a href="">Kontakt</a>
            </div>
            <div class="mid">
                <p>SELECT * FROM cars</p>
            </div>
            <div class="botton">
                <p>Pracę wykonał: Arkadiusz Donica i Mikołaj Woźniak | Grupa: zIinz_3_K32_Inf (W10)</p>
            </div>
    </body>
</html>