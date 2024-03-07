<?php

namespace App\Http\Controllers;

use App\Exports\RegistrosExport;
use App\Models\Exam;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class ExportExcelController extends Controller
{
    public function export(Request $request)
    {

        // $validator = Validator::make($request->all(), [
        //     'start_date' => 'required',
        //     'end_date' => 'required',
        // ], [
        //     'start_date.required' => 'El campo Fecha de inicio no puede estar vacío.',
        //     'end_date.required' => 'El campo Fecha final no puede estar vacío.',
        // ]);

        // // Comprobar si la validación falla
        // if ($validator->fails()) {
        //     return redirect('/registros')
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $filter = $request->input('filter_Data');


        $registros = Exam::select([
            'id',
            'external_code',
            'type_exam',
            'anticoagulant',
            'or',
            'sample_type',
            'exam_date',
            'exam_hour',
            'deliver_date',
            'sample_receipt_date',
            'sample_receipt_hour',
            'patient_temperature',
            'diagnostic',
            'origin_sample',
            'birth_date',
            'taking_days'
        ])->whereBetween($filter, [$startDate, $endDate])->get();

        $fechaActual = Carbon::now()->format('Y-m-d');
        $nombreArchivo = 'Examenes_' . $fechaActual . '.xlsx';

        return Excel::download(new RegistrosExport($registros), $nombreArchivo);
    }
}
