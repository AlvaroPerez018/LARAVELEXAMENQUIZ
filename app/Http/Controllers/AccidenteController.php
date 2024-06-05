<?php

namespace App\Http\Controllers;

use App\Models\Accidente;
use App\Models\Persona;
use Illuminate\Http\Request;

class AccidenteController extends Controller
{
    public function index(){
        $accidentes  = Accidente::orderBy('id', 'desc')->get();
        return view('accidentes.listar', compact('accidentes'));
    }

    public function create(){
        $personas = Persona::all();
        return view('accidentes.create', compact('personas'));
    }

    public function store(Request $request){
        $accidente = new Accidente();
        $accidente->hora=$request->hora;
        $accidente->codigo=$request->codigo;
        $accidente->fecha=$request->fecha;
        $accidente->lugar=$request->lugar;
        $accidente->persona_id=$request->persona_id;
        $accidente->save();

        return $accidente;
    }

    public function show(Accidente $accidente ){
        return view('accidentes.show', compact('accidente'));
    }

    public function destroy (Accidente $accidente){
        $accidente->delete();
        return redirect()->route('accidente.index');
    }

    public function edit(Accidente $accidente){
        return view('accidentes.edit', compact('accidente'));
    }

    public function update(Request $request, Accidente $accidente){
        $accidente->hora=$request->hora;
        $accidente->codigo=$request->codigo;
        $accidente->fecha=$request->fecha;
        $accidente->lugar=$request->lugar;
        $accidente->persona_id=$request->persona_id;

        $accidente->save();

        return redirect()->route('accidente.index');

    }
}
