<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SongController;

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
Route::controller(FrontController::class)->group(function () {
    Route::get('/welcome', 'welcome')->name('welcome');
    Route::get('/saved-songs', 'savedSongs')->middleware(['auth'])->name('savedSongs');
    Route::get('/search', 'search')->name('search');
    Route::get('/playlist-info', 'playlistInfo')->name('playlistInfo');
});


Route::view('/playlists', 'playlists');

Route::controller(UserController::class)->middleware(['auth'])->group(function () {
    Route::post('like-song/{song}', 'likeSong')->name('likeSong');
});

Route::middleware(['guest'])->group(function () {
    Route::view('/login-page', 'login-page');
    Route::view('/signup-page', 'signup-page');
    Route::post('store', 'UserController@store')->name('store');
    Route::post('login', 'LoginController@login')->name('login');
    Route::post('login', 'AuthController@login')->name('login');
});

Route::group(['middleware' => 'web'], function () {
    Auth::routes();
});

Route::controller(AdminController::class)->middleware('admin')->name('admin.')->prefix('dashboard')->group(function () {
    Route::get('/', 'admin')->name('dashboard');
    Route::resource('song', SongController::class, ['except' => ['show']])->names('song');
});

Route::get('/listen/{playlist_name}', function ($playlist_name) {
    return view('playlist-info', ['playlist_name' => $playlist_name]);
})->name('listen');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
