@extends('layouts.dashboardlayout')

@section('title', 'Dashboard | Mis examenes')

@section('content')
    <h2>Mis Examenes</h2>

    <div class="table">
        <table id="datat">
            <thead>
                <tr>
                    <th>Código interno</th>
                    <th>Nombre</th>
                    <th>Tipo Documento</th>
                    <th>Documento</th>
                    <th>Empresa</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @if (count($exams) > 0)
                    @foreach ($exams as $exam)
                        <tr>
                            <td>
                                {{ $exam->or }}
                            </td>
                            <td>
                                {{ $user->name }} {{ $user->lastname }}
                            </td>
                            <td>
                                {{ $user->type_document }}
                            </td>
                            <td>
                                {{ $user->document }}
                            </td>
                            <td>
                                {{ $user->company->name ?? '' }}
                            </td>
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
