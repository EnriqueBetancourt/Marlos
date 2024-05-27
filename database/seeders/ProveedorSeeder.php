<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('proveedores')->insert([
            'nombre' => 'Carlos Betancourt',
            'rfc' => 'BERL0123032',
            'direccion' => 'Ignacio Zaragoza #1738',
            'telefono' => '3344650229',
        ]);
    }
}
