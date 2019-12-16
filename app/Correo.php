<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correo extends Model
{
    protected $primaryKey = 'id_correo';
    protected $table = 'correo';
    public $incrementing = false;
    protected $fillable = ['id_correo','nombre', 'fk_miembro','fk_cliente_juridico','fk_cliente_natural'];
    public $timestamps = false;
}
