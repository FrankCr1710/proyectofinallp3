<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstablecimientoController extends Controller
{
    public function  mostrarEstablecimiento(){
        return view("registroEstablecimiento");
    }
}
