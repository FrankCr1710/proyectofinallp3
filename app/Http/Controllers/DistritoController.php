<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distrito;

class DistritoController extends Controller
{
    public function agregarDistrito(){
        return view("registroDistrito");
    }

    public function guardarDistrito(Request $request){
        $distrito = new Distrito;
        $distrito->nombre = $request->input('nombre');
        $distrito->save();
        return "Distrito Guardado";
    }

    
    
    
}
