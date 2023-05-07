<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IniciarSesionController extends Controller
{
    public function index(){
        $valor = "iniciar-sesion";
        return view('iniciar-sesion.iniciar-sesion')->with('valor', $valor);    
    }
}
