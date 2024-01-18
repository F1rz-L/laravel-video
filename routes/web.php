<?php

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
    return view('home');
})->name('frontend_home');

Route::get('/about', function () {
    // return view('about', ['username' => $username, 'age' => $age]);
    return view('about');
})->name('frontend_about');


Route::middleware(['auth','auth2','auth3'])->group(function(){
    Route::get('/dashboard', function(){return "Dashboard";});
    Route::get('/profile', function(){return "Profile";});
    Route::get('/photo', function(){return "Photo";});
});

Route::prefix('auth3/')->group(function(){
    Route::get('/about', function(){return "About";});
    Route::get('/contact', function(){return "Contact";});
    Route::get('/settings', function(){return "Settings";});
});

Route::redirect('tentang', 'about');

Route::resource('article', 'ArticleController');

Route::fallback(function(){
    return view('fallback');
});