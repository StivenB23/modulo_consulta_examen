@extends('layouts.dashboardlayout')

@section('title', 'Dashboard | Paciente')

@section('content')
    <div class="tabs">
        <button id="client_tab" class="tab_button active" data-content="client_form">Cliente</button>
        <button id="company_tab" class="tab_button" data-content="company_form">Entidad</button>
    </div>

    {{-- CLIENT FORM --}}
    <form action="{{ route('registerUserPacient') }}" method="post" id="client_form" class="form_tab active client_form">
        @csrf
        <h1>Registrar Paciente</h1>

        {{-- NAME --}}
        <div class="form_group">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" placeholder="Ingrese Nombre" value="{{ old('name') }}">
            <p class="error">{{ $errors->first('name') }}</p>
        </div>

        {{-- LASTNAME --}}
        <div class="form_group">
            <label for="lastname">Apellido</label>
            <input type="text" id="lastname" name="lastname" placeholder="Ingrese Apellido" value="{{ old('lastname') }}">
            <p class="error">{{ $errors->first('lastname') }}</p>
        </div>

        {{-- TYPE --}}
        <div class="form_group" >
            <label for="type">Tipo</label>
            <select name="type_document" id="type_document">
                <option value="RC">Registro Civil</option>
                <option value="TI">Tarjeta de identidad.</option>
                <option value="CC">Cédula de Ciudadanía</option>
                <option value="CE">Cédula de extranjería</option>
                <option value="PT">Permiso por Protección Temporal</option>
                <option value="CN">Certificado de nacido</option>
            </select>
            <p class="error">{{ $errors->first('type_document') }}</p>
        </div>

        {{-- IDENTIFICATION --}}
        <div class="form_group">
            <label for="document">Identificación</label>
            <input type="text" id="document" name="document" placeholder="Ingrese identificación" value="{{ old('document') }}">
            <p class="error">{{ $errors->first('document') }}</p>
        </div>

        {{-- AGE --}}
        <div class="form_group">
            <label for="age">Edad</label>
            <input type="text" id="age" name="age" placeholder="Ingrese Edad" value="{{ old('age') }}">
            <p class="error">{{ $errors->first('age') }}</p>
        </div>

        {{-- SEX --}}
        <div class="form_group" >
            <label for="sex">Tipo</label>
            <select name="sex" id="sex">
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
            <p class="error">{{ $errors->first('sex') }}</p>
        </div>

        {{-- EMAIL --}}
        <div class="form_group">
            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" placeholder="Ingrese su Correo" value="{{ old('email') }}">
            <p class="error">{{ $errors->first('email') }}</p>
        </div>

        <button type="submit">Guardar</button>
    </form>

    {{-- COMPANY FORM --}}
    <form action="{{ route('registerUserPacient') }}" method="post" id="company_form" class="form_tab">
        @csrf
        <h1>Registrar Paciente</h1>

        <div class="form_group" >
            <label for="company_id">Entidad</label>
            <select name="company_id" id="company_id">
                @foreach ($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
            </select>
            <p class="error">{{ $errors->first('company_id') }}</p>
        </div>

        {{-- NAME --}}
        <div class="form_group">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" placeholder="Ingrese Nombre" value="{{ old('name') }}">
            <p class="error">{{ $errors->first('name') }}</p>
        </div>

        {{-- LASTNAME --}}
        <div class="form_group">
            <label for="lastname">Apellido</label>
            <input type="text" id="lastname" name="lastname" placeholder="Ingrese Apellido" value="{{ old('lastname') }}">
            <p class="error">{{ $errors->first('lastname') }}</p>
        </div>

        {{-- TYPE --}}
        <div class="form_group" >
            <label for="type">Tipo</label>
            <select name="type_document" id="type_document">
                <option value="RC">Registro Civil</option>
                <option value="TI">Tarjeta de identidad.</option>
                <option value="CC">Cédula de Ciudadanía</option>
                <option value="CE">Cédula de extranjería</option>
                <option value="PT">Permiso por Protección Temporal</option>
                <option value="CN">Certificado de nacido</option>
            </select>
            <p class="error">{{ $errors->first('type_document') }}</p>
        </div>

        {{-- IDENTIFICATION --}}
        <div class="form_group">
            <label for="document">Identificación</label>
            <input type="text" id="document" name="document" placeholder="Ingrese identificación" value="{{ old('document') }}">
            <p class="error">{{ $errors->first('document') }}</p>
        </div>

        {{-- AGE --}}
        <div class="form_group">
            <label for="age">Edad</label>
            <input type="text" id="age" name="age" placeholder="Ingrese Edad" value="{{ old('age') }}">
            <p class="error">{{ $errors->first('age') }}</p>
        </div>

        {{-- SEX --}}
        <div class="form_group" >
            <label for="sex">Tipo</label>
            <select name="sex" id="sex">
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
            <p class="error">{{ $errors->first('sex') }}</p>
        </div>

        {{-- EMAIL --}}
        <div class="form_group">
            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" placeholder="Ingrese su Correo" value="{{ old('email') }}">
            <p class="error">{{ $errors->first('email') }}</p>
        </div>

        <button type="submit">Guardar</button>
    </form>
@endsection
