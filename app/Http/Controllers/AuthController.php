<?php



namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Personas;
use App\Models\Comunidades;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
    public function showLoginForm()
    {

        //Función muestra el formulario de inicio de sesion
        return view('loginUser');
    }

    public function login(Request $request)
    {
    
        $credentials = request()->only('email', 'password');
        // Intentar autenticar al usuario
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
           
            // Autenticación exitosa
            return redirect() ->route('personas.show');
        }

        // Autenticación fallida
        
        return 'No se reconocen los datos';
        
    }


    public function logout()
    {
        Auth::logout();
        return redirect('personas.index');
    }
}

