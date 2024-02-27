@extends('layouts.authlayout')

@section('title', 'Iniciar Sesión')

@section('content')
    <form action="{{ route('login') }}" method="POST">
        @if($errors->has('email'))
            <div class="error_message" data-aos="fade-left" data-aos-duration="700">
                {{ $errors->first('email') }}
            </div>
        @endif

        @csrf
        <h1 data-aos="fade-down" data-aos-duration="700">Iniciar Sesión</h1>

        <div class="form_group" data-aos="fade-right" data-aos-duration="700">
            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" required placeholder="Ingrese su Correo">
            <p class="error">{{ $errors->first('email') }}</p>
        </div>

        <div class="form_group" data-aos="fade-left" data-aos-duration="700">
            <label for="password">Contraseña</label>
            <div class="password_container">
                <input type="password" id="password" name="password" required placeholder="Ingrese su Contraseña">
                <i class="bi bi-eye" id="togglePassword">
                </i>
            </div>
        </div>

        <button type="submit" data-aos="fade-up" data-aos-duration="700">Iniciar Sesión</button>
    </form>
@endsection
