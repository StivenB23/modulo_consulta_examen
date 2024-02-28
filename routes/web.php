<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('pages.authentication.login');
});

Route::get('/register', function () {
    return view('pages.authentication.register');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->name("dashboard")->middleware("auth");

Route::post("/login", [AuthController::class, "login"])->name("login");
Route::post("/logout", [AuthController::class, "logout"])->name("logout");

// Rutas Usuario
Route::post("/registerUser", [UserController::class, "store"])->name("registerUser");
Route::post("/registerUserSpecialist", [UserController::class, "storeSpecialist"])->name("registerUserSpecialist");

Route::put("/updateUser/{id}", [UserController::class, "update"])->name("updateUser");

// Rutas Empresa (Compañia)
Route::post("/registerCompany", [UserController::class, "store"])->name("registerCompany");

Route::put("/updateCompany/{id}", [UserController::class, "update"])->name("updateCompany");