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

              <table>

                @foreach ($cars as $car)
                <form action="/reservations" method="post">
                  @csrf
                  <input type="hidden" name="id_car" value="{{ $car->id}}">
                     <tr><td rowspan="5"><img class="imtab" src="/images/{{ $car->id}}.jpg" style="weight: 150px; height:150px;"/></td>
                     <td class="reserp2">Marka:</td><td>{{ $car->name }}</td>


                     <td rowspan="5" class="reserp"><p>Data wynajęcia</p><input type="date" name="rent_car" class="tab_button"/></td>

                     <td rowspan="5" class="reserp"><p>Data zwrotu</p><input type="date" name="return_car" class="tab_button"/></td>

                     <td rowspan="5"><input type="submit" name="reserv" value="Rezerwuj" class="tab_button2"/></td></tr>


                     <tr><td class="reserp2">Model:</td><td>{{ $car->model }}</td></tr>
                     <tr><td class="reserp2"> Pojemność:</td><td>{{ $car->Engine_capacity}}.0L</td></tr>
                     <tr><td class="reserp2">Moc:</td><td>{{ $car->Horsepower}} KM</td></tr>
                     <tr><td class="reserp2">Opis</td><td>{{ $car->ShortDescription}}</td></tr>
                     <tr style=" height:10px;"><td></td><td></td></tr>
                   </form>
                 @endforeach
              </table>

            </div>
            <div class="botton">
                <p>Pracę wykonał: Arkadiusz Donica i Mikołaj Woźniak | Grupa: zIinz_3_K32_Inf (W10)</p>
            </div>
    </body>
</html>
