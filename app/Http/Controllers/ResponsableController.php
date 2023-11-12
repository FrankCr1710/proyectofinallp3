<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responsable;

class ResponsableController extends Controller
{
    public function agregarResponsable(){
        return view('registroResponsable');
    }

    public function guardarResponsable(Request $request){
        $responsable = new Responsable;
        $responsable->nombre = $request->input('nombre');
        $responsable->apellido = $request->input('apellido');
        $responsable->telefono = $request->input('telefono');   
        $responsable->correo = $request->input('correo');
        $responsable->cargo = $request->input('cargo');
        $responsable->save();
        return "Responsable Guardado";
    }
}
