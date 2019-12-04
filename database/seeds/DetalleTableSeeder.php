<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Catalogo;
use App\Detalle;



class DetalleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Catalogo::truncate(); // Evita duplicar datos

        DB::table('catalogos')->insert([
            'nombre' => "Pale ale"
        ]);
        DB::table('catalogos')->insert([
            'nombre' => "Belgium ale"
        ]);

        Detalle::truncate(); // Evita duplicar datos
        $detalle = new Detalle();
        $detalle->nombre = "Pale ale";
        $detalle->descripcion = "Cerveza Ale clasica top 1";
        $detalle->precio = 15000;
        $detalle->catalogo_id = 1;
        $detalle->save();

        $detalle = new Detalle();
        $detalle->nombre = "Belgium ale";
        $detalle->descripcion = "Cerveza Belga de sabor fino";
        $detalle->precio = 12000;
        $detalle->catalogo_id = 2;
        $detalle->save();
    }
}
