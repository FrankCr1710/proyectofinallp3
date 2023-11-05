<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CapacitacionController extends Controller
{
    public function agregarCapacitacion(){
        return view ('registroCapacitacion');
    }
}
