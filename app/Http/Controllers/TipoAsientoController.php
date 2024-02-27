<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\TipoAsiento;

class TipoAsientoController extends Controller
{
    public function inicio(){
        return view('inicio');
    }

    public function tipoAsientos(){
        // Conseguir los tipos de asientos existentes
        $asientosDisponibles = TipoAsiento::all()->where('estado', '=', 'A');
        return view('tiposAsientos', compact('asientosDisponibles'));
    }

    public function agregar(){
        return view('agregarTipoAsiento');
    }

    public function create(Request $request){
        $tipoAsiento = new TipoAsiento();
        $tipoAsiento->descripcion = $request->descripcion;
        $tipoAsiento->precio = $request->precio;
        $tipoAsiento->estado = $request->estado;
        $tipoAsiento->save();
        return redirect('/inicio');
    }

    public function eliminar($idTipoAsiento){
        $tipoAsiento = TipoAsiento::find($idTipoAsiento);
        $tipoAsiento->estado = 'I';
        $tipoAsiento->save();
        return redirect('/tipoAsiento');
    }

    public function editar($idTipoAsiento){
        $tipoAsiento = TipoAsiento::find($idTipoAsiento);
        return view('editarAsiento', compact('tipoAsiento'));
    }

    public function edit(Request $request){
        $tipoAsiento = TipoAsiento::find($request->idTipoAsiento);
        $tipoAsiento->descripcion = $request->descripcion;
        $tipoAsiento->precio = $request->precio;
        $tipoAsiento->estado = $request->estado;
        $tipoAsiento->save();
        return redirect("/tipoAsiento");
        
    }
}
