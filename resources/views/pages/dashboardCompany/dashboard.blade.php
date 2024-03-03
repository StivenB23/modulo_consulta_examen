@extends('layouts.dashboardCompanyLayout')

@section('title', 'Dashboard Empresa')

@section('content')
    <h1>Info de la empresa</h1>
    <p>{{session('company')->nit ?? "No hay nit"}}</p>
    <p>{{session('company')->name ?? "No hay nombre"}}</p>
    <p>{{session('company')->email ?? "No hay email"}}</p>
@endsection