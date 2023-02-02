<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\ActorsController;
use App\Http\Controllers\TvController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('welcome');
})->name('landing');

Route::resource('/movies' , MovieController::class)->only(['index' , 'show']);
Route::get('/movies/page/{page?}', [MovieController::class , 'index']);
Route::get('/now-playing' , [MovieController::class , 'nowPlaying'])->name('movies.nowPlaying');
Route::get('/now-playing/page/{page?}', [MovieController::class , 'nowPlaying']);
Route::get('/upcoming' , [MovieController::class , 'upcoming'])->name('movies.upcoming');
Route::get('/upcoming/page/{page?}', [MovieController::class , 'upcoming']);
Route::get('/top-rated' , [MovieController::class , 'topRated'])->name('movies.topRated');
Route::get('/top-rated/page/{page?}', [MovieController::class , 'topRated']);

Route::resource('/tv', TvController::class)->only(['index' , 'show']);

Route::resource('/actors' , ActorsController::class)->only('index' , 'show');
Route::get('/actors/page/{page?}', [ActorsController::class , 'index']);
