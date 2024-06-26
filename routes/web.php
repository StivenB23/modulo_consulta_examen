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
    return view('dashboard');
})->name("dashboard")->middleware("auth");

Route::post("/login", [AuthController::class, "login"]);
Route::post("/logout", [AuthController::class, "logout"]);