@extends('layouts.dashboardlayout')

@section('title', 'Dashboard | Entidades')

@section('user')
<h3 class="name">
    John Gualteros <span>(Especialista)</span>
</h3>
@endsection

@section('content')
<h2>Lista de entidades</h2>

<div class="actions">
    <a href="{{ route('dashboard.companies.create') }}" class="btn">
        Crear Entidad
    </a>
</div>

<div class="table">
    <table id="datat">
        <thead>
            <tr>
                <th>Nit</th>
                <th>Nombre</th>
                <th>Correo Electrónico</th>
                <th>Correo Electrónico Alternativo</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if(count($companies) > 0)
                @foreach($companies as $company)
                    <tr>
                        <td>{{ $company->nit }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->alternative_email }}</td>
                        <td class="status">
                            @if ($company->status == 1)
                                <div class="active">Activo</div>
                            @else
                                <div class="inactive">Inactivo</div>
                            @endif
                        </td>
                        <td class="actions_table">
                            @if ($company->status == 1)
                                <form id="deactiveFormCompany" action="{{ route('deactivateCompany', ['id' => $company->id]) }}" method="post">
                                    @method("PUT")
                                    @csrf
                                    <button type="button" class="deactivate_button" onclick="confirmDeactivationCompany({{ $company->id }})">Desactivar</button>
                                </form>
                            @endif
                            <a href="{{ route('dashboard.companies.edit', $company->id) }}" class="edit-btn">
                                Editar
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <p>No hay compaňias registrados.</p>
            @endif
        </tbody>
    </table>
</div>
@endsection

@section('datatable')
<script>
    var datat=document.querySelector("#datat"); 
    var dataTable=new DataTable("#datat",{ 
      perPage:20,
      labels: {
          placeholder: "Busca por un campo...",
          perPage: "{select} registros por página",
          noRows: "No se encontraron registros",
          info: "Mostrando {start} a {end} de {rows} registros",
      }
    } ) ;
  </script>
@endsection