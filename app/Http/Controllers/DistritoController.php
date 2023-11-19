<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distrito;
use Illuminate\Support\Facades\Redirect;

class DistritoController extends Controller
{
    public function agregarDistrito(){
        $distritos = Distrito::all(); 
        return view("registroDistrito", compact('distritos'));
    }

    public function guardarDistrito(Request $request){
        $distrito = new Distrito;
        $distrito->nombre = $request->input('nombre');
        $distrito->save();

        $distritos = Distrito::all();
        return view("mostrarDistrito", compact('distritos'))->with('mensaje', 'Distrito Guardado');
    }

    public function eliminarDistrito($id){
        $distrito = Distrito::find($id);
        
        if($distrito){
            $distrito->delete();
            $distritos = Distrito::all();
            return view("mostrarDistrito", compact('distritos'))->with('mensaje', 'Distrito Eliminado');
        } else {
            return Redirect::route('distrito.agregar')->with('mensaje', 'Distrito no encontrado');
        }
    }
    

    
    
    
}
