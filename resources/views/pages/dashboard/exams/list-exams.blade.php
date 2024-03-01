@extends('layouts.dashboardlayout')

@section('title', 'Dashboard | Examenes')

@section('content')
<h2>Lista de Examenes</h2>

<div class="actions">
    <a href="{{ route('dashboard.exams.create') }}" class="btn">
        Crear Examen
    </a>
</div>

<div class="table small">
    <table id="datat">
        <thead>
            <tr>
                <th>Codigo Externo</th>
                <th>Anticoagulante</th>
                <th>Tipo Examen</th>
                <th>Tipo Muestra</th>
                <th>Fecha Toma Muestra</th>
                <th>Hora Toma Muestra</th>
                <th>Fecha Recepción</th>
                <th>Hora Recepción</th>
                <th>Temperatura Ingreso</th>
                <th>Diagnostico</th>
                <th>Fecha Entrega</th>
                <th>Fecha Nacimiento</th>
                <th>Procedencia Muestra</th>
                <th>Dias Toma</th>
                <th>Archivo</th>
            </tr>
        </thead>
        <tbody>
            @if(count($exams) > 0)
                @foreach($exams as $exam)
                    <tr>
                        <td>{{ $exam->external_code }}</td>
                        <td>HEP</td>
                        <td>{{ $exam->type_exam }}</td>
                        <td>{{ $exam->sample_type }}</td>
                        <td>{{ $exam->exam_date }}</td>
                        <td>{{ $exam->exam_hour }}</td>
                        <td>{{ $exam->sample_receipt_date }}</td>
                        <td>{{ $exam->sample_receipt_hour }}</td>
                        <td>{{ $exam->patient_temperature }}</td>
                        <td>{{ $exam->diagnostic }}</td>
                        <td>{{ $exam->deliver_date }}</td>
                        <td>{{ $exam->birth_date }}</td>
                        <td>{{ $exam->origin_sample }}</td>
                        <td>{{ $exam->taking_days }}</td>
                        <td class="document_actions">
                            <a href="{{ asset('storage/' . $exam->document) }}" target="_blank">
                                <button class="small-btn">
                                    Abrir Archivo
                                </button>
                            </a>

                            <a href="{{ asset('storage/' . $exam->document) }}" download>
                                <button class="small-btn secondary">
                                    Descargar Archivo
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <p>No hay examenes registrados.</p>
            @endif
        </tbody>
    </table>
</div>
@endsection