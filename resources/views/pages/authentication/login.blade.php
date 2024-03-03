@extends('layouts.authlayout')

@section('title', 'Iniciar Sesión')

@section('content')
    <div class="tabs">
        <button id="client_tab" class="tab_button active" data-content="client_form">Cliente</button>
        <button id="company_tab" class="tab_button" data-content="company_form">Empresa</button>
    </div>
    <form action="{{ route('login') }}" method="POST" id="client_form" class="form_tab active client_form">
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
        <p class="error">{{ $errors->first('email') }}</p>

        <button type="submit">Iniciar Sesión</button>
    </form>

    {{-- COMPANY FORM --}}
    {{-- TODO: pending error for this part of app --}}
    <form action="{{ route('login') }}" method="POST"method="post" id="company_form" class="form_tab">
        @if ($errors->has('email'))
            <div class="error_message">
                {{ $errors->first('email') }}
            </div>
        @endif

        @csrf
        <h1>Iniciar Sesión Empresa</h1>

        <div class="form_group">
            <label for="email_company">Correo Electrónico</label>
            <input type="email" id="email_company" name="email_company" required placeholder="Ingrese su Correo">
        </div>

        <div class="form_group">
            <label for="password_company">Contraseña</label>
            <div class="password_container">
                <input type="password" id="password_company" name="password_company" required placeholder="Ingrese su Contraseña">
                <i class="bi bi-eye" id="togglePassword">
                </i>
            </div>
        </div>
        <p class="error">{{ $errors->first('email') }}</p>

        <button type="submit">Iniciar Sesión</button>
    </form>
@endsection
