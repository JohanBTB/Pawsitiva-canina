<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\Perro;
use App\Models\Albergue;
use Illuminate\Http\Request;

class BuscarController extends Controller
{
    public function index(Request $request){
        $usuarios = Usuario::take(10)->get();
        $albergues = Albergue::take(10)->get();
        // $albergues = Albergue::find("1");
        // $usuarios = Usuario::find("1");
        // $perritos = Perro::find("1");
        $perritos = Perro::take(10)->get();
        $valor = "buscar";
        if ($request->has('q')) {
            // Si se ha enviado una búsqueda, llamar a la función mostrarPerfil
            return $this->mostrarPerfil($request);
        } else {
            // Si no se ha enviado una búsqueda, continuar con la funcionalidad normal
            return view('buscar.buscar', compact('valor', 'usuarios', 'albergues', 'perritos'));
        }  
    }

    public function mostrarPerfil(Request $request){
        $valor = "buscar";
        // $q = $request->query('q');
        // parse_str($q, $params);
        $partes = explode('-', $request->input('q')) ;
        $tipo = $partes[0];
        $id = $partes[1];
        $datos = "albergues";
        if($tipo == 'usuarios'){
            $datos = Usuario::find($id);}
        elseif($tipo == 'perritos'){
            $datos = Perro::find($id);}
        elseif($tipo == 'albergues'){
            $datos = Albergue::find($id);
        }


        return view('buscar.buscar', compact('valor', 'id', 'tipo','datos'));    
    }

}

