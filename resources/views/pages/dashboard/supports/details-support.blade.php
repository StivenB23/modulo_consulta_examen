@extends('layouts.dashboardlayout')

@section('title', 'Dashboard | Sopoerte del examen')

@section('content')
    <a href="{{ route('dashboard.patients.my-exams') }}" class="back">
        Volver
    </a>

    <h2>Resultados del examen</h2>


    <div class="details">
        <p>
            <span>Código interno: {{ $exam->or }}</span>
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
                @if ($support->observation != null)
                    <h3>Observación</h3>
                    <p>{{$support->observation}}</p>
                @endif
            @endforeach
        </ol>
        </p>

        <p>
            <span>
                Documentos de examenes
            </span>
        <ol class="buttons-documents">
            {{-- <li>
                <a target="_blank" class="small-btn">
                    Documento 1
                </a>
            </li>
            <li>
                <a target="_blank" class="small-btn">
                    Documento 2
                </a>
            </li> --}}
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
