<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrarController extends Controller
{
    public function index(){
        $valor = "registrar";
        return view('registrar.registrar')->with('valor', $valor);    
    }
}

