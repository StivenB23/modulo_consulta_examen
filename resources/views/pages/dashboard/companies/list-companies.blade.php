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
            <tr>
                <td>123456789</td>
                <td>Citogen</td>
                <td>cito@test.com</td>
                <td></td>
                <td>Activo</td>
                <td>
                    {{-- action="{{ route('deactivateCompany', "5") }}" --}}
                    <form  method="post">
                        @method("PUT")
                        @csrf
                        <button>Desactivar</button>
                    </form>

                    <button>
                        Editar
                    </button>
                </td>
            </tr>
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