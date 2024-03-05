@extends('layouts.dashboardCompanyLayout')

@section('title', 'Dashboard Company')

@section('content')
    @if (session('success'))
        <div class="success_message">
            {{ session('success') }}
        </div>
    @endif
    <h1>Cambiar contraseña</h1>
    <form action="{{ route('changePasswordCompany') }}" method="post">
        @csrf
        {{-- EXTERN CODE --}}
        <input type="hidden" name="id_company" value="{{ session('company')->id }}">
        <div class="form_group">
            <label for="passwordActual">Contraseña actual</label>
            <input type="password" id="passwordActual" name="passwordActual" placeholder="Contraseña actual"
                value="{{ old('passwordActual') }}">
            <p class="error">{{ $errors->first('passwordActual') }}</p>
        </div>
        <div class="form_group">
            <label for="passwordNew">Contraseña Nueva</label>
            <input type="password" id="passwordNew" name="passwordNew" placeholder="Contraseña actual"
                value="{{ old('passwordNew') }}">
            <p class="error">{{ $errors->first('passwordNew') }}</p>
        </div>
        <button type="submit">Guardar Cambios</button>
    </form>
@endsection
