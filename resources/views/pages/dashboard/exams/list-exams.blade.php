@extends('layouts.dashboardlayout')

@section('title', 'Dashboard | Examenes')

@section('content')
    <h2>Lista de Examenes</h2>

    <div class="actions">
        <a href="{{ route('dashboard.exams.create') }}" class="btn">
            Crear Examen
        </a>
    </div>

    <form class="container-elements-flex" action="{{ route('exams.export') }}" method="post">
        @csrf
        <div class="form_group" >
            <label for="type">Filtro de fecha</label>
            <select name="filter_Data" required id="type_document">
                <option value="exam_date" selected>Fecha Toma de Muestra</option>
                <option value="sample_receipt_date">Fecha recepción de muestra</option>
                <option value="deliver_date">Fecha entrega</option>

            </select>
            <p class="error">{{ $errors->first('type_document') }}</p>
        </div>
        <div class="form_group">
            <label for="start_date">Fecha de inicio:</label>
            <input type="date" name="start_date" required>
            <p class="error">{{ $errors->first('start_date') }}</p>
        </div>
        <div class="form_group">
            <label for="start_date">Fecha de Final:</label>
            <input type="date" name="end_date" required>
            <p class="error">{{ $errors->first('end_date') }}</p>
        </div>
        <button class="btn-small" type="submit">Exportar a Excel</button>
    </form>

    <div class="table small">
        <table id="datat">
            <thead>
                <tr>
                    <th>Código Interno</th>
                    <th>Código Externo</th>
                    <th>Anticoagulante</th>
                    <th>Tipos de Examen</th>
                    <th>Tipo Muestra</th>
                    <th>Fecha Toma Muestra</th>
                    <th>Hora Toma Muestra</th>
                    <th>Fecha Recepción</th>
                    <th>Hora Recepción</th>
                    <th>Temperatura Ingreso</th>
                    {{-- <th>Diagnostico</th> --}}
                    <th>Fecha Entrega</th>
                    {{-- <th>Fecha Nacimiento</th> --}}
                    <th>Procedencia Muestra</th>
                    <th>Días Toma</th>
                    {{-- <th>Archivo</th> --}}
                    <th>Paciente</th>
                </tr>
            </thead>
            <tbody>
                @if (count($exams) > 0)
                    @foreach ($exams as $exam)
                        <tr>
                            <td>{{ $exam->or }}</td>
                            <td>{{ $exam->external_code }}</td>
                            <td>{{ $exam->anticoagulant }}</td>
                            {{-- <td>{{ $exam->type_exam }}</td> --}}
                            <td>
                                <ol>
                                    @php
                                        $typeExams = unserialize($exam->type_exam);
                                    @endphp
                                    @foreach ($typeExams as $type_examO)
                                        <li>{{ $type_examO }}</li>
                                    @endforeach
                                </ol>
                            </td>
                            <td>{{ $exam->sample_type }}</td>
                            <td>{{ $exam->exam_date }}</td>
                            <td>{{ $exam->exam_hour }}</td>
                            <td>{{ $exam->sample_receipt_date }}</td>
                            <td>{{ $exam->sample_receipt_hour }}</td>
                            <td>{{ $exam->patient_temperature }}</td>
                            {{-- <td>{{ $exam->diagnostic }}</td> --}}
                            <td>{{ $exam->deliver_date }}</td>
                            {{-- <td>{{ $exam->birth_date }}</td> --}}
                            <td>{{ $exam->origin_sample }}</td>
                            <td>{{ $exam->taking_days }}</td>
                            {{-- <td class="document_actions">
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
                        </td> --}}
                            <td>
                                @foreach ($exam->patients as $patient)
                                    <a href="#" class="user-link" data-user-id="{{ $patient->id }}"
                                        data-user-name="{{ $patient->name }} {{ $patient->last_name }}">
                                        {{ $patient->name }} {{ $patient->last_name }}
                                    </a>
                                    @if (!$loop->last)
                                        <br>
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                @else
                    <p>No hay examenes registrados.</p>
                @endif
            </tbody>
        </table>
    </div>

    <div class="modal" id="modal">
        <div class="modal-content">
            <div class="close-container">
                <i class="bi bi-x-lg" id="close"></i>
            </div>
            <h2>Datos del Paciente <span id="patient-name-modal"></span></h2>

            <div id="content-modal">

            </div>
        </div>
    </div>
@endsection
