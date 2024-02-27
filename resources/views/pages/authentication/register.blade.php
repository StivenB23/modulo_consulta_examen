@extends('layouts.authlayout')

@section('title', 'Iniciar Sesión')

@section('content')
    <div class="tabs">
        <button id="client_tab" class="tab_button active" data-content="client_form">Cliente</button>
        <button id="company_tab" class="tab_button" data-content="company_form">Empresa</button>
    </div>

    {{-- CLIENT FORM --}}
    <form action="" method="post" id="client_form" class="form_tab active client_form">
        @csrf
        <h1>Registrarme</h1>

        <div class="form_group">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" required placeholder="Ingrese su Nombre" value="{{ old('name') }}">
            <p class="error">{{ $errors->first('name') }}</p>
        </div>

        <div class="form_group">
            <label for="lastname">Apellido</label>
            <input type="text" id="lastname" name="lastname" required placeholder="Ingrese su Apellido" value="{{ old('lastname') }}">
            <p class="error">{{ $errors->first('lastname') }}</p>
        </div>

        {{-- type of document --}}
        <div class="form_group" >
            <label for="document_type">Tipo de Documento</label>
            <select name="document_type" id="document_type" required value="{{ old('document_type') }}">
                <option value="1">Cédula de Ciudadanía</option>
                <option value="2">Cédula de Extranjería</option>
                <option value="3">Pasaporte</option>
            </select>
            <p class="error">{{ $errors->first('document_type') }}</p>
        </div>

        {{-- document number --}}
        <div class="form_group">
            <label for="document_number">Número de Documento</label>
            <input type="text" id="document_number" name="document_number" required placeholder="Ingrese su Número de Documento" value="{{ old('document_number') }}">
            <p class="error">{{ $errors->first('document_number') }}</p>
        </div>

        <div class="form_group">
            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" required placeholder="Ingrese su Correo" value="{{ old('email') }}">
            <p class="error">{{ $errors->first('email') }}</p>
        </div>

        <div class="form_group">
            <label for="password">Contraseña</label>
            <div class="password_container">
                <input type="password" id="password" name="password" required placeholder="Ingrese su Contraseña">
                <i class="bi bi-eye" id="togglePassword">
                </i>
            </div>
            <p class="error">{{ $errors->first('password') }}</p>
        </div>

        <div class="separator">
            <p>
                Ya tienes una cuenta? <a href="{{ url('/') }}">Iniciar Sesión</a>
            </p>
        </div>

        <button type="submit">Registrar</button>
    </form>

    {{-- COMPANY FORM --}}
    {{-- TODO: pending error for this part of app --}}
    <form action="" method="post" id="company_form" class="form_tab">
        @csrf
        <h1 data-aos="fade-down" data-aos-duration="700">Registrarme Empresa</h1>

        <div class="form_group" data-aos="fade-right" data-aos-duration="700">
            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" required placeholder="Ingrese su Correo">
        </div>

        <div class="separator" data-aos="fade-up" data-aos-duration="700">
            <p>
                Ya tienes una cuenta? <a href="{{ url('/') }}">Iniciar Sesión</a>
            </p>
        </div>

        <button type="submit" data-aos="fade-up" data-aos-duration="700">Registrar</button>
    </form>
@endsection
