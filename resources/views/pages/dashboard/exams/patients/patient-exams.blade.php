@extends('layouts.dashboardlayout')

@section('title', 'Dashboard | Mis examenes')

@section('content')
<h2>Examenes para el paciente John</h2>

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
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection