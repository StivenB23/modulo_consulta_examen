@extends('layouts.dashboardlayout')

@section('title', 'Dashboard | Especialistas')

@section('content')
<a href="{{ route('dashboard.specialists') }}" class="back">
    volver
</a>
<h2>Crear especialista</h2>

<form action="{{ route('registerUserSpecialist') }}" method="POST">
    @csrf

    <div class="form_group">
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" required placeholder="Ingrese Nombre" value="{{ old('name') }}">
        <p class="error">{{ $errors->first('name') }}</p>
    </div>

    <div class="form_group">
        <label for="lastname">Apellido</label>
        <input type="text" id="lastname" name="lastname" required placeholder="Ingrese su Apellido" value="{{ old('lastname') }}">
        <p class="error">{{ $errors->first('lastname') }}</p>
    </div>

    {{-- type of document --}}
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

    {{-- document number --}}
    <div class="form_group">
        <label for="document">Número de Documento</label>
        <input type="text" id="document" name="document" required placeholder="Ingrese Número de Documento" value="{{ old('document') }}">
        <p class="error">{{ $errors->first('document') }}</p>
    </div>

    <div class="form_group">
        <label for="age">Edad</label>
        <input type="number" id="age" name="age" required placeholder="Ingrese Edad" value="{{ old('age') }}">
        <p class="error">{{ $errors->first('age') }}</p>
    </div>

    {{-- gender --}}
    <div class="form_group" >
        <label for="sex">Sexo</label>
        <select name="sex" id="sex">
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
        <p class="error">{{ $errors->first('sex') }}</p>
    </div>

    <div class="form_group">
        <label for="email">Correo Electrónico</label>
        <input type="email" id="email" name="email" required placeholder="Ingrese Correo" value="{{ old('email') }}">
        <p class="error">{{ $errors->first('email') }}</p>
    </div>

    <button type="submit">Registrar</button>
</form>
@endsection