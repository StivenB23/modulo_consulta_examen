@extends('layouts.authlayout')

@section('title', 'Iniciar Sesión')

@section('content')
    <form action="{{ route('login') }}" method="POST" id="client_form" class="form_tab active client_form">
        @if ($errors->has('email'))
            <div class="error_message">
                {{ $errors->first('email') }}
            </div>
        @endif

        @csrf
        <h1>Olvide mi contraseña</h1>
        <div class="form_group">
            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" required placeholder="Ingrese su Correo">
        </div>
        <p class="error">{{ $errors->first('email') }}</p>

        <button type="submit">Recuperar</button>
    </form>
@endsection
