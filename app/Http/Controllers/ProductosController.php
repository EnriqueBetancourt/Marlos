<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class ProductosController extends Controller
{
    public function index(){
        $productos = Producto::all();
        $categorias = Categoria::all();
        return view('productos.index', compact('productos', 'categorias'));
    }

    public function store(Request $request){
        $producto = new Producto;
        $producto->categoria_id = $request->input('categoria_id');
        $producto->nombre=$request->input('nombre');
        $producto->cantidad=$request->input('cantidad');
        $producto->cantidad_minima=$request->input('cantidad_minima');
        $producto->impuesto=$request->input('impuesto');
        $producto->precio=$request->input('precio');
        $producto->costo=$request->input('costo');
        
        $producto->save();
        return redirect()->route('productos.index');
    }

    public function update(Request $request, $id){
        $producto = Producto::find($id);
    
        if (!$producto) {
            // Manejar el caso en el que el producto no existe
            return redirect()->route('productos.index')->with('error', 'Producto no encontrado');
        }
    
        $producto->categoria_id = $request->input('categoria_id');
        $producto->nombre = $request->input('nombre');
        $producto->cantidad = $request->input('cantidad');
        $producto->cantidad_minima = $request->input('cantidad_minima');
        $producto->impuesto = $request->input('impuesto');
        $producto->precio = $request->input('precio');
        $producto->costo = $request->input('costo');
    
        $producto->save();
        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente');
    }

    public function edit($id){
        $producto = Producto::findOrFail($id);
        $categorias = Categoria::all();
        return view('productos.update', compact('producto', 'categorias'));
    }
    

    public function destroy($id){
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect()->route('productos.index');
    }
}