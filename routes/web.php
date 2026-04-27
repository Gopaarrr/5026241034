<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

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
	return view('makeoverig');
});

Route::get('akses', function () {
	return view('aksestugas');
});

Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/biodata', [DosenController::class, 'biodata']);
