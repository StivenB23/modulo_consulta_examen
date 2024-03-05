@extends('layouts.authlayout')

@section('title', 'Iniciar Sesión')

@section('content')
    <form action="{{ route('login') }}" method="POST" id="client_form" class="form_tab active client_form">
        @if (session('success'))
            <div class="success_message">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->has('email'))
            <div class="error_message">
                {{ $errors->first('email') }}
            </div>
        @endif

        @csrf
        <h1>Iniciar Sesión</h1>
        <div class="form_group">
            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" required placeholder="Ingrese su Correo">
        </div>

        <div class="form_group">
            <label for="password">Contraseña</label>
            <div class="password_container">
                <input type="password" id="password" name="password" required placeholder="Ingrese su Contraseña">
                <i class="bi bi-eye" id="togglePassword">
                </i>
            </div>
        </div>
        <a href="{{ route('olvidecontrasena') }}">Olvide mi contraseña</a>
        <p class="error">{{ $errors->first('email') }}</p>

        <button type="submit">Iniciar Sesión</button>
    </form>
@endsection
