<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VuelosAsientosController extends Controller
{
    public function agregar($numeroVuelo, $fecha){
        return view('agregarAsiento', ['numeroVuelo'=> $numeroVuelo,'fecha'=> $fecha]);
    }
}
