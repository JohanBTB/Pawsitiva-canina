<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Perro;
use App\Models\Albergue;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AlbergueController;
use App\Http\Controllers\PerroController;
class RegistrarController extends Controller
{
    public function index(){
        $usuarios = Usuario::all();
        $albergues = Albergue::all();
        $valor = "registrar";
        return view('registrar.registrar', compact('valor', 'usuarios', 'albergues'));
    }
    public function store(Request $request){
        $tipo = $request->input('registro');
        
        if($tipo == 'usuarios'){
            $usuarioController = new UsuarioController();
            $usuarioController->store($request);
        }
        elseif($tipo == 'perritos'){
            $perroController = new PerroController();
            $perroController->store($request);
        }
        elseif($tipo == 'albergues'){
            $albergueController = new AlbergueController();
            $albergueController->store($request);
        }
        return redirect('/');
    }
    public function showUsuarios(Request $request){
	$usuarios = Usuario::take(10)->get();
	if($request->keyword != ''){
		$usuarios = Usuario::where('nombre','like','%'.$request->keyword.'%')->take(10)->get();
	}
	return response()->json([
	'usuarios'=>$usuarios
	]);
    }

}

