<?php

use App\Detalle;

use JasperPHP\JasperPHP as JasperPHP; 


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
/*Route::get('/detalle/{id}', function ($id) {
    $detalle =Detalle::findOrfail($id);
    return view('home.detalle_producto',compact('detalle'));
});*/
/*Route::get('/detalle', function () {
    return view('home.detalle_producto');
});*/
Auth::routes();

Route::resource('/eventos', 'EventoController');
Route::resource('/detalle', 'DetalleController');

Route::get('/homes', 'HomeController@index')->name('homes');

Route::get('/compilar', function () {
    // Crear el objeto JasperPHP
    $jasper = new JasperPHP;
    
    // Compilar el reporte para generar .jasper
    $jasper->compile(base_path() . '/vendor/cossou/jasperphp/examples/hello_world.jrxml')->execute();
   
    return view('welcome');
});

Route::get('/reporte', function () {
    // Crear el objeto JasperPHP
    $jasper = new JasperPHP;
    
    // Generar el Reporte
    $jasper->process(
        // Ruta y nombre de archivo de entrada del reporte
        base_path() . '/vendor/cossou/jasperphp/examples/hello_world.jasper', 
        false, // Ruta y nombre de archivo de salida del reporte (sin extensión)
        array('pdf', 'rtf'), // Formatos de salida del reporte
        array('php_version' => phpversion()) // Parámetros del reporte
    )->execute();
   
    return view('welcome');

        exec($jasper->output().' 2>&1', $output);
    print_r($output);
});
