<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personal')->insert([
            'nombre' => 'Luis Enrique Betancourt',
            'puesto' => 'Encargado',
            'salario' => 7500,
            'fecha_inicio' => '2023-11-20',
            'horario' => '10:00 - 18:30',
            'telefono' => '3344650229',
        ]);
    }
}
