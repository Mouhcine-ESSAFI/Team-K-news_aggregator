<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\preferenceController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RssManage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;


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

Route::get('/', function(){
    return view('homePage');
});

/*
|--------------------------------------------------------------------------
|                       Categories & Collection
|--------------------------------------------------------------------------
*/
Route::get('/category', [CategoryController::class, 'index'])->name('dashboard.category');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

//Route::get('/collection', function () {
//    return view('News.collectionPage');
//});

Route::get('/collection', [PostController::class, "showPosts"]);



/*
|--------------------------------------------------------------------------
|                       Login and Logout
|--------------------------------------------------------------------------
*/
Route::get('/login', function(){
    return view('Authentication.authentication');
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login');

//Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
|                       Register
|--------------------------------------------------------------------------
*/

Route::get('/register', function(){
    return view('Authentication.authentication');
});


Route::post('/register', [RegisterController::class, 'register'])->name('register');




/*
|--------------------------------------------------------------------------
|                       Favorites
|--------------------------------------------------------------------------
*/

Route::get('/favorites', function () {
    return view('News.favorites');
});


/*
|--------------------------------------------------------------------------
|                       Prefrences
|--------------------------------------------------------------------------
*/

//Route::middleware(['checkRole:user'])->group(function () {
//    Route::get('/preferences', [preferenceController::class, 'displayCategories'])->name('preferences.show');
//    // Add other routes for regular users here
//});

Route::get('/preferences', [preferenceController::class,'displayCategories'])->name('preferences.show');
Route::post('/preferences', [preferenceController::class,'addPreference'])->name('preferences.add');



//Route::middleware(['checkRole:user'])->group(function () {
//    Route::get('/preferences', [preferenceController::class, 'displayCategories'])->name('preferences.show');
//    // Add other routes for regular users here
//});

// Route::middleware(['checkRole:admin'])->group(function () {
    Route::get('/dashboard', [RegisterController::class, 'showUserStatistics'])->name('statistiques');
    Route::get('/Rss', function () {
        return view('dashboard');
    });
// });


/*
|--------------------------------------------------------------------------
|                       Admin Dashboard
|--------------------------------------------------------------------------
*/
//Route::middleware(['checkRole:admin'])->group(function () {
//    Route::get('/dashboard', [RegisterController::class, 'showUserStatistics'])->name('statistiques');
//    Route::get('/Rss', function () {
//        return view('dashboard');
//    });
//});
// Rss
Route::get('/Rss', [RssManage::class, 'index'])->name('Rss');

Route::post('/newRss', [RssManage::class, "newRss"])->name("newRss");
Route::post('/deleteLink/{id}', [RssManage::class, "destroyLink"]);


Route::post('/deleteLink/{id}', [RssManage::class, "destroyLink"]);

// posts
Route::get('/newPost', [PostController::class, "insertPost"])->name("insertPost");


Route::get('/trends', [PostController::class,'allPosts']);


/*
|--------------------------------------------------------------------------
|                       Content page
|--------------------------------------------------------------------------
*/
Route::get('/posts/{slug}/content', [ContentController::class, "show"])->name("show.content");

Route::get('/profil', [ProfilController::class,'showProfil'])->name('profil');

