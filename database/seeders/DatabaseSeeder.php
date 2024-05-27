<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->truncateTables([
            'categorias', 'proveedores', 'personal', 'productos', 'inventario', 'ventas'
        ]);

        $this->call(CategoriaSeeder::class);
        $this->call(ProveedorSeeder::class);
        $this->call(PersonalSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(InventarioSeeder::class);
        $this->call(VentasSeeder::class);
    }

    protected function truncateTables(array $tables){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        foreach ($tables as $table){
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}