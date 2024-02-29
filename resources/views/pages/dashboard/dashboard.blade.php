@extends('layouts.dashboardlayout')

@section('title', 'Dashboard')

@section('content')
<h1>dashboard</h1>
<form action="/guardar_datos" method="POST" enctype="multipart/form-data">
    @csrf <!-- Agrega esto si estás utilizando Laravel para proteger contra CSRF -->
    <input type="text" name="id_user" id="external_code" placeholder="id user" required><br>

    <label for="external_code">Código Externo:</label>
    <input type="text" name="external_code" id="external_code" required><br>

    <label for="type_exam">Tipo de Examen:</label>
    <input type="text" name="type_exam" id="type_exam" required><br>

    <label for="sample_type">Tipo de Muestra:</label>
    <input type="text" name="sample_type" id="sample_type" required><br>

    <label for="exam_date">Fecha del Examen:</label>
    <input type="date" name="exam_date" id="exam_date" required><br>

    <label for="exam_hour">Hora del Examen:</label>
    <input type="time" name="exam_hour" id="exam_hour" required><br>

    <label for="sample_receipt_date">Fecha de Recepción de Muestra:</label>
    <input type="date" name="sample_receipt_date" id="sample_receipt_date" required><br>

    <label for="sample_receipt_hour">Hora de Recepción de Muestra:</label>
    <input type="time" name="sample_receipt_hour" id="sample_receipt_hour" required><br>

    <label for="patient_temperature">Temperatura del Paciente:</label>
    <input type="text" name="patient_temperature" id="patient_temperature" required><br>

    <label for="name">Nombre del Paciente:</label>
    <input type="text" name="name" id="name" required><br>

    <label for="diagnostic">Diagnóstico:</label>
    <textarea name="diagnostic" id="diagnostic" required></textarea><br>

    <label for="deliver_date">Fecha de Entrega:</label>
    <input type="text" name="deliver_date" id="deliver_date" required><br>

    <label for="birth_date">Fecha de Nacimiento del Paciente:</label>
    <input type="date" name="birth_date" id="birth_date" required><br>

    <label for="origin_sample">Origen de la Muestra:</label>
    <textarea name="origin_sample" id="origin_sample" required></textarea><br>

    <label for="document">Documento:</label>
    <input type="file" name="document" id="document" required><br>

    <label for="taking_days">Días de Toma:</label>
    <textarea name="taking_days" id="taking_days" required></textarea><br>

    <button type="submit">Guardar</button>
</form>
{{-- <form action="/logout" method="post">
    @csrf
    <button>Cerrar sesion</button>
</form> --}}
@endsection