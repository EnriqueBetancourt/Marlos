<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            'categoria_id' => 1,
            'nombre' => 'Taro',
            'cantidad' => 10,
            'cantidad_minima' => 3,
            'impuesto' => 10.5,
            'precio' => 50,
            "costo" => 25,
        ]);
    }
}
