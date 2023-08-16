<?php

use App\Models\AlumniModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Models\MInputDataModel;

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
Route::post('/inputdata/general/', [EmployeeController::class, 'inputmahasiswa'])->name('inputmahasiswa');
Route::post('/inputdata/domisili/', [EmployeeController::class, 'inputdomisili'])->name('inputdomisili');
Route::post('/inputdata/ortu/', [EmployeeController::class, 'inputortu'])->name('inputortu');
Route::post('/inputdata/wali/', [EmployeeController::class, 'inputwali'])->name('inputwali');
Route::post('/inputdata/sekolah/', [EmployeeController::class, 'inputsekolah'])->name('inputsekolah');
Route::post('/inputdata/sekolahperguruan/', [EmployeeController::class, 'inputsekolahperguruan'])->name('inputsekolahperguruan');


Route::get('/mahasiswa/delete/{id}', [EmployeeController::class, 'delete'])->name('mahasiswa.delete');

Route::get('/mahasiswa/details/{id}', [EmployeeController::class, 'details'])->name('details');
Route::get('/mahasiswa/edit/{id}', [EmployeeController::class, 'edits'])->name('edits');
Route::post('/mahasiswa/post/{id}', [EmployeeController::class, 'update'])->name('update.mahasiswa');


Route::get('/mahasiswa/details/file/{id}/{type}', [EmployeeController::class, 'detailFile'])->name('details.file');



Route::post('/importexcel', [EmployeeController::class, 'importexcel'])->name('importexcel');
