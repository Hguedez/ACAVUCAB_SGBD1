<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lugar extends Model
{
    protected $primaryKey = 'id_lugar';
    protected $table = 'lugar';
    public $incrementing = false;
    protected $fillable = ['id_lugar','nombre', 'tipo','fk_lugar'];
    public $timestamps = false;
}
