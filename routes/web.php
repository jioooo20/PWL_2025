<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', [WelcomeController::class,'hello']);

// Route::get('/world', function () {
//     return 'World';
// });

Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('articles/{id?}', [ArticleController::class,'articles']);

Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only(['index', 'show']);
Route::resource('photos', PhotoController::class)->except(['create','store','update','destroy']);
//route about
// Route::get('/about', function () {
//     return View('about');
// });

// Route::get('/user/{name}', function ($name) {
//     return 'nama saya adalaaahh ' . $name;
// });

// Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'post ke - ' . $postId . ' Komentar ke - ' . $commentId;
// });

// Route::get('artikel/{id}', function ($id) {
//     return 'Halaman artikel dengan ID  ' . $id;
// });

// Route::get('/user/{name?}', function ($name = null) {
//     return 'nama saya adalaaaaaaaahh ' . $name;
// });


// //route Name <<<
// Route::get('/user/profile', function () {
//     //
// })->name('profile');

// // Route::get('/user/profile', [UserProfileController::class, 'show'])->name('profile');

// //Generating URLs
// $url = route('profile');

// //Generating redirects
// return redirect()->route('profile');

// //Route Name >>>

//Route Group dan Route Prefixes <<<
//Beberapa route yang memiliki atribut yang sama seperti middleware yang sama dapat dikelompokkan menjadi satu kelompok untuk mempermudah penulisan route selain digunakan untuk middleware masih ada lagi penggunaan route group untuk route yang berada dibawah satu subdomain. Contoh penggunaan route group adalah sebagai berikut:

// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         //uses first and second middleware
//     });
//     Route::get('/user/profile', function () {
//         //uses first and second middleware
//     });
// });

// Route::domain('{account}.example.com')->group(function () {
//     Route::get('/', function ($account) {
//         //
// });
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [UserController::class, 'index']);
//     Route::get('/event', [UserController::class, 'index']);
//     });

//Route Group dan Route Prefixes >>>

//Route Prefixes <<<
// Pengelompokan route juga dapat dilakukan untuk route yang memiliki prefix (awalan) yang sama. Untuk pembuatan route dengan prefix dapat dilihat kode seperti di bawah ini
// Route::prefix('admin')->group(function () {
//         Route::get('/user', [UserController::class, 'index']);
//         Route::get('/post', [UserController::class, 'index']);
//         Route::get('/event', [UserController::class, 'index']);
// });
//Route Prefixes >>>

//Redirects <<<
//Untuk melakukan redirect pada laravel dapat dilakukan dengan menggunakan Route::redirect cara penggunaannya dapat dilihat pada kode program dibawah ini.
// Route::redirect('/home', '/user/profile');
//Redirects >>>

//View Routes<<
// Route::view('/about', 'about');
// Route::view('/about', 'about', ['name' => 'John']);
//View Routes>>

//VIUW
Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'geeeee']);
});

Route::get('/greeting',[WelcomeController::class,'greeting']);
