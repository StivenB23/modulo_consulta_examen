@extends('layouts.dashboardlayout')

@section('title', 'Dashboard')

@section('user')
<h3 class="name">
    John Gualteros <span>(Especialista)</span>
</h3>
@endsection

@section('content')
<h1>dashboard</h1>
{{-- <form action="/logout" method="post">
    @csrf
    <button>Cerrar sesion</button>
</form> --}}
@endsection