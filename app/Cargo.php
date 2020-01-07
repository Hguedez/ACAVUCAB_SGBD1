<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $primaryKey = 'id_cargo';
    protected $table = 'cargo';
    public $incrementing = false;
    protected $fillable = ['id_cargo','nombre_cargo','descripcion'];
    public $timestamps = false;
}
