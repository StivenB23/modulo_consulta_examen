<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{



    public function login(Request $request)
    {
        // Credenciales de acceso
        $credentials = $request->only('email', 'password');
        if (Auth::attempt(["email" => $credentials['email'], "password" => $credentials['password']])) {
            // Generación de identificador de sesión
            $request->session()->regenerate();
            $user = Auth::user();
            return redirect()->route("dashboard")->with("user", $user);
        }
        dd("error");


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
