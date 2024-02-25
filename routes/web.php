<?php


use App\Http\Controllers\Auth\GoogleLoginController;
use App\Http\Controllers\Auth\RegistrationController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Auth\LoginController;
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

Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/submit-registration', [RegistrationController::class, 'register']);


Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/services/konseling', function () {
    return view('services.konseling');
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

Route::get('/register/konseling', function(){
    return view('register.registerKonseling');
});
Route::get('/register/psikotes', function(){
    return view('register.registerPsikotes');
});
Route::get('/register/ujikompetensi', function(){
    return view('register.registerUjiKompetensi');
});

Route::post("/login",[LoginController::class, "authenticate"]);
