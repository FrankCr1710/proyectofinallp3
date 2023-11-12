<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comunicacion;

class ComunicacionController extends Controller
{
    public function agregarComunicacion(){
        return view('registroComunicacion');
    }


    public function guardarComunicacion(Request $request){
        $comunicacion = new Comunicacion;
        $comunicacion->asunto = $request->input('asunto');
        $comunicacion->mensaje = $request->input('mensaje');
        $comunicacion->fecha = $request->input('fecha');
        $comunicacion->responsable_id = $request->input('responsable_id');
        $comunicacion->municipalidad_id = $request->input('municipalidad_id');
        $comunicacion->save();
        return "comunicacion guardado";

    }
}
