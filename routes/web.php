<?php

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
Route::get('/comprar', function () {
    return view('home.comprar');
});
Route::get('/detalle', function () {
    return view('home.detalle_producto');
});
Auth::routes();

Route::resource('/eventos', 'EventoController');

Route::get('/homes', 'HomeController@index')->name('homes');
