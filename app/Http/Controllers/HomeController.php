<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $valor = "inicio";
        return view('inicio.inicio')->with('valor',$valor);    
    }
}
