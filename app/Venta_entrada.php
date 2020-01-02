<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta_entrada extends Model
{
    protected $primaryKey = 'id_venta_entrada';
    protected $table = 'venta_entrada';
    public $incrementing = false;
    protected $fillable = ['id_venta_entrada','monto_total', 'fecha','fk_cliente_natural','fk_cliente_juridico']; 
    public $timestamps = false;
}
