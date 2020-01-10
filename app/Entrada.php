<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $primaryKey = 'id_entrada';
    protected $table = 'entrada';
    public $incrementing = false;
    protected $fillable = ['id_entrada','numero_entrada','precio_entrada','disponible','fk_evento'];
    public $timestamps = false;
}
