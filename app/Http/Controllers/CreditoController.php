<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Credito;
use App\Entrada;

use Illuminate\Support\Facades\DB;
class CreditoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id_venta,$id_entrada,$correo)
    {
        $credito = DB::select(DB::raw("SELECT id_credito,nombre_banco,numero_tarjeta,fecha_vencimiento,
                                        fk_cliente_natural,fk_cliente_juridico,fk_venta
                                        FROM credito "));
        return view('home.comprar')
                                ->with('credito',$credito)
                                ->with('id_venta',$id_venta)
                                ->with('id_entrada',$id_entrada)
                                ->with('correo',$correo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id_venta,$id_entrada,$correo)
    {
        $credito = DB::select(DB::raw("SELECT id_credito,nombre_banco,numero_tarjeta,fecha_vencimiento,
                                        fk_cliente_natural,fk_cliente_juridico,fk_venta
                                        FROM credito "));
        return view('home.comprar')->with('credito',$credito)->with('id_venta',$id_venta)->with('id_entrada',$id_entrada);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id_venta,$id_entrada,$correo)
    {
        $credito=new Credito();
        $credito->nombre_banco=$request->nombre_banco;
        $credito->numero_tarjeta=$request->numero_tarjeta;
        $credito->fecha_vencimiento=$request->fecha_vencimiento;
        $credito->fk_venta=$id_venta;
        $credito->fk_cliente_natural=1;
        $credito->save();
        return view('home.modeloEntrada')->with('correo',$correo);
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
