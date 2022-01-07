<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      return view("cars",[
        "cars" => Car::all()
      ]);


    }
    public function reserv()
    {
      return view("reservation",[
        "cars" => Car::all()
      ]);
    }
    public function my_reserv()
    {
      // $user=Auth::id();
      // return view("my_reserv",[
      //   "reservations" => Reservation::all()
      // ]);

      $user=Auth::id();
      return view("my_reserv",[
          "reservations" => Reservation::join('cars', 'id_car','cars.id')
        ->where('id_customer',$user)
        ->orderby('reservations.id','desc')
        ->get()
      ]);
    }

    public function logout(Request $request) {
    Auth::logout();
    return redirect('/login');
}
    public function del_reserv($delete_id){

        $delete = Reservation::where('id',$delete_id)->delete();

            return redirect('my_reserv');
    }
}
