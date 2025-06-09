<?php

use App\Http\Controllers\pegawaicontroler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusKeaktifanController;
use App\Exports\StatusKeaktifanExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\KlasifikasiController;
use App\Http\Controllers\JabatanStrukturalController;

// ...route lainnya...
Route::get('/', function () {
    return view('welcome');
});

Route::get('/kantorku', function () {
    return view('pages.dashboard');
});

//  Route khusus TRUNCATE (harus sebelum resource!)
Route::delete('/status-keaktifan/truncate', [StatusKeaktifanController::class, 'truncate'])->name('status-keaktifan.truncate');

//  Route khusus EXPORT
Route::get('status-keaktifan-export', [StatusKeaktifanController::class, 'export'])->name('status-keaktifan.export');

//  Route CRUD standar
Route::resource('status-keaktifan', StatusKeaktifanController::class);

//ROUTE KLASIFIKASI
Route::resource('klasifikasi', KlasifikasiController::class);
Route::get('klasifikasi-export', [KlasifikasiController::class, 'export'])->name('klasifikasi.export');
Route::delete('klasifikasi-truncate', [KlasifikasiController::class, 'truncate'])->name('klasifikasi.truncate');

//ROUTE JABATAN STRUKTURAL
Route::resource('jabatan-struktural', JabatanStrukturalController::class);
Route::get('jabatan-struktural-export', [JabatanStrukturalController::class, 'export'])->name('jabatan-struktural.export');
Route::delete('jabatan-struktural-truncate', [JabatanStrukturalController::class, 'truncate'])->name('jabatan-struktural.truncate');

//ROUTE UNIN DAN LINGKUP KERJA
Route::resource('unit-kerja', \App\Http\Controllers\UnitKerjaController::class);
Route::get('unit-kerja-export', [\App\Http\Controllers\UnitKerjaController::class, 'export'])->name('unit-kerja.export');
Route::delete('unit-kerja-truncate', [\App\Http\Controllers\UnitKerjaController::class, 'truncate'])->name('unit-kerja.truncate');


Route::get('/pegawai', [pegawaicontroler::class, 'index']);
Route::get('/pegawai/create', [pegawaicontroler::class, 'create']);
Route::get('/pegawai/{id}', [pegawaicontroler::class, 'edit']);
Route::post('/pegawai', [pegawaicontroler::class, 'store']);
Route::put('/pegawai/{id}', [pegawaicontroler::class, 'update']);
Route::delete('/pegawai/{id}', [pegawaicontroler::class, 'delete']);




