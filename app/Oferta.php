<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $primaryKey = 'id_oferta';
    protected $table = 'oferta';
    public $incrementing = false;
    protected $fillable = ['id_oferta','descuento', 'fecha_inicio','fecha_fin'];
    public $timestamps = false;
}
