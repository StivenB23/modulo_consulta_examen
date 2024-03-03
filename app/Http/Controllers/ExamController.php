<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageExam;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;
class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exams = Exam::all();
        return view('pages.dashboard.exams.list-exams', compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $patients = User::where('role', 'cliente')->get();

        return view('pages.dashboard.exams.create-exam', compact('patients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->only("external_code", "type_exam", "sample_type", "exam_date", "exam_hour", "sample_receipt_date", "sample_receipt_hour", "patient_temperature", "id_user", "diagnostic", "deliver_date", "birth_date", "origin_sample", "or","document", "taking_days");
            dd($data["id_user"]);
            $examValues = $request->input('type_exam', []);
            $examArray = serialize($examValues);
            $user = User::find($data["id_user"]);
            // dd($user);
            $exam = Exam::create([
                'external_code' => $data["external_code"],
                'anticoagulant' => $data["anticoagulant"] ?? "HEP",
                'or' => $data["or"],
                'sample_type' => $data["sample_type"],
                'exam_date' => $data["exam_date"],
                'type_exam' => $examArray,
                'exam_hour' => $data["exam_hour"],
                'sample_receipt_date' => $data["sample_receipt_date"],
                'sample_receipt_hour' => $data["sample_receipt_hour"],
                'patient_temperature' => $data["patient_temperature"],
                'diagnostic' => $data["diagnostic"],
                'deliver_date' => $data["deliver_date"],
                'birth_date' => $data["birth_date"],
                'origin_sample' => $data["origin_sample"],
                'taking_days' => $data["taking_days"],
            ]);
            $user->exams()->attach($exam);
            // Mail::to($user->email)->send(new MessageExam($user->name));
            return redirect()->route("dashboard.exams");
        } catch (Exception $th) {
            dd($th->getMessage());
        }
    }

    public function getMyExams() {
       $userId = Auth::id();
       $user = User::find($userId);
       $exams = $user->exams;
       return view('pages.dashboard.patients.exams.my-exams', compact('exams'));
    }


    public function getExamUser(string $id) {
        $user = User::find($id);
        $exams = $user->exams;
        return view('pages.dashboard.exams.patients.patient-exams', compact('exams', 'user'));
    }

    public function getPatientDetails(string $id) {
        $user = User::find($id);
        return response()->json($user);
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
