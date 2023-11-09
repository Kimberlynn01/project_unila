<?php

use App\Http\Controllers\DetailsLaporanAuditController;
use App\Http\Controllers\DokumenMutuController;
use App\Http\Controllers\DokumenMutuEditController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\EditInstitusiOne;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeIkueTwo;
use App\Http\Controllers\EmployeePegawai;
use App\Http\Controllers\ExternalBackmarkingController;
use App\Http\Controllers\FormInstitusiOne;
use App\Http\Controllers\InstitusiController;
use App\Http\Controllers\LaporanAuditController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MonevController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDetailsController;
use App\Http\Controllers\PegawaiModalController;
use App\Http\Controllers\ProfileFkipController;
use App\Http\Controllers\RTLController;
use App\Http\Controllers\RTMController;
use App\Http\Controllers\SurveiController;
use App\Http\Controllers\VisiMisiController;
use App\Models\AlumniModel;
use App\Models\MInputDataModel;
use App\Models\SurveiKepuasan;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Row;


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

    /*
    **********************
     * Pegawai
    **********************
    **/
    Route::prefix('/pegawai')->group(function(){
        Route::get('/', [PegawaiController::class, 'index'])->name('pegawai');
        Route::post('/store', [PegawaiController::class, 'store'])->name('store.pegawai');
        Route::post('/reset/{id}', [EmployeePegawai::class, 'reset'])->name('reset')->withoutMiddleware(['csrf']);
        Route::get('/destroy/{id}', [PegawaiController::class, 'destroy'])->name('destroy');
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
    Route::prefix('/iku')->group(function(){

        // Iku One
        Route::prefix('/one')->group(function(){
            Route::get('/',[InstitusiController::class, 'index'])->name('index');
            Route::post('/store', [InstitusiController::class, 'store'])->name('iku.one.store');
            Route::get('/delete/{id}', [InstitusiController::class, 'destroy'])->name('destroy');

            Route::prefix('/form')->group(function(){
                Route::get('/', [FormInstitusiOne::class, 'index'])->name('index');
                Route::post('/store', [FormInstitusiOne::class, 'store'])->name('store.form.one');
            });
            Route::prefix('/edit')->group(function(){
                Route::get('/{id}', [EditInstitusiOne::class, 'index'])->name('index');
                Route::post('/store/{id}', [EditInstitusiOne::class, 'store'])->name('store.edit.one');
            });
            Route::prefix('/b')->group(function() {
                Route::get('/', [InstitusiController::class, 'index'])->name('index');
            });
        });

        // Iku Two
        Route::prefix('/two')->group(function(){
            Route::get('/',[EmployeeIkueTwo::class, 'index'])->name('iku.two');
            Route::post('/store', [EmployeeIkueTwo::class, 'store'])->name('store');
        });
    });

    Route::prefix('/dokumen_mutu')->group(function(){
        Route::get('/', [DokumenMutuController::class, 'index'])->name('index.dokumen');
        Route::post('/store', [DokumenMutuController::class, 'store'])->name('store.dokumen');
        Route::get('/destroy/{id}', [DokumenMutuController::class, 'destroy'])->name('destroy.dokumen');
        Route::prefix('/modal')->group(function() {
            Route::get('/get/{id}/{type}', [DokumenMutuEditController::class, 'index'])->name('modal.index');
            Route::post('/store/{id}', [DokumenMutuEditController::class, 'store'])->name('modal.store');
        });
    });
    Route::prefix('/laporan_audit')->group(function(){
        Route::get('/', [LaporanAuditController::class, 'index'])->name('index.laporan');
        Route::post('/store', [LaporanAuditController::class, 'store'])->name('store.laporan');
        Route::get('/destroy/{id}', [LaporanAuditController::class, 'destroy'])->name('destroy.laporan');
        Route::prefix('/detail')->group(function(){
            Route::get('/{id}', [DetailsLaporanAuditController::class, 'index'])->name('detail.laporan');
        });
    });


});
//monev pembelajaran
Route::prefix('/monev')->group(function(){
    Route::get('/', [MonevController::class, 'index'])->name('index.monev');
    Route::post('/store', [MonevController::class, 'store'])->name('monev.store');
    Route::prefix('/modal')->group(function() {
        Route::get('/{id}', [MonevController::class, 'modal']);
        Route::get('/delete/{id}', [MonevController::class, 'delete'])->name('monev.delete');
        Route::post('/update/{id}', [MonevController::class, 'update'])->name('monev.update');
});
});

//Survei Kepuasan
Route::prefix('/survei')->group(function(){
    Route::get('/', [SurveiController::class, 'index'])->name('index.survei');
    Route::post('/store', [SurveiController::class, 'store'])->name('store.survei');
    Route::prefix('/modal')->group(function() {
        Route::get('/{id}', [SurveiController::class, 'modal']);
        Route::post('/update/{id}', [SurveiController::class, 'update'])->name('update.survei');
        Route::get('/delete/{id}', [SurveiController::class,'delete'])->name('survei.delete');
    });
});

Route::prefix('/rtl')
->name('rtl.')
->group(function() {
    Route::get('/', [RTLController::class, 'index'])->name('index');
    Route::get('/data', [RTLController::class, 'data'])->name('data');
    Route::post('/store', [RTLController::class, 'store'])->name('store');
    Route::post('/update', [RTLController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [RTLController::class, 'destroy'])->name('delete');

});


Route::prefix('/rtm')
->name('rtm.')
->group(function() {
    Route::get('/', [RTMController::class, 'index'])->name('index');
    Route::get('/data', [RTMController::class, 'data'])->name('data');
    Route::post('/store', [RTMController::class, 'store'])->name('store');
    Route::post('/update', [RTMController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [RTMController::class, 'destroy'])->name('delete');
});

Route::prefix('/external-banchmarking')
->name('external.')
->group(function() {
   Route::get('/', [ExternalBackmarkingController::class, 'index'])->name('index');
   Route::get('/data', [ExternalBackmarkingController::class, 'data'])->name('data');
   Route::post('/store', [ExternalBackmarkingController::class, 'store'])->name('store');
    Route::post('/update', [ExternalBackmarkingController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [ExternalBackmarkingController::class, 'destroy'])->name('delete');
});


Route::prefix('/profile-fkip')
->name('profile.')
->group(function() {
    Route::get('/', [ProfileFkipController::class, 'index'])->name('index');
    Route::delete('/delete/{id}', [ProfileFkipController::class, 'destroy'])->name('delete');
    Route::get('/data', [ProfileFkipController::class, 'data'])->name('data');
    Route::get('/form_tambah', [ProfileFkipController::class, 'tambah'])->name('form_tambah');
    Route::post('/store', [ProfileFkipController::class, 'store'])->name('store');
    Route::get('/detail/{id}', [ProfileFkipController::class, 'detail'])->name('details');
    Route::get('/edit/{id}', [ProfileFkipController::class, 'ubah'])->name('ubah');
    Route::post('/update/{id}', [ProfileFkipController::class, 'update'])->name('update');
});

Route::prefix('/visi-misi')
->name('visi_misi.')
->group(function() {
    Route::get('/', [VisiMisiController::class, 'index'])->name('index');
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

