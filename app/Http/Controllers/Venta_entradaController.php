<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venta_entrada;
use Illuminate\Support\Facades\DB;

class Venta_entradaController extends Controller
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
    public function index(Request $request,$id_entrada,$precio_entrada,$correo)
    {

        $ventas=new Venta_entrada();
        $ventas->monto_total=($precio_entrada*0.16)+$precio_entrada;
        $now = new \DateTime();
        $ventas->fecha=$now->format('d-m-Y');
        $ventas_id=DB::select(DB::raw("SELECT fk_cliente_natural
                                        from usuario,cliente_natural
                                        where fk_cliente_natural=id_cliente_natural
                                        and id_cliente_natural=1")); //en vez de pedir el id se pedira correo, email=corre logeado
        $numero_id = $ventas_id[0]->fk_cliente_natural;
        $ventas->fk_cliente_natural=$numero_id;
        //dd($ventas->fk_cliente_natural);
        $ventas->save();
        $venta_entrada = DB::select(DB::raw("SELECT id_venta_entrada,monto_total,fecha,fk_cliente_natural,fk_cliente_juridico
                                             FROM venta_entrada "));
        return view ('home.venta_entrada')
                                        ->with('venta_entrada',$venta_entrada)
                                        ->with('id_entrada',$id_entrada)
                                        ->with('precio_entrada',$precio_entrada)
                                        ->with('ventas',$ventas)
                                        ->with('correo',$correo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id_entrada,$precio_entrada)
    {   

        $venta_entrada = DB::select(DB::raw("SELECT monto_total,fecha,fk_cliente_natural,fk_cliente_juridico
                                             FROM venta_entrada "));
        return view ('home.crearVenta_entrada')->with('venta_entrada',$venta_entrada)->with('id_entrada',$id_entrada)->with('precio_entrada',$precio_entrada);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id_entrada,$precio_entrada)
    {   
        $venta_entrada=new Venta_entrada();
        $venta_entrada->monto_total=($request->monto_total)+$precio_entrada;
        $now = new \DateTime();
        $venta_entrada->fecha=$now->format('d-m-Y');
        $venta_entrada->fk_cliente_natural=1;
        $venta_entrada->save();
        return back();
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
