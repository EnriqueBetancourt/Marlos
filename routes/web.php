<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\AuthController;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//---GET

Route::get('ventas', [VentasController::class, 'index'])
    ->name('ventas.index')
    ->middleware(['auth', 'verified', 'empleado']);

Route::post('ventas', [VentasController::class, 'store'])
    ->name('ventas.store')
    ->middleware(['auth', 'verified', 'empleado']);

Route::get('categorias', [CategoriasController::class, 'index'])
     ->name('categorias.index')
     ->middleware(['auth', 'verified', 'admin']);

Route::get('proveedores', [ProveedoresController::class, 'index'])
    ->name('proveedores.index')
    ->middleware(['auth', 'verified', 'admin']);

Route::get('productos', [ProductosController::class, 'index'])
    ->name('productos.index')
    ->middleware(['auth', 'verified', 'admin']);

Route::get('productos/{id}', [ProductosController::class, 'edit'])
    ->name('productos.edit')
    ->middleware(['auth', 'verified', 'admin']);


Route::get('categorias/{id}', [CategoriasController::class, 'edit'])
    ->name('categorias.edit')
    ->middleware(['auth', 'verified', 'admin']);

Route::get('proveedores/{id}', [ProveedoresController::class, 'edit'])
    ->name('proveedores.edit')
    ->middleware(['auth', 'verified', 'admin']);   

Route::get('inventario', [InventarioController::class, 'index'])
    ->name('inventario.index')
    ->middleware(['auth', 'verified', 'admin']);

Route::get('personal', [PersonalController::class, 'index'])
   ->name('personal.index')
   ->middleware(['auth', 'verified', 'admin']);

Route::get('inventario/{id}', [InventarioController::class, 'edit'])
    ->name('inventario.edit')
    ->middleware(['auth', 'verified', 'admin']); 


//--POST
Route::post('categorias', [CategoriasController::class, 'store'])
->name('categorias.store')
->middleware(['auth', 'verified', 'admin']);

Route::post('proveedores',
[ProveedoresController::class, 'store'])
->name('proveedores.store')
->middleware(['auth', 'verified', 'admin']);

Route::post('productos', 
[ProductosController::class, 'store'])
->name('productos.store')
->middleware(['auth', 'verified', 'admin']);

Route::post('inventario', 
[InventarioController::class, 'store'])
->name('inventario.store')
->middleware(['auth', 'verified', 'admin']);

Route::post('personal', 
[PersonalController::class, 'store'])->name('personal.store');


//--Delete
Route::delete('productos/{id}',
[ProductosController::class, 'destroy'])
->name('productos.destroy')
->middleware(['auth', 'verified', 'admin']);

Route::delete('categorias/{id}',[CategoriasController::class, 'destroy'])
->name('categorias.destroy')
->middleware(['auth', 'verified', 'admin']);

Route::delete('proveedores/{id}',[ProveedoresController::class, 'destroy'])
->name('proveedores.destroy')
->middleware(['auth', 'verified', 'admin']);

Route::delete('inventario/{id}',[ProveedoresController::class, 'destroy'])
->name('inventario.destroy')
->middleware(['auth', 'verified', 'admin']);


//--UPDATE (PUT)
Route::put('productos/{id}',  [ProductosController::class, 'update'])
->name('productos.update')
->middleware(['auth', 'verified', 'admin']);

Route::put('categorias/{id}', 
[CategoriasController::class, 'update'])
->name('categorias.update')
->middleware(['auth', 'verified', 'admin']);

Route::put('proveedores/{id}', [ProveedoresController::class, 'update'])
->name('proveedores.update')
->middleware(['auth', 'verified', 'admin']);

Route::put('inventario/{id}', [InventarioController::class, 'update'])
->name('inventario.update')
->middleware(['auth', 'verified', 'admin']);
 


Route::get('/auth/redirect', [AuthController::class, 'redirect'])
->name('auth.redirect');
 
Route::get('/auth/callback',[AuthController::class, 'callback'])
->name('auth.callback');
 

require __DIR__.'/auth.php';