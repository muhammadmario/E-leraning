<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/kelas', function () {
    return view('user.pages.kelas');
});

Route::get('/kelas/makanan', function () {
    return view('user.pages.kategori');
});

Route::get('/kelas/makanan/nastar', function () {
    return view('user.pages.materi');
});

Route::get('/galeri', function () {
    return view('user.pages.galeri');
});

Route::get('/login', function () {
    return view('user.pages.login');
});



Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/admin/kelas', function () {
    return view('dashboard.pages.kelas.index');
});

Route::get('/kelas/create', function () {
    return view('dashboard.pages.kelas.create');
});

Route::get('/kelas/edit', function () {
    return view('dashboard.pages.kelas.edit');
});


