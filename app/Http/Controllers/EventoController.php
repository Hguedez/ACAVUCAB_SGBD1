<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Evento;
//use App\Lugar;
use Illuminate\Support\Facades\DB;
class EventoController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $eventos = DB::select( DB::raw("SELECT id_evento,nombre_evento, fecha
                                        from evento 
                                        WHERE nombre_evento is not null"
                                        
                                        ));
        return view('home.listaEventos',compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$lugar = DB::select( DB::raw(
        "SELECT nombre
        from lugar"
        ));*/
        return view('home.crearEvento');//,compact('lugar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evento = new Evento();
        $evento->nombre_evento = $request->nombre_evento;
        $evento->fecha = $request->fecha;
        //$evento->fk_lugar = $request->fk_lugar;
        //$evento->usuario = auth()->user()->email;
        $evento->save();

        
        return back()->with('Evento Agregado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = Evento::findOrFail($id);
        return view('home.verEvento',compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $evento=Evento::findOrFail($id);
        $evento->delete();
        return back()->with('Evento eliminado');
    }
}
