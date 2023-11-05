<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponsableController extends Controller
{
    public function agregarResponsable(){
        return view('registroResponsable');
    }
}
