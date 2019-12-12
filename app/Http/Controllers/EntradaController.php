<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entrada;
use App\Evento;
use Illuminate\Support\Facades\DB;

class EntradaController extends Controller
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
        $entradas = DB::select( DB::raw("SELECT id_entrada,numero_entrada, precio_entrada,fk_evento,id_evento,nombre_evento
                                        from evento ,entrada
                                        WHERE fk_evento=id_evento"
                                        
                                        ));
        return view('home.entrada',compact('entradas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.crearEntrada');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    { 
        $entrada = new Entrada();
        $entrada->numero_entrada = $request->numero_entrada;
        $entrada->precio_entrada = $request->precio_entrada;
        $entrada->fk_evento = $id;
        $array= DB::select( DB::raw("SELECT nombre_evento
                                                  from evento
                                                  WHERE $entrada->fk_evento=id_evento"
                                                    ));
        $entradas = DB::select( DB::raw("SELECT id_entrada,numero_entrada, precio_entrada,fk_evento,id_evento,nombre_evento
                                         from evento ,entrada
                                         WHERE fk_evento=id_evento"
                                        ));
        $hola = array_push($entradas,$array[0]);
        

        //$evento->usuario = auth()->user()->email;
        $entrada->save();

        
        return back()->with('Entrada agregada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entrada = Entrada::findOrFail($id);
        return view('home.verEntradas',compact('entrada'));
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
        //
    }
}
