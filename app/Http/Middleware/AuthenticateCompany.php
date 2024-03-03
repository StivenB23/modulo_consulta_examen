<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthenticateCompany
{
    public function handle(Request $request, Closure $next)
    {
        // Verificar si el usuario de la empresa está autenticado
        if (! $request->session()->has('company')) {
            // El usuario no está autenticado, redirigir al login
            return redirect()->route('login')->with('error', 'Debes iniciar sesión.');
        }

        // El usuario está autenticado, permitir el acceso
        return $next($request);
    }
}
