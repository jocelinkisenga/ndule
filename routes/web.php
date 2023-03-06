<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\Url;

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








//GET ROUTES WITH ID




Route::get('/artisteDetail/{id}',[ArtistController::class,'show'])->name('artiste-detail');
Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('song/{id}',[App\Http\Controllers\SongsController::class, 'show'])->name('song-detail');
Route::get('/{slug}/{id}',[App\Http\Controllers\CategoriesController::class, 'show'])->name('categorie-detail');
Route::get('/albums',[AlbumController::class,'index'])->name('albums');
Route::get('/artists',[ArtistController::class,'index'])->name('artists');
Route::get('news',[ArticleController::class,'index'])->name('index');





// ADMIN ROUTES
// Route::middleware(['auth','admin'])->group(function(){
    //GET ROUTES
    Route::get('song',[App\Http\Controllers\SongsController::class, 'create'])->name('song-form'); 
    Route::get('categorie/',[App\Http\Controllers\CategoriesController::class, 'create'])->name('categorie-form'); 
    Route::get('adminArticle/',[App\Http\Controllers\ArticleController::class, 'create'])->name('articles-form');
    Route::get('dashboard',[App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::post('song',[App\Http\Controllers\SongsController::class, 'store'])->name('create-song');
    Route::post('categorie',[App\Http\Controllers\CategoriesController::class, 'store'])->name('create-categorie');
    Route::post('article',[App\Http\Controllers\ArticleController::class, 'store'])->name('create-article');
    Route::get('addArtiste',[ArtistController::class, 'create'])->name('admin-artistes');
    Route::post('artiste',[ArtistController::class, 'store'])->name('create-artiste');
    Route::get('addAlbum',[AlbumController::class,'create'])->name('add-album');

// });

Route::middleware('guest')->group(function(){
    Route::get('/login',[LoginController::class,'create'])->name('login');
    Route::get('/register',[RegisterController::class,'index'])->name('register');
    Route::post('/login',[LoginController::class,'store'])->name('login');
    Route::post('/register',[RegisterController::class,'create'])->name('register');
});


Route::post('/logout',[LoginController::class,'logout'])->name('logout');
// Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
