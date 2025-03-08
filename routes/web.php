<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvnameer and all of them will
| be assigned to the "web" mnamedleware group. Make something great!
|
*/

//week5
Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index'])->name('user');
    Route::post('/list', [UserController::class, 'list'])->name('user.list');
    Route::get('/create',[UserController::class,'create'])->name('user.create');
    Route::post('/store',[UserController::class,'store'])->name('user.store');
    Route::get('/{id}',[UserController::class,'show'])->name('user.show');
    Route::get('/{id}/edit',[UserController::class,'edit'])->name('user.edit');
    Route::put('/{id}',[UserController::class,'update'])->name('user.update');
    Route::delete('/{id}',[UserController::class,'destroy'])->name('user.destroy');

});


// //week4
// Route::get('/user/tambah', [UserController::class, 'tambah'])->name('tambah');
// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('tambah_simpan');
// Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('ubah');
// Route::put('/user/ubah_simpan/{id}',[UserController::class,'ubah_simpan'])->name('ubah_simpan');
// Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('hapus');

// //week3
// Route::get('/level', [LevelController::class, 'index']);
// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/user', [UserController::class, 'index'])->name('user');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', [WelcomeController::class,'hello']);

// Route::get('/world', function () {
//     return 'World';
// });

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('articles/{id?}', [ArticleController::class, 'articles']);

// Route::resource('photos', PhotoController::class);
// Route::resource('photos', PhotoController::class)->only(['index', 'show']);
// Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);

// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'geeeee']);
// });

// Route::get('/greeting', [WelcomeController::class, 'greeting']);
