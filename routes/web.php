<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;

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

Route::get('/', function () {
    return view('admin.dashboard');
});



Route::get('/favorites', function () {
    return view('News.favorites');
});
Route::get('/login', function(){
    return view('Authentication.authentication');
})->name('login');

Route::get('/register', function(){
    return view('Authentication.authentication');

});

Route::get('/preferences', [categoryController::class,'displayCategories'])->name('preferences.show');

// Route::get('/preferences', function(){
//     return view('Authentication.authentication');

// });

Route::get('/collection', function () {
    return view('News.collectionPage');
});

Route::get('/trends', function () {
    return view('News.tendancePage');
});
