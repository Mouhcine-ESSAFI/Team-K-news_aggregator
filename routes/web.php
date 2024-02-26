<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\preferenceController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RssManage;
use Illuminate\Support\Facades\Route;


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

Route::get('/preferences', [preferenceController::class,'displayCategories'])->name('preferences.show');
Route::post('/preferences', [preferenceController::class,'addPreference'])->name('preferences.add');




/*
|--------------------------------------------------------------------------
|                       Admin Dashboard
|--------------------------------------------------------------------------
*/

//Route::get('/dashboard', function () {
//    return view('dashboard');
//});



Route::get('/dashboard', [RegisterController::class,'showUserStatistics'])->name('statistiques');



Route::get('/trends', [PostController::class,'allPosts']);


// rss
Route::get('/Rss', [RssManage::class, "index"])->name("Rss");

Route::post('/newRss', [RssManage::class, "newRss"])->name("newRss");

Route::post('/deleteLink/{id}', [RssManage::class, "destroyLink"]);

// posts
Route::get('/newPost', [PostController::class, "insertPost"])->name("insertPost");


Route::get('/trends', function () {

        return view('News.tendancePage');
});

Route::get('/content', function () {
    return view('News.contentPage');

});
