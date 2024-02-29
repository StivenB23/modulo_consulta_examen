<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->only("external_code", "type_exam", "sample_type", "exam_date", "exam_hour", "sample_receipt_date", "sample_receipt_hour", "patient_temperature", "id_user", "diagnostic", "deliver_date", "birth_date", "origin_sample", "document", "taking_days");



            // $name = $request->file("document")->getClientOriginalName();
            // $request->file('document')->storeAs('public/',$name);
            // Generar un nombre único para el archivo
            $uniqueName = Str::uuid()->toString();

            // Obtener el nombre original del archivo
            $name = $request->file("document")->getClientOriginalName();

            // Obtener la extensión del archivo original
            $extension = $request->file("document")->getClientOriginalExtension();

            // Combinar el nombre único con la extensión original para formar el nuevo nombre del archivo
            $newName = $uniqueName . '.' . $extension;

            // Guardar el archivo con el nuevo nombre
            $request->file('document')->storeAs('public/', $newName);
            $user = User::find($data["id_user"]);


            $exam = Exam::create([
                'external_code' => $data["external_code"],
                'type_exam' => $data["type_exam"],
                'sample_type' => $data["sample_type"],
                'exam_date' => $data["exam_date"],
                'exam_hour' => $data["exam_hour"],
                'sample_receipt_date' => $data["sample_receipt_date"],
                'sample_receipt_hour' => $data["sample_receipt_hour"],
                'patient_temperature' => $data["patient_temperature"],
                'diagnostic' => $data["diagnostic"],
                'deliver_date' => $data["deliver_date"],
                'birth_date' => $data["birth_date"],
                'origin_sample' => $data["origin_sample"],
                'document' => $newName,
                'taking_days' => $data["taking_days"],
            ]);
            $user->exams()->attach($exam);
            // $user = new Exam();
            // $user->external_code = $data["external_code"];
            // $user->type_exam = $data["type_exam"];
            // $user->sample_type = $data["sample_type"];
            // $user->exam_date = $data["exam_date"];
            // $user->exam_hour = $data["exam_hour"];
            // $user->sample_receipt_date = $data["sample_receipt_date"];
            // $user->sample_receipt_hour = $data["sample_receipt_hour"];
            // $user->patient_temperature = $data["patient_temperature"];
            // $user->name = $data["name"];
            // $user->diagnostic = $data["diagnostic"];
            // $user->deliver_date = $data["deliver_date"];
            // $user->birth_date = $data["birth_date"];
            // $user->origin_sample = $data["origin_sample"];
            // $user->document = $data["document"];
            // $user->taking_days = $data["taking_days"];
            // $user->save();
        } catch (Exception $th) {
            dd($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Exam $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exam $exam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exam $exam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exam $exam)
    {
        //
    }
}
