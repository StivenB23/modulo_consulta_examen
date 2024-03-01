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
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Entidad</th>
                <th>Tipo Doc</th>
                <th>Documento</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Correo</th>
                <th>Cargo</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if(count($users) > 0)
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->company->name ?? '' }}</td>
                        <td>{{ $user->type_document }}</td>
                        <td>{{ $user->document }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->sex }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td class="status">
                            @if ($user->status == 1)
                            <div class="active">Activo</div>
                            @else
                            <div class="inactive">Inactivo</div>
                            @endif
                        </td>
                        <td class="actions_table">
                            @if ($user->status == 1)
                                <form id="deactivateFormPatient" action="{{ route('deactivateUser', ['id' => $user->id, 'origin' => 'patients']) }}" method="POST">
                                    @method("PUT")
                                    @csrf
                                    <button type="button" class="deactivate_button" onclick="confirmDeactivationPatient({{ $user->id }})">Desactivar</button>
                                </form>
                            @endif
                            <a href="{{ route('dashboard.patients.edit', $user->id) }}" class="edit-btn">
                                Editar
                            </a>

                            <a href="{{ route('dashboard.exams.patient', $user->id )}}" class="show-exams">
                                Examenes
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <p>No hay especialistas registrados.</p>
            @endif
        </tbody>
    </table>
</div>
@endsection

