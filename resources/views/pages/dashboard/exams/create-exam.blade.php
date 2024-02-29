@extends('layouts.dashboardlayout')

@section('title', 'Dashboard | Examenes')

@section('content')
<h2>Crear Examen</h2>

<form action="{{ route('registerCompany') }}" method="post" enctype="multipart/form-data">
    @csrf

    {{-- EXTERN CODE --}}
    <div class="form_group">
        <label for="extern_code">Codigo Externo</label>
        <input type="text" id="extern_code" name="extern_code" placeholder="Codigo Externo" value="{{ old('extern_code') }}">
        <p class="error">{{ $errors->first('extern_code') }}</p>
    </div>

    {{-- ENTITY --}}
    <div class="form_group" >
        <label for="entity">Entidad</label>
        <select name="entity" id="entity">
            <option value="RC">Relacion list entities</option>
        </select>
        <p class="error">{{ $errors->first('entity') }}</p>
    </div>

    {{-- TYPE EXAM --}}
    <div class="form_group" >
        <label for="exam_type">Tipo de Examen</label>
        <select name="exam_type" id="exam_type">
            <option value="Cario-Fish">Cario-Fish</option>
            <option value="CBG: Cariotipo Bandeo G">CBG: Cariotipo Bandeo G</option>
            <option value="CBC: Cariotipo Bandeo C">CBC: Cariotipo Bandeo C</option>
            <option value="CBQ: Cariotipo Bandeo Q.">CBQ: Cariotipo Bandeo Q.</option>
            <option value="CBR: Cariotipo Bandeo R.">CBR: Cariotipo Bandeo R.</option>
            <option value="CBRT: Cariotipo Bandeo RT.">CBRT: Cariotipo Bandeo RT.</option>
            <option value="CLA: Cariotipo Liquido Amniótico.">CLA: Cariotipo Liquido Amniótico.</option>
            <option value="CRF: Cariotipo restos fetales.">CRF: Cariotipo restos fetales.</option>
            <option value="CEL: Cariotipo Estados Leucémicos.">CEL: Cariotipo Estados Leucémicos.</option>
            <option value="CXF: Cariotipo X Fragil">CXF: Cariotipo X Fragil</option>
            <option value="CFC: Cariotipo Fragilidad cromosómica">CFC: Cariotipo Fragilidad cromosómica</option>
            <option value="CVC: Cariotipo Vellosidad Corial.">CVC: Cariotipo Vellosidad Corial.</option>
            <option value="ICH:Intercambio cromatidas hermanas">ICH:Intercambio cromatidas hermanas</option>
            <option value="CPH: Cariotipo Cromosoma Filadelfia.">CPH: Cariotipo Cromosoma Filadelfia.</option>
            <option value="FPR: Fish Prenatal.">FPR: Fish Prenatal.</option>
            <option value="FPW: Fish Prader Willi.">FPW: Fish Prader Willi.</option>
            <option value="FDG: Fish Di George.">FDG: Fish Di George.</option>
            <option value="FSRY: Fish SRY.">FSRY: Fish SRY.</option>
            <option value="FB/A: Fish BCR/ABL">FB/A: Fish BCR/ABL</option>
            <option value="FT15/17: Fish Translocación 15/17">FT15/17: Fish Translocación 15/17</option>
            <option value="QPT: Quimerismo para transplante.">QPT: Quimerismo para transplante.</option>
            <option value="HLA/COMP: HLA Completo.">HLA/COMP: HLA Completo.</option>
            <option value="HLAB: HLA Básico.">HLAB: HLA Básico.</option>
            <option value="HLA27: HLA B-27">HLA27: HLA B-27</option>
            <option value="HLA51: HLA B-51">HLA51: HLA B-51</option>
            <option value="HLAB57: HLA B-57">HLAB57: HLA B-57</option>
            <option value="HLAB7-B40: B7-B40">HLAB7-B40: B7-B40</option>
            <option value="HLA-B: HLA Clase I.">HLA-B: HLA Clase I.</option>
            <option value="HLA-DR-DQ: Clase II.">HLA-DR-DQ: Clase II.</option>
            <option value="AC: Anticuerpos Citotoxicos">AC: Anticuerpos Citotoxicos</option>
            <option value="AB: Anticuerpos Bloqueadores">AB: Anticuerpos Bloqueadores</option>
            <option value="DQ2: HLA DQ.">DQ2: HLA DQ.</option>
            <option value="Paternidad">Paternidad</option>
            <option value="PCR TOXOPLASMA GONDII">PCR TOXOPLASMA GONDII</option>
        </select>
        <p class="error">{{ $errors->first('exam_type') }}</p>
    </div>

    {{-- Tipo de muestra --}}
    <div class="form_group" >
        <label for="tipe_sample">Tipo De Muestra</label>
        <select name="tipe_sample" id="tipe_sample">
            <option value="SP">SP</option>
            <option value="MO">MO</option>
            <option value="SALIVA">SALIVA</option>
            <option value="LA">LA</option>
        </select>
        <p class="error">{{ $errors->first('tipe_sample') }}</p>
    </div>

    {{-- Date of Sampling  --}}
    <div class="form_group">
        <label for="sampling_date">Fecha de toma de la muestra</label>
        <input type="date" id="sampling_date" name="sampling_date" placeholder="Fecha toma de la muestra" value="{{ old('sampling_date') }}">
        <p class="error">{{ $errors->first('sampling_date') }}</p>
    </div>

    {{-- Hour of Sampling  --}}
    <div class="form_group">
        <label for="sampling_hour">Hora de toma de la muestra</label>
        <input type="time" id="sampling_hour" name="sampling_hour" placeholder="Hora toma de la muestra" value="{{ old('sampling_hour') }}">
        <p class="error">{{ $errors->first('sampling_hour') }}</p>
    </div>

    {{-- SAMPLE RECEIPT DATE  --}}
    <div class="form_group">
        <label for="sampling_receipt_date">Fecha de recepción de la muestra</label>
        <input type="date" id="sampling_receipt_date" name="sampling_receipt_date" placeholder="Fecha recepción de la muestra" value="{{ old('sampling_receipt_date') }}">
        <p class="error">{{ $errors->first('sampling_receipt_date') }}</p>
    </div>

    {{-- Hour of Receipt  --}}
    <div class="form_group">
        <label for="receipt_hour">Hora de recepción</label>
        <input type="time" id="receipt_hour" name="receipt_hour" placeholder="Hora de recepción" value="{{ old('receipt_hour') }}">
        <p class="error">{{ $errors->first('receipt_hour') }}</p>
    </div>

    {{-- Entry Temp  --}}
    <div class="form_group">
        <label for="entry_temp">Temperatura de ingreso</label>
        <input type="text" id="entry_temp" name="entry_temp" placeholder="Temperatura de ingreso" value="{{ old('entry_temp') }}">
        <p class="error">{{ $errors->first('entry_temp') }}</p>
    </div>

    {{-- Delivery Date  --}}
    <div class="form_group">
        <label for="delivery_date">Fecha de entrega</label>
        <input type="date" id="delivery_date" name="delivery_date" placeholder="Fecha de entrega" value="{{ old('delivery_date') }}">
        <p class="error">{{ $errors->first('delivery_date') }}</p>
    </div>

    {{-- Sample Provenance  --}}
    <div class="form_group">
        <label for="sample_provenance">Procedencia de la muestra</label>
        <input type="text" id="sample_provenance" name="sample_provenance" placeholder="Procedencia de la muestra" value="{{ old('sample_provenance') }}">
        <p class="error">{{ $errors->first('sample_provenance') }}</p>
    </div>

    {{-- Days of Sampling  --}}
    <div class="form_group">
        <label for="sampling_days">Dias de toma</label>
        <input type="text" id="sampling_days" name="sampling_days" placeholder="Dias de toma" value="{{ old('sampling_days') }}">
        <p class="error">{{ $errors->first('sampling_days') }}</p>
    </div>

    {{-- File --}}
    <div class="form_group">
        <label for="file">Archivo</label>
        <input type="file" id="file" name="file" placeholder="Archivo" value="{{ old('file') }}">
        <p class="error">{{ $errors->first('file') }}</p>
    </div>

    <button type="submit">Guardar</button>
</form>
@endsection