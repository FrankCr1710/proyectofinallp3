<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComunicacionController extends Controller
{
    public function agregarComunicacion(){
        return view('registroComunicacion');
    }
}
