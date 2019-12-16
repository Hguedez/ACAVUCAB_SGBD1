<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Miembro extends Model
{
    protected $primaryKey = 'id_miembro';
    protected $table = 'miembro';
    public $incrementing = false;
    protected $fillable = ['id_miembro','razon_social', 'denominacion_comercial','web','rif']; //fk_lugar
    public $timestamps = false;
}
