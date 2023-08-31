<?php

use App\Http\Controllers\DosenController;
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



Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['guest'])->group(function() {
    Route::get('/', function () {
        return view('login.login');
    })->name('login');
});


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

    Route::get('/dosen', [DosenController::class, 'DosenShow'])->name('dosen');
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
Route::post('/dosen/pendidikan', [DosenController::class, 'DosenInputPendidikan'])->name('dosen.pendidikan');
Route::post('/dosen/penelitian', [DosenController::class, 'DosenInputPenelitian'])->name('dosen.penelitian');
Route::post('/dosen/pengabdian', [DosenController::class, 'DosenInputPengabdian'])->name('dosen.pengabdian');
Route::post('/dosen/penghargaan', [DosenController::class, 'DosenInputPenghargaan'])->name('dosen.penghargaan');
Route::post('/dosen/karyailmiah', [DosenController::class, 'DosenInputKaryaIlmiah'])->name('dosen.karyailmiah');
Route::post('/dosen/kegiatan', [DosenController::class, 'DosenInputKegiatan'])->name('dosen.kegiatan');
Route::post('/dosen/jurnal', [DosenController::class, 'DosenInputJurnal'])->name('dosen.jurnal');
Route::post('/dosen/buku', [DosenController::class, 'DosenInputBuku'])->name('dosen.buku');
Route::post('/dosen/jabatan', [DosenController::class, 'DosenInputJabatan'])->name('dosen.jabatan');
Route::post('/dosen/organisasi', [DosenController::class, 'DosenInputOrganisasi'])->name('dosen.organisasi');


// Update Data Dosen
Route::post('/dosen/post/{id}', [DosenController::class, 'DosenUpdate'])->name('dosen.update');
Route::post('/dosen/foto/{id}', [DosenController::class, 'Update_Foto'])->name('dosen.foto');


// Delete Data Dosen
Route::get('/dosen/delete/{id}', [DosenController::class, 'delete'])->name('delete.dosen');
Route::get('/dosen/details/delete/{id}', [DosenController::class, 'deleteDetails'])->name('delete.details.dosen');
Route::get('/dosen/details/delete/penelitian/{id}', [DosenController::class, 'deleteDetailsPenelitian'])->name('delete.details.dosen.penelitian');
Route::get('/dosen/details/delete/pengabdian/{id}', [DosenController::class, 'deleteDetailsPengabdian'])->name('delete.details.dosen.pengabdian');

// Details Data Dosen
Route::get('/dosen/details/{id}', [DosenController::class, 'showDetails'])->name('details.dosen');


// Modal Pop out Dosen
Route::get('/get-modal-content/{id}', [DosenController::class, 'Modal_Foto']);
Route::get('/dosen/{id}/pendidikan', [DosenController::class, 'Modal_Pendidikan']);
Route::get('/dosen/{id}/penelitian', [DosenController::class, 'Modal_Penelitian']);
Route::get('/dosen/{id}/pengabdian', [DosenController::class, 'Modal_Pengabdian']);
Route::post('/dosen/details/pendidikan', [DosenController::class, 'InputDataPendidikanDetails'])->name('input.data.details.dosen.pendidikan');
Route::post('/dosen/details/penelitian', [DosenController::class, 'InputDataPenelitianDetails'])->name('input.data.details.dosen.penelitian');
Route::post('/dosen/details/pengabdian', [DosenController::class, 'InputDataPengabdianDetails'])->name('input.data.details.dosen.pengabdian');


// MengEdit Details Dosen
Route::get('/dosen/edit/{id}/pendidikan', [DosenController::class, 'Modal_Edit_Pendidikan']);
Route::get('/dosen/edit/{id}/penelitian', [DosenController::class, 'Modal_Edit_Penelitian']);
Route::get('/dosen/edit/{id}/pengabdian', [DosenController::class, 'Modal_Edit_Pengabdian']);
Route::post('/details/pendidikan/edit/{id}', [DosenController::class, 'DosenDetailsEdits'])->name('edit.detailsdosen');
Route::post('/details/penelitian/edir/{id}', [DosenController::class,  'DosenDetailsEditsPenelitian'])->name('edit.details.penelitian');
Route::post('/details/penelitian/edit/{id}', [DosenController::class,  'DosenDetailsEditsPengabdian'])->name('edit.edit.pengabdian');
