<?php

use App\Http\Controllers\Auth\GoogleLoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Auth\RegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\KonselingController;
use App\Http\Controllers\PsikotesController;
use App\Http\Controllers\UjiKompetensiController;
use App\Http\Controllers\DashboardController;


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

Route::get('auth/google', [GoogleLoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleLoginController::class, 'handleCallback']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post("/login",[LoginController::class, "authenticate"]);
Route::post('/logout',[LogoutController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegistrationController::class, 'index'])->middleware('guest');
Route::post('/submit-registration', [RegistrationController::class, 'register']);

Route::get('/services/konseling', [KonselingController::class, 'index']);
Route::get('/get-available-sessions', [KonselingController::class, 'getAvailableSessions']);
Route::get('/register/konseling', [KonselingController::class, 'daftar'])->middleware('auth');
Route::post('/submit-konseling', [KonselingController::class, 'create']);

Route::get('/services/psikotes', [PsikotesController::class, 'index']);
Route::get('/register/psikotes', [PsikotesController::class, 'daftar'])->middleware('auth');
Route::get('/get-available-sessions', [PsikotesController::class, 'getAvailableSessions']);
Route::get('/register/psikotes-kelompok', [PsikotesController::class, 'daftarKelompok'])->middleware('auth');
Route::post('/submit-psikotes', [PsikotesController::class, 'create']);
Route::post('/submit-psikotes-kelompok', [PsikotesController::class, 'createKelompok']);

Route::get('/services/uji-kompetensi', [UjiKompetensiController::class, 'index']);
Route::get('/register/uji-kompetensi', [UjiKompetensiController::class, 'daftar'])->middleware('auth');
Route::post('/submit-ujikom', [UjiKompetensiController::class, 'create']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/', function () {
    return view('home');
});


Route::get('profile/mahasiswa', function(){
    return view('services.profile');
});

Route::get('profile/umum', function(){
    return view('services.profileUmum');
});


