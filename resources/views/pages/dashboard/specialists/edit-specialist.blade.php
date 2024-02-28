@extends('layouts.dashboardlayout')

@section('title', 'Dashboard | Especialistas')

@section('content')
<a href="{{ route('dashboard.specialists') }}" class="back">
    volver
</a>
<h2>Editar especialista</h2>

<form action="{{ route('updateUser', ['id' => $user->id, 'origin' => 'specialists']) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form_group">
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" required placeholder="Ingrese Nombre" value="{{ $user->name }}">
        <p class="error">{{ $errors->first('name') }}</p>
    </div>

    <div class="form_group">
        <label for="lastname">Apellido</label>
        <input type="text" id="lastname" name="lastname" required placeholder="Ingrese su Apellido" value="{{ $user->lastname }}">
        <p class="error">{{ $errors->first('lastname') }}</p>
    </div>

    {{-- type of document --}}
    <div class="form_group" >
        <label for="type_document">Tipo de Documento</label>
        <select name="type_document" id="type_document" required>
            <option value="C.C" {{ $user->type_document == 'C.C' ? 'selected' : '' }}>Cédula de Ciudadanía</option>
            <option value="Cédula de Extranjeria" {{ $user->type_document == 'Cédula de Extranjeria' ? 'selected' : '' }}>Cédula de Extranjería</option>
            <option value="Pasaporte" {{ $user->type_document == 'Pasaporte' ? 'selected' : '' }}>Pasaporte</option>
        </select>
        <p class="error">{{ $errors->first('type_document') }}</p>
    </div>

    {{-- document number --}}
    <div class="form_group">
        <label for="document">Número de Documento</label>
        <input type="text" id="document" name="document" required placeholder="Ingrese Número de Documento" value="{{ $user->document }}">
        <p class="error">{{ $errors->first('document') }}</p>
    </div>

    <div class="form_group">
        <label for="age">Edad</label>
        <input type="number" id="age" name="age" required placeholder="Ingrese Edad" value="{{ $user->age }}">
        <p class="error">{{ $errors->first('age') }}</p>
    </div>

    {{-- gender --}}
    <div class="form_group" >
        <label for="sex">Sexo</label>
        <select name="sex" id="sex" required>
            <option value="Hombre" {{ $user->sex == 'Hombre' ? 'selected' : '' }}>Hombre</option>
            <option value="Mujer" {{ $user->sex == 'Mujer' ? 'selected' : '' }}>Mujer</option>
        </select>
        <p class="error">{{ $errors->first('sex') }}</p>
    </div>

    <div class="form_group">
        <label for="email">Correo Electrónico</label>
        <input type="email" id="email" name="email" required placeholder="Ingrese Correo" value="{{ $user->email }}">
        <p class="error">{{ $errors->first('email') }}</p>
    </div>

    <button type="submit">Actualizar</button>
</form>
@endsection