<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('inventario')->insert([
            'proveedor_id' => 1,
            'producto' => "Vasos de 1LT",
            'stock' => 20,
            'ultima_reposicion' => '2024-03-20',
        ]);
    }
}
