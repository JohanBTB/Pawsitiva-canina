<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AlbergueController;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Albergue;
class ActualizarController extends Controller
{
    public function index(){
        $valor = "";
        return view('actualizar.actualizar')->with('valor', $valor);    
    }

    public function actualizar(Request $request){
    
        $registro = $request->input('registro');
        
        if($registro == 'usuario'){
            
            $usuarioController = new UsuarioController();
            $usuarioController->update($request);

        }elseif($registro=='albergue'){
            $albergueController = new AlbergueController();
            $albergueController->update($request);
        }
        elseif($registro=='albergue-qr'){
            $albergueController = new AlbergueController();
            $albergueController->update_qr($request);
        }
        return redirect()->back()->withInput()->withErrors('Registro inválido');
    }

    public function logout(Request $request){
        // dd($request);
        if (Auth::guard('usuario')->check()){
            Auth::guard('usuario')->logout();
          }elseif(Auth::guard('albergue')->check()){
            Auth::guard('albergue')->logout();
          }
        
        return redirect("/")-with('success','Usuario se ha desconectado');
    }
}
