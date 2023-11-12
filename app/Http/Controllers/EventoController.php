<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function agregarEvento(){
        return view ('registroEvento');
    }

    public function guardarEvento(Request $request){
        $evento = new Evento;
        $evento->nombre = $request->input('nombre');
        $evento->fecha = $request->input('fecha');
        $evento->lugar = $request->input('lugar');
        $evento->descripcion = $request->input('descripcion');
        $evento->municipalidad_id = $request->input('municipalidad_id ');
        $evento->save();
    }
}
