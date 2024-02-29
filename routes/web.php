<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\preferenceController;
use App\Http\Controllers\favorisController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RssManage;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\Auth\GoogleController;

//use App\Http\Middleware\CheckRole;

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

//home page
Route::get('/', function () {
    return view('homePage');
});

Route::middleware(['guest'])->group(function () {

    Route::get('/login', function () {
        return view('Authentication.authentication');
    })->name('login');

    Route::post('/login', [LoginController::class, 'login'])->name('login');

    //login
    Route::get('auth/google', [GoogleController::class, 'redirect'])->name('google-auth');
    Route::get('auth/google/callback', [GoogleController::class, 'callbackGoogle']);

    //register
    Route::get('/register', function () {
        return view('Authentication.authentication');
    });

    Route::post('/register', [RegisterController::class, 'register'])->name('register');

});


Route::middleware(['auth', 'role:admin'])->group(function () {

    //dashboard
Route::post('/collection', [favorisController::class,'addToFavoris'])->name('addToFavoris');
Route::delete('/collection', [favorisController::class,'removeToFavoris'])->name('removeToFavoris');


    Route::get('/dashboard', [RegisterController::class, 'showUserStatistics'])->name('statistiques');
    Route::get('/Rss', function () {
        return view('dashboard');
    });

    //Categories
    Route::get('/category', [CategoryController::class, 'index'])->name('dashboard.category');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    // Rss
    Route::get('/Rss', [RssManage::class, 'index'])->name('Rss');
    Route::post('/newRss', [RssManage::class, "newRss"])->name("newRss");
    Route::post('/deleteLink/{id}', [RssManage::class, "destroyLink"]);

});

Route::middleware(['auth', 'role:user'])->group(function () {

    //preferences
    Route::get('/preferences', [preferenceController::class, 'displayCategories'])->name('preferences.show');
    Route::post('/preferences', [preferenceController::class, 'addPreference'])->name('preferences.add');

    //favorites
    Route::get('/favorites', [favorisController::class, 'showFavorites'])->name('favorites.show');

    Route::post('/collection', [favorisController::class, 'addToFavoris'])->name('addToFavoris');
    Route::delete('/collection', [favorisController::class, 'removeToFavoris'])->name('removeToFavoris');

    //profile
    Route::get('/profil', [ProfilController::class, 'showProfil'])->name('profil');

});

Route::middleware(['auth'])->group(function () {

    //logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

});

Route::get('/collection', [PostController::class, "showPosts"])->name('showPosts');

Route::get('/trends', [PostController::class,'showPostsTrends']);

Route::get('/posts/{slug}/content', [ContentController::class, "show"])->name("show.content");
