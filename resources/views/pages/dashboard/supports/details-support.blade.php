@extends('layouts.dashboardlayout')

@section('title', 'Dashboard | Sopoerte del examen')

@section('content')
<a href="{{ route('dashboard.patients.my-exams') }}" class="back">
    Volver    
</a>

<h2>Soporte del examen</h2>


<div class="details">
    <p>
        <span>Codigo externo:</span> 2000001
    </p>
    <p>
        <span>Examenes Tomados:</span>
        <ol>
            <li>Examen 1</li>
            <li>Examen 2</li>
            <li>Examen 3</li>
        </ol>
    </p>

    <p>
        <span>
            Documentos de examenes
        </span>
        <ol class="buttons-documents">
            <li>
                <a target="_blank" class="small-btn">
                    Documento 1
                </a>
            </li>
            <li>
                <a target="_blank" class="small-btn">
                    Documento 2
                </a>
            </li>
            {{-- <li>
                <a href="{{ asset('storage/' . 'document3.pdf') }}" target="_blank">
                    Documento 3
                </a>
            </li> --}}
        </ol>
    </p>
</div>
@endsection
