<?php

use Illuminate\Database\Seeder;
use App\estado as Estado;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Estado::create([
            'nombre' => 'Activo',
        ]);

       Estado::create([
            'nombre' => 'Inactivo',
        ]);
    }
}
