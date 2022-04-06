<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ClassroomController;


Route::get('/', [PagesController::class, 'showKelasOnHome']);
Route::get('/kelas', [PagesController::class, 'showKelas']);
Route::get('/kelas/{classroom}', [PagesController::class, 'showKategori']);
Route::get('/kelas/{classroom}/{category}', [PagesController::class, 'showDaftarMateri']);
Route::get('/kelas/{classroom}/{category}/{lesson}', [PagesController::class, 'showDetailMateri']);

Route::get('/galeri', function () {
return view('user.pages.galeri');
});
Route::get('/lokasi', function () {
    return view('user.pages.lokasi');
});
Route::get('/tentang-kami', function () {
    return view('user.pages.tentang');
});


// login
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);


// register
Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);


//dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('admin');


//dashboard kelas
Route::get('/dashboard/kelas', [ClassroomController::class, 'index']);
Route::get('/dashboard/kelas/create', [ClassroomController::class, 'create']);
Route::post('/dashboard/kelas', [ClassroomController::class, 'store']);
Route::get('/dashboard/kelas/{classroom}/edit', [ClassroomController::class, 'edit']);
Route::put('/dashboard/kelas/{classroom}', [ClassroomController::class, 'update']);
Route::delete('/dashboard/kelas/{classroom}', [ClassroomController::class, 'destroy']);


//dashboard kategori
// Route::resource('/dashboard/kategori', CategoryController::class);
Route::get('/dashboard/kategori', [CategoryController::class, 'index']);
Route::get('/dashboard/kategori/create', [CategoryController::class, 'create']);
Route::post('/dashboard/kategori', [CategoryController::class, 'store']);
// Route::get('/dashboard/kategori/{classroom}', [CategoryController::class, 'show']);
Route::get('/dashboard/kategori/{category}/edit', [CategoryController::class, 'edit']);
Route::put('/dashboard/kategori/{category}', [CategoryController::class, 'update']);
Route::delete('/dashboard/kategori/{category}', [CategoryController::class, 'destroy']);

// Route::resource('/dashboard/materi', LessonController::class);
Route::get('/dashboard/materi', [LessonController::class, 'index']);
Route::get('/dashboard/materi/create', [LessonController::class, 'create']);
Route::post('/dashboard/materi', [LessonController::class, 'store']);
Route::get('/dashboard/materi/{lesson}', [LessonController::class, 'show']);
Route::get('/dashboard/materi/{lesson}/edit', [LessonController::class, 'edit']);
Route::put('/dashboard/materi/{lesson}', [LessonController::class, 'update']);
Route::delete('/dashboard/materi/{lesson}', [LessonController::class, 'destroy']);



// dashboard register akun
Route::get('/dashboard/register', function () {
    return view('dashboard.pages.register.index');
})->middleware('admin');
Route::get('/dashboard/akun', [AccountController::class,"index"])->middleware('admin');
Route::delete('/dashboard/akun/{user:id}', [AccountController::class,"destroy"])->middleware('admin');


// menambah slug otomatis
Route::get('/dashboard/checkSlug', [ClassroomController::class, 'checkSlug']);

