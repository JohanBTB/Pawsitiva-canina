<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perro;
class PerroController extends Controller
{
    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate( [
            'nombre' => 'required|string|max:255',
	        'edad' => 'nullable|integer',
            'distrito' => 'required|string|max:255',
            'numero_telefonico' => 'required|string|max:20',
            'raza' => 'nullable|string|max:40',
            'historial_clinico' => 'nullable|max:1000',
            'adoptado_por' => 'required|exists:usuarios,id',
            'albergue_id' => 'required|exists:albergues,id',
            'foto' => 'nullable|image|max:2048',
            ], [
                'adoptado_por.exists' => 'El valor seleccionado para adoptado_por no es válido.',
                'albergue_id.exists' => 'El valor seleccionado para albergue_id no es válido.',
            ]);
        // dd($data);
        $perrito = new Perro();
        $perrito->nombre = $data['nombre'];
        $perrito->edad = $data['edad'];
        $perrito->distrito = $data['distrito'];
        $perrito->numero_telefonico = $data['numero_telefonico'];
        $perrito->raza = $data['raza'];
        $perrito->historial_clinico = $data['historial_clinico'];
        $perrito->adoptado_por = $data['adoptado_por'];
        $perrito->albergue_id = $data['albergue_id'];
        if ($request->hasFile('foto')) {
            $nombreImagen = $data['nombre'].".jpg";
            $rutaImagen = 'images\buscar\perritos';
            $request->file('foto')->move(public_path($rutaImagen), $nombreImagen);
            $rutaImagen = $rutaImagen."\\".$nombreImagen;
            $perrito->foto = $rutaImagen;
        }
        // dd($perrito);
        
        $perrito->save();

        return redirect("/")->with('success', 'Perro creado exitosamente!');
    }
}
