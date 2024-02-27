<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Vuelo;

class VuelosController extends Controller
{
    public function vuelos(){
        $vuelos = Vuelo::all();
        return view("vuelos", compact('vuelos'));
    }

    public function agregar(){
        return view('nuevoVuelo');
    }

    public function create(Request $request){
        $vuelo = new Vuelo();
        $vuelo->numeroVuelo = $request->numero;
        $vuelo->origen = $request->origen;
        $vuelo->destino = $request->destino;
        $vuelo->numeroAsientos = $request->cantidadAsientos;
        $vuelo->fecha_de_salida = $request->fecha;
        $vuelo->save();
        return redirect('/inicio');
    }

    public function eliminar($numeroVuelo){
        $vuelos = Vuelo::all();
        foreach($vuelos as $vuelo){
            if ($vuelo->numeroVuelo == $numeroVuelo){
                $vuelo->delete();
            }
        }
        return redirect("/vuelos");
    }

    public function editar($numeroVuelo){
        $vuelo = Vuelo::find($numeroVuelo);
        return view('editarVuelo', compact('vuelo'));
    }

    public function update(Request $request){ 
        $vuelo = Vuelo::find($request->numeroVuelo);
        $vuelo->origen = $request->origen;
        $vuelo->destino = $request->destino;
        $vuelo->save();
        return redirect('/vuelos');
    }
}
