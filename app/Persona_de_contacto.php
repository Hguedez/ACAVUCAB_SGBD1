<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona_de_contacto extends Model
{
    protected $primaryKey = 'id_persona';
    protected $table = 'persona_de_contacto';
    public $incrementing = false;
    protected $fillable = ['id_persona','cedula', 'nombre','apellido','fk_miembro','fk_cliente_juridico']; 
    public $timestamps = false;
}
