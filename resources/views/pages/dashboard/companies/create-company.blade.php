@extends('layouts.dashboardlayout')

@section('title', 'Dashboard | Entidades')

@section('content')
<h2>Crear Entidad</h2>

<form action="{{ route('registerCompany') }}" method="post">
    @csrf

    <div class="form_group">
        <label for="nit">Nit</label>
        <input type="text" id="nit" name="nit" required placeholder="Nit de entidad" value="{{ old('nit') }}">
        <p class="error">{{ $errors->first('nit') }}</p>
    </div>

    <div class="form_group">
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" required placeholder="Nombre de entidad" value="{{ old('name') }}">
        <p class="error">{{ $errors->first('name') }}</p>
    </div>

    <div class="form_group">
        <label for="email">Correo Electrónico</label>
        <input type="email" id="email" name="email" required placeholder="Ingrese su Correo" value="{{ old('email') }}">
        <p class="error">{{ $errors->first('email') }}</p>
    </div>

    <div class="form_group">
        <label for="alternative_email">Correo Electrónico Alternativo</label>
        <input type="email" id="alternative_email" name="alternative_email" placeholder="Ingrese su Correo Alternativo (Opcional)" value="{{ old('alternative_email') }}">
        <p class="error">{{ $errors->first('alternative_email') }}</p>
    </div>

    <button type="submit">Guardar</button>
</form>
@endsection