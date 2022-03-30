<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\PagesController;


Route::get('/', [PagesController::class, 'showKelasOnHome']);

Route::get('/kelas', [PagesController::class, 'showKelas']);



Route::get('/dashboard/kelas', [ClassroomController::class, 'index']);
Route::get('/dashboard/kelas/create', [ClassroomController::class, 'create']);
Route::post('/dashboard/kelas', [ClassroomController::class, 'store']);
// Route::get('/dashboard/kelas/{classroom}', [ClassroomController::class, 'show']);
Route::get('/dashboard/kelas/{classroom}/edit', [ClassroomController::class, 'edit']);
Route::put('/dashboard/kelas/{classroom}', [ClassroomController::class, 'update']);
Route::delete('/dashboard/kelas/{classroom}', [ClassroomController::class, 'destroy']);

// Route::resource('/dashboard/kelas', ClassroomController::class);
Route::get('/dashboard/checkSlug', [ClassroomController::class, 'checkSlug']);


// Route::resource('/dashboard/kategori', CategoryController::class);
Route::get('/dashboard/kategori', [CategoryController::class, 'index']);
Route::get('/dashboard/kategori/create', [CategoryController::class, 'create']);
Route::post('/dashboard/kategori', [CategoryController::class, 'store']);
// Route::get('/dashboard/kategori/{classroom}', [CategoryController::class, 'show']);
Route::get('/dashboard/kategori/{category}/edit', [CategoryController::class, 'edit']);
Route::put('/dashboard/kategori/{category}', [CategoryController::class, 'update']);
Route::delete('/dashboard/kategori/{category}', [CategoryController::class, 'destroy']);

// Route::get('/kelas/makanan', function () {
//     return view('user.pages.kategori');
// })->middleware('auth');

// Route::get('/kelas/makanan/nastar', function () {
//     return view('user.pages.materi');
// })->middleware('auth');

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

// Route::get('/admin/kelas', function () {
//     return view('dashboard.pages.kelas.index');
// })->middleware('admin');

Route::get('/admin/kelas/create', function () {
    return view('dashboard.pages.kelas.create');
})->middleware('admin');

Route::get('/admin/kelas/edit', function () {
    return view('dashboard.pages.kelas.edit');
})->middleware('admin');

Route::get('/admin/kelas/show', function () {
    return view('dashboard.pages.kelas.show');
})->middleware('admin');

Route::get('/admin/register', function () {
    return view('dashboard.pages.register.index');
})->middleware('admin');

Route::get('/admin/akun', [AccountController::class,"index"])->middleware('admin');
Route::delete('/admin/akun/{user:id}', [AccountController::class,"destroy"])->middleware('admin');

