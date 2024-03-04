@extends('layouts.dashboardCompanyLayout')

@section('title', 'Dashboard | Empresa | Resultados del examen')

@section('content')
    <a href="{{ route('dashboardCompany.exams') }}" class="back">
        Volver
    </a>

    <h2>Resultados del examen</h2>


    <div class="details">
        <p>
            <span>Código externo: {{ $exam->external_code }}</span>
        </p>
        <p>
            <span>Examenes Tomados:</span>
        <ol>
            @foreach ($exam->supports as $support)
                @php
                    $typeExams = unserialize($support->type_exam);
                @endphp
                @foreach ($typeExams as $type)
                    <li>{{ $type }}</li>
                @endforeach
            @endforeach
        </ol>
        </p>

        <p>
            <span>
                Documentos de examenes
            </span>
        <ol class="buttons-documents">
            @foreach ($exam->supports as $support)
                @php
                    $listDocuments = unserialize($support->documents);
                @endphp
                @foreach ($listDocuments as $document)
                    <li>
                        <a class="small-btn" href="{{ asset('storage/' . $document) }}" target="_blank">
                            Documento {{ $loop->index + 1 }}
                        </a>
                    </li>
                @endforeach
            @endforeach

        </ol>
        </p>
    </div>
@endsection
