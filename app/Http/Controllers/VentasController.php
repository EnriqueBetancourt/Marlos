<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas;
use App\Models\Producto;

class VentasController extends Controller
{
    public function index(){
        $ventas = Ventas::all();
        $productos = Producto::all();
        return view('ventas.index', compact('ventas','productos'));
    }

    public function store(Request $request){
        $ventas = new Ventas;
        
        // Obtener el producto para obtener el precio
        $producto = Producto::find($request->input('producto_id'));
        
        if(!$producto) {
            // Manejar el caso donde el producto no se encuentre
            return redirect()->back()->withErrors(['Producto no encontrado']);
        }
        
        $ventas->productos_id = $request->input('producto_id');
        $ventas->cantidad = $request->input('cantidad');
        $ventas->fecha = now(); // Registrar la fecha y hora actuales
        $ventas->total_venta = $request->input('cantidad') * $producto->precio;
    
        $ventas->save();
        return redirect()->route('ventas.index');
    }
}
