<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    protected $primaryKey = 'codigo_telefono';
    protected $table = 'telefono';
    public $incrementing = false;
    protected $fillable = ['codigo_telefono','codigo_area', 'numero','fk_cliente_natural',' fk_cliente_juridico',
                            'fk_empleado','fk_persona_de_contacto','fk_tienda_fisica','fk_tienda_web','fk_miembro'];
    public $timestamps = false;
}
