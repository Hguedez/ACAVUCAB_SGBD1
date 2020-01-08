<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detalle_venta_entrada;
use App\Cliente_natural;
use App\Venta;

use Illuminate\Support\Facades\DB;

class Detalle_venta_entradaController extends Controller
{  
     /*public function __construct()
    {
        $this->middleware('auth');
    }*/
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request,$id_entrada,$id_venta_entrada,$id_costo,$correo)
    {   
        
        $detalle_entrada=new Detalle_venta_entrada();
        $detalle_entrada->precio=$id_costo;
        $detalle_entrada->fk_venta_entrada=$id_venta_entrada;
        $detalle_entrada->fk_entrada=$id_entrada;
        $detalle_entrada->save();
        
        $ventas=new Venta();
        $ventas->monto_total=$id_costo;
        $now = new \DateTime();
        $ventas->fecha_venta=$now->format('d-m-Y');
        $ventas->fk_cliente_natural=1;
        $sub = DB::select(DB::raw("SELECT precio_entrada from entrada WHERE id_entrada='$id_entrada'"));
        $subtotal = $sub[0]->precio_entrada;
        $monto = DB::select(DB::raw("SELECT precio from detalle_venta_entrada WHERE fk_venta_entrada='$id_venta_entrada'"));
        $monto_total = $monto[0]->precio;
        $ventas->save();
        $id = DB::select(DB::raw("SELECT Max(id_venta) as venta_id from venta"));
        $id_venta = $id[0]->venta_id;

        $detalle_venta_entrada = DB::select(DB::raw("SELECT id_detalle_entrada,precio,
                                                    (select numero_entrada from entrada where id_entrada='$id_entrada'),
                                                    (select fecha from venta_entrada where id_venta_entrada='$id_venta_entrada'),
                                                    (select monto_total from venta_entrada where id_venta_entrada='$id_venta_entrada' and fk_cliente_natural=1),
                                                    (select primer_nombre from cliente_natural where id_cliente_natural=1)
                                                    FROM detalle_venta_entrada WHERE fk_venta_entrada='$id_venta_entrada'and fk_entrada='$id_entrada'"));

        return view ('home.misOrdenes')->with('detalle_venta_entrada',$detalle_venta_entrada)
                                       ->with('id_entrada',$id_entrada)
                                       ->with('id_venta_entrada',$id_venta_entrada)
                                       ->with('detalle_entrada',$detalle_entrada)
                                       ->with('subtotal',$subtotal)
                                       ->with('monto_total',$monto_total)
                                       ->with('id_venta',$id_venta)
                                       ->with('correo',$correo);
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
    public function destroy($id_detalle_entrada,$correo)
    {
        $detalle=Detalle_venta_entrada::find($id_detalle_entrada);
        $detalle->delete();
        $checkT = DB::select(DB::raw("SELECT MAX(id_venta) as id_venta_eliminar  from venta WHERE $id_detalle_entrada is not null "));
        $id_venta = $checkT[0]->id_venta_eliminar;
        $venta=Venta::find($id_venta);
        $venta->delete();
        return view('home.modelo')->with('correo',$correo);
    }
}
