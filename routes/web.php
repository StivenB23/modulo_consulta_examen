<?php

use App\Http\Controllers\AuthController;
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
    return view('pages.dashboard.dashboard');
})->name("dashboard");

// SPECIALISTS
Route::get('/dashboard/specialists', function () {
    return view('pages.dashboard.specialists.list-specialists');
})->name("dashboard.specialists");

Route::get('/dashboard/specialists/create', function () {
    return view('pages.dashboard.specialists.create-specialist');
})->name("dashboard.specialists.create");

// COMPANIES
Route::get('/dashboard/companies', function () {
    return view('pages.dashboard.companies.list-companies');
})->name("dashboard.companies");

Route::get('/dashboard/companies/create', function () {
    return view('pages.dashboard.companies.create-company');
})->name("dashboard.companies.create");

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name("dashboard")->middleware("auth");

Route::post("/login", [AuthController::class, "login"])->name("login");
Route::post("/logout", [AuthController::class, "logout"])->name("logout");