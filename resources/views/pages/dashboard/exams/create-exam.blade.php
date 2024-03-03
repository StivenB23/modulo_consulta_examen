@extends('layouts.dashboardlayout')

@section('title', 'Dashboard | Examenes')

@section('content')
    <h2>Crear Examen</h2>

    <form action="{{ route('saveExam') }}" method="post" enctype="multipart/form-data">
        @csrf

        {{-- PATIENT --}}
        <div class="form_group">
            <label for="patient">Paciente</label>
            <div class="custom-select">
                <input type="text" id="searchInput" name="selectedPatient" placeholder="Buscar...">
                <ul id="patientOptions">
                    @foreach ($patients as $patient)
                        <li data-value="{{ $patient->id }}">{{ $patient->name }} {{ $patient->lastname }}</li>
                    @endforeach
                </ul>
                <input type="hidden" id="id_user" name="id_user" value="{{ old('id_user') }}">
            </div>
        </div>

        {{-- EXTERN CODE --}}
        <div class="form_group">
            <label for="external_code">Codigo Externo</label>
            <input type="text" id="external_code" name="external_code" placeholder="Codigo Externo"
                value="{{ old('external_code') }}">
            <p class="error">{{ $errors->first('external_code') }}</p>
        </div>
        {{-- OR --}}
        <div class="form_group">
            <label for="exam_date">Consecutivo Or</label>
            <input type="text" id="or" name="or" placeholder="Codigo Externo" value="{{ old('or') }}">
            <p class="error">{{ $errors->first('or') }}</p>
        </div>

        {{-- anticoagulant --}}
        {{-- <div class="form_group">
        <label for="exam_date">Anticoagulante</label>
        <input type="text" id="anticoagulant" name="anticoagulant" placeholder="Codigo Externo" value="{{ old('anticoagulant') }}">
        <p class="error">{{ $errors->first('anticoagulant') }}</p>
    </div> --}}
        {{-- TYPE EXAM --}}
        {{-- <div class="form_group" >
        <label for="type_exam">Tipo de Examen</label>
        <select name="type_exam" id="type_exam">
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
        <p class="error">{{ $errors->first('type_exam') }}</p>
    </div> --}}


        <div class="form_group">
            <label for="type_exam" class="label">Seleccione todos los tipos de examen</label>

            <div class="checkbox_group">
                <div class="element">
                    <div class="first">
                        <input type="checkbox" id="Cario-Fish" name="type_exam[]" value="Cario-Fish">
                    </div>
                    <div class="second">
                        <label for="Cario-Fish">Cario-Fish</label>
                    </div>
                </div>

                <div class="element">
                    <div class="first">
                        <input type="checkbox" id="CBG" name="type_exam[]"
                            value="CBG: Cariotipo Bandeo G">
                    </div>
                    <div class="second">
                        <label for="CBG">CBG: Cariotipo Bandeo G</label>
                    </div>
                </div>
                <div class="element">
                    <div class="first">
                        <input type="checkbox" id="CBC" name="type_exam[]"
                            value="CBC: Cariotipo Bandeo C">
                    </div>
                    <div class="second">

                        <label for="CBC">CBC: Cariotipo Bandeo C</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">

                        <input type="checkbox" id="CBQ" name="type_exam[]"
                            value="CBQ: Cariotipo Bandeo Q.">
                    </div>
                    <div class="second">

                        <label for="CBQ">CBQ: Cariotipo Bandeo Q.</label>

                    </div>

                </div>
                <div class="element">
                    <div class="first">
                        <input type="checkbox" id="CBR"
                            name="CBR: Cariotipo Bandeo R."value="type_exam[]">
                    </div>
                    <div class="second">
                        <label for="CBR">CBR: Cariotipo Bandeo R.</label>
                    </div>
                </div>
                <div class="element">
                    <div class="first">
                        <input type="checkbox" id="CBRT" name="type_exam[]"
                            value="CBRT: Cariotipo Bandeo RT.">
                    </div>
                    <div class="second">

                        <label for="CBRT">CBRT: Cariotipo Bandeo RT.</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">
                        <input type="checkbox" id="CLA" name="type_exam[]"
                            value="CLA: Cariotipo Liquido Amniótico.">
                    </div>
                    <div class="second">

                        <label for="CLA">CLA: Cariotipo Liquido Amniótico.</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">
                        <input type="checkbox" id="CRF" name="type_exam[]"
                            value="CRF: Cariotipo restos fetales.">
                    </div>
                    <div class="second">

                        <label for="CRF">CRF: Cariotipo restos fetales.</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">
                        <input type="checkbox" id="CEL" name="type_exam[]"
                            value="CEL: Cariotipo Estados Leucémicos.">
                    </div>
                    <div class="second">

                        <label for="CEL">CEL: Cariotipo Estados Leucémicos.</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">

                        <input type="checkbox" id="CXF" name="type_exam[]"
                            value="CXF: Cariotipo X Fragil">
                    </div>
                    <div class="second">

                        <label for="CXF">CXF: Cariotipo X Fragil</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">

                        <input type="checkbox" id="CFC" name="type_exam[]"
                            value="CFC: Cariotipo Fragilidad cromosómica">
                    </div>
                    <div class="second">

                        <label for="CFC">CFC: Cariotipo Fragilidad cromosómica</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">

                        <input type="checkbox" id="CVC" name="type_exam[]"
                            value="CVC: Cariotipo Vellosidad Corial.">
                    </div>
                    <div class="second">

                        <label for="CVC">CVC: Cariotipo Vellosidad Corial.</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">

                        <input type="checkbox" id="ICH" name="type_exam[]"
                            value="ICH:Intercambio cromatidas hermanas">
                    </div>
                    <div class="second">

                        <label for="ICH">ICH:Intercambio cromatidas hermanas</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">

                        <input type="checkbox" id="CPH" name="type_exam[]"
                            value="CPH: Cariotipo Cromosoma Filadelfia.">
                    </div>
                    <div class="second">

                        <label for="CPH">CPH: Cariotipo Cromosoma Filadelfia.</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">

                        <input type="checkbox" id="FPR" name="type_exam[]" value="FPR: Fish Prenatal.">
                    </div>
                    <div class="second">

                        <label for="FPR">FPR: Fish Prenatal.</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">

                        <input type="checkbox" id="FPW" name="type_exam[]"
                            value="FPW: Fish Prader Willi.">
                    </div>
                    <div class="second">

                        <label for="FPW">FPW: Fish Prader Willi.</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">

                        <input type="checkbox" id="FDG" name="type_exam[]" value="FDG: Fish Di George.">
                    </div>
                    <div class="second">

                        <label for="FDG">FDG: Fish Di George.</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">

                        <input type="checkbox" id="FSRY" name="type_exam[]" value="FSRY: Fish SRY.">
                    </div>
                    <div class="second">

                        <label for="FSRY">FSRY: Fish SRY.</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">

                        <input type="checkbox" id="FB/A" name="type_exam[]" value="FB/A: Fish BCR/ABL">
                    </div>
                    <div class="second">

                        <label for="FB/A">FB/A: Fish BCR/ABL</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">

                        <input type="checkbox" id="FT15/17" name="type_exam[]"
                            value="FT15/17: Fish Translocación 15/17">
                    </div>
                    <div class="second">

                        <label for="FT15/17">FT15/17: Fish Translocación 15/17</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">

                        <input type="checkbox" id="QPT" name="type_exam[]"
                            value="QPT: Quimerismo para transplante.">
                    </div>
                    <div class="second">

                        <label for="QPT">QPT: Quimerismo para transplante.</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">

                        <input type="checkbox" id="HLA/COMP" name="type_exam[]"
                            value="HLA/COMP: HLA Completo.">
                    </div>
                    <div class="second">

                        <label for="HLA/COMP">HLA/COMP: HLA Completo.</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">

                        <input type="checkbox" id="HLAB" name="type_exam[]" value="HLAB: HLA Básico.">
                    </div>
                    <div class="second">

                        <label for="HLAB">HLAB: HLA Básico.</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">

                        <input type="checkbox" id="HLA27" name="type_exam[]" value="HLA27: HLA B-27">
                    </div>
                    <div class="second">

                        <label for="HLA27">HLA27: HLA B-27</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">

                        <input type="checkbox" id="HLA51" name="type_exam[]" value="HLA51: HLA B-51">
                    </div>
                    <div class="second">

                        <label for="HLA51">HLA51: HLA B-51</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">

                        <input type="checkbox" id="HLAB57" name="type_exam[]" value="HLAB57: HLA B-57">
                    </div>
                    <div class="second">

                        <label for="HLAB57">HLAB57: HLA B-57</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">

                        <input type="checkbox" id="HLAB7-B40" name="type_exam[]" value="HLAB7-B40: B7-B40">
                    </div>
                    <div class="second">

                        <label for="HLAB7-B40">HLAB7-B40: B7-B40</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">

                        <input type="checkbox" id="HLA-B" name="type_exam[]" value="HLA-B: HLA Clase I.">
                    </div>
                    <div class="second">

                        <label for="HLA-B">HLA-B: HLA Clase I.</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">

                        <input type="checkbox" id="HLA-DR-DQ" name="type_exam[]" value="HLA-DR-DQ: Clase II.">
                    </div>
                    <div class="second">

                        <label for="HLA-DR-DQ">HLA-DR-DQ: Clase II.</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">
                        <input type="checkbox" id="AC" name="type_exam[]"
                            value="AC: Anticuerpos Citotoxicos">
                    </div>
                    <div class="second">

                        <label for="AC">AC: Anticuerpos Citotoxicos</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">

                        <input type="checkbox" id="AB" name="type_exam[]"
                            value="AB: Anticuerpos Bloqueadores">
                    </div>
                    <div class="second">

                        <label for="AB">AB: Anticuerpos Bloqueadores</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">
                        <input type="checkbox" id="DQ2" name="type_exam[]" value="DQ2: HLA DQ.">
                    </div>
                    <div class="second">

                        <label for="DQ2">DQ2: HLA DQ.</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">
                        <input type="checkbox" id="Paternidad" name="type_exam[]" value="Paternidad">
                    </div>
                    <div class="second">

                        <label for="Paternidad">Paternidad</label>
                    </div>

                </div>
                <div class="element">
                    <div class="first">
                        <input type="checkbox" id="PCR TOXOPLASMA GONDII" name="type_exam[]"
                            value="PCR TOXOPLASMA GONDII">
                    </div>
                    <div class="second">

                        <label for="PCR TOXOPLASMA GONDII">PCR TOXOPLASMA GONDII</label>
                    </div>

                </div>
            </div>
        </div>

        {{-- Tipo de muestra --}}
        <div class="form_group">
            <label for="sample_type">Tipo De Muestra</label>
            <select name="sample_type" id="sample_type">
                <option disabled selected>Seleccionar</option>
                <option value="SP">SP</option>
                <option value="MO">MO</option>
                <option value="SALIVA">SALIVA</option>
                <option value="LA">LA</option>
            </select>
            <p class="error">{{ $errors->first('sample_type') }}</p>
        </div>

        {{-- Date of Sampling  --}}
        <div class="form_group">
            <label for="exam_date">Fecha de toma de la muestra</label>
            <input type="date" id="exam_date" name="exam_date" placeholder="Fecha toma de la muestra"
                value="{{ old('exam_date') }}">
            <p class="error">{{ $errors->first('exam_date') }}</p>
        </div>

        {{-- Hour of Sampling  --}}
        <div class="form_group">
            <label for="exam_hour">Hora de toma de la muestra</label>
            <input type="time" id="exam_hour" name="exam_hour" placeholder="Hora toma de la muestra"
                value="{{ old('exam_hour') }}">
            <p class="error">{{ $errors->first('exam_hour') }}</p>
        </div>

        {{-- SAMPLE RECEIPT DATE  --}}
        <div class="form_group">
            <label for="sample_receipt_date">Fecha de recepción de la muestra</label>
            <input type="date" id="sample_receipt_date" name="sample_receipt_date"
                placeholder="Fecha recepción de la muestra" value="{{ old('sample_receipt_date') }}">
            <p class="error">{{ $errors->first('sample_receipt_date') }}</p>
        </div>

        {{-- Hour of Receipt  --}}
        <div class="form_group">
            <label for="sample_receipt_hour">Hora de recepción</label>
            <input type="time" id="sample_receipt_hour" name="sample_receipt_hour" placeholder="Hora de recepción"
                value="{{ old('sample_receipt_hour') }}">
            <p class="error">{{ $errors->first('sample_receipt_hour') }}</p>
        </div>

        {{-- Entry Temp  --}}
        <div class="form_group">
            <label for="patient_temperature">Temperatura de ingreso</label>
            <input type="text" id="patient_temperature" name="patient_temperature"
                placeholder="Temperatura de ingreso" value="{{ old('patient_temperature') }}">
            <p class="error">{{ $errors->first('patient_temperature') }}</p>
        </div>

        {{-- Diagnostic --}}
        <div class="form_group">
            <label for="diagnostic">Diagnostico</label>
            <input type="text" id="diagnostic" name="diagnostic" placeholder="Diagnostico"
                value="{{ old('diagnostic') }}">
            <p class="error">{{ $errors->first('diagnostic') }}</p>
        </div>

        {{-- Delivery Date  --}}
        <div class="form_group">
            <label for="deliver_date">Fecha de entrega</label>
            <input type="date" id="deliver_date" name="deliver_date" placeholder="Fecha de entrega"
                value="{{ old('deliver_date') }}">
            <p class="error">{{ $errors->first('deliver_date') }}</p>
        </div>

        {{-- DATE BIRTH --}}
        <div class="form_group">
            <label for="birth_date">Fecha de nacimiento</label>
            <input type="date" id="birth_date" name="birth_date" placeholder="Fecha de nacimiento"
                value="{{ old('birth_date') }}">
            <p class="error">{{ $errors->first('birth_date') }}</p>
        </div>

        {{-- Sample Provenance  --}}
        <div class="form_group">
            <label for="origin_sample">Procedencia de la muestra</label>
            <input type="text" id="origin_sample" name="origin_sample" placeholder="Procedencia de la muestra"
                value="{{ old('origin_sample') }}">
            <p class="error">{{ $errors->first('origin_sample') }}</p>
        </div>

        {{-- Days of Sampling  --}}
        <div class="form_group">
            <label for="taking_days">Dias de toma</label>
            <input type="text" id="taking_days" name="taking_days" placeholder="Dias de toma"
                value="{{ old('taking_days') }}">
            <p class="error">{{ $errors->first('taking_days') }}</p>
        </div>

        {{-- File --}}
        {{-- <div class="form_group">
        <label for="document">Archivo</label>
        <input type="file" id="document" name="document" placeholder="Archivo" value="{{ old('document') }}">
        <p class="error">{{ $errors->first('document') }}</p>
    </div> --}}

        <button type="submit">Guardar</button>
    </form>
@endsection
