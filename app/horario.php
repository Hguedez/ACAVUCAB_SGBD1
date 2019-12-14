<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horario extends Model
{
    protected $primaryKey = 'id_horario';
    protected $table = 'horario';
    public $incrementing = false;
    protected $fillable = ['id_horario','dia', 'hora_inicio','hora_fin'];
    public $timestamps = false;
}
