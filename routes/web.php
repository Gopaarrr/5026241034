<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiDBController ;
use App\Http\Controllers\SepatuDBController;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pertemuan5.html', function () {
	return view('pertemuan5');
});

Route::get('respon', function () {
	return view('responsive');
});

Route::get('exam', function () {
	return view('contoh');
});

Route::get('new', function () {
	return view('news');
});

Route::get('034', function () {
	return view('5026241034');
});

Route::get('in', function () {
	return view('intro');
});

Route::get('index', function () {
	return view('index');
});

Route::get('linktreee.html', function () {
	return view('linktree');
});

Route::get('make', function () {
	return view('tugas_ets');
});

Route::get('akses', function () {
	return view('aksestugas');
});

Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/biodata', [DosenController::class, 'biodata']);

//Pegawai
Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//Route CRUD
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//Tugas Pra EAS
// Halaman utama tabel sepatu & pencarian
Route::get('/sepatu', [SepatuDBController::class, 'index']);
Route::get('/sepatu/cari', [SepatuDBController::class, 'cari']);

// Fitur Tambah Data
Route::get('/sepatu/tambah', [SepatuDBController::class, 'tambah']);
Route::post('/sepatu/store', [SepatuDBController::class, 'store']);

// Fitur Edit/Update Data
Route::get('/sepatu/edit/{id}', [SepatuDBController::class, 'edit']);
Route::post('/sepatu/update', [SepatuDBController::class, 'update']);

// Fitur Hapus Data
Route::get('/sepatu/hapus/{id}', [SepatuDBController::class, 'hapus']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

