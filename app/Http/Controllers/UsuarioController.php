<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
class UsuarioController extends Controller
{
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nombre = $request->input('nombre');
        $usuario->correo = $request->input('correo');
        $usuario->edad = $request->input('edad');
        $usuario->distrito = $request->input('distrito');
        $usuario->numero_telefonico = $request->input('numero_telefonico');
        $usuario->contraseña = bcrypt($request->input('contraseña'));
        $usuario->foto = $request->file('foto')->store('public/images');
        $usuario->save();
        
        return redirect()->back()->with('success', 'Usuario creado exitosamente!');
    }



}
