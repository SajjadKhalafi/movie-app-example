<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\ActorsController;
use App\Http\Controllers\TvController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MovieController::class , 'index'])->name('movies.index');
Route::get('/movies/{movie}', [MovieController::class , 'show'])->name('movies.show');

Route::resource('/tv', TvController::class)->only(['index' , 'show']);

Route::resource('/actors' , ActorsController::class)->only('index' , 'show');
Route::get('/actors/page/{page?}', [ActorsController::class , 'index']);
