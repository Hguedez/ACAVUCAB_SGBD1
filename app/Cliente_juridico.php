<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente_juridico extends Model
{
    protected $primaryKey = 'id_cliente_juridico';
    protected $table = 'cliente_juridico';
    public $incrementing = false;
    protected $fillable = ['id_cliente_juridico','rif', 'numero_carnet','denominacion_comercial','razon_social','web','capital','direccion_fiscal','fk_lugar_natural','fk_lugar_fiscal'];
    public $timestamps = false;
}
