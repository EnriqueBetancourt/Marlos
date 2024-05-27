<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
use App\Models\Proveedor;

class InventarioController extends Controller
{
    public function index(){
        $inventario = Inventario::all();
        $proveedores = Proveedor::all();
        return view('inventario.index', compact('inventario','proveedores'));
    }

    public function store(Request $request){
        $inventario = new Inventario();

        $inventario->producto=$request->input('producto');
        $inventario->proveedor_id = $request->input('proveedor_id');
        $inventario->stock=$request->input('stock');
        $inventario->ultima_reposicion=$request->input('ultima_reposicion');
        
        $inventario->save();
        return redirect()->route('inventario.index');
    }

    public function update(Request $request, $id){
        $inventario = Inventario::find($id);
    
        if (!$inventario) {
            // Manejar el caso en el que el producto no existe
            return redirect()->route('inventario.index')->with('error', 'Producto no encontrado');
        }
        $inventario->producto=$request->input('producto');
        $inventario->proveedor_id = $request->input('proveedor_id');
        $inventario->stock=$request->input('stock');
        $inventario->ultima_reposicion=$request->input('ultima_reposicion');
    
        $inventario->save();
        return redirect()->route('inventario.index')->with('success', 'Producto actualizado exitosamente');
    }

    public function edit($id){
        $inventario = Inventario::findOrFail($id);
        $proveedores = Proveedor::all();
        return view('inventario.update', compact('proveedores', 'inventario'));
    }

    public function destroy($id){

        $inventario = Inventario::findOrFail($id);
        $inventario->delete();
        return redirect()->route('inventario.index');
    }
}
