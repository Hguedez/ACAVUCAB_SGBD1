<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detalle_venta_entrada;
use App\Cliente_natural;
use Illuminate\Support\Facades\DB;

class Detalle_venta_entradaController extends Controller
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
    public function index(Request $request,$id_entrada,$id_venta_entrada,$id_costo)
    {
        $detalle_entrada=new Detalle_venta_entrada();
        $detalle_entrada->precio=$id_costo;
        $detalle_entrada->fk_venta_entrada=$id_venta_entrada;
        $detalle_entrada->fk_entrada=$id_entrada;
        $detalle_entrada->save();

        $detalle_venta_entrada = DB::select(DB::raw("SELECT id_detalle_entrada,precio,
                                                    (select numero_entrada from entrada where id_entrada='$id_entrada'),
                                                    (select fecha from venta_entrada where id_venta_entrada='$id_venta_entrada'),
                                                    (select monto_total from venta_entrada where id_venta_entrada='$id_venta_entrada' and fk_cliente_natural=1),
                                                    (select primer_nombre from cliente_natural where id_cliente_natural=1)
                                                    FROM detalle_venta_entrada WHERE fk_venta_entrada='$id_venta_entrada'and fk_entrada='$id_entrada'"));

        return view ('home.detalle_venta_entrada')->with('detalle_venta_entrada',$detalle_venta_entrada)->with('id_entrada',$id_entrada)->with('id_venta_entrada',$id_venta_entrada)->with('detalle_entrada',$detalle_entrada);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
