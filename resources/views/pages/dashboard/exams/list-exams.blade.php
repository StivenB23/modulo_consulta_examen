@extends('layouts.dashboardlayout')

@section('title', 'Dashboard | Examenes')

@section('content')
<h2>Lista de Examenes</h2>

<div class="actions">
    <a href="{{ route('dashboard.exams.create') }}" class="btn">
        Crear Examen
    </a>
</div>

<div class="table">
    <table id="datat">
        <thead>
            <tr>
                <th>OR</th>
                <th>Anticoagulante</th>
                <th>Codigo externo</th>
                <th>Entidad</th>
                <th>Tipo de examen</th>
                <th>Tipo de muestra</th>
                <th>Fecha de toma de muestra</th>
                <th>Hora de toma de muestra</th>
                <th>Fecha de recepción</th>
                <th>Hora de recepción</th>
                <th>Temp de ingreso</th>
                <th>Fecha de entrega</th>
                <th>Procedencia de muestra</th>
                <th>Dias de toma</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>EDTA</td>
                <td>123456</td>
                <td>Entidad</td>
                <td>Examen</td>
                <td>Tipo de muestra</td>
                <td>Fecha de toma de muestra</td>
                <td>Hora de toma de muestra</td>
                <td>Fecha de recepción</td>
                <td>Hora de recepción</td>
                <td>Temp de ingreso</td>
                <td>Fecha de entrega</td>
                <td>Procedencia de muestra</td>
                <td>Dias de toma</td>
                <td>
                    {{-- <a href="{{ route('dashboard.exams.show', 1) }}" class="btn">Ver</a>
                    <a href="{{ route('dashboard.exams.edit', 1) }}" class="btn">Editar</a>
                    <form action="{{ route('dashboard.exams.destroy', 1) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn">Eliminar</button>
                    </form> --}}
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