@extends('layouts.authlayout')

@section('title', 'Iniciar Sesión')

@section('content')
    <form action="">
        <h1>Iniciar Sesión</h1>

        <div class="form_group">
            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" required placeholder="Ingrese su Correo">
        </div>

        <div class="form_group">
            <label for="password">Contraseña</label>
            <div class="password_container">
                <input type="password" id="password" name="password" required placeholder="Ingrese su Contraseña">
                <i class="bi bi-eye"  id="togglePassword">
                </i>
            </div>
        </div>

        <div class="separator">
            <p>
                No tienes una cuenta? <a>Regístrate</a>
            </p>
        </div>

        <button type="submit">Iniciar Sesión</button>
    </form>
@endsection
