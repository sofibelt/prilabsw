<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('aerolinea', function () {
    $cliente = App\Models\Cliente::all();
    echo $cliente;
});

Route::get('/', function () {
    return view('aerolinea');
});

Route::post('/', function () {
    /* return request();//se transforma en un objeto json*/
    /*$credentials= request()->only('nom','con');
    var_dump($credentials);*/
    $nombre=request('nom');
    echo $nombre;

    $persona = App\Models\Cliente::all();
    foreach ($persona as $p) {
      echo $p->Login_Usuario;
      if ($p==$nombre){
        echo "ingreso";
      }

    }

});
