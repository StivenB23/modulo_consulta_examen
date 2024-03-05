@extends('layouts.dashboardlayout')

@section('title', 'Dashboard')

@section('content')

@if (Auth::user()->role == 'cliente')
    <h1>Mi información</h1>

    <div class="info">
        <p>
            <span>Nombre:</span> {{ Auth::user()->name }}
        </p>
        <p>
            <span>Apellido:</span> {{ Auth::user()->lastname }}
        </p>
        @if (Auth::user()->company)
            <p>
                <span>Entidad:</span> {{ Auth::user()->company->name }}
            </p>
            
        @endif
        <p>
            <span>Tipo de documento:</span> {{ Auth::user()->type_document }}
        </p>
        <p>
            <span>Documento:</span> {{ Auth::user()->document }}
        </p>
        <p>
            <span>Edad:</span> {{ Auth::user()->age }}
        </p>
        <p>
            <span>Sex:</span> {{ Auth::user()->sex }}
        </p>
        <p>
            <span>Correo:</span> {{ Auth::user()->email }}
        </p>
    </div>
@else
    <h1>Dashboard</h1>
@endif
@endsection