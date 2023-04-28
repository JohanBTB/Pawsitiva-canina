<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonarController extends Controller
{
    public function index(){
        return view('donar.donar');    
    }
}

