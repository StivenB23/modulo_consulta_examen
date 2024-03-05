<?php

namespace App\Http\Controllers;

use App\Mail\MessageForgotPassword;
use App\Models\Company;
use App\Mail\MessageWelcome;
use App\Models\User;
use App\Services\RandomKeyService;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{

    protected $randomKeyService;

    public function __construct(RandomKeyService $randomKeyService)
    {
        $this->randomKeyService = $randomKeyService;
    }

    public function testUser()
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('pages.dashboard.specialists.list-specialists', compact('users'));
    }

    public function indexPatients()
    {
        $users = User::where('role', 'cliente')->get();
        return view('pages.dashboard.patients.list-patients', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    public function createPatient()
    {
        $companies = Company::all();
        return view('pages.dashboard.patients.create-patient', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        try {
            $data = $request->only("name", "lastname", "type_document", "document", "age", "sex", "email", "role");
            $password = $this->randomKeyService->generateKey(12);
            $passwordEncrypt = $this->randomKeyService->encryptText($password);
            $user = new User();
            $user->name = $data["name"];
            $user->lastname = $data["lastname"];
            $user->type_document = $data["type_document"];
            $user->document = $data["document"];
            $user->age = $data["age"];
            $user->sex = $data["sex"];
            $user->email = $data["email"];
            $user->role = $data["role"];
            $user->password = $passwordEncrypt;
            $user->save();
            Mail::to($data["email"])->send(new MessageWelcome($data["name"], $data["email"], $password));
            dd("Registrado de forma exitosa");
        } catch (Exception $th) {
            dd($th->getMessage());
        }
    }

    public function storeSpecialist(Request $request)
    {
        try {
            // $rules = [
            //     'name' => 'required',
            //     'lastname' => 'required',
            //     'type_document' => 'required',
            //     'document' => 'required',
            //     'problema' => 'required',
            //     'age' => 'required',
            //     'sex' => 'required',
            //     'age' => 'required',
            //     'email' => 'required'
            // ];
            // $message = [
            //     'name.required' => 'El nombre del paciente es requerido',
            //     'lastname.required' => 'El apellido del paciente es requerido',
            //     'type_document.required' => 'El apellido del paciente es requerido',
            //     'document.required' => 'El documento del paciente es requerido',
            //     'age.required' => 'La edad del paciente es requerido',
            //     'sex.required' => 'El sexo del paciente es requerido',
            //     'email.required' => 'El sexo del paciente es requerido'
            // ];
            // $validate = Validator::make(
            //     $request->all(),
            //     $rules,
            //     $message
            // );

            // if ($validate->fails()) {
            //     return back()->withErrors($validate->errors());
            // }
            $data = $request->only("name", "lastname", "type_document", "document", "age", "sex", "email");
            $password = $this->randomKeyService->generateKey(12);
            $passwordEncrypt = $this->randomKeyService->encryptText($password);
            $user = new User();
            $user->name = $data["name"];
            $user->lastname = $data["lastname"];
            $user->type_document = $data["type_document"];
            $user->document = $data["document"];
            $user->age = $data["age"];
            $user->sex = $data["sex"];
            $user->email = $data["email"];
            $user->role = "especialista";
            $user->password = $passwordEncrypt;
            $user->save();
            Mail::to($data["email"])->send(new MessageWelcome($data["name"], $data["email"], $password));
            return redirect()->route("dashboard.specialists");
            
        } catch (Exception $th) {
            return redirect()->back()->withErrors(['error' => 'El correo ingresado ya existe']);
        }
    }

    public function storePacient(Request $request)
    {
        try {
            $data = $request->only("name", "lastname", "type_document", "document", "age", "sex", "email", "company_id");
            $password = $this->randomKeyService->generateKey(12);
            $passwordEncrypt = $this->randomKeyService->encryptText($password);
            $user = new User();
            $user->name = $data["name"];
            $user->lastname = $data["lastname"];
            $user->type_document = $data["type_document"];
            $user->company_id = $data["company_id"] ?? null;
            $user->document = $data["document"];
            $user->age = $data["age"];
            $user->sex = $data["sex"];
            $user->email = $data["email"];
            $user->role = "cliente";
            $user->password = $passwordEncrypt;
            $user->save();

            Mail::to($data["email"])->send(new MessageWelcome($data["name"], $data["email"], $password));
            return redirect()->route("dashboard.patients");
        } catch (Exception $th) {
            dd($th->getMessage());
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);

        return view('pages.dashboard.specialists.edit-specialist', compact('user'));
    }

    public function editPatient(string $id)
    {
        $user = User::findOrFail($id);
        $companies = Company::all();

        return view('pages.dashboard.patients.edit-patient', compact('user', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, string $origin)
    {
        // Validar la solicitud entrante
        // $request->validate([
        //     // Aquí puedes definir las reglas de validación para los campos que esperas recibir
        //     // Por ejemplo:
        //     // 'titulo' => 'required|string|max:255',
        //     // 'descripcion' => 'required|string',
        //     // 'autor' => 'required|string|max:100',
        // ]);
        try {
            // dd($request->all());
            // Buscar el recurso que se desea actualizar por su ID
            $recurso = User::findOrFail($id);

            $datos = $request->except(['_token', '_method']);
            // Asignar dinámicamente los valores de la solicitud al recurso
            $recurso->fill($datos);

            $recurso['sex'] = $request->sex;

            // Guardar los cambios en la base de datos
            $recurso->save();

            if ($origin == "specialists") {
                return redirect()->route("dashboard.specialists");
            }
            if ($origin == "patients") {
                return redirect()->route("dashboard.patients");
            }
        } catch (Exception $th) {
            dd($th->getMessage());
        }
    }

    /**
     * Desactivar usuario
     */
    public function deactivate(string $id, string $origin)
    {
        $userDeactivated = DB::table('users')
            ->where('id', $id)
            ->update(['status' => 0]);

        if ($origin == "specialists") {
            return redirect()->route("dashboard.specialists");
        }
        if ($origin == "patients") {
            return redirect()->route("dashboard.patients");
        }
    }

    function emailPassword(Request $request)
    {
        $data = $request->only("email");
        $user = User::where('email', $data["email"])->first();
        if ($user) {
            $password = $this->randomKeyService->generateKey(12);
            $passwordEncrypt = $this->randomKeyService->encryptText($password);
            $user->password = $passwordEncrypt;
            $user->save();
            Mail::to($user->email)->send(new MessageForgotPassword($user->name, $password));
            return redirect()->route("login")->with('success', 'Correo de recuperación enviado');
        }

        return redirect()->back()->withErrors(['email' => 'El correo no es correcto o no se encuentra en el sistema']);
    }

    function changePassword(Request $request)
    {
        $data = $request->only("id_user", "passwordActual", "passwordNew");

        // Buscar el usuario por su ID
        $user = User::find($data["id_user"]);

        if ($user) {
            // Verificar si la contraseña actual proporcionada coincide con la contraseña almacenada en la base de datos
            if (Hash::check($data["passwordActual"], $user->password)) {
                // La contraseña actual es válida, actualizar la contraseña del usuario
                $user->password = Hash::make($data["passwordNew"]);
                $user->save();

                // La contraseña se ha cambiado exitosamente
                // Puedes devolver una respuesta adecuada, redirigir al usuario, etc.
                return redirect()->back()->with('success', 'Contraseña Cambiada de forma exitosa');
            } else {
                // La contraseña actual proporcionada no coincide con la contraseña almacenada en la base de datos
                // Puedes devolver un mensaje de error o realizar otra acción apropiada
                return redirect()->back()->withErrors(['passwordActual' => 'La contraseña actual no es correcta']);
            }
        } else {
            // No se encontró un usuario con el ID proporcionado
            // Puedes devolver un mensaje de error o realizar otra acción apropiada
            return redirect()->back()->withErrors(['passwordActual' => 'La contraseña actual no es correcta, error user']);
        }
    }
    function changePasswordCompany(Request $request)
    {
        $data = $request->only("id_company", "passwordActual", "passwordNew");

        // Buscar el usuario por su ID
        $company = Company::find($data["id_company"]);

        if ($company) {
            // Verificar si la contraseña actual proporcionada coincide con la contraseña almacenada en la base de datos
            if (Hash::check($data["passwordActual"], $company->password)) {
                // La contraseña actual es válida, actualizar la contraseña del usuario
                $company->password = Hash::make($data["passwordNew"]);
                $company->save();

                // La contraseña se ha cambiado exitosamente
                // Puedes devolver una respuesta adecuada, redirigir al usuario, etc.
                return redirect()->back()->with('success', 'Contraseña Cambiada de forma exitosa');
            } else {
                // La contraseña actual proporcionada no coincide con la contraseña almacenada en la base de datos
                // Puedes devolver un mensaje de error o realizar otra acción apropiada
                return redirect()->back()->withErrors(['passwordActual' => 'La contraseña actual no es correcta']);
            }
        } else {
            // No se encontró un usuario con el ID proporcionado
            // Puedes devolver un mensaje de error o realizar otra acción apropiada
            return redirect()->back()->withErrors(['passwordActual' => 'La contraseña actual no es correcta, error user']);
        }
    }
}
