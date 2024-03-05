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
        }else{
            // Buscar el usuario en la tabla companies
        $company = Company::where('email', $credentials['email'])->first();
        // Verificar si el usuario existe y la contraseña es correcta
        if ($company && password_verify($credentials['password'], $company->password)) {
            // Autenticación exitosa
            // Iniciar sesión manualmente
            Auth::login($company);

            // Regenerar identificador de sesión
            $request->session()->regenerate();
            // Guardar los datos relevantes en la sesión
            session(['company' => $company]);

            // Redirigir al dashboard de la compañía
            return redirect()->route('dashboardCompany');
        }
        }

        return redirect()->back()->withErrors(['email' => 'Correo o contraseña incorrectos']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to('/');
    }

}
