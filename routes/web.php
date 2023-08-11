<?php

use App\Models\AlumniModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;

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
    return view('login.login');
})->name('login');

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('dashboard.home'
    );
    })->name('home');

    Route::get('/alumni', [EmployeeController::class, 'AlumniController'])->name('alumni');

    Route::get('/mahasiswa', [EmployeeController::class, 'MahasiswaController'])->name('mahasiswa');

    Route::get('/form', function() {
        return view('mahasiswa.form');
    })->name('form');
});



Route::post('/inputdata', [EmployeeController::class, 'inputdata'])->name('inputdata');

Route::get('/mahasiswa/delete/{id_akun}', [EmployeeController::class, 'delete'])->name('mahasiswa.delete');

Route::post('/importexcel', [EmployeeController::class, 'importexcel'])->name('importexcel');
