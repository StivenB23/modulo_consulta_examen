@extends('layouts.dashboardlayout')

@section('title', 'Dashboard | Paciente')

@section('content')
<a href="{{ route('dashboard.patients') }}" class="back">
    volver
</a>
<h2>Editar Paciente</h2>

<div class="tabs">
    <button id="client_tab" class="tab_button active" data-content="client_form">Cliente</button>
    <button id="company_tab" class="tab_button" data-content="company_form">Entidad</button>
</div>

{{-- CLIENT FORM --}}
<form action="{{ route('updateUser', ['id' => $user->id, 'origin' => 'patients']) }}" method="POST" id="client_form" class="form_tab active client_form">
    @csrf
    @method('PUT')

    <div class="form_group">
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" placeholder="Ingrese Nombre" value="{{ $user->name }}">
        <p class="error">{{ $errors->first('name') }}</p>
    </div>

    {{-- LASTNAME --}}
    <div class="form_group">
        <label for="lastname">Apellido</label>
        <input type="text" id="lastname" name="lastname" placeholder="Ingrese Apellido" value="{{ $user->lastname }}">
        <p class="error">{{ $errors->first('lastname') }}</p>
    </div>

    {{-- TYPE --}}
    <div class="form_group" >
        <label for="type">Tipo</label>
        <select name="type_document" id="type_document">
            <option value="RC" {{ $user->type_document == 'RC' ? 'selected' : '' }}>Registro Civil</option>
            <option value="TI" {{ $user->type_document == 'TI' ? 'selected' : '' }}>Tarjeta de identidad.</option>
            <option value="CC" {{ $user->type_document == 'CC' ? 'selected' : '' }}>Cédula de Ciudadanía</option>
            <option value="CE" {{ $user->type_document == 'CE' ? 'selected' : '' }}>Cédula de extranjería</option>
            <option value="PT" {{ $user->type_document == 'PT' ? 'selected' : '' }}>Permiso por Protección Temporal</option>
            <option value="CN" {{ $user->type_document == 'CN' ? 'selected' : '' }}>Certificado de nacido</option>
        </select>
        <p class="error">{{ $errors->first('type_document') }}</p>
    </div>

    {{-- IDENTIFICATION --}}
    <div class="form_group">
        <label for="document">Identificación</label>
        <input type="text" id="document" name="document" placeholder="Ingrese identificación" value="{{ $user->document }}">
        <p class="error">{{ $errors->first('document') }}</p>
    </div>

    {{-- AGE --}}
    <div class="form_group">
        <label for="age">Edad</label>
        <input type="text" id="age" name="age" placeholder="Ingrese Edad" value="{{ $user->age }}">
        <p class="error">{{ $errors->first('age') }}</p>
    </div>

    {{-- SEX --}}
    <div class="form_group" >
        <label for="sex">Sexo</label>
        <select name="sex" id="sex">
            <option value="M" {{ $user->sex == 'M' ? 'selected' : '' }}>Masculino</option>
            <option value="F" {{ $user->sex == 'F' ? 'selected' : '' }}>Femenino</option>
        </select>
        <p class="error">{{ $errors->first('sex') }}</p>
    </div>

    {{-- EMAIL --}}
    <div class="form_group">
        <label for="email">Correo Electrónico</label>
        <input type="email" id="email" name="email" placeholder="Ingrese su Correo" value="{{ $user->email }}">
        <p class="error">{{ $errors->first('email') }}</p>
    </div>

    <button type="submit">Actualizar</button>
</form>

{{-- COMPANY FORM --}}
<form action="{{ route('updateUser', ['id' => $user->id, 'origin' => 'patients']) }}" method="POST" id="company_form" class="form_tab">
    @csrf
    @method('PUT')

    <div class="form_group" >
        <label for="company_id">Entidad</label>
        <select name="company_id" id="company_id">
            @foreach ($companies as $company)
                <option value="{{ $company->id }}">{{ $company->name }}</option>
            @endforeach
        </select>
        <p class="error">{{ $errors->first('company_id') }}</p>
    </div>

    @csrf
    @method('PUT')

    <div class="form_group">
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" placeholder="Ingrese Nombre" value="{{ $user->name }}">
        <p class="error">{{ $errors->first('name') }}</p>
    </div>

    {{-- LASTNAME --}}
    <div class="form_group">
        <label for="lastname">Apellido</label>
        <input type="text" id="lastname" name="lastname" placeholder="Ingrese Apellido" value="{{ $user->lastname }}">
        <p class="error">{{ $errors->first('lastname') }}</p>
    </div>

    {{-- TYPE --}}
    <div class="form_group" >
        <label for="type">Tipo</label>
        <select name="type_document" id="type_document">
            <option value="RC" {{ $user->type_document == 'RC' ? 'selected' : '' }}>Registro Civil</option>
            <option value="TI" {{ $user->type_document == 'TI' ? 'selected' : '' }}>Tarjeta de identidad.</option>
            <option value="CC" {{ $user->type_document == 'CC' ? 'selected' : '' }}>Cédula de Ciudadanía</option>
            <option value="CE" {{ $user->type_document == 'CE' ? 'selected' : '' }}>Cédula de extranjería</option>
            <option value="PT" {{ $user->type_document == 'PT' ? 'selected' : '' }}>Permiso por Protección Temporal</option>
            <option value="CN" {{ $user->type_document == 'CN' ? 'selected' : '' }}>Certificado de nacido</option>
        </select>
        <p class="error">{{ $errors->first('type_document') }}</p>
    </div>

    {{-- IDENTIFICATION --}}
    <div class="form_group">
        <label for="document">Identificación</label>
        <input type="text" id="document" name="document" placeholder="Ingrese identificación" value="{{ $user->document }}">
        <p class="error">{{ $errors->first('document') }}</p>
    </div>

    {{-- AGE --}}
    <div class="form_group">
        <label for="age">Edad</label>
        <input type="text" id="age" name="age" placeholder="Ingrese Edad" value="{{ $user->age }}">
        <p class="error">{{ $errors->first('age') }}</p>
    </div>

    {{-- SEX --}}
    <div class="form_group" >
        <label for="sex">Sexo</label>
        <select name="sex" id="sex">
            <option value="M" {{ $user->sex == 'M' ? 'selected' : '' }}>Masculino</option>
            <option value="F" {{ $user->sex == 'F' ? 'selected' : '' }}>Femenino</option>
        </select>
        <p class="error">{{ $errors->first('sex') }}</p>
    </div>

    {{-- EMAIL --}}
    <div class="form_group">
        <label for="email">Correo Electrónico</label>
        <input type="email" id="email" name="email" placeholder="Ingrese su Correo" value="{{ $user->email }}">
        <p class="error">{{ $errors->first('email') }}</p>
    </div>

    <button type="submit">Actualizar</button>
</form>
@endsection