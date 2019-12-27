<?php

namespace App\Services;

use App\lugar;
use App\Cliente_natural;

class Lugares
{
    public function get()
    {
        $lugares = lugar::get();
        $lugaresArray[''] = 'Selecciona estado';
        foreach ($lugares as $lugar) {
            if ($lugar->fk_lugar == null)
                $lugaresArray[$lugar->id_lugar] = $lugar->nombre;
        }
        return $lugaresArray;
    }
}