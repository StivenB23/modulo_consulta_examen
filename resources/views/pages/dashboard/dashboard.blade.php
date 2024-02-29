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
            <span>Correo:</span> {{ Auth::user()->email }}
        </p>
        <p>
            <span>Sex:</span> {{ Auth::user()->sex }}
        </p>
    </div>
@else
    <h1>dashboard</h1>
@endif
<h1>dashboard</h1>
{{-- <form action="/logout" method="post">
    @csrf
    <button>Cerrar sesion</button>
</form> --}}
@endsection