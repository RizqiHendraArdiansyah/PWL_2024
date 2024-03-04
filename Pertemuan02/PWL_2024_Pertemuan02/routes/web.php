<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('hellow', function () {
  $hello = ['Hello World', 2 => ['Hello Jakarta','Hello Medan']];
  dd($hello);

  return $hello;
});

Route::get('helloww', function () {
    $hello = 'Hello World';
    var_dump($hello);
    die();
  
    return $hello;
  });

  Route::get('/mahasiswa', function () {
    $arrMahasiswa = ["Ferly Yanuar E.", "Rizqi Hendra Ardiansyah", "Bangkit Maulana Caniago",
                     "Neddy Pratama W."];

    return view('Polinema.mahasiswa',['mahasiswa' => $arrMahasiswa]);
  });

  Route::get('/dosen', function () {
    $arrDosen = ["Zawarudin", "Wilda Imama Sabilla", "Hendra Pradipta",
                 "Budi Harijanto"];

    return view('Polinema.dosen',['dosen' => $arrDosen]);
  });

// Praktikum

Route::get('/', [HomeController::class,'index']);

Route::get('/about', [AboutController::class,'about']);

Route::get('/articles/{id}', [ArticleController::class,'articles']);

Route::get('/world', function () {
    return 'World';
});



Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/artikel/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
    ]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
    ]);

Route::get('/greeting', [WelcomeController::class, 'greeting']);