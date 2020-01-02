<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_venta_entrada extends Model
{
    protected $primaryKey = 'id_detalle_venta';
    protected $table = 'detalle_venta_entrada';
    public $incrementing = false;
    protected $fillable = ['id_detalle_venta','precio', 'fk_venta_entrada','fk_entrada','fk_stock_entrada']; 
    public $timestamps = false;
}
