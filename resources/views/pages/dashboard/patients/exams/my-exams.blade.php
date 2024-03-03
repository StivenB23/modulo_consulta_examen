@extends('layouts.dashboardlayout')

@section('title', 'Dashboard | Mis examenes')

@section('content')
    <h2>Mis Examenes</h2>

    <div class="table">
        <table id="datat">
            <thead>
                <tr>
                    <th>OR</th>
                    <th>Anticoagulante</th>
                    <th>Codigo externo</th>
                    <th>Tipo de examen</th>
                    <th>Tipo de muestra</th>
                    <th>Fecha de toma de muestra</th>
                    <th>Hora de toma de muestra</th>
                    <th>Fecha de recepción</th>
                    <th>Hora de recepción</th>
                    <th>Temp de ingreso</th>
                    <th>Diagnostico</th>
                    <th>Fecha de entrega</th>
                    <th>Fecha de nacimiento</th>
                    <th>Procedencia de muestra</th>
                    <th>Dias de toma</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @if (count($exams) > 0)
                    @foreach ($exams as $exam)
                        <tr>
                            <td>{{ $exam->or }}</td>
                            <td>{{ $exam->anticoagulant }}</td>
                            <td>{{ $exam->external_code }}</td>

                            <td>
                                @php
                                    $typeExams = unserialize($exam->type_exam);
                                @endphp
                                @foreach ($typeExams as $type_examO)
                                    <li>{{ $type_examO }}</li>
                                @endforeach
                            </td>
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
                                {{-- <a href="{{ asset('storage/' . $exam->document) }}" target="_blank">
                                <button class="small-btn">
                                    Abrir Archivo
                                </button>
                            </a>

                            <a href="{{ asset('storage/' . $exam->document) }}" download>
                                <button class="small-btn secondary">
                                    Descargar Archivo
                                </button>
                            </a> --}}
                                <a href="{{ route('dashboard.support.details', ['id' => $exam->id]) }}" target="_blank">
                                    <button class="small-btn">
                                        Ver Soporte
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
