<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $primaryKey = 'id_comentario';
    protected $table = 'comentario';
    public $incrementing = false;
    protected $fillable = ['id_comentario','nombre', 'descripcion'];
    public $timestamps = false;
}
