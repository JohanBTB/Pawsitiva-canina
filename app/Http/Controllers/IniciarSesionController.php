<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UsuarioAuthController;
use App\Http\Controllers\AlbergueAuthController;
use Illuminate\Http\Request;

class IniciarSesionController extends Controller
{
    public function index(){
        $valor = "iniciar-sesion";
        return view('iniciar-sesion.iniciar-sesion')->with('valor', $valor);    
    }

    public function login(Request $request){
    
        $registro = $request->input('registro');
        // dd($registro);
        if($registro == 'usuario'){
            $usuario = new UsuarioAuthController();
            if($usuario->login($request)){
                
                return redirect('/')->with('success','Usuario conectado');
            }else{
                return redirect('/iniciar-sesion')->with('error','No logró iniciar sesión');
            }
        }elseif($registro=='albergue'){
            $albergue = new AlbergueAuthController();
            if($albergue->login($request)){
                return redirect('/')->with('success','Albergue conectado');
            }else{
                return redirect('/iniciar-sesion')->with('error','No logró iniciar sesión');
            }
        }
    }

    public function logout(Request $request){
        // dd($request);
        if (Auth::guard('usuario')->check()){
            Auth::guard('usuario')->logout();
          }elseif(Auth::guard('albergue')->check()){
            Auth::guard('albergue')->logout();
          }
        
        return redirect("/")->with('success','Usuario se ha desconectado');
    }
}
