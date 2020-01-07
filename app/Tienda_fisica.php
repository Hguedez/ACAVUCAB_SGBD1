<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda_fisica extends Model
{
    protected $primaryKey = 'id_tienda_fisica';
    protected $table = 'tienda_fisica';
    public $incrementing = false;
    protected $fillable = ['id_tienda_fisica','nombre','rif','fk_lugar'];
    public $timestamps = false;
}
