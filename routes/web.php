<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InstitusiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDetailsController;
use App\Http\Controllers\PegawaiModalController;
use App\Models\AlumniModel;
use App\Models\MInputDataModel;
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



Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['guest'])->group(function() {
    Route::get('/', function () {
        return view('login.login');
    })->name('login');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('dashboard.home',
        ['title' => 'Dashboard']
    );
    })->name('home');

    Route::get('/alumni', [EmployeeController::class, 'AlumniController'])->name('alumni');

    Route::get('/mahasiswa', [EmployeeController::class, 'MahasiswaController'])->name('mahasiswa');

    Route::get('/form', function() {
        return view('mahasiswa.form', [
            'title' => 'Form Mahasiswa'
        ]);

    })->name('form');

    Route::get('/dosen', [DosenController::class, 'DosenShow'])->name('dosen');

    Route::get('/dosen/details/{id}', [DosenController::class, 'showDetails'])->name('details.dosen');

    // Institusi
    Route::get('/iku/one',[InstitusiController::class, 'ikuOne'])->name('iku.one');

    /*
    **********************
     * Pegawai
    **********************
    **/
    Route::prefix('/pegawai')->group(function(){
        Route::get('/', [PegawaiController::class, 'index'])->name('pegawai');
        Route::post('/store', [PegawaiController::class, 'store'])->name('store');
        Route::prefix('/details')->group(function(){
            Route::get('/{id}', [PegawaiDetailsController::class, 'index'])->name('index');
            Route::post('/store/{id}', [PegawaiDetailsController::class, 'store'])->name('pegawai.detail.store');
            Route::get('/{id}/{type}', [PegawaiDetailsController::class, 'destroy'])->name('delete');
            Route::prefix('/modal')->group(function() {
                Route::get('/{id}/{type}', [PegawaiModalController::class, 'index'])->name('modal.index');
                Route::post('/{id}/{type}', [PegawaiModalController::class, 'store'])->name('modal.store');
            });
        });
    });
});



// Input Data Mahasiswa
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



// Input Data Alumni
Route::post('/importexcel', [EmployeeController::class, 'importexcel'])->name('importexcel');


// Input Data Dosen
Route::post('/dosen/profile', [DosenController::class, 'DosenInputProfile'])->name('dosen.profile');


// Update Data Dosen
Route::post('/dosen/post/{id}', [DosenController::class, 'DosenUpdate'])->name('dosen.update');
Route::post('/dosen/foto/{id}', [DosenController::class, 'Update_Foto'])->name('dosen.foto');


// Delete Data Dosen
Route::get('/get-id-dosen/{id}', [DosenController::class, 'delete'])->name('delete.dosen');
Route::get('/delete/{id}/{type}', [DosenController::class, 'destroy'])->name('dosen.delete');
// Details Data Dosen

// Modal Pop out Dosen
// Route::get('/get-modal-content/{id}', [DosenController::class, 'Modal_Foto']);
Route::get('/modal-popout/{id}/{jenis}', [DosenController::class, 'Modal_Popout']);
Route::post('/karyailmiah', [DosenController::class, 'InputDataKaryaIlmiahDetails'])->name('karya.send');
Route::post('/modal-send/{id}', [DosenController::class, 'Modal_Send'])->name('modal.send');
// Edit Details Dosen
Route::post('/details/KaryaIlmiah/edit/{id}', [DosenController::class,  'EditKaryaIlmiah'])->name('edit.edit.karyaIlmiah');
Route::get('/dosen/edit/{id}/{jenis}', [DosenController::class, 'Modal_Edit']);
Route::post('/details/edit/{id}', [DosenController::class, 'DosenDetailsEdits'])->name('edit.details');


// Edit Password Dosen
Route::get('/edit-password/{id}',[DosenController::class, 'FormEditPassword']);
Route::post('/edit-password/{id}',[DosenController::class, 'EditPassword'])->name('dosen.editpassword');


// Reset Password
Route::post('/reset-password/{id}', [DosenController::class, 'resetPassword'])->name('reset.password.dosen')->withoutMiddleware(['csrf']);



// Institusi
Route::post('/importikuone', [InstitusiController::class, 'store'])->name('iku.one.import');

