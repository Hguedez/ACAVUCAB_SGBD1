<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Miembro_evento extends Model
{
    protected $primaryKey = 'id_miembro_evento';
    protected $table = 'miembro_evento';
    public $incrementing = false;
    protected $fillable = ['id_miembro_evento','fk_miembro', 'fk_evento'];
    public $timestamps = false;
}
