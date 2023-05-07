<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactanosController extends Controller
{
    public function index(){
        $valor = "contactanos";
        return view('contactanos.contactanos')->with('valor', $valor);    
    }
}
