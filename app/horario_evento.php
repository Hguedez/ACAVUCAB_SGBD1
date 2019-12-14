<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horario_evento extends Model
{
    protected $primaryKey = 'id_horario_evento';
    protected $table = 'horario_evento';
    public $incrementing = false;
    protected $fillable = ['id_horario_evento','fk_evento', 'fk_horario'];
    public $timestamps = false;
}
