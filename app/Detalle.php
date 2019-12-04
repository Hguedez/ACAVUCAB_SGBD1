<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    public function catalogo(){ //$libro->categoria->nombre
    return $this->belongsTo(Catalogo::class); //Pertenece a un catalogo.
    }
}
