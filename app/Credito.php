<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
    protected $primaryKey = 'id_credito';
    protected $table = 'credito';
    public $incrementing = false;
    protected $fillable = ['id_credito','nombre_banco', 'numero_tarjeta','fecha_vencimiento','fk_cliente_natural','fk_cliente_juridico','fk_venta']; 
    public $timestamps = false;
}
