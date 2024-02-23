<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RssManage;
use App\Http\Controllers\preferenceController;


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

Route::get('/', [CategoryController::class, 'index'])->name('home');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');



Route::get('/favorites', function () {
    return view('News.favorites');
});
Route::get('/login', function(){
    return view('Authentication.authentication');
})->name('login');

Route::get('/register', function(){
    return view('Authentication.authentication');
});

Route::get('/preferences', [CategoryController::class,'displayCategories'])->name('preferences.show');
Route::post('/preferences', [preferenceController::class,'addPreference'])->name('preferences.add');


Route::get('/collection', function () {
    return view('News.collectionPage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/Rss', function () {
    return view('dashboard');
});

Route::get('/category', function (){
    return view('dashboard');
});

Route::get('/trends', function () {
    return view('News.tendancePage');
});


// rss add and show
Route::post('/newRss', [RssManage::class, "newRss"])->name("newRss");