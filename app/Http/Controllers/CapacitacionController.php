<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capacitacion;

class CapacitacionController extends Controller
{
    public function agregarCapacitacion(){
        return view ('registroCapacitacion');
    }

    public function guardarCapacitacion(Request $request){
        $capacitacion = new Capacitacion;
        $capacitacion->nombre = $request->input('nombre');
        $capacitacion->fecha = $request->input('fecha');
        $capacitacion->descripcion = $request->input('descripcion');
        $capacitacion->tipo = $request->input('tipo');
        $capacitacion->responsable_id = $request->input('responsable_id');
        $capacitacion->municipalidad_id = $request->input('municipalidad_id');
        $capacitacion->save();
        return "Capacitacion guardado";
    }
}
