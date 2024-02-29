@extends('layouts.dashboardlayout')

@section('title', 'Dashboard | Pacientes')

@section('content')
<h2>Lista de Pacientes</h2>

<div class="actions">
    <a href="{{ route('dashboard.patients.create') }}" class="btn">
        Crear Paciente
    </a>
</div>

<div class="table">
    <table id="datat">
        <thead>
            <tr>
                <th>OR</th>
                <th>Identificación</th>
                <th>Sexo</th>
                <th>Edad</th>
                <th>Hora de recepción</th>
                <th>Temp de ingreso</th>
                <th>Nombre</th>
                <th>Diagnostico</th>
                <th>Fecha de entrega</th>
                <th>Fecha de nacimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>123456</td>
                <td>M</td>
                <td>25</td>
                <td>123456</td>
                <td>Fecha de toma de muestra</td>
                <td>Fecha de entrega</td>
                <td>Fecha de nacimiento</td>
                <td>Procedencia de muestra</td>
                <td>Dias de toma</td>
                <td>
                    <a 
                        href="{{ route('dashboard.exams.patient', 1) }}" 
                        class="btn-basic"
                    >
                        Ver examenes de este paciente
                    </a>
                    <button>Agregar examen a paciente</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

