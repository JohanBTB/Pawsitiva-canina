<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosotrosController extends Controller
{
    public function index(){
        $valor = "sobre-nosotros";
        return view('sobre-nosotros.sobre-nosotros')->with('valor', $valor);    
    }
}

