<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Services\RandomKeyService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $randomKeyService;



    public function login(Request $request)
    {
        // Credenciales de acceso
        $credentials = $request->only('email', 'password');
        if (Auth::attempt(["email" => $credentials['email'], "password" => $credentials['password'], "status" => 1])) {
            // Generación de identificador de sesión
            $request->session()->regenerate();
            $user = Auth::user();
            return redirect()->route("dashboard")->with("user", $user);
        }


        return redirect()->back()->withErrors(['email' => 'Correo o contraseña incorrectos']);
    }
    function loginCompany(Request $request)
    {
        // Obtener las credenciales del formulario
        $email = $request->input('email_company');
        $password = $request->input('password_company');

        // Buscar el usuario en la tabla companies
        $company = Company::where('email', $email)->first();
        // Verificar si el usuario existe y la contraseña es correcta
        if ($company && password_verify($password, $company->password)) {
            // Autenticación exitosa
            // Iniciar sesión manualmente
            Auth::login($company);

            // Regenerar identificador de sesión
            $request->session()->regenerate();
            // Guardar los datos relevantes en la sesión
            session(['company' => $company]);

            // Redirigir al dashboard de la compañía
            return redirect()->route('dashboardCompany');
        } else {
            dd("error");

            // Autenticación fallida
            return back()->withErrors(['email_company' => 'Estas credenciales no coinciden con nuestros registros.']);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to('/');
    }
}
