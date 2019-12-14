<?php
use App\Detalle;
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

Route::get('/', function () {
    return view('home.home2');
});
Route::get('/catalogo', function () { //catalogo necesita un controlador
    return view('home.catalogo');
});
Route::get('/diario', function () { // diario necesita un controlador
    return view('home.diarioCerveza');
});
Route::get('/comprar', function () { //comprar necesita un controlador
    return view('home.comprar');
});
/*Route::get('/detalle/{id}', function ($id) {
    $detalle =Detalle::findOrfail($id);
    return view('home.detalle_producto',compact('detalle'));
});*/
Route::get('/ordenes', function () {
    return view('home.misOrdenes');
});

/*Route::delete('/eventos/{id}', 'Evento@Controller')->name('eventos') ;*/

Auth::routes();

Route::resource('/eventos', 'EventoController');
Route::resource('/detalle', 'DetalleController');
Route::resource('/entradas', 'EntradaController');
Route::resource('/eventos/{evento}/entradas', 'EntradaController');
//Route::resource('/horario', 'HorarioController');
//Route::resource('/eventos/{evento}/horarios', 'HorarioeventoController');
Route::resource('/eventos/{evento}/horarios/{eventos}/funciona', 'HorarioController');
Route::resource('/eventos/{evento}/horarios/{horario}/hola', 'HorarioeventoController');
Route::get('/homes', 'HomeController@index')->name('homes');
