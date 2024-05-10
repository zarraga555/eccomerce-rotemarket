<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $units = [
            ['name' => 'Gramo', 'acronym' => 'g', 'description' => 'Unidad de peso en gramos'],
            ['name' => 'Kilogramo', 'acronym' => 'kg', 'description' => 'Unidad de peso en kilogramos'],
            ['name' => 'Miligramo', 'acronym' => 'mg', 'description' => 'Unidad de peso en miligramos'],
            ['name' => 'Microgramo', 'acronym' => 'mcg', 'description' => 'Unidad de peso en microgramos'],
            ['name' => 'Litro', 'acronym' => 'L', 'description' => 'Unidad de volumen en litros'],
            ['name' => 'Mililitro', 'acronym' => 'mL', 'description' => 'Unidad de volumen en mililitros'],
            ['name' => 'Pieza', 'acronym' => 'pz', 'description' => 'Unidad individual'],
            ['name' => 'Paquete', 'acronym' => 'pkg', 'description' => 'Unidad que contiene varios productos'],
            ['name' => 'Botella', 'acronym' => 'bot', 'description' => 'Envase de vidrio o plástico con tapa'],
            ['name' => 'Lata', 'acronym' => 'lt', 'description' => 'Envase metálico'],
            ['name' => 'Caja', 'acronym' => 'cj', 'description' => 'Envase de cartón'],
            ['name' => 'Bolsa', 'acronym' => 'bolsa', 'description' => 'Envase de plástico o papel'],
            ['name' => 'Metro', 'acronym' => 'm', 'description' => 'Unidad de longitud en metros'],
            ['name' => 'Centímetro', 'acronym' => 'cm', 'description' => 'Unidad de longitud en centímetros'],
            ['name' => 'Milímetro', 'acronym' => 'mm', 'description' => 'Unidad de longitud en milímetros'],
            ['name' => 'Pulgada', 'acronym' => 'in', 'description' => 'Unidad de longitud en pulgadas'],
            ['name' => 'Metro cuadrado', 'acronym' => 'm²', 'description' => 'Unidad de área en metros cuadrados'],
            ['name' => 'Metro cúbico', 'acronym' => 'm³', 'description' => 'Unidad de volumen en metros cúbicos'],
            ['name' => 'Hora', 'acronym' => 'hr', 'description' => 'Unidad de tiempo en horas'],
            ['name' => 'Minuto', 'acronym' => 'min', 'description' => 'Unidad de tiempo en minutos'],
            ['name' => 'Segundo', 'acronym' => 'seg', 'description' => 'Unidad de tiempo en segundos'],
            ['name' => 'Servicio', 'acronym' => 'srv', 'description' => 'Servicio'],
        ];
        foreach ($units as $unit) {
            DB::table('units')->insert($unit);
        }
    }
}
