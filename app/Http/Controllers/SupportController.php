<?php

namespace App\Http\Controllers;

use App\Mail\MessageExam;
use App\Models\Exam;
use App\Models\Support;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class SupportController extends Controller
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
        $exams = Exam::all();
        return view('pages.dashboard.supports.create-support')->with("exams",$exams);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->only("or", "fileUpload", "type_exam");
            $selectedOr = $data["or"];
            $or = explode("-", $selectedOr)[0];
            // the or selected is contained in $or variable
            $typesExams = serialize($data["type_exam"]);
            $filesUpload = $data["fileUpload"];
            $fileNames = [];
            $filesNamesSerialize = "";
            foreach ($filesUpload as $file) {
                $uniqueName = Str::uuid()->toString();
                // // Obtener la extensión del archivo original
                $extension = $file->getClientOriginalExtension();
                // // Combinar el nombre único con la extensión original para formar el nuevo nombre del archivo
                $newName = $uniqueName . '.' . $extension;
                $file->storeAs('public/', $newName);
                array_push($fileNames, $newName);
            }
            $filesNamesSerialize = serialize($fileNames);
            // dd($filesNamesSerialize);
            // $exam =  Exam::find($data["external_code"]);
            // dd($exam);
            // dd($data["external_code"]);
            $r = $data["external_code"];
            $exams = Exam::where('external_code',$r)->get();
            $Support = Support::create([
                'external_code' => $data["external_code"],
                'type_exam' => $typesExams,
                'documents' => $filesNamesSerialize,
                'exam_id' => $exams[0]->id,
            ]);
            foreach ($exams as $exam) {
                $users = $exam->patients;
                foreach ($users as $user) {
                    // dd($user->company);
                    if ($user->company_id == null || $user->company_id == "") {
                        Mail::to($user->email)->send(new MessageExam($user->name));
                    }else{
                        $company = $user->company;
                        Mail::to($company->email)->send(new MessageExam($user->name));
                    }
                }
                // Do something with $users
            }
            // dd($user);

            return redirect()->back()->with('success', '¡Resultado creado exitosamente!');
        } catch (Exception $th) {
            dd($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Support $Support)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    }

    function getExamSupport(string $id) {
        $exam = Exam::find($id);
        // dd($exam);
        return view('pages.dashboard.supports.details-support', compact('exam'));
    }

    /**
     * Desactivar empresa Compañia
     */
    public function deactivate(string $id)
    {
    }
}
