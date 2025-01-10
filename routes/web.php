<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenagaPendidikController;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('login', [
        "image" => "Logo SMAN 11 Pangkep.png",
    ]);
});

Route::match(['get', 'post'], '/home', function () {
    return view('home', [
        "title" => "Home Page",
    ]);
});


Route::get('/siswa', function () {
    return view('siswa');
});

Route::get('/kelas', function () {
    return view('kelas');
});

Route::get('/mapel', function () {
    return view('mapel');
});

Route::get('/jadwal-mengajar', function () {
    return view('jadwal_mengajar');
});

Route::get('/rekap-perizinan', function () {
    return view('rekap_perizinan');
});

Route::get('/rekap-kehadiran-tendik', function () {
    return view('rekap_kehadiran_tendik');
});

Route::get('/rekap-kehadiran-siswa', function () {
    return view('rekap_kehadiran_siswa');
});

Route::get('/buku-kontrol', function () {
    return view('buku_kontrol');
});

Route::get('/tenaga-pendidik', [TenagaPendidikController::class, 'index'])->name('tenaga-pendidik.index');
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
