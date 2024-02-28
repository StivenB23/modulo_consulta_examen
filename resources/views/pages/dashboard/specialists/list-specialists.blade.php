@extends('layouts.dashboardlayout')

@section('title', 'Dashboard | Especialistas')

@section('user')
<h3 class="name">
    John Gualteros <span>(Especialista)</span>
</h3>
@endsection

@section('content')
<h2>Lista de especialistas</h2>

<div class="actions">
    <a href="{{ route('dashboard.specialists.create') }}" class="btn">
        Crear especialista
    </a>
</div>

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Documento</th>
                <th>N Documento</th>
                <th>Género</th>
                <th>Correo</th>
                <th>Tipo</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John</td>
                <td>Gualteros</td>
                <td>Cédula de Ciudadanía</td>
                <td>123456789</td>
                <td>Masculino</td>
                <td>john@etst.com</td>
                <td>no se</td>
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