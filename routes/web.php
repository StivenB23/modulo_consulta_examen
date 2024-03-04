<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\SupportController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/email', function () {
    return view('emails.main-template');
});
Route::get("/",[UserController::class, "testUser"]);

Route::get('/', function () {
    return view('pages.authentication.login');
});

Route::get('/login', function () {
    return view('pages.authentication.login');
});

Route::get('/register', function () {
    return view('pages.authentication.register');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard.dashboard');
})->name("dashboard")->middleware("auth");

// SPECIALISTS
Route::get("/dashboard/specialists", [UserController::class, "index"])
    ->name("dashboard.specialists")
    ->middleware("auth");

Route::get('/dashboard/specialists/create', function () {
    return view('pages.dashboard.specialists.create-specialist');
})->name("dashboard.specialists.create")->middleware("auth");

Route::get('/dashboard/specialists/edit/{id}', [UserController::class, "edit"])
    ->name("dashboard.specialists.edit")
    ->middleware("auth");

// COMPANIES
Route::get('/dashboard/companies', [CompanyController::class, "index"])
    ->name("dashboard.companies")
    ->middleware("auth");

Route::get('/dashboard/companies/create', function () {
    return view('pages.dashboard.companies.create-company');
})->name("dashboard.companies.create")->middleware("auth");

Route::get('/dashboard/companies/edit/{id}', [CompanyController::class, "edit"])
    ->name("dashboard.companies.edit")
    ->middleware("auth");

// PATIENTS

Route::get('/dashboard/patients', [UserController::class, "indexPatients"])
    ->name("dashboard.patients")
    ->middleware("auth");

Route::get('/dashboard/patients/create', [UserController::class, "createPatient"])
    ->name("dashboard.patients.create")
    ->middleware("auth");

Route::get('/dashboard/patients/edit/{id}', [UserController::class, "editPatient"])
    ->name("dashboard.patients.edit")
    ->middleware("auth");

Route::get('/dashboard/patients/exams', [ExamController::class, "getMyExams"])
->name("dashboard.patients.my-exams")
->middleware("auth");

// EXAMS

Route::get('/dashboard/exams', [ExamController::class, "index"])
    ->name("dashboard.exams")
    ->middleware("auth");

Route::get('/dashboard/exams/create', [ExamController::class, "create"])
    ->name("dashboard.exams.create")
    ->middleware("auth");

Route::get('/dashboard/exams/patient/{id}', [ExamController::class, "getExamUser"])
    ->name("dashboard.exams.patient")
    ->middleware("auth");


// SUPPORT
Route::get('/dashboard/support/create', [SupportController::class, "create"])->name("dashboard.support-create")->middleware("auth");

// Route::get('/dashboard/supports/details/{examId}', function () {
//     return view('pages.dashboard.supports.details-support');
// })->name("dashboard.support.details")->middleware("auth");

Route::get('/dashboard/supports/details/{id}', [SupportController::class, 'getExamSupport'])->name("dashboard.support.details")->middleware("auth");

Route::post('registerSoportPacient', [SupportController::class, 'store'])->name("registerSoportPacient");

// AUTH

Route::post("/exam/create", [ExamController::class, "store"])->name("saveExam");

Route::post("/login", [AuthController::class, "login"])->name("login");
Route::post("/loginCompany", [AuthController::class, "loginCompany"])->name("loginCompany");
Route::post("/logout", [AuthController::class, "logout"])->name("logout");

// Rutas Usuario

Route::post("/registerUser", [UserController::class, "store"])->name("registerUser");
Route::post("/registerUserSpecialist", [UserController::class, "storeSpecialist"])->name("registerUserSpecialist");
Route::post("/registerUserPacient", [UserController::class, "storePacient"])->name("registerUserPacient");

Route::put("/updateUser/{id}/origin/{origin}", [UserController::class, "update"])->name("updateUser");
Route::put("/deactivateUser/{id}/origin/{origin}", [UserController::class, "deactivate"])->name("deactivateUser");

// Rutas Empresa (Compañia)
Route::post("/registerCompany", [CompanyController::class, "store"])->name("registerCompany");
Route::put("/updateCompany/{id}", [CompanyController::class, "update"])->name("updateCompany");
Route::put("/deactivateCompany/{id}", [CompanyController::class, "deactivate"])->name("deactivateCompany");

Route::get("/getExamsUser/{id}", [ExamController::class, "getExamUser"])->name("getExamsUser");


// EXAMS BY COMPANY
Route::get("/dashboardCompany", function () {
    return view('pages.dashboardCompany.dashboard');
})->name("dashboardCompany");

Route::get('/dashboardCompany/exams', [CompanyController::class,"examsCompany"])->name("dashboardCompany.exams");

Route::get('/dashboardCompany/exams/supports/{id}',[CompanyController::class,"supportCompanyExam"])->name("dashboardCompany.exams.supports")->middleware("auth");
