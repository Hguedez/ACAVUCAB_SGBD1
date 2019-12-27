<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $primaryKey = 'id_usuario';
    protected $table = 'usuario';
    public $incrementing = false;
    protected $fillable = ['id_usuario','email', 'password','fk_rol',' fk_empleado',
                            'fk_miembro','fk_cliente_juridico','fk_cliente_natural'];
    public $timestamps = false;
}
