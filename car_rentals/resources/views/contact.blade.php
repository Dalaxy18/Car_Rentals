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
                              @endauth
                        @endif
                        <a href="{{ url('/contact') }}">Kontakt</a>
            </div>
            <div class="mid">
                <h2>Kontakt do nas</h2>
                <p>AM - Cars</p>
                <p>Adres: Powstańców Wielkopolskich 5, 61-895 Poznań</p>
                <p>Telefon: 61 55 44 33</p>
                <p>Nip: 783-154-73-45</p>
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2434.1469947447677!2d16.920372251745903!3d52.40401207969323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47045b309dae6ae9%3A0x835a1af76866d48b!2sWy%C5%BCsza%20Szko%C5%82a%20Bankowa%20w%20Poznaniu!5e0!3m2!1spl!2spl!4v1640687824355!5m2!1spl!2spl" width="800" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
                <h3>Skontaktuj się z nami!</h3>
                <input type="enail" placeholder="e-mail"/><br>
                <input type="text" placeholder="Subjcet"/><br>
                <input type="text" placeholder="Meassage" style="height:50px;"/><br>
                <form action="{{ url('/meassage') }}">
                    <input type="submit" value="Wyślij" style="width: 5%;"/>
                </form>
            </div>
            <div class="botton">
                <p>Pracę wykonał: Arkadiusz Donica i Mikołaj Woźniak | Grupa: zIinz_3_K32_Inf (W10)</p>
            </div>
    </body>
</html>
