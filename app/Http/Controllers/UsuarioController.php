<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UsuarioController extends Controller
{
    public function store(Request $request)
    {
        dd($request);

        $data = $request->only([
            'nombre',
            'apellido',
            'correo',
            'edad',
            'distrito',
            'numero_telefonico',
            'contraseña',
            'foto',
        ]);
        
        
        $validator = Validator::make($data, [
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|string|email|max:255|unique:usuarios,correo,' . $usuario->id,
            'edad' => 'required|integer',
            'distrito' => 'required|string|max:255',
            'numero_telefonico' => 'required|string|max:20',
            'contraseña' => 'required|string|min:4',
            'foto' => 'nullable|image|max:2048',
        ]);
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect('/')->with('error', 'Se han encontrado algunos errores al registrar usuario.');
        }

        $usuario = new Usuario();
        $usuario->nombre = $data['nombre']." ".$data['apellido'];
        $usuario->correo = $data['correo'];
        $usuario->edad = $data['edad'];
        $usuario->distrito = $data['distrito'];
        $usuario->numero_telefonico = $data['numero_telefonico'];
        $usuario->contraseña = Hash::make($data['contraseña']);
        if ($request->hasFile('foto')) {
            $nombreImagen = $data['correo'].".jpg";
            $rutaImagen = 'images\buscar\usuarios';
            $request->file('foto')->move(public_path($rutaImagen), $nombreImagen);
            $rutaImagen = $rutaImagen."\\".$nombreImagen;
            $usuario->foto = $rutaImagen;
        }
        
        $usuario->save();

        return redirect("/")->with('success', 'Usuario creado exitosamente!');
    }

    
    public function update(Request $request)
    {
        $usuario = Usuario::find(Auth::guard('usuario')->user()['id']);

        $data = $request->only([
            'nombre',
            'apellido',
            'correo',
            'edad',
            'distrito',
            'numero_telefonico',
            'foto',
        ]);
        
        $validator = Validator::make($data, [
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|string|email|max:255|unique:usuarios,correo,' . $usuario->id,
            'edad' => 'required|integer',
            'distrito' => 'required|string|max:255',
            'numero_telefonico' => 'required|string|max:20',
            'foto' => 'nullable|image|max:2048',
        ]);
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect('/')->with('error', 'Se han encontrado algunos errores al actualizar.');
        }
    
        $usuario->nombre = $data['nombre']." ".$data['apellido'];
        $usuario->correo = $data['correo'];
        $usuario->edad = $data['edad'];
        $usuario->distrito = $data['distrito'];
        $usuario->numero_telefonico = $data['numero_telefonico'];
    
        if ($request->hasFile('foto')) {
            $nombreImagen = $data['correo'] . ".jpg";
            $rutaImagen = 'images/buscar/usuarios';
            $request->file('foto')->move(public_path($rutaImagen), $nombreImagen);
            $rutaImagen = $rutaImagen . '/' . $nombreImagen;
            $usuario->foto = $rutaImagen;
        }
        $usuario->save();
    
        return redirect('/')->with('success', 'Usuario actualizado exitosamente!');
    }



}
