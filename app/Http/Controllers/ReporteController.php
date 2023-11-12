<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function agregarReporte(){
        return view ('registroReporte');
    }

    public function guardarReporte(Request $request){

        
    
        $reporte = new Reporte;
        $reporte->tipo = $request->input('tipo');
        $reporte->contenido = $request->input('contenido');
        $reporte->fecha = $request->input('fecha');
        $reporte->mensaje = $request->input('mensaje');
        $reporte->municipalidad_id = $request->input('municipalidad_id');
        $reporte->save();

    }
}
