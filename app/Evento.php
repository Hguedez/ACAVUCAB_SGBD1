<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{   protected $primaryKey = 'id_evento';
    protected $table = 'evento';
    public $incrementing = false;
    protected $fillable = ['id_evento','nombre_evento', 'fecha'];
    public $timestamps = false;
}
