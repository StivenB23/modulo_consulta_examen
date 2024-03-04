@extends('layouts.dashboardCompanyLayout')

@section('title', 'Dashboard | Empresa | Examenes')

@section('content')
    <h2>Examenes de pacientes</h2>

    <div class="table">
        <table id="datat">
            <thead>
                <tr>
                    <th>Nombre</th>
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
                @if (count($usersCompany) > 0)
                    @foreach ($usersCompany as $user)
                        @foreach ($user->exams as $exam)
                            <tr>
                                <td>{{ $user->name }} {{ $user->lastname }}</td>
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
                                    <a href="{{ route('dashboardCompany.exams.supports', ['id' => $exam->id]) }}"
                                        target="_blank">
                                        <button class="small-btn">
                                            Ver Soporte
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                    {{-- @foreach ($exams as $exam)
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
                                <a href="{{ route('dashboard.support.details', ['id' => $exam->id]) }}" target="_blank">
                                    <button class="small-btn">
                                        Ver Soporte
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach --}}
                @else
                    <p>No hay examenes registrados.</p>
                @endif
                {{-- <a href="{{ route('dashboardCompany.exams.supports', ['id' => '2']) }}" target="_blank">
                    <button class="small-btn">
                        Ver Soporte
                    </button>
                </a> --}}
            </tbody>
        </table>
    </div>
@endsection
