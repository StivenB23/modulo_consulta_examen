@extends('layouts.dashboardlayout')

@section('title', 'Dashboard | Paciente')

@section('content')
    {{-- CLIENT FORM --}}
    <form action="" method="post" id="client_form" class="client_form">
        @csrf
        <h1>Editar Paciente</h1>

        {{-- TYPE --}}
        <div class="form_group" >
            <label for="type">Tipo</label>
            <select name="type" id="type">
                <option value="RC">Registro Civil</option>
                <option value="TI">Tarjeta de identidad.</option>
                <option value="CC">Cédula de Ciudadanía</option>
                <option value="CE">Cédula de extranjería</option>
                <option value="PT">Permiso por Protección Temporal</option>
                <option value="CN">Certificado de nacido</option>
            </select>
            <p class="error">{{ $errors->first('type') }}</p>
        </div>

        {{-- IDENTIFICATION --}}
        <div class="form_group">
            <label for="identification">Identificación</label>
            <input type="text" id="identification" name="identification" placeholder="Ingrese identificación" value="{{ old('identification') }}">
            <p class="error">{{ $errors->first('identification') }}</p>
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

        {{-- AGE --}}
        <div class="form_group">
            <label for="age">Edad</label>
            <input type="text" id="age" name="age" placeholder="Ingrese Edad" value="{{ old('age') }}">
            <p class="error">{{ $errors->first('age') }}</p>
        </div>

        {{-- NAME --}}
        <div class="form_group">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" placeholder="Ingrese Nombre" value="{{ old('name') }}">
            <p class="error">{{ $errors->first('name') }}</p>
        </div>

        {{-- DIAGNOSTIC --}}
        <div class="form_group">
            <label for="diagnostic">Diagnostico</label>
            <input type="text" id="diagnostic" name="diagnostic" placeholder="Ingrese Diagnostico" value="{{ old('diagnostic') }}">
            <p class="error">{{ $errors->first('diagnostic') }}</p>
        </div>

        {{-- BIRTH DATE --}}
        <div class="form_group">
            <label for="birth_date">Fecha de nacimiento</label>
            <input type="date" id="birth_date" name="birth_date" placeholder="Fecha de nacimiento" value="{{ old('birth_date') }}">
            <p class="error">{{ $errors->first('birth_date') }}</p>
        </div>

        <button type="submit">Registrar</button>
    </form>
@endsection
