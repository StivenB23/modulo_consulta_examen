@extends('layouts.dashboardlayout')

@section('title', 'Dashboard | Mis examenes')

@section('content')
    <h2>Mis Examenes</h2>

    <div class="table">
        <table id="datat">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Documento</th>
                    <th>Tipo de examen</th>
                    <th>Fecha de toma de muestra</th>
                    <th>Hora de toma de muestra</th>
                    <th>Diagnostico</th>
                    <th>Fecha de entrega</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @if (count($exams) > 0)
                    @foreach ($exams as $exam)
                        <tr>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                {{ $user->document }}
                            </td>
                            <td>
                                @php
                                    $typeExams = unserialize($exam->type_exam);
                                @endphp
                                @foreach ($typeExams as $type_examO)
                                    <li>{{ $type_examO }}</li>
                                @endforeach
                            </td>
                            <td>{{ $exam->exam_date }}</td>
                            <td>{{ $exam->exam_hour }}</td>
                            <td>{{ $exam->diagnostic }}</td>
                            <td>{{ $exam->deliver_date }}</td>
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
                                        Ver Resultados
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
