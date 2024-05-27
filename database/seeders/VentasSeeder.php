<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ventas')->insert([
            'productos_id' => 1,
            'cantidad' => 2,
            'fecha' => '2024-05-02',
            'total_venta' => 100,
        ]);
    }
}
