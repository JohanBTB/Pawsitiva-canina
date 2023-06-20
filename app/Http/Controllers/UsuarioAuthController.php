<?php
namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class UsuarioAuthController extends Controller
{

    public function login(Request $request)
    {
        $credentials = $request->only('correo', 'contraseña');
        
        $user = Usuario::where('correo', $credentials['correo'])->first();
        
        if((Hash::check($credentials['contraseña'], $user->contraseña??""))){
            Auth::guard('usuario')->login($user);
            $user = Auth::guard('usuario')->user();
            return true;
        }
    }
}
?>