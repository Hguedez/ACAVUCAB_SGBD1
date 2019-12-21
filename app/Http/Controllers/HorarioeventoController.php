<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\horario_evento;
use Illuminate\Support\Facades\DB;
class HorarioeventoController extends Controller
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
    public function index(Request $request, $id,$id2) 
    {
      
       $horario_evento = DB::select(DB::raw("SELECT id_horario_evento, fk_evento,fk_horario, (
             SELECT nombre_evento FROM evento WHERE id_evento = fk_evento ),(SELECT dia FROM horario WHERE id_horario = fk_horario ),(SELECT hora_inicio FROM horario WHERE id_horario = fk_horario ),(SELECT hora_fin FROM horario WHERE id_horario = fk_horario )
             FROM horario_evento WHERE fk_evento = '$id' and fk_horario='$id2' "));
       
       
        return view ('home.horario_evento', compact('horario_evento'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.crearHorarioEvento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horario_evento=new horario_evento();
        $horario_evento->fk_evento=$request->fk_evento;
        $horario_evento->fk_horario=$request->fk_horario;
        $horario_evento->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$id2)
    {
        $horario_evento = DB::select(DB::raw("SELECT id_horario_evento, fk_evento,fk_horario, (
            SELECT nombre_evento FROM evento WHERE id_evento = fk_evento ),(SELECT dia FROM horario WHERE id_horario = fk_horario )
            FROM horario_evento WHERE fk_evento = '$id' and fk_horario='$id2' "));

       return view ('home.horario_evento', compact('horario_evento'));
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
    public function destroy($idhorario_evento)
    {
        $horario_evento=horario_evento::find($idhorario_evento);
        $horario_evento->delete();
        return back();
    }
}
