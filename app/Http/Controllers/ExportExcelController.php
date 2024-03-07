<?php

namespace App\Http\Controllers;

use App\Exports\RegistrosExport;
use App\Models\Exam;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportExcelController extends Controller
{
    public function export(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $filter = $request->input('filter_Data');

        $registros = Exam::select([ 'id',
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
        'taking_days'])->whereBetween($filter, [$startDate, $endDate])->get();

        return Excel::download(new RegistrosExport($registros), 'Examenes.xlsx');
    }
}
