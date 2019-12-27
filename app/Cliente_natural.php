<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente_natural extends Model
{
    protected $primaryKey = 'id_cliente_natural';
    protected $table = 'cliente_natural';
    public $incrementing = false;
    protected $fillable = ['id_cliente_natural','rif', 'numero_carnet','cedula','primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','fk_lugar'];
    public $timestamps = false;
}
