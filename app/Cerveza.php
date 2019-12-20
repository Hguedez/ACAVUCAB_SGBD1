<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cerveza extends Model
{
    protected $primaryKey = 'numero_cerveza';
    protected $table = 'cerveza';
    public $incrementing = false;
    protected $fillable = ['numero_cerveza','nombre', 'descripcion','costo','precio_venta','fk_tipo_cerveza','fk_oferta'];
    public $timestamps = false;
}
