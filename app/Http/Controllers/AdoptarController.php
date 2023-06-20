<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\Perro;
use App\Models\Albergue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdoptarController extends Controller
{
    public function index(Request $request){
        if(Auth::guard('usuario')->check()){
            $valor = "buscar";
            $perrito = Perro::find($request->query('id'));
            $usuario = Auth::guard('usuario')->user();
            
            return view('adoptar.adoptar', compact('perrito', 'valor', 'usuario'));
        }elseif(Auth::guard('albergue')->check()){
            return redirect('/')->with('error','Ingrese primero como usuario para poder adoptar un perrito.');
        }
        
        return redirect('/iniciar-sesion')->with('error','Ingrese primero como usuario para poder adoptar un perrito.');
    }

    public function actualizar_perro(Request $request){
	
        $usuario = Usuario::find($request->input('id_usuario'));
        $perrito = Perro::find($request->input('id_perrito'));
        $perrito->adoptado_por=$request->input('id_usuario');
        $perrito->save();
        return redirect('/buscar')->with('success','El perro ha sido exitosamente adoptado.');
    }

}

