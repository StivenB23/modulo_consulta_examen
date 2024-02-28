<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isNull;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $companies = Company::all();

        return view('pages.dashboard.companies.list-companies', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->only("nit", "name", "email", "alternative_email");
            $company = new Company();
            $company->nit = $data['nit'];
            $company->name = $data['name'];
            $company->email = is_null($data['email']) ? null : $data['email'];
            $company->alternative_email = is_null($data['alternative_email']) ? null : $data['alternative_email'];
            $company->save();

            return redirect()->route('dashboard.companies');
        } catch (Exception $th) {
            dd($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::findOrFail($id);
        return view('pages.dashboard.companies.edit-company', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            // dd($request->all());
            // Buscar el recurso que se desea actualizar por su ID
            $recurso = Company::findOrFail($id);

            $datos = $request->except(['_token', '_method']);
            // Asignar dinámicamente los valores de la solicitud al recurso
            $recurso->fill($datos);

            // Guardar los cambios en la base de datos
            $recurso->save();

            return redirect()->route('dashboard.companies');
        } catch (Exception $th) {
            dd($th->getMessage());
        }
    }

    /**
     * Desactivar empresa Compañia
     */
    public function deactivate(string $id)
    {
        $companyDeactivated = DB::table('companies')
        ->where('id', $id)
        ->update(['status' => 0]);

        return redirect()->route("dashboard.companies");
    }
}
