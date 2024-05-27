<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    public function store(Request $request){
        $categoria = new Categoria;
        $categoria->categoria = $request->input('categoria');
        $categoria->descripcion=$request->input('descripcion');
        
        $categoria->save();
        return redirect()->route('categorias.index');
    }

    public function destroy($id){
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        return redirect()->route('categorias.index');
    }

    public function update(Request $request, $id){
        $categoria = Categoria::find($id);
    
        if (!$categoria) {
            // Manejar el caso en el que el producto no existe
            return redirect()->route('categorias.index')->with('error', 'Categoria no encontrado');
        }
    
        $categoria->categoria = $request->input('categoria');
        $categoria->descripcion=$request->input('descripcion');
    
        $categoria->save();
        return redirect()->route('categorias.index')->with('success', 'Categoria actualizada exitosamente');
    }

    public function edit($id){
        $categoria = Categoria::findOrFail($id);
        return view('categorias.update', compact('categoria'));
    }
}