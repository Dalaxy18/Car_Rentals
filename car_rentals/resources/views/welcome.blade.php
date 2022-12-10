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
                <h1><img src="/images/car2.png" width="150"><a style='color:orange' href="{{ url('/welcome') }}">AM - Cars</a></h1>
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
                        <a href="{{ url('/welcome') }}">O nas</a> |
                        <a href="{{ url('/cars') }}">Nasze auta</a> |
                        @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/reservation') }}">Zarezerwuj</a> |
                                    <a href="{{ url('/my_reserv') }}">Moje rezerwacje</a> |
                                    <a href="{{ url('/panel_admin') }}">Panel-Admin</a> |
                              @endauth
                        @endif
                        <a href="{{ url('/contact') }}">Kontakt</a>
            </div>
            <div class="mid-home">
                <div class="hometxt">
                <p>Wypożyczalnia samochodów sportowych AM - Cars oferuje
                     swoim klientom wynajem aut znanych marek do których należą topowe modele Audi RS, BMW seria M, Ford Mustang, Mercedes AMG, czy Dodge.
                     Zapraszamy również do zapoznania się z ofertą wynajmu samochodów sportowych w naszej wypożyczalni.</p>
                </div>
            </div>
            <div class="botton">
                <p>Pracę wykonał: Arkadiusz Donica i Mikołaj Woźniak | Grupa: zIinz_4_K32_Inf (W10)</p>
            </div>
    </body>
</html>
