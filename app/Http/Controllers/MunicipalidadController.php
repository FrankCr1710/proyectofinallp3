<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MunicipalidadController extends Controller
{
    public function agregarMunicipalidad(){
        return view ('registroMunicipalidad');
    }
}
