    <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/',[App\Http\Controllers\HomeController::class, 'index']);
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//Route::get('create_reserv', '\App\Http\Controllers\ReservationController@create');
Route::resource('reservations', '\App\Http\Controllers\ReservationController');
Route::resource('upload_car', '\App\Http\Controllers\CarController');
Route::get('/cars',[App\Http\Controllers\HomeController::class, 'index'], function () {
    return view('cars');
});

Route::get('/reservation',[App\Http\Controllers\HomeController::class, 'reserv'], function () {
    return view('reservation');
});

Route::get('/my_reserv',[App\Http\Controllers\HomeController::class, 'my_reserv'], function () {
    return view('my_reserv');
});

Route::get('delete/{id}',[App\Http\Controllers\HomeController::class, 'del_reserv'], function() {
    return view ('my_reserv');
});

Route::get('/panel_admin', function () {
    return view('panel_admin');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/meassage', function () {
    return view('meassage');
});
