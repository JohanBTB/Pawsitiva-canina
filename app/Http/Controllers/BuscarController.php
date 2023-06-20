<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\Perro;
use App\Models\Albergue;
use Illuminate\Http\Request;

class BuscarController extends Controller
{
    public function index(Request $request){
        $usuarios = Usuario::where('id','>',0)->get();
        $albergues = Albergue::where('id','>',0)->get();
        $perritos = Perro::take(10)->get();
        $valor = "buscar";
        if ($request->has('q')) {
            return $this->mostrarPerfil($request);
        } elseif($request->has('search')){
            $val = $request->input('search');
            $usuarios = Usuario::where('nombre', 'like', '%'.$val.'%')->get();
            $albergues = Albergue::where('nombre', 'like', '%'.$val.'%')->get();
            $perritos = Perro::where('nombre', 'like', '%'.$val.'%')->get();
        }
        return view('buscar.buscar', compact('valor', 'usuarios', 'albergues', 'perritos'));
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
            $datos = Usuario::find($id);
            $perros = Perro::where('adoptado_por','=',$datos['id'])->count();
            $datos['cant_perros'] = $perros;
        }    
        elseif($tipo == 'perritos'){
            $datos = Perro::find($id);

            $albergue = Albergue::find($datos['albergue_id'])['nombre'];
            $datos['albergue'] = $albergue;
        }
        elseif($tipo == 'albergues'){
            $datos = Albergue::find($id);
        }


        return view('buscar.buscar', compact('valor', 'id', 'tipo','datos'));    
    }

}

