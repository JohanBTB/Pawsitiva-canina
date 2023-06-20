<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Albergue;
use Illuminate\Support\Facades\Auth;
class AlbergueController extends Controller
{
    public function store(Request $request)
    {

        $data = $request->validate( [
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'numero_telefonico' => 'required|string|max:20',
            'correo' => 'required|string|email|max:255|unique:albergues',
            'contraseña' => 'required|string|min:4',
            'foto' => 'nullable|image|max:2048',
            ]);

        $albergue = new Albergue();
        $albergue->nombre = "Albergue ".$data['nombre'];
        $albergue->direccion = $data['direccion'];
        $albergue->numero_telefonico = $data['numero_telefonico'];
        $albergue->correo = $data['correo'];        
        $albergue->contraseña = Hash::make($data['contraseña']);
        $albergue->codigo_qr = "images\buscar\qrs\qr-facebook2.png";
        if ($request->hasFile('foto')) {
            $nombreImagen = $data['correo'].".jpg";
            $rutaImagen = 'images\buscar\albergues';
            $request->file('foto')->move(public_path($rutaImagen), $nombreImagen);
            $rutaImagen = $rutaImagen."\\".$nombreImagen;
            $albergue->foto = $rutaImagen;
        }

        $albergue->save();

        return redirect("/")->with('success', 'Albergue creado exitosamente!');
    }

    public function update(Request $request)
    {
        $albergue = Albergue::find(Auth::guard('albergue')->user()['id']);

        $data = $request->only([
            'nombre',
            'direccion',
            'correo',
            'numero_telefonico',
            'foto',
        ]);
            
        $validator = Validator::make($data, [
            'nombre' => 'required|string|max:255',
            'correo' => 'required|string|email|max:255|unique:albergues,correo,' . $albergue->id,
            'direccion' => 'required|string|max:255',
            'numero_telefonico' => 'required|string|max:20',
            'foto' => 'nullable|image|max:2048',
        ]);
            
        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect('/')->with('error', 'Se han encontrado algunos errores al actualizar.');
        }
        
        $albergue->nombre = $data['nombre'];
        $albergue->correo = $data['correo'];
        $albergue->direccion = $data['direccion'];
        $albergue->numero_telefonico = $data['numero_telefonico'];
        
        if ($request->hasFile('foto')) {
            $nombreImagen = $data['correo'] . ".jpg";
            $rutaImagen = 'images/buscar/albergues';
            $request->file('foto')->move(public_path($rutaImagen), $nombreImagen);
            $rutaImagen = $rutaImagen . '/' . $nombreImagen;
            $albergue->foto = $rutaImagen;
        }
        $albergue->save();
        
        return redirect('/')->with('success', 'Albergue actualizado exitosamente!');
    }
    public function update_qr(Request $request)
    {
        $albergue = Albergue::find(Auth::guard('albergue')->user()['id']);

        $data = $request->only([
            'foto',
        ]);
            
        $validator = Validator::make($data, [
            'foto' => 'nullable|image|max:2048',
        ]);
            
        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect('/')->with('error', 'Se han encontrado algunos errores al actualizar.');
        }

        
        
        if ($request->hasFile('foto')) {
            if(File::exists())
            
            $nombreImagen = $albergue->correo . ".jpg";
            $rutaImagen = 'images\buscar\qrs';

            if(File::exists(public_path($rutaImagen), $nombreImagen)){
                File::remove(public_path($rutaImagen), $nombreImagen);
            }
            $request->file('foto')->move(public_path($rutaImagen), $nombreImagen);
            $rutaImagen = $rutaImagen . '/' . $nombreImagen;
            $albergue->codigo_qr = $rutaImagen;
        }
        $albergue->save();
        
        return redirect('/')->with('success', 'QR actualizado exitosamente!');
    }

}
