<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_cerveza extends Model
{
    protected $primaryKey = 'id_tipo_cerveza';
    protected $table = 'tipo_cerveza';
    public $incrementing = false;
    protected $fillable = ['id_tipo_cerveza','nombre', 'descripcion','historia','fk_tipo_cerveza'];
    public $timestamps = false;
}
