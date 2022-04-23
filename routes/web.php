<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\VideohomepageController;

Route::get('/', [PagesController::class, 'showKelasOnHome']);
Route::get('/kelas', [PagesController::class, 'showKelas']);
Route::get('/kelas/{classroom}', [PagesController::class, 'showKategori']);
Route::get('/kelas/{classroom}/{category}', [PagesController::class, 'showDaftarMateri']);
Route::get('/kelas/{classroom}/{category}/{lesson}', [PagesController::class, 'showDetailMateri']);

Route::get('/galeri', [PagesController::class,'showGallery']);
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
Route::get('/dashboard/kategori/{category}/edit', [CategoryController::class, 'edit']);
Route::put('/dashboard/kategori/{category}', [CategoryController::class, 'update']);
Route::delete('/dashboard/kategori/{category}', [CategoryController::class, 'destroy']);

// dashboard materi
// Route::resource('/dashboard/materi', LessonController::class);
Route::get('/dashboard/materi', [LessonController::class, 'index']);
Route::get('/dashboard/materi/create', [LessonController::class, 'create']);
Route::post('/dashboard/materi', [LessonController::class, 'store']);
Route::get('/dashboard/materi/{lesson}', [LessonController::class, 'show']);
Route::get('/dashboard/materi/{lesson}/edit', [LessonController::class, 'edit']);
Route::put('/dashboard/materi/{lesson}', [LessonController::class, 'update']);
Route::delete('/dashboard/materi/{lesson}', [LessonController::class, 'destroy']);

// dashboard testimonial
Route::get('/dashboard/testimonial', [TestimonialController::class, 'index']);
Route::get('/dashboard/testimonial/create', [TestimonialController::class, 'create']);
Route::post('/dashboard/testimonial', [TestimonialController::class, 'store']);
Route::get('/dashboard/testimonial/{testimonial}', [TestimonialController::class, 'show']);
Route::get('/dashboard/testimonial/{testimonial}/edit', [TestimonialController::class, 'edit']);
Route::put('/dashboard/testimonial/{testimonial}', [TestimonialController::class, 'update']);
Route::delete('/dashboard/testimonial/{testimonial}', [TestimonialController::class, 'destroy']);

// dashboard gallery
// Route::resource('/dashboard/gallery', GalleryController::class);
Route::get('/dashboard/gallery', [GalleryController::class, 'index']);
Route::get('/dashboard/gallery/create', [GalleryController::class, 'create']);
Route::post('/dashboard/gallery', [GalleryController::class, 'store']);
Route::get('/dashboard/gallery/{gallery}', [GalleryController::class, 'show']);
Route::get('/dashboard/gallery/{gallery}/edit', [GalleryController::class, 'edit']);
Route::put('/dashboard/gallery/{gallery}', [GalleryController::class, 'update']);
Route::delete('/dashboard/gallery/{gallery}', [GalleryController::class, 'destroy']);


// video homepage
Route::get('/dashboard/video-homepage', [VideohomepageController::class, 'index']);
Route::get('/dashboard/video-homepage/create', [VideohomepageController::class, 'create']);
Route::post('/dashboard/video-homepage', [VideohomepageController::class, 'store']);
Route::delete('/dashboard/video-homepage/{id}', [VideohomepageController::class, 'destroy']);


// dashboard register akun
Route::get('/dashboard/register', function () {
    return view('dashboard.pages.register.index');
})->middleware('admin');
Route::get('/dashboard/akun', [AccountController::class,"index"])->middleware('admin');
Route::delete('/dashboard/akun/{user:id}', [AccountController::class,"destroy"])->middleware('admin');

// menambah slug otomatis
Route::get('/dashboard/checkSlug', [ClassroomController::class, 'checkSlug']);

