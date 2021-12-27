<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

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
    //  $test=Car::where('name','Audi')->first();
    //  var_dump($test->reservations();die;
      //  return view('welcome');
      return view("cars",[
        "cars" => Car::all()
      ]);


    }
    public function logout(Request $request) {
    Auth::logout();
    return redirect('/login');
}
}
