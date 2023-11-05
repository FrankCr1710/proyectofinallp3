<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistritoController extends Controller
{
    public function agregarDistrito(){
        return view("registroDistrito");
    }
}
