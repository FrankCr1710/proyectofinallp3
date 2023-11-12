<?php

namespace App\Http\Controllers;

use App\Models\Establecimiento;
use Illuminate\Http\Request;

class EstablecimientoController extends Controller
{
    public function  mostrarEstablecimiento(){
        return view("registroEstablecimiento");
    }

    public function guardarEstablecimiento(Request $request){
        $establecimiento = new Establecimiento;
        $establecimiento->nombre = $request->input('nombre');
        $establecimiento->direccion = $request->input('direccion');
        $establecimiento->distrito_id = $request->input('distrito_id');
        $establecimiento->responsable_id = $request->input('responsable_id');
        $establecimiento->save();
        return "Establecimiento Guardado Exitosamente";
    }
}
