@extends('layouts.dashboardlayout')

@section('title', 'Dashboard | Soporte')

@section('content')
    <h2>Agregar soporte</h2>

    <form action="{{ route('registerSoportPacient') }}" method="post" enctype="multipart/form-data">
        @csrf

        @if(session('success'))
            <div class="success_message">
                {{ session('success') }}
            </div>
        @endif

        {{-- EXTERN CODE --}}
        <div class="form_group">
            <label for="external_code">Codigo Externo</label>
            <input type="text" id="external_code" name="external_code" placeholder="Digite el codigo externo del examen"
                value="{{ old('external_code') }}">
            <p class="error">{{ $errors->first('external_code') }}</p>
        </div>

        {{-- DOCUMENT TYPES --}}
        <div class="form_group">
            <label for="type_exam" class="label">Seleccione todos los tipos de examen que se aplicaron</label>

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

        {{-- File --}}
        <div class="form_group">
            <label for="documents">Archivos</label>
            <input class="file-input" type="file" name="fileUpload[]" multiple />
        </div>

        <button type="submit">Guardar</button>
    </form>
@endsection
