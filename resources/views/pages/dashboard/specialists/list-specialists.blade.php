@extends('layouts.dashboardlayout')

@section('title', 'Dashboard | Especialistas')

@section('content')
<h2>Lista de especialistas</h2>

<div class="actions">
    <a href="{{ route('dashboard.specialists.create') }}" class="btn">
        Crear especialista
    </a>
</div>

<div class="table">
    <table id="datat">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
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
                                <form id="deactivateForm" action="{{ route('deactivateUser', ['id' => $user->id, 'origin' => 'specialists']) }}" method="post">
                                    @method("PUT")
                                    @csrf
                                    <button type="button" class="deactivate_button" onclick="confirmDeactivationSpecialist({{ $user->id }})">Desactivar</button>
                                </form>
                            @endif
                            <a href="{{ route('dashboard.specialists.edit', $user->id) }}" class="edit-btn">
                                Editar
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <p>No hay especialistas registrados.</p>
            @endif
    </table>
</div>
@endsection