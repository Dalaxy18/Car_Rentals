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
            <div class="mid-reservation">
              <h2 class="resfont">Moje rezerwacje</h2>
              <table class="tabres">

                  <tr class="tdresv">
                      <td class="tdresv">Auto</td>
                      <td class="tdresv">Data rezerwacji</td>
                      <td class="tdresv">Data zwrotu</td>
                      <td class="tdresv">Operacja</td>
                  </tr>

              @foreach ($reservations as $res)

                  <tr>
                      <td class="tdresv2">{{ $res->car->name }} {{ $res->car->model }}</td>
    	              <td class="tdresv2">{{ $res->Date_reservation}}</td>
    		          <td class="tdresv2">{{ $res->Date_return}}</td>
                      <td class="tdresv2"><a href="delete/{{$res->id}}" style="color: white;">Delete</a></td>
                  </tr>

                      @endforeach
              </table>
            </div>
            <div class="botton">
                <p>Pracę wykonał: Arkadiusz Donica i Mikołaj Woźniak | Grupa: zIinz_3_K32_Inf (W10)</p>
            </div>
    </body>
</html>
