<?php

namespace App\Http\Controllers;
use App\Models\Albergue;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class AlbergueAuthController extends Controller
{
    // ...

    public function login(Request $request)
    {
        $credentials = $request->only('correo', 'contraseña');
        
        $albergue = Albergue::where('correo', $credentials['correo'])->first();
        if((Hash::check($credentials['contraseña'], $albergue->contraseña??""))){
            Auth::guard('albergue')->login($albergue);
            $albergue = Auth::guard('albergue')->user();
            return true;
        }
    }
}
?>