<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Evento;
//use App\Lugar;
use App\Entrada;
use Illuminate\Support\Facades\DB;
class EventoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request,$correo)
    {

        $eventos = DB::select( DB::raw("SELECT id_evento,nombre_evento, fecha,
        (SELECT id_horario FROM horario WHERE  id_horario=id_evento ),(SELECT id_miembro FROM miembro WHERE  id_miembro=id_evento )
                                        FROM evento
                                        WHERE nombre_evento is not null"
                                        ));
       $checkT = DB::select(DB::raw("SELECT fk_rol  from usuario WHERE email = '$correo'"));
       $rol = $checkT[0]->fk_rol;
                                        
       return view('home.listaEventos')->with('eventos',$eventos)->with('correo',$correo)->with('rol',$rol);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$correo)
    {
        return view('home.crearEvento')->with('correo',$correo);
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
        return view('home.verEventos',compact('evento'));
        //return view('home.entrada',compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_evento,$correo)
    {   $evento_actualizado = Evento::find($id_evento);
        return view('update.update_eventos')
                                            ->with('correo',$correo)
                                            ->with('evento_actualizado',$evento_actualizado)
                                            ->with('id_evento',$id_evento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_evento)
    {
        $evento_actualizado = Evento::find($id_evento);
        $evento_actualizado->nombre_evento = $request->nombre_evento;
        $evento_actualizado->fecha = $request->fecha;
        $evento_actualizado->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento=Evento::find($id);
        $evento->delete();
        return back()->with('Evento eliminado');
    }
}
