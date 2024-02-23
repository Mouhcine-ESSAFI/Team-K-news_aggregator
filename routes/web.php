<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

Route::get('/category', [CategoryController::class, 'index'])->name('dashboard.category');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');



Route::get('/favorites', function () {
    return view('News.favorites');
});
Route::get('/login', function(){
    return view('Authentication.authentication');
});

Route::get('/register', function(){
    return view('Authentication.authentication');
});

Route::get('/collection', function () {
    return view('News.collectionPage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/Rss', function () {
    return view('dashboard');
});


Route::get('/trends', function () {
    return view('News.tendancePage');
});
