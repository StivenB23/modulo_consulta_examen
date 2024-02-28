@extends('layouts.dashboardlayout')

@section('title', 'Dashboard | Especialistas')

@section('user')
<h3 class="name">
    John Gualteros <span>(Especialista)</span>
</h3>
@endsection

@section('content')
<h2>Crear especialista</h2>

<form action="" method="post">
    @csrf

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
        <label for="type_document">Tipo de Documento</label>
        <select name="type_document" id="type_document" required value="{{ old('type_document') }}">
            <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
            <option value="Cédula de Extranjeria">Cédula de Extranjería</option>
            <option value="Pasaporte">Pasaporte</option>
        </select>
        <p class="error">{{ $errors->first('type_document') }}</p>
    </div>

    {{-- document number --}}
    <div class="form_group">
        <label for="document">Número de Documento</label>
        <input type="text" id="document" name="document" required placeholder="Ingrese su Número de Documento" value="{{ old('document') }}">
        <p class="error">{{ $errors->first('document') }}</p>
    </div>

    <div class="form_group">
        <label for="age">Edad</label>
        <input type="number" id="age" name="age" required placeholder="Ingrese su Edad" value="{{ old('age') }}">
        <p class="error">{{ $errors->first('age') }}</p>
    </div>

    {{-- gender --}}
    <div class="form_group" >
        <label for="sex">Sexo</label>
        <select name="sex" id="sex" required value="{{ old('sex') }}">
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
        </select>
    </div>

    <div class="form_group">
        <label for="email">Correo Electrónico</label>
        <input type="email" id="email" name="email" required placeholder="Ingrese su Correo" value="{{ old('email') }}">
        <p class="error">{{ $errors->first('email') }}</p>
    </div>

    <button type="submit">Registrar</button>
</form>
@endsection