<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// });

// Route::get('/dash', function () {
//     return view('dashboard.dashboard');
// });

// Route::match(['get', 'post'], '/login', [AuthController::class, 'index'])->name('login');
// Route::post('/auth/auth', [AuthController::class, 'auth'])->name('auth.auth');

// Route Register
Route::get('/register', [AuthController::class, 'indexRegister'])->name('register');
Route::post('/register/input', [AuthController::class, 'registerAccount'])->name('register-input'); 

// Route Login
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login/auth', [AuthController::class, 'auth'])->name('login-auth');

// Route Admin
Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/data', [AdminController::class, 'data']);
Route::get('/tambahData', [AdminController::class, 'tambahData']);
Route::get('/loket', [AdminController::class, 'loket']);
Route::get('/tambahLoket', [AdminController::class, 'tambahLoket']);
Route::get('/tujuan', [AdminController::class, 'tujuan']);
Route::get('/tambahTujuan', [AdminController::class, 'tambahTujuan']);
Route::get('/user', [AdminController::class, 'user']);
Route::get('/tambahUser', [AdminController::class, 'tambahUser']);
Route::get('/rincian', [AdminController::class, 'rincian']);