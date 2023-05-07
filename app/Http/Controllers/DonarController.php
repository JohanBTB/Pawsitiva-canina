<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonarController extends Controller
{
    public function index(){
        $valor = "donar";
        return view('donar.donar')->with('valor', $valor);    
    }
}

