<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\ProdiController;
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

// Route::get('/', function () {
//     return view('dosen.index');
// });

Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi.index');
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');

Route::resource('prodis', ProdiController::class);
Route::resource('dosens', DosenController::class);
Route::resource('mahasiswas', MahasiswaController::class);
Route::resource('matakuliahs', MatakuliahController::class);


Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/register', [RegistrasiController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegistrasiController::class, 'register']);