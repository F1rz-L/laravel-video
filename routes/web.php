<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
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

Route::get('/', [HomeController::class, 'index'])->name('frontend_home');
Route::get('/contact', [HomeController::class, 'contact'])->name('frontend_contact');
Route::post('/store', [HomeController::class, 'store'])->name('store');

Route::get('/about', function () {
    // return view('about', ['username' => $username, 'age' => $age]);
    return view('about');
})->name('frontend_about');

Route::prefix('/admin/')->group(function(){
    Route::get('/about/{id}', function($id){return "About";});
    Route::get('/contact', function(){return "Contact";});
    Route::get('/settings', function(){return "Settings";});
});

Route::redirect('tentang', 'about');

route::get('/store_session_data', function(){
    // $request->session()->put('username', 'Firz');
    session([
        'name' => 'Firz',
        'pass' => 'Anjay',
        // 'liyane' => 'okeh',
    ]);
    session()->flash('liyane', 'siyap');
});

route::get('/clear_session_data', function(Request $request){
        $request->session()->flush();
});

Route::fallback(function(){
    return view('fallback');
});

// Belajar Model
Route::get('/model', [HomeController::class, 'model']);
Route::get('/db_show', [HomeController::class, 'db_show']);

//Belajar SoftDelete
Route::get('/eloquent/create', [StudentController::class, 'elCreate']);
Route::get('/eloquent/show', [StudentController::class, 'elShow']);
Route::get('/eloquent/mass', [StudentController::class, 'elMass']);
Route::get('/eloquent/random', [StudentController::class, 'elRandom']);

//Belajar Raw SQL Query
Route::get('/student/create', [StudentController::class, 'create']);
Route::get('/student/show', [StudentController::class, 'show']);

//Belajar Query Builder
Route::get('/qb/create', [StudentController::class, 'QBCreate']);
Route::get('/qb/show', [StudentController::class, 'QBShow']);

//Belajar Email
Route::get('/rando', [HomeController::class, 'rando']);
