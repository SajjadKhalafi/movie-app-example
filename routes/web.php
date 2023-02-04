<?php

use App\Http\Controllers\ActorsController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TvController;
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

Route::get('/', function () {
    return view('welcome');
});

// movies routes
Route::resource('/movies' , MovieController::class)->only(['index' , 'show']);
Route::get('/movies/page/{page?}', [MovieController::class , 'index']);
Route::get('/now-playing' , [MovieController::class , 'nowPlaying'])->name('movies.nowPlaying');
Route::get('/now-playing/page/{page?}', [MovieController::class , 'nowPlaying']);
Route::get('/upcoming' , [MovieController::class , 'upcoming'])->name('movies.upcoming');
Route::get('/upcoming/page/{page?}', [MovieController::class , 'upcoming']);
Route::get('/top-rated' , [MovieController::class , 'topRated'])->name('movies.topRated');
Route::get('/top-rated/page/{page?}', [MovieController::class , 'topRated']);

// tv shows routes
Route::resource('/tv' , TvController::class)->only(['index' , 'show']);
Route::get('/tv/page/{page?}', [TvController::class , 'index']);
Route::get('/tv-airing-today' , [TvController::class , 'airing_today'])->name('tv.airing');
Route::get('/tv-on-the-air' , [TvController::class , 'on_tv'])->name('tv.on');
Route::get('/tv-top-rated' , [TvController::class , 'top_rated'])->name('tv.topRated');
Route::get('/tv-top-rated/page/{page?}', [TvController::class , 'top_rated']);

// actors routes
Route::resource('/actors' , ActorsController::class)->only('index' , 'show');
Route::get('/actors/page/{page?}', [ActorsController::class , 'index']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
