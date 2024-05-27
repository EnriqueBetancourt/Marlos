<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedoresController extends Controller
{
    public function index(){
        $proveedores = Proveedor::all();
        return view('proveedores.index', compact('proveedores'));
    }

    public function store(Request $request){
        $proveedor = new Proveedor;
        $proveedor->nombre = $request->input('nombre');
        $proveedor->telefono=$request->input('telefono');
        $proveedor->rfc=$request->input('rfc');
        $proveedor->direccion=$request->input('direccion');
        
        $proveedor->save();
        return redirect()->route('proveedores.index');
    }

    public function destroy($id){
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();
        return redirect()->route('proveedores.index');
    }

    public function update(Request $request, $id){
        $proveedor = Proveedor::find($id);
    
        if (!$proveedor) {
            // Manejar el caso en el que el producto no existe
            return redirect()->route('proveedores.index')->with('error', 'Producto no encontrado');
        }
        $proveedor->nombre = $request->input('nombre');
        $proveedor->telefono=$request->input('telefono');
        $proveedor->rfc=$request->input('rfc');
        $proveedor->direccion=$request->input('direccion');
        
        $proveedor->save();
        return redirect()->route('proveedores.index');
    }

    public function edit($id){
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedores.update', compact('proveedor'));
    }
}