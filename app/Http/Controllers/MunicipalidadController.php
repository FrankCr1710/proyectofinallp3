<?php

namespace App\Http\Controllers;

use App\Models\Municipalidad;
use Illuminate\Http\Request;

class MunicipalidadController extends Controller
{
    public function agregarMunicipalidad(){
        return view ('registroMunicipalidad');
    }

    public function guardarMunicipalidad(Request $request){
        $municipalidad = new Municipalidad;
        $municipalidad->nombre = $request->input('nombre');
        $municipalidad->save();
    }
}
