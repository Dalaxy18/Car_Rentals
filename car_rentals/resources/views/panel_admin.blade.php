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
            table, th, td{
                border: 1px solid black;
                align: center;
            }
            p{
                font-weight: bold;
            }
            .button{
                border-radius: 20px;
                border: 2px #228B22 solid;
                background-color: #ADFF2F;
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
            <div class="mid">
                <h1>Panel Administratora</h1>
                <h3>Panel administratora pozwala na dodanie nowego samochodu do aktualnej oferty wypożyczalni znajdującej się w zakładce "Nasze auta"</h3>

                <table>
                  <form action="/upload_car" method="post">
                    @csrf
                    <tr>
                        <th>Kolumna</th>
                        <th>Wartość</th>
                    </tr>
                    <tr>
                        <td><p>Marka:</p></td>
                        <td><input type="text" name="name" style="width: 200px;"/></td>
                    </tr>
                    <tr>
                        <td><p>Model:</p></td>
                        <td><input type="text" name="model" style="width: 200px;"/></td>
                    </tr>
                    <tr>
                        <td><p>Pojemność:</p></td>
                        <td><input type="text" name="eng_cap" style="width: 200px;"/></td>
                    </tr>
                    <tr>
                        <td><p>Moc:</p></td>
                        <td><input type="text" name="hrs_pow" style="width: 200px;"/></td>
                    </tr>
                    <tr>
                        <td><p>Opis:</p></td>
                        <td><input type="text" name="s_des" style="width: 200px;"/></td>
                    </tr>
                    <tr>
                        <td><p>Zdjęcie:</p></td>
                        <td><input type="file" style="width: 200px;"/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><center><input type="submit" name="add" value="Dodaj do oferty" class="button"/></center></td>
                    </tr>
                  </form>
                </table>

            </div>
            <div class="botton">
                <p>Pracę wykonał: Arkadiusz Donica i Mikołaj Woźniak | Grupa: zIinz_4_K32_Inf (W10)</p>
            </div>
    </body>
</html>
