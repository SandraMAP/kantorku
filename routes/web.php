<?php

use App\Http\Controllers\pegawaicontroler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});


Route::get('/pegawai', [pegawaicontroler::class, 'index']);
Route::get('/pegawai/create', [pegawaicontroler::class, 'create']);
Route::get('/pegawai/{id}', [pegawaicontroler::class, 'edit']);
Route::post('/pegawai', [pegawaicontroler::class, 'store']);
Route::put('/pegawai/{id}', [pegawaicontroler::class, 'update']);
Route::delete('/pegawai/{id}', [pegawaicontroler::class, 'delete']);



