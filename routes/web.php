<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
})->middleware('auth');

Route::get('/kelas/makanan/nastar', function () {
    return view('user.pages.materi');
})->middleware('auth');

Route::get('/galeri', function () {
    return view('user.pages.galeri');
});
Route::get('/lokasi', function () {
    return view('user.pages.lokasi');
});


Route::get('/tentang-kami', function () {
    return view('user.pages.tentang');
});

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);


Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('admin');

Route::get('/admin/kelas', function () {
    return view('dashboard.pages.kelas.index');
})->middleware('admin');

Route::get('/admin/kelas/create', function () {
    return view('dashboard.pages.kelas.create');
})->middleware('admin');

Route::get('/admin/kelas/edit', function () {
    return view('dashboard.pages.kelas.edit');
})->middleware('admin');

Route::get('/admin/kelas/show', function () {
    return view('dashboard.pages.kelas.show');
})->middleware('admin');


