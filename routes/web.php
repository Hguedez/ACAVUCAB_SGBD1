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

/*Route::get('/detalle/{id}', function ($id) {
    $detalle =Detalle::findOrfail($id);
    return view('home.detalle_producto',compact('detalle'));
});*/
/*Route::get('/ordenes', function () {
    return view('home.misOrdenes');
});*/

Route::get('/carnet', function () {
    return view('home.misOrdenes');
});

/*Route::delete('/eventos/{id}', 'Evento@Controller')->name('eventos') ;*/

Auth::routes();

Route::resource('/loginCliente', 'Login_clienteController');

Route::get('/municipios', 'Cliente_juridicoController@getMunicipio');

Route::get('/parroquias','Cliente_juridicoController@getParroquia');

Route::get('/municipios', 'Cliente_naturalController@getMunicipio');

Route::get('/parroquias','Cliente_naturalController@getParroquia');

Route::get('/municipios', 'EmpleadoController@getMunicipio');

Route::get('/parroquias','EmpleadoController@getParroquia');

Route::resource('/eventos', 'EventoController');

Route::resource('/detalle', 'DetalleController');

Route::resource('/entradas', 'EntradaController');

Route::resource('/eventos/{evento}/entradas', 'EntradaController');

Route::delete('/entrada/{id_entrada}', 'EntradaController@destroy')->name('entradasDestroy');

//Route::resource('/horario', 'HorarioController');
//Route::resource('/eventos/{evento}/horarios', 'HorarioeventoController');
Route::resource('/eventos/{evento}/horarios/{eventos}/funciona', 'HorarioController');

Route::delete('/horario/{id_horario}', 'HorarioController@destroy')->name('horariosDestroy');

Route::resource('/eventos/{evento}/horarios/{horario}/hola', 'HorarioeventoController');

Route::delete('/horario_evento/{id_horario_evento}', 'HorarioeventoController@destroy')->name('horarioeventosDestroy');

//Route::resource('/miembros', 'MiembroController');

Route::delete('/miembros/{id_miembro}', 'miembroController@destroy')->name('miembrosDestroy');

Route::resource('/contactos', 'Persona_de_contactoController');

Route::resource('/miembros/{miembros}/contactos', 'Persona_de_contactoController');

Route::delete('/contacto/{id_contacto}', 'Persona_de_contactoController@destroy')->name('contactosDestroy');

Route::resource('/miembros/{miembros}/telefonos', 'TelefonoController');

Route::delete('/telefono/{id_telefono}', 'TelefonoController@destroy')->name('telefonosDestroy');

Route::resource('/correos/{correo}/miembros', 'CorreoController');

Route::delete('/correo/{id_correo}', 'CorreoController@destroy')->name('correosDestroy');

Route::resource('/miembros/{miembros}/correos', 'CorreoController');

Route::resource('/eventos/{eventos}/miembros/{miembros}/asociados', 'miembroController');

Route::resource('/eventos/{eventos}/miembros/{miembros}/miembroevento', 'Miembro_eventoController');

Route::delete('/miembro_evento/{id_miembro_evento}', 'Miembro_eventoController@destroy')->name('miembroeventosDestroy');

Route::resource('/tipoCerveza', 'Tipo_cervezaController');

Route::resource('/cervezas/{cervezas}/tipos', 'CervezaController');

Route::delete('/cerveza/{id_cerveza}', 'CervezaController@destroy')->name('cervezasDestroy');

Route::resource('/comentarios/{comentarios}/tipos', 'ComentarioController');

Route::delete('/comentario/{id_comentario}', 'ComentarioController@destroy')->name('comentariosDestroy');

Route::resource('/tipos/{tipos}/ofers', 'OfertaController');

Route::resource('/tipos/{tipos}/ofertas/{ofertas}/ofertasCerveza', 'Oferta_cervezaController');

Route::resource('/entradas/{id_entrada}/ventaEntrada/{precio_entrada}/montoTotal', 'Venta_entradaController');

Route::resource('/entradas/{id_entrada}/comprar/{id_venta_entrada}/detalle_ventaEntrada/{monto_total}/precio', 'Detalle_venta_entradaController');

//Route::post('/clienteNatural/{id_cliente_natural}/clientes', 'Cliente_natural@create');

Route::resource('/clienteNatural', 'Cliente_naturalController');

Route::resource('/clienteJuridico', 'Cliente_juridicoController');

Route::delete('/detalle_venta_entrada/{id_detalle_entrada}', 'Detalle_venta_entradaController@destroy')->name('Detalle_entradasDestroy');

Route::resource('/comprar/{id_venta}/venta/{id_entrada}/entrada', 'CreditoController');
Route::post('/comprar/{id_venta}/venta/{id_entrada}/entrada', 'CreditoController@store');

Route::resource('/empleado', 'EmpleadoController');
//Route::post('/empleado', 'EmpleadoController@store');

Route::get('/homes', 'HomeController@index')->name('homes');

Route::get('/compilar', function () {
    // Crear el objeto JasperPHP
    $jasper = new JasperPHP;

    // Compilar el reporte para generar .jasper
    $jasper->compile(base_path() . '/vendor/cossou/jasperphp/examples/Carnet.jrxml')->execute();

    return view('welcome');
});

Route::get('/reporte', function () {
    // Crear el objeto JasperPHP
    $jasper = new JasperPHP;

    // Generar el Reporte
    $jasper->process(
        // Ruta y nombre de archivo de entrada del reporte
        base_path() . '/vendor/cossou/jasperphp/examples/Carnet.jasper',
        false, // Ruta y nombre de archivo de salida del reporte (sin extensión)
        array('pdf', 'rtf'), // Formatos de salida del reporte
        array('php_version' => phpversion()) // Parámetros del reporte
    )->output();

    return view('welcome');

        exec($jasper->output().' 2>&1', $output);
    print_r($output);
});
