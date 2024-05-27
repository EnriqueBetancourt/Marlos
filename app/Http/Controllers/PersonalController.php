<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;

class PersonalController extends Controller
{
    public function index(){
        $personal = Personal::all();
        return view('personal.index', compact('personal'));
    }

    public function store(Request $request){
        $personal = new Personal;
        $personal->nombre=$request->input('nombre');
        $personal->puesto=$request->input('puesto');
        $personal->salario=$request->input('salario');
        $personal->fecha_inicio=$request->input('fecha_inicio');
        $personal->horario=$request->input('horario');
        $personal->telefono=$request->input('telefono');
        
        $personal->save();
        return redirect()->route('personal.index');
    }
}
