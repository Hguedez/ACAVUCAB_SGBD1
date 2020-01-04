<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $primaryKey = 'id_venta';
    protected $table = 'venta';
    public $incrementing = false;
    protected $fillable = ['id_venta','monto_total', 'fecha_venta','fk_cliente_natural','fk_cliente_juridico','fk_evento','fk_tienda_fisica','fk_tienda_web']; 
    public $timestamps = false;
}
