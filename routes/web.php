<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PhotoDataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('initial-view.home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});
Route::get('/gallery', function () {
    return view('initial-view.gallery');
});
Route::get('/category', function () {
    return view('initial-view.category');
});

// Route::group(['middleware' => 'prevent-back-history'],function(){
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/photo-data', [PhotoDataController::class, 'index']);
    Route::get('/profile', [DashboardController::class, 'profile']);
    Route::resource('/dashboard/photo-data', PhotoDataController::class);
// });


 