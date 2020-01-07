<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $primaryKey = 'id_empleado';
    protected $table = 'empleado';
    public $incrementing = false;
    protected $fillable = ['id_empleado','nombre','apellido','cedula','fk_cargo','fk_lugar','fk_tienda_fisica'];
    public $timestamps = false;
}
