<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\VideohomepageController;
use App\Http\Livewire\Admin\Messages\ListConversationAndMessages;

Route::get('/', [PagesController::class, 'showKelasOnHome']);
Route::get('/kelas', [PagesController::class, 'showKelas']);
Route::get('/kelas/{classroom}', [PagesController::class, 'showKategori']);
Route::get('/kelas/{classroom}/{category}', [PagesController::class, 'showDaftarMateri'])->middleware('auth');
Route::get('/kelas/{classroom}/{category}/{lesson}', [PagesController::class, 'showDetailMateri'])->middleware('auth');

Route::get('/galeri', [PagesController::class,'showGallery']);
Route::get('/lokasi', function () {
    return view('user.pages.lokasi');
});
Route::get('/tentang-kami', function () {
    return view('user.pages.tentang');
});

// komentar
Route::get('dashboard/comment', [CommentController::class, 'index'])->middleware('adminandguru');
Route::post('/comment', [CommentController::class, 'store'])->middleware('auth');
Route::delete('/comment/{comment:id}', [CommentController::class, 'destroy'])->middleware('auth');


// login
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);


// register
// Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);


//dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('adminandguru');


//dashboard kelas
Route::get('/dashboard/kelas', [ClassroomController::class, 'index'])->middleware('adminandguru');
Route::get('/dashboard/kelas/create', [ClassroomController::class, 'create'])->middleware('adminandguru');
Route::post('/dashboard/kelas', [ClassroomController::class, 'store'])->middleware('adminandguru')->middleware('adminandguru');
Route::get('/dashboard/kelas/{classroom}/edit', [ClassroomController::class, 'edit'])->middleware('adminandguru');
Route::put('/dashboard/kelas/{classroom}', [ClassroomController::class, 'update'])->middleware('adminandguru');
Route::delete('/dashboard/kelas/{classroom}', [ClassroomController::class, 'destroy'])->middleware('adminandguru');

//dashboard kategori
// Route::resource('/dashboard/kategori', CategoryController::class);
Route::get('/dashboard/kategori', [CategoryController::class, 'index'])->middleware('adminandguru');
Route::get('/dashboard/kategori/create', [CategoryController::class, 'create'])->middleware('adminandguru');
Route::post('/dashboard/kategori', [CategoryController::class, 'store'])->middleware('adminandguru');
Route::get('/dashboard/kategori/{category}/edit', [CategoryController::class, 'edit'])->middleware('adminandguru');
Route::put('/dashboard/kategori/{category}', [CategoryController::class, 'update'])->middleware('adminandguru');
Route::delete('/dashboard/kategori/{category}', [CategoryController::class, 'destroy'])->middleware('adminandguru');

// dashboard materi
// Route::resource('/dashboard/materi', LessonController::class);
Route::get('/dashboard/materi', [LessonController::class, 'index'])->middleware('adminandguru');
Route::get('/dashboard/materi/create', [LessonController::class, 'create'])->middleware('adminandguru');
Route::post('/dashboard/materi', [LessonController::class, 'store'])->middleware('adminandguru');
Route::get('/dashboard/materi/{lesson}', [LessonController::class, 'show'])->middleware('adminandguru');
Route::get('/dashboard/materi/{lesson}/edit', [LessonController::class, 'edit'])->middleware('adminandguru');
Route::put('/dashboard/materi/{lesson}', [LessonController::class, 'update'])->middleware('adminandguru');
Route::delete('/dashboard/materi/{lesson}', [LessonController::class, 'destroy'])->middleware('adminandguru');

// dashboard testimonial
Route::get('/dashboard/testimonial', [TestimonialController::class, 'index'])->middleware('admin');
Route::get('/dashboard/testimonial/create', [TestimonialController::class, 'create'])->middleware('admin');
Route::post('/dashboard/testimonial', [TestimonialController::class, 'store'])->middleware('admin');
Route::get('/dashboard/testimonial/{testimonial}', [TestimonialController::class, 'show'])->middleware('admin');
Route::get('/dashboard/testimonial/{testimonial}/edit', [TestimonialController::class, 'edit'])->middleware('admin');
Route::put('/dashboard/testimonial/{testimonial}', [TestimonialController::class, 'update'])->middleware('admin');
Route::delete('/dashboard/testimonial/{testimonial}', [TestimonialController::class, 'destroy'])->middleware('admin');

// dashboard gallery
// Route::resource('/dashboard/gallery', GalleryController::class);
Route::get('/dashboard/gallery', [GalleryController::class, 'index'])->middleware('admin');
Route::get('/dashboard/gallery/create', [GalleryController::class, 'create'])->middleware('admin');
Route::post('/dashboard/gallery', [GalleryController::class, 'store'])->middleware('admin');
Route::get('/dashboard/gallery/{gallery}', [GalleryController::class, 'show'])->middleware('admin');
Route::get('/dashboard/gallery/{gallery}/edit', [GalleryController::class, 'edit'])->middleware('admin');
Route::put('/dashboard/gallery/{gallery}', [GalleryController::class, 'update'])->middleware('admin');
Route::delete('/dashboard/gallery/{gallery}', [GalleryController::class, 'destroy'])->middleware('admin');


// video homepage
Route::get('/dashboard/video-homepage', [VideohomepageController::class, 'index'])->middleware('admin');
Route::get('/dashboard/video-homepage/create', [VideohomepageController::class, 'create'])->middleware('admin');
Route::post('/dashboard/video-homepage', [VideohomepageController::class, 'store'])->middleware('admin');
Route::delete('/dashboard/video-homepage/{id}', [VideohomepageController::class, 'destroy'])->middleware('admin');


// dashboard register akun
Route::get('/dashboard/register', function () {
    return view('dashboard.pages.register.index');
})->middleware('adminandguru');
Route::get('/dashboard/akun', [AccountController::class,"index"])->middleware('adminandguru');
Route::delete('/dashboard/akun/{user:id}', [AccountController::class,"destroy"])->middleware('adminandguru');

// dashboard pesan
// Route::get('/dashboard/pesan', [ListConversationAndMessages::class, 'render']);
Route::get('/dashboard/pesan', function () {
    return view('dashboard.pages.pesan.index');
})->middleware('auth');

Route::get('/chat', function () {
    return view('user.pages.chat');
})->middleware('auth');

Route::get('/kontak', function () {
    return view('user.pages.kontak', ["users"=>User::where('role', 2)->latest()->paginate(7)]);
})->middleware('auth');

// menambah slug otomatis
Route::get('/dashboard/checkSlug', [ClassroomController::class, 'checkSlug']);

