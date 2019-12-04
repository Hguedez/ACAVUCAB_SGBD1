<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{   protected $primaryKey = 'id_evento';
    protected $table = 'evento';
    protected $fillable = ['nombre_evento', 'fecha_evento','usuario'];
    public $timestamps = false;
}
