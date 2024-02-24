<?php


use App\Http\Controllers\Auth\GoogleLoginController;
use App\Http\Controllers\Auth\RegistrationController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\KonselingController;

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

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/submit-registration', [RegistrationController::class, 'register']);

Route::get('/services/konseling', [KonselingController::class, 'index']);
Route::get('/get-available-sessions', [KonselingController::class, 'getAvailableSessions']);
Route::get('/register/konseling', [KonselingController::class, 'daftar']);
Route::post('/submit-konseling', [KonselingController::class, 'create']);


Route::get('/', function () {
    return view('home');
});

Route::get('/services/psikotes',function(){
    return view('services.psikotes');
});

Route::get('/services/ujikompetensi',function(){
    return view('services.ujiKompetensi');
});


Route::get('profile/mahasiswa', function(){
    return view('services.profile');
});

Route::get('profile/umum', function(){
    return view('services.profileUmum');
});

Route::get('/register/psikotes', function(){
    return view('register.registerPsikotes');
});
Route::get('/register/ujikompetensi', function(){
    return view('register.registerUjiKompetensi');
});

Route::post("/login",[LoginController::class, "authenticate"]);
