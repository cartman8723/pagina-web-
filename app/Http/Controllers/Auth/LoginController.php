<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\logout;


class LoginController extends Controller
{
    public function showLoginForm()
    {
    
        try {
            return  view('login');
        } 
        
        catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
     } 
        
    

     public function login()
     {
         // Validar la solicitud de inicio de sesión
         $credentials = $this->validate(request(), [
             'email' => 'required|email',
             'password' => 'required|string',
         ]);
     
         // Intentar autenticar al usuario
         if (Auth::attempt($credentials)) {
             // Si el usuario es autenticado, inicia sesión
             $user = Auth::user();
            
             
     
             // Redirigirlo a la destino deseado
             return redirect()->route('welcome')->with('success', 'Sesión iniciada exitosamente!');
         } else {
             // Si el usuario no es autenticado, devuelve un mensaje de error
             return back()->withErrors(['email' => 'Correo electrónico o contraseña inválidos.']);
         }
     }

     public function destroy(Request $request)
     {
         // Cierra la sesión del usuario autenticado
         Auth::guard('web')->logout();
     
         // Invalida la sesión del usuario
         $request->session()->invalidate();
     
         // Regenera el token de la sesión
         $request->session()->regenerateToken();

            // Registra información para depuración
        Log::info('User logged out successfully.');
     
         // Redirige a la página de inicio de sesión
         return redirect()->route('login')->withHeaders([
             'Cache-Control' => 'no-cache, no-store, max-age=0, must-revalidate',
         ]);
     }
     
    



}

