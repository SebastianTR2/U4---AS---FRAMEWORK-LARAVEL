<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vuelo;

class VueloSeeder extends Seeder
{
    public function run()
 {
    for ($i = 1; $i <= 50; $i++) {
        $continentes = ['América', 'Europa', 'Asia', 'África', 'Oceanía'];

        Vuelo::create([
            'destino' => 'Ciudad ' . $i,
            'aerolinea' => 'Aerolínea ' . $i,
            'imagen' => 'vuelo' . (($i % 10) + 1) . '.jpg',
            'duracion' => rand(2, 12) . ' horas',
            'precio' => rand(300, 1500),
            'clase' => ['Económica', 'Ejecutiva', 'Primera'][rand(0, 2)],
            'fecha_salida' => now()->addDays($i),
            'descripcion' => 'Vuelo especial a la Ciudad ' . $i,
            'continente' => $continentes[array_rand($continentes)],
        ]);        
    }    
 }
}
